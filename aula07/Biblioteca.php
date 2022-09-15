<?php
    class Biblioteca{
        const nome = "GTK";
    }
    class Aplicacao extends Biblioteca{
        
        const ambiente = "Gnome Desktop";
        const version = "3.4";
    
    function __construct($nome){
        echo parent::nome . self::ambiente . self::version . $nome."<br>";
    }

    }
    echo Biblioteca::nome . Aplicacao::ambiente . Aplicacao::version . "<br>"

    new Aplicacao(' Dia');
    new Aplicacao(' Noite');

    

?>