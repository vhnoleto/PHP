<?php 
class TipoCarro{
    private $tipo;

    function __construct($par){
        $this->tipo = $par;
    }

    public function set_tipoCarro($par){
        $this->tipo = $par;
    }
    public function get_tipoCarro(){
        return $this->tipo;
    }
}
?>