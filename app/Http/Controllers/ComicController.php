<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id','desc')->get();
       return view('comics.home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $comics = Comic::all();
       return view('comics.create', compact('comics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate($this->validationData(), $this->validationErrors());


        $data = $request->all();

        $new_comic = new Comic();

        $new_comic->fill($data);

        $new_comic->slug = Str::slug($data['title']);

        $new_comic->save();

        return redirect()->route('comics.show', $new_comic);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        if($comic){
            return view('comics.show', compact('comic'));
        }
        abort(404, 'qualcosa è andato storto, torna alla home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $comic = Comic::find($id);
        if($comic){
            return view('comics.edit', compact('comic'));
        }
        abort(404, 'qualcosa è andato storto, torna alla home');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate($this->validationData(), $this->validationErrors());

        $data = $request->all();

        $data['slug']= Str::slug($data['title']);

        $comic->update($data);

        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('deleted', "il fumetto $comic->title è stato eliminato");
    }

    
    private function validationData(){
        return [
            'title' => "required|max:50|min:2",
            'img' => 'required|max:256',
            'price' => 'required|numeric|min:1',
            'type' => 'required|max:20|min:2',
            'sale_date' => 'required|date'
        ];
    }

    private function validationErrors(){
        return [
            'title.required' => 'Il titolo è un campo obbligatorio',
            'title.max' => 'Il numero di caratteri per il titolo consentito è di :max caratteri',
            'title.min' => 'Il numero minimo di caratteri per il titolo è di :min caratteri',
            'type.required' => 'Il tipo di fumetto è un campo obbligatorio',
            'type.max' => 'Il numero di caratteri per il tipo consentito è di :max caratteri',
            'type.min' => 'Il numero minimo di caratteri per il tipo è di :min caratteri',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.numeric' => 'Il prezzo deve essere un numero',
            'price.min' => 'Il tempo di cottura deve essere di minmo 1 minuto',
            'img.required' => "L'immagine è un campo obbligatorio",
            'img.max' => "L'url dell'immagine non può contenere più di 255 caratteri",
            'sale_date.required' => 'Inserire una data',
            'sale_date.date' => 'inserire un formato data corretto'
        ];
    }
}
