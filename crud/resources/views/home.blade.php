@extends('template.template')

@section('content')
<div class="container">
    <div class="main">
        <div class="text">
            <h3>Contatos CRUD</h3>
            <p>Projeto CRUD desenvolvido com o framework Laravel, com o objetivo de enriquecer o aprendizado.<br>A aplicação permite inserir, alterar e excluir contatos, além de, é claro, listá-los.</p>
            <a href="/novocontato"><button>Começar</button></a>
        </div>

        <div class="photo">
            <img src="{{url('img/photohome.png')}}" alt="Foto Home - Ilustração UI">
        </div>
    </div>
</div>
@endsection