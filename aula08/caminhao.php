<?php
    include 'veiculoRodoviario.php';

    class caminhao extends veiculoRodoviario{
        
        private $carga;

        function __construct($nRodas, $nPassageiros, $carga){
            parent::set_nRodas($nRodas);
            parent::set_nPassageiros($nPassageiros);
            $this->carga = $carga;
        }

        function set_carga($parametro){

            $this -> carga = $parametro;
        }

        function get_carga(){

            return $this -> carga;
        }

        public function Mostra(){
            echo ("Rodas: ".parent::get_nRodas()." Passageiros: ".parent::get_nPassageiros()." Carga: ".$this->get_carga());
        }

    }

    $mostra = new caminhao('4', '40', 'almofadas');

    $mostra ->Mostra();
    


?>