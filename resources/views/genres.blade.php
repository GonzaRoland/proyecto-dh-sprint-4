@extends('layouts.app')

@section('content')
<div class="offset-1">
    <h1>Selecciona la Categoría</h1><br>
    <ul>
        @foreach($genres as $genre)
    <li><a href="/productos/categoria/{{ $genre->id }}">{{ $genre->name }}</a></li>
        @endforeach
    </ul>
    <!-- <a href="#">Agregar Nuevo Genero</a>-->
</div>

@endsection