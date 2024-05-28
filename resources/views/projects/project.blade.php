@extends('layouts.master')

@section('content')
    <h1>Proyectos</h1>
    @if ($letra)
        <p>Proyecto: {{ $letra }}</p>
    @else
        <p>Lista de nuestros proyectos.</p>
    @endif
@stop
