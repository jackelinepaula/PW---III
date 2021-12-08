<?php
require_once "conexao.php";

$nome = $_POST['txtNome'];
$email = $_POST['txtEmail'];
$assunto =  $_POST['txtAssunto'];
$area =  $_POST['txtArea'];

try{
    $stmt = $conexao->prepare("INSERT INTO tbcontato VALUES(null, '$nome', '$email', '$assunto', '$area')");
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