@extends('layouts.main')

@section('content')

<h1>Questo è l'elenco di comics</h1>

@foreach ($comics as $comic)
  <li>{{$comic->title}}<a href="{{route('comics.show', $comic)}}">ancora inf</a></li>


@endforeach

@endsection