@extends('layouts.master')

@section('content')
    <h1>Servicios</h1>
    @if ($letra)
        <p>Servicio: {{ $letra }}</p>
    @else
        <p>Lista de servicios que ofrecemos.</p>
    @endif
@stop