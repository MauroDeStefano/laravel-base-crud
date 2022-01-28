@extends('layouts.main')

@section('content')

<div>
  <h1>Questo è l'elenco di comics</h1>

  @foreach ($comics as $comic)
  <div class="row border-bottom">
    <div class="col-8">{{$comic->title}} </div> 
    <div class="col-4 d-flex">
      <a class="btn btn-primary m-1" href="{{route('comics.show', $comic)}}">INFO</a>
      <a href="{{ route('comics.edit', $comic) }}" class="btn m-1 btn-secondary">EDIT</a>
      <form action="{{ route('comics.destroy', $comic) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn m-1 btn-danger">DELETE</button></td>
    </form>
    </div>
    
  </div>
 
</div>

@endforeach

@endsection