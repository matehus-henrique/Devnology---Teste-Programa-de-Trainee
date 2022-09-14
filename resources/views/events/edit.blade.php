@extends('layouts.main')

@section('title', 'editar produto' . $forca->title)

@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando {{$forca->title}}</h1>
    <form action="/events/update/{{$forca->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image"> imagem do produto</label>
            <input type="file" id="image" name="image" class="form-control">

        </div>
         <div class="form-group">
        <label for="title">título  </label>
         <input type="text" class="form-control"  name="title" placeholder="título da Notícia">

      </div>
      <div class="form-group">
        <label for="title">Data  </label>
         <input type="date" class="form-control"  name="date" >

      </div>
       <div class="form-group">
        <label for="title">subtítulo</label>
         <input type="text" class="form-control"  name="subtitle" placeholder="subtítulo">

       </div>
       <div class="form-group">
        <label for="title">descrição  </label>
       <textarea name="descricao" class="form-control"  rows="3"></textarea>

      </div>
        <input type="submit" class="btn btn-primary" value="Editar">

    </form>

</div>


@endsection
