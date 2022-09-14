@extends('layouts.main')

@section('title', '$forca->title')

@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-6">
        <img src="/img/events//{{$forca->image}}" class="img-fluid" alt="{{$forca->title}}">
      </div>
      <div id="info-container" class="col-md-6">
          <h1>{{$forca->title}}</h1>
          <h6 class="text-justify"></ion-icon>{{$forca->subtitle}}</h6>
          <br>

           <p class="text-sm-left" ><ion-icon name="person"></ion-icon>{{$forca->nome}}</p>
           <br>
           <p class="text-sm-left" ><ion-icon name="browsers"></ion-icon>{{$forca->date}}</p>


      </div>

    
      <div class="col-md-12" id="description-container">
      
      
          <p class="text-justify">{{$forca->descricao}}</p>

      </div>

    </div>

</div>


@endsection
