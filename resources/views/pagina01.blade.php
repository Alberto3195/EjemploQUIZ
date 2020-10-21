@extends('layouts.ejemploLayouts')

@section('titulo', 'Pagina 01 del proyecto')

@section('barralateral')

<p>Esto es una prueba de la barra lateral</p>
@endsection

@section('contenido')
<p>esta es la prueba del contenido en el body</p>

<a href="{{ url('pagina02/Historia') }}" class="btn btn-xs btn-info pull-right">Historia</a>
<a href="{{ url('pagina02/Economia') }}" class="btn btn-xs btn-info pull-right">Economía</a>
<a href="{{ url('pagina02/Ingles') }}" class="btn btn-xs btn-info pull-right">Inglés</a>
@endsection