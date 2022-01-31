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

<form action="{{route('comics.store')}}" method="POST">
  @csrf
 
  <div class="mb-3"> 
    <label for="title" class="form-label">Titolo * </label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Titolo" value="{{ old('title') }}">
    @error('title')
    <p class="form_errors text-danger">
        {{ $message }}
    </p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Descrizione</label>
    <textarea type="text" class="form-control" name="description" id="description" placeholder="descrizione" value="{{ old('description') }}"></textarea>
  </div>
  
  <div class="mb-3">
    <label for="price" class="form-label">Prezzo *</label>
    <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" placeholder="Prezzo" value="{{ old('price') }}">
    @error('price')
    <p class="form_errors text-danger">
        {{ $message }}
    </p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="serie" class="form-label">Serie</label>
    <input type="text" class="form-control " name="serie" id="serie" placeholder="Serie" value="{{ old('serie') }}">
  </div>  
  <div class="mb-3">
    <label for="img" class="form-label">Immagine *</label>
    <input type="text" class="form-control @error('img') is-invalid @enderror" name="img" id="img" placeholder="img" value="{{ old('img') }}">
    @error('img')
    <p class="form_errors text-danger">
        {{ $message }}
    </p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="sale_date" class="form-label">data di vendita</label>
    <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" id="sale_date" placeholder="data di vendita" value="{{ old('sale_date') }}">
    @error('sale_date')
    <p class="form_errors text-danger">
        {{ $message }}
    </p>
    @enderror
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Tipo *</label>
    <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" placeholder="Tipo" value="{{ old('type') }}">
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