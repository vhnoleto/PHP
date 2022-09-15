<?php
    //inserer a classe
    include_once '01.php';

    $valor = new Produtos(4011,"O wesley é um cara muito maduro pra sua idade, porém, é chato pra krai.");

    // $valor->codigo = 4011;

    // $valor->descricao = 'O wesley é um cara muito maduro pra sua idade, porém, é chato pra krai.';

    $texto = $valor->toString();

    echo $texto;

    

?>