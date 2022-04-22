<?php 
    class Animal{
        public $name;

        function escolherNome($nome){
            $this->nome = $nome;
        }

        function latir(){
            return "auauau <br>";
        }
        function latirForte(){
            return strtoupper($this->latir());
        }

    }

    $frita = new Animal;

    $frita->escolherNome("Frita");
    echo "O nome do animal é: $frita->nome <br>";

