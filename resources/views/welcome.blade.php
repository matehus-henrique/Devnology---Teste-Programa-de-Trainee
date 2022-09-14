@extends('layouts.main')

@section('title', 'PS-FORÇA')

@section('content')

<div id="search-container" class="col-md-12">
  <h1>Busca</h1>
    <form  class="input-group d-flex flex-end-center" action="/" method="GET">
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurar...">
    </form>

    

</div>

<div id="events-container" class="col-md-12">
    @if ($search)
    <h2>Buscando por: {{$search}}</h2>
    @else
    <h2>Notícias do Dia</h2>
    <!--<p class="subtitle">produtos da lojas</p>-->
    @endif

    <p class="subtitle"></p>
    <div id="cards-container" class="row">
        @foreach ($forcas as $forca )
            <div class="card col-md-3">
                <img src="/img/events/{{$forca->image}}" alt="{{$forca->title}}">
                <div class="card-body">

                   <h5 class="card-title">{{$forca->title}}</h5>
                   <p class=""> {{$forca->subtitle}}</p>
                   <a href="/events/{{$forca->id}}" class=" btn btn-primary">Ver a Notícia</a>
                </div>

            </div>
        @endforeach

        @if (count($forcas)==0 && $search)
            <p><h2>Não ha esse produto com {{$search}} ! <a href="/">Ver todos produtos</a></h2></p>
            @elseif (count($forcas)==0)

        @endif

    </div>
</div>


@endsection
