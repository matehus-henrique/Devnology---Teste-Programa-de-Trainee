@extends('layouts.main')

@section('title', 'Dasboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meu produtos</h1>

</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if (count($forcas) > 0)
       <table class="table">
           <thead>
               <tr>
                   <th scope="">#</th>
                   <th scope="">nome</th>
                   <th scope="">Quantidade</th>
                   <th scope="">Ações</th>
               </tr>
           </thead>


       <tbody>
           @foreach ($forcas as $forca)
           <tr>
               <td scropt="row">{{$loop->index + 1}}</td>
               <td><a href="/events/{{$forca->id}}">{{$forca->title}}</a></td>
               <td>0</td>
               <td><a href="/events/edit/{{$forca->id}}" class="btn btn-info edit-btn"> <ion-icon name="create-outline"></ion-icon> editar </a>
               <form action="/events/{{$forca->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete-btn"> <ion-icon name="trash-outline"></ion-icon>Deletar </button>

               </form>

           </tr>

           @endforeach
       </tbody>
      </table>

    @else
     <p>Você ainda nçao tem produto cadstrado <a href="/events/create">Adicionar produto</a></p>


    @endif

</div>


@endsection
