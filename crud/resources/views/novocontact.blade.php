@extends('template.templatetwo')

@section('content')

<div class="container-form">
    <div class="form">
        <div class="titulo">
            <h3>Novo Contato</h3>
            <p>New Contact</p>
        </div>
        <form action="{{url('/insert-return')}}" method="post">
            @csrf
            <input name="txtNome" type="text" placeholder="Nome:">
            <input name="txtEmail" type="text" placeholder="E-mail:">
            <input name="txtTel" type="text" placeholder="Telefone:">
            <button type="submit">Adicionar</button>
        </form>
    </div>
</div>

@endsection