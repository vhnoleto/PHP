<?php
    include 'veiculoRodoviario.php';
    include 'TipoCarro.php';

    class Automovel extends veiculoRodoviario{
        var $tipo;

        function __construct($nRodas, $nPassageiros, $tipo){
            $this->nRodas = $nRodas;
            $this->nPassageiros = $nPassageiros;
            $this->tipo = new TipoCarro($tipo);
        }

        function Mostra(){
            echo ("Rodas: ".parent::get_nRodas()." Passageiros: ".parent::get_nPassageiros()." tipo: ".$this->tipo->get_tipoCarro());
        }

    }

    $mostra = new automovel('4', '40', 'chevrolet');

    $mostra ->Mostra();

?>