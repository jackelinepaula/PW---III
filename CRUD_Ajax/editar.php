<?php

    require_once 'conexao.php';

    $id = $_POST['txtId'];
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $assunto = $_POST['txtAssunto'];
    $mensagem = $_POST['txtArea'];


   try {
    
    $stmt = $conexao->prepare("UPDATE tbcontato SET nome='$nome', email='$email', 
                               assunto='$assunto', mensagem='$mensagem'
                                WHERE id = '$id'");
    $stmt->execute();
    $conexao=null;

    header('Location:index.php');
    


   } catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre>';
    echo $e->getMessage();
}


?>