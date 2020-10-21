@extends('layouts.ejemploLayouts')

@section('titulo', 'Pagina 01 del proyecto')

@section('barralateral')

<p>Esto es una prueba de la barra lateral</p>
@endsection

@section('contenido')
<p>esto es el body</p>

<a href="{{ url('pregunta', ['Historia']) }}" class="btn btn-xs btn-info pull-right">Historia</a>
<a href="{{ url('pregunta', ['Economía']) }}" class="btn btn-xs btn-info pull-right">Economía</a>
<a href="{{ url('pregunta', ['Ingles']) }}" class="btn btn-xs btn-info pull-right">Inglés</a>
<a href="{{ url('api/preguntas', ['Historia']) }}" class="btn btn-xs btn-info pull-right">Historia pero un json solo</a>

@endsection