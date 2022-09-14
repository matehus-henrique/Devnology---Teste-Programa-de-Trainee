@extends('layouts.main')

@section('title', 'Produto')

@section('content')

@if ($id != null)


<h1>produtos id: {{$id}}</h1>
<a href="/">Voltar</a>

@endif

@endsection
