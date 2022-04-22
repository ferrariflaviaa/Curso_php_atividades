<?php
    abstract class Teste{
        public static function testandoClasse(){
            echo "este método é de uma classe abstrata <br>";
        }

        abstract public function testAbstart();
    }

    Teste::testandoClasse();

    class Nova extends Teste{

        public function testAbstart(){
            echo "teste método abstrato <br>";
        }
    }

    $n = new Nova;
    $n->testAbstart();
