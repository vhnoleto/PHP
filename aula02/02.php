<?php 

    include_once 'carro.php';

    $cor = new Carros;
    $acelerar = new Carros;

    $cor->cor = "Prata";
    $acelerar->acelerar = 'Acelerando';


    $cor->InformarCor();
    $acelerar->Acelerar();
    
?>