@extends('layouts.ejemploLayouts')

@section('titulo', 'Pagina 01 del proyecto')

@section('barralateral')

<p>Esto es una prueba de la barra lateral</p>
@endsection

@section('contenido')
<p>esta es la prueba del contenido en el body</p>

<a href="{{ url('pagina02') }}" class="btn btn-xs btn-info pull-right">Página 02</a>
@endsection