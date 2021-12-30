<?php

$retorno = (object)[
    'cep' => '',
    'logradouro' => '',
    'bairro' => '',
    'localidade' => '',
    'uf' => ''
];

if (isset($_POST['cep'])) {
    $cep = $_POST['cep'];

    $url = "https://viacep.com.br/ws/{$cep}/json/";
    $retorno = json_decode(file_get_contents($url));
};
