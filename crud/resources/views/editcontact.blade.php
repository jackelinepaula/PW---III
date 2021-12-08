@extends('template.templatetree')

@section('content')

<div class="container-form">
    <div class="form">
        <div class="titulo">
            <h3>Editar Contato</h3>
            <p>Edit Contact</p>
        </div>
        <form action="{{url('/update-return/'.$contact->idContact)}}" method="post">
            {{@csrf_field()}}
            <input name="txtNome" type="text" value="{{$contact->nomeContact}}" placeholder="Nome:">
            <input name="txtEmail" type="text" value="{{$contact->emailContact}}" placeholder="E-mail:">
            <input name="txtTel" type="text" value="{{$contact->telContact}}" placeholder="Telefone:">
            <button type="submit">Salvar</button>
        </form>
    </div>
</div>

@endsection