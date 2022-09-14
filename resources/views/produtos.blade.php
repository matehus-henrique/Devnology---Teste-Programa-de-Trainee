@extends('layouts.main')

@section('title', 'PS-FORÇA')

@section('content')


<h1>Tela do produto</h1>
<a href="/">Voltar</a>


@if ($busca != '')
    <p>O usuário esta buscando por : {{$busca}}</p>
@endif
@endsection
