<?php
    class Produtos 
    {
        var $codigo;
        var $descricao;
        var $quantidade;
        var $valor;

        

        public function __construct($codigo, $descricao){
            $this->codigo = $codigo;
            $this->descricao = $descricao;
        }


        public function toString(){
            return printf("código = %d e descrição = %s", $this->codigo, $this->descricao);
        }
    }
    
?>