@extends('layouts.main')

@section('title', 'add- produto')

@section('content')


<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Adicionar produto</h1>
     <form action="/events" method="POST" enctype="multipart/form-data">
       @csrf
      
      <div class="form-group">
            <label for="image"> imagem da Notícia</label>
            <input type="file" id="image" name="image" class="form-control">

        </div>
          <div class="form-group">
         <label for="title">Nome</label>
         <input type="text" class="form-control"  name="nome" placeholder="subtítulo">

          </div>
         <div class="form-group">
         <label for="title">subtítulo</label>
         <input type="text" class="form-control"  name="subtitle" placeholder="subtítulo">

       </div>
      <div class="form-group">
        <label for="title">Data  </label>
         <input type="date" class="form-control"  name="date" >

      </div>
       <div class="form-group">
        <label for="title">título</label>
         <input type="text" class="form-control"  name="title" placeholder="titulo">

       </div>
       <div class="form-group">
        <label for="title">descrição  </label>
       <textarea name="descricao" class="form-control"  rows="3"></textarea>

      </div>

     
      <input type="submit" class="btn btn-primary" value="Adicionar">
    </form>

</div>


@endsection
