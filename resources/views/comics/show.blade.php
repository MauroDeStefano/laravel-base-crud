@extends('layouts.main')

@section('content')

<h1>Questo è un comic</h1>


<p>{{$comic->title}}</p>
<p>{{$comic->description}}</p>
<p>{{$comic->price}}</p>
<p>{{$comic->serie}}</p>
<img src="{{$comic->img}}" alt="">
<p>{{$comic->sale_date}}</p>
<p>{{$comic->type}}</p>
<a href="{{ route('comics.edit', $comic) }}" class="btn btn-primary">EDIT</a></h1>
<form action="{{ route('comics.destroy', $comic) }}" method="POST">
  @csrf
  @method('DELETE')
  <button type="submit" class="btn m-1 btn-danger">DELETE</button></td>
</form>



@endsection