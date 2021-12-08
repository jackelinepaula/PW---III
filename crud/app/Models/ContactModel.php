<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;

    protected $table = 'tbContact';

    //PREENCHER DATA = NÃÃÃÃO
    public $timestamps = false;

    //COM O QUE VOU TRABALHAR NA TBCONTACT
    protected $fillable = ['nomeContact' , 'emailContact', 'telContact']; 

    protected $primaryKey = 'idContact';
}
