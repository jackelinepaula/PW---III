<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;

class ContactController extends Controller
{

    public function listar()
    {
        //RECUPERAR TODOS OS VALORES DA TABELA
        $contacts = ContactModel::all();
        //RETORNAR UMA VIEW
        return view ('contact', compact('contacts'));
        //COMPACT RETORNA OS VALORES DA VARIÁVEL PARA PODER USAR NA VIEW
    }

    public function insert(Request $request)
    {
        $contact = new ContactModel();

        $contact->nomeContact = $request->txtNome;
        $contact->emailContact = $request->txtEmail;
        $contact->telContact = $request->txtTel;

        $contact->save();

        return redirect()->action('App\Http\Controllers\ContactController@listar');
    }

    public function edit($id){
        $contact = ContactModel::find($id);
        return view ('editcontact', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = ContactModel::find($id);
        $contact->update(['nomeContact'=>$request->txtNome, 
                            'emailContact'=>$request->txtEmail,
                            'telContact'=>$request->txtTel]);

        return redirect()->action('App\Http\Controllers\ContactController@listar');
    }

    public function destroy($id)
    {
        $contact = ContactModel::where('idContact', $id)->delete();
        return redirect()->action('App\Http\Controllers\ContactController@listar');
    }
}
