@extends('template.templatetwo')

@section('content')

<div class="container-list">
    <div class="list">
        <div class="titulo title">
            <div class="texts">
                <h3>Contatos Salvos</h3>
                <p>Saved Contacts</p>
            </div>
            <div class="icon">
                <a style="text-decoration: none;" href="/novocontato">
                    <p>Add <i class="fas fa-plus"></i></p>
                </a>
            </div>
        </div>
        <table class="table table-striped">
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td class="td">
                        <div class="dados">
                            <p class="item-1">{{$contact->nomeContact}}</p>
                            <p class="item-2">{{$contact->emailContact}}<br>
                                {{$contact->telContact}}
                            </p>
                        </div>
                        <div class="buttons">
                            <a href="/edit-return/{{$contact->idContact}}"><button><i class="far fa-edit"></i></button></a>
                            <a href="/delete-return/{{$contact->idContact}}"><button><i class="far fa-trash-alt"></i></button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection