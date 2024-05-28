@extends('layouts.master')

@section('content')
    <h1>Blog</h1>
    @if ($id)
        <p>Entrada del blog número: {{ $id }}</p>
    @else
        <p>Bienvenido a nuestro blog.</p>
    @endif
@stop