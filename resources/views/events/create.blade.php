@extends('layouts.main')
@section('title', 'Criar Evento')
@section('content')    

<div id="event-create-container" class="col-md-6 offset-md-3">
<h1>Crie o seu Evento</h1>
<form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="form-group">
        <label for="image">Imagem do Evento</label>
        <input type="file" id="image" name="image" class="form-control-file">
    </div>
      <div class="form-group">
        <label for="title">Evento</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
    </div>
      <div class="form-group">
        <label for="date">Data de realização</label>
        <input type="date" class="form-control" id="date" name="date">
    </div>
    <div class="form-group">
        <label for="title">Cidade</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="cidade e Local do Evento">
    </div>
    <div class="form-group">
        <label for="title">O Evento é Privado</label>
        <select name="private" id="private" class="form-control">
            <option value="0">Não</option>
            <option value="1">Sim</option>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Descrição</label>
        <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento"></textarea>
    </div>
    <div class="form-group">
        <label for="title">Adicione itens necesarios para realização:</label>
        <div class="form-group">
            <input type="checkbox" name="itens[]" value="cadeiras"> Cadeira 
        </div>
        <div class="form-group">
            <input type="checkbox" name="itens[]" value="pc"> PC 
        </div>
        <div class="form-group">
            <input type="checkbox" name="itens[]" value="perifericos"> Perifericos (mouse, teclado, mousepad, etc...) 
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
    @session('msg')
        
    
    
    @endsession
</form>

</div>

@endsection