<?php 
    interface Caracteristica{

        const name = "flávia";
        public function falar();

    }

    class Humano implements Caracteristica{
        
        public $idade = 29;

        public function falar(){
            echo "Olá mundo <br>";
        }

        public function dizerNome(){
            echo self::name;
        }
    }

    $flavia = new Humano;

    $flavia->falar();
    $flavia->dizerNome();


