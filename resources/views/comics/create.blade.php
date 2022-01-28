@extends('layouts.main')

@section('content')

<form action="{{route('comics.store')}}" method="POST">
  @csrf
 
  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Titolo">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Descrizione</label>
    <textarea type="text" class="form-control" name="description" id="description" placeholder="descrizione"></textarea>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Prezzo</label>
    <input type="text" class="form-control" name="price" id="price" placeholder="Prezzo">
  </div>
  <div class="mb-3">
    <label for="serie" class="form-label">Serie</label>
    <input type="text" class="form-control" name="serie" id="serie" placeholder="Serie">
  </div>  
  <div class="mb-3">
    <label for="img" class="form-label">Immagine</label>
    <input type="text" class="form-control" name="img" id="img" placeholder="img">
  </div>
  <div class="mb-3">
    <label for="sale_date" class="form-label">data di vendita</label>
    <input type="text" class="form-control" name="sale_date" id="sale_date" placeholder="data di vendita">
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Tipo</label>
    <input type="text" class="form-control" name="type" id="type" placeholder="Tipo">
  </div>

  
  <button type="submit" class="btn btn-primary" >Invia</button>
  <button type="reset" class="btn btn-secondary" >Reset</button>
</form>


@endsection