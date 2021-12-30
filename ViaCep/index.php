<?php

include('api.php');

$cep = str_replace('-', '', $retorno->cep);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>

    <link rel="stylesheet" href="resources/css/style.css">
    <title>ViaCep PHP</title>
</head>
<body>
    <div class="container-main">
        <div class="left">
            <h3>ViaCep | PHP</h3>
            <p>Utilizando apenas o CEP, encontre qualquer endereço no território nacional.</p>
            <p class="icon"><i class="fas fa-map-marker-alt"></i></p>
        </div>
        <div class="right">
            <h4>Entre com o CEP</h4>
            <form action="" method="POST">
                <input type="number" placeholder="CEP" name="cep" value="<?php echo $cep?>">

                <input class="busca" type="submit" value="Buscar">

                <input type="text" placeholder="Logradouro" name="logradouro" value="<?php echo $retorno->logradouro?>">
                <input type="text" placeholder="Bairro" name="bairro" value="<?php echo $retorno->bairro?>">
                <input type="text" placeholder="Município" name="municipio" value="<?php echo $retorno->localidade?>">
                <input type="text" placeholder="UF" name="uf" value="<?php echo $retorno->uf?>">

            </form>
        </div>
    </div>
</body>
</html>