<?php 

   class Carros 
   {
       var $cor;
       var $ano;
       var $numeroPortas;
       var $peso;
       var $acelerar;


       function Acelerar(){
        echo $this->acelerar . "<br/> \n";
   }
       function InformarCor(){
        echo 'Cor: ' .$this->cor . "<br/> \n";
   }
   } 
?>