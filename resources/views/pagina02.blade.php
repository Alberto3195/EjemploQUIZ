@extends('layouts.ejemploLayouts')

@section('titulo', 'Pagina 02 del proyecto')

@section('barralateral')
@parent
<p>Esto es una prueba de la pagina 02</p>
@endsection

@section('contenido')
<h3>El tema elegido es: {{ $tema }}</h3>

<a href="{{ url('/') }}" class="btn btn-xs btn-info pull-right">Página 01</a>

@endsection