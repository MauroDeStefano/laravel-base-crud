@extends('layouts.main')

@section('content')

@if ($errors->any())
  <div class="alert alert-danger" role="alert">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{  $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="{{route('comics.update', $comic)}}" method="POST">
  @csrf
 
  @method('PUT')

  <div class="mb-3">
    <label for="title" class="form-label">Titolo *</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{$comic->title}}" name="title" id="title" placeholder="Titolo">
  </div>
  @error('title')
  <p class="form_errors text-danger">
      {{ $message }}
  </p>
  @enderror
  <div class="mb-3">
    <label for="description" class="form-label">Descrizione</label>
    <textarea type="text" class="form-control @error('description') is-invalid @enderror"  name="description" id="description" placeholder="descrizione">{{ $comic->description }}</textarea>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Prezzo *</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{$comic->price}}"  id="price" placeholder="Prezzo">
  </div>
  @error('price')
  <p class="form_errors text-danger">
      {{ $message }}
  </p>
  @enderror
  <div class="mb-3">
    <label for="serie" class="form-label">Serie</label>
    <input type="text" class="form-control @error('serie') is-invalid @enderror" name="serie" value="{{$comic->serie}}"  id="serie" placeholder="Serie">
  </div>  
  <div class="mb-3">
    <label for="img" class="form-label">Immagine *</label>
    <input type="text" class="form-control @error('img') is-invalid @enderror" value="{{$comic->img}}"  name="img" id="img" placeholder="img">
  </div>
  @error('img')
    <p class="form_errors text-danger">
        {{ $message }}
    </p>
    @enderror
  <div class="mb-3">
    <label for="sale_date" class="form-label">data di vendita</label>
    <input type="text" class="form-control @error('sale_date') is-invalid @enderror" value="{{$comic->sale_date}}"  name="sale_date" id="sale_date" placeholder="data di vendita">
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Tipo *</label>
    <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" value="{{$comic->type}}"  id="type" placeholder="Tipo">
    @error('type')
    <p class="form_errors text-danger">
        {{ $message }}
    </p>
    @enderror
  </div>

  <p>* Questi campi sono obbligatori.</p>

  
  <button type="submit" class="btn btn-primary" >Invia</button>
  <button type="reset" class="btn btn-secondary" >Reset</button>
</form>


@endsection