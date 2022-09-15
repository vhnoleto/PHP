<?php

    class Pessoa{

        private $codigo;
        private $nome;
        private $altura;
        private $idade;
        private $nascimentos;
        private $escolaridade;
        private $salario;

        public function __construct($Codigo, $nome, $altura, $idade, $nascimento, $escolaridade, $salario){
            $this->codigo = $parametrpo;
            $this->nome = $nome;
            $this->altura = $altura;
            $this->idade = $idade;
            $this->nascimento = $nascimento;
            $this->escolaridade = $escolaridade;
            $this->salario = $salario;

        }

        public function __destruct(){
            echo "<br>Objeto{$this->nome} finalizado...<br>";
        }

        //aumenta a altura em centimetros
        function crescer($centimetros){

            if ($centimetros > 0) {
                $this->set_altura($this->get_altura += $centimetros);
            }
        }

        //altera a escolaridade para  titulaçã
        function formar($titulacao){
            $this->set_escolaridade($titulacao);
        }

        //aumenta a idade em anos
        function envelhecer($anos){
            if ($anos > 0) {

                $this->set_idade($this->get_idade += $anos);
            }
                        
        }



        public function get_codigo(){
            return $this->codigo;
        }
        public function set_codigo($par){
            $this->codigo = $par;
        }
        public function get_nome(){
            return $this->nome;
        }
        public function set_nome($par){
            $this->nome = $par;
        }
        public function get_altura(){
            return $this->altura;
        }
        public function set_altura($par){
            $this->altura = $par;
        }
        public function get_idade(){
            return $this->idade;
        }
        public function set_idade($par){
            $this->idade = $par;
        }
        public function get_nascimento(){
            return $this->nascimento;
        }
        public function set_nascimento($par){
            $this->nascimento = $par;
        }
        public function get_escolaridade(){
            return $this->escolaridade;
        }
        public function set_escolaridade($par){
            $this->escolaridade = $par;
        }
        public function get_salario(){
            return $this->salario;
        }
        public function set_salario($par){
            $this->salario = $par;
        }
        
    }

?>