<?php
    class Humano{

        //CONSTANTES DECLARAR É UM VALOR FIXO:
        public const OLHOS = 2;
        public const BRACOS = 2;

        function mostrarConstantes(){
            echo self::BRACOS . " Braços <br>";
        }

    }

    $flavia = new Humano;

    echo $flavia::OLHOS . " Olhos <br>";
    $flavia->mostrarConstantes();