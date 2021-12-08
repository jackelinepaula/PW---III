<?php

//LETRA MAIÚSCULAAA
namespace App\Controller\Pages;
use \App\Utils\View;

class Home{
    public static function getHome(){
        //return 'Olá Mundo';
        
        return View::render('pages/home');
    }
}

?>