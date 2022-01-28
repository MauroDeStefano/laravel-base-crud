@extends('layouts.main')

@section('content')

<form action="{{route('comics.update', $comic)}}" method="POST">
  @csrf
 
  @method('PUT')

  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control" value="{{$comic->title}}" name="title" id="title" placeholder="Titolo">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Descrizione</label>
    <textarea type="text" class="form-control"  name="description" id="description" placeholder="descrizione">{{ $comic->description }}</textarea>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Prezzo</label>
    <input type="text" class="form-control" name="price" value="{{$comic->price}}"  id="price" placeholder="Prezzo">
  </div>
  <div class="mb-3">
    <label for="serie" class="form-label">Serie</label>
    <input type="text" class="form-control" name="serie" value="{{$comic->serie}}"  id="serie" placeholder="Serie">
  </div>  
  <div class="mb-3">
    <label for="img" class="form-label">Immagine</label>
    <input type="text" class="form-control" value="{{$comic->img}}"  name="img" id="img" placeholder="img">
  </div>
  <div class="mb-3">
    <label for="sale_date" class="form-label">data di vendita</label>
    <input type="text" class="form-control" value="{{$comic->sale_date}}"  name="sale_date" id="sale_date" placeholder="data di vendita">
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Tipo</label>
    <input type="text" class="form-control" name="type" value="{{$comic->type}}"  id="type" placeholder="Tipo">
  </div>

  
  <button type="submit" class="btn btn-primary" >Invia</button>
  <button type="reset" class="btn btn-secondary" >Reset</button>
</form>


@endsection