<?php 

   class Contas 
   {
       private $numAge;
       private $numConta;
       private $nome;
       private $saldo;

       public function __construct($numAge, $numConta, $nome, $saldo){
        $this->numAge = $numAge;
        $this->numConta = $numConta;
        $this->nome = $nome;
        $this->saldo = $saldo;
    }




       public function toString(){

            return printf("Agencia: %d Conta: %s <br> Nome: %s <br> Saldo: %.2f",$this->get_numAge(), $this->get_numConta(), $this->get_nome(), $this->get_saldo());

       }

       //diminui o saldo em quantia
       function retirar($quantia){

        if ($quantia > 0) {
            $this->set_saldo($this->get_saldo-=$quantia);
        }

    }

    //aumenta o saldo em quantia 
    function despositar($quantia){

        if ($quantia > 0) {
            $this->set_saldo($this->get_saldo+=$quantia);
        }

    }

    //retorna o saldo atual 
    function obterSaldo(){
        
        return $this->get_saldo();
    }






       public function get_numAge(){
        return $this->numAge;
       }
       public function set_numAge($par){
            $this->numAge = $par:
       }
       public function get_numConta(){
        return $this->numConta;
       }
       public function set_numConta($par){
        $this->numConta = $par:
       }
       public function get_nome(){
        return $this->nome;
       }
       public function set_nome($par){
        $this->numConta = $par:
       }
       public function get_saldo(){
        return $this->saldo;
       }
       public function set_saldo($par){
        $this->numConta = $par:
       }

   } 
?>