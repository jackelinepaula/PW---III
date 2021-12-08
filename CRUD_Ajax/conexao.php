<?php

    $servidor = "localhost";
    $name = "bdform";
    $user = "root";
    $password = "";

    $conexao = new PDO("mysql:host=$servidor;dbname=$name",$user,$password);
    
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("SET CHARACTER SET utf8");


    /*class Conexao{

        public static function conectar(){

            //conexão local
            $conexao = new PDO("mysql:host=localhost;
                                dbname=bdform",
                                "root",
                                "");

            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexao->exec("SET CHARACTER SET utf8");

            return $conexao;
        }
    }*/

?>