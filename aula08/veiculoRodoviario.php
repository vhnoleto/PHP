<?php

    class veiculoRodoviario
    {
        protected $nRodas;
        protected $nPassageiros;

        function __construct($nRodas, $nPassageiros){

            $this->nRodas = $nRodas;
            $this->nPassageiros = $nPassageiros;

        }
    
        function set_nRodas($parametro){

            $this->nRodas = $parametro;
        }

        function get_nRodas(){

            return $this ->nRodas;
        }

        function set_nPassageiros($parametro){

            $this->nPassageiros = $parametro;
        }

        function get_nPassageiros(){

            return $this ->nPassageiros;
        }

    }
    

?>