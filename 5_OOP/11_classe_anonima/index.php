<?php
    $pessoa = new class(){

        public $nome = "Flávia";

        public function dizerNome(){
            echo "Ola meu nome é $this->nome <br>";
        }
    };
    echo $pessoa -> nome . "<br>";
    $pessoa->dizerNome();