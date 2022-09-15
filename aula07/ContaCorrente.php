<?php

include_once '../aula04/contas.php';
    

class ContaCorrente extends Contas{
    
    var $limite;

    //método construtor(sobrescrito) agora, também incializada
    function __construct($agencia,
    $codigo,$dataDeCriacao, $titular,$senha,$saldo,$limite){
        //chamda do metodo construtor da classe-pai
        parent:: __construct($agencia,$codigo,$dataDeCriacao, $titular,$senha,$saldo,$limite);
        $this->limite = $limite;
    }

    //método Retirar (sobrescrito) verifica se a $quantia
    function retirar($quantia){
        //imposto sobre movimentação financeira
        $cpmf = 0.05;

        if (($this->saldo + $this->limite) >= $quantia) {
            
            //Executa método da classe-pai
            parent:: retirar($quantia);
            //debita o imposto
            parent:: retirar($quantia*$cpmf);
        }
        else{
            echo "<br>Retirada não concluida ...<br>";
            return false;
        }
        return true;
    }

}

?>