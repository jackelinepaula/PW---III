<?php

namespace App\Utils;

class View {
    //VERIFICAR SE A VIEW EXISTE
    private static function getContentView($view){
        $file = __DIR__.'/../../resources/views/'.$view.'.php';
        return file_exists($file) ? file_get_contents($file):'Página Não Encontrada';
    }

    //MÉTODO RESPONSÁVEL POR RETORNAR O CONTÉUDO RENDERIZADO DE UMA VIEW
    public static function render($view){

        //CONTEÚDOD A VIEW
        $contentView = self::getContentView($view);
        //RETORNAR CONTEÚDO RENDERIZADO
        return $contentView;

    }
}

?>