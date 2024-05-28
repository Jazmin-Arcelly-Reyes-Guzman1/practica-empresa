@extends('layouts.master')

@section('content')
    <h1>Clientes</h1>
    @if ($letra)
        <p>Cliente: {{ $letra }}</p>
    @else
        <p>Lista de nuestros clientes.</p>
    @endif
@stop