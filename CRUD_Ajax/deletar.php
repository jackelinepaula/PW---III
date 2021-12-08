<?php
require_once "conexao.php";

$id =  $_GET['id'];

try{
    $stmt = $conexao->prepare("DELETE FROM tbcontato WHERE id = '$id'");
    $stmt->execute();
    $conexao = null;

    header('Location:index.php');
}
catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}

?>