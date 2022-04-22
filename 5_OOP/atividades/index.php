<?php
    class Pessoa{

        public $nome = "Flávia";
        public $idade = 20;

        function movimento($m){
            echo "ela andou $m km";

        }
    }

    $pessoa = new Pessoa();

    echo $pessoa->nome . '<br>';
    echo $pessoa->idade . '<br>';
    echo "o nome dela é $pessoa->nome e a idade é $pessoa->idade <br>";
    $pessoa -> movimento(20);
    
    //--------------------------------------------
    class Carro{
        public $velocidadeMaxima;

        function setVelocidadeMaxima($km){
            $this->velocidadeMaxima = $km;
        }

        function getVelocidadeMaxima(){
            echo "<br> Velocidade maxima é de $this->velocidadeMaxima KM";
        }
    }

    $carro = new Carro;

    $carro->setVelocidadeMaxima(100);
    $carro->getVelocidadeMaxima();

    echo "<br> ---------------------------------- <br>";

    class Humano {

        public $nome = 'Humano';
        public $idade = 20;

        function falar(){
            echo "<br> estou falando";
        }
    }

    class Professor extends Humano{

        public $materia;
        public $curso = "logica";


        public function getCurso(){
            echo "entrou";
        }

    }

    $flaviaF = new Humano;
    $joao = new Professor;

    $joao->getCurso();
    $joao->falar();

    //--------------------------

    class Cachorro{
        public $raca;
        public $idade;

        public function __construct ($raca, $idade){
            $this->raca=$raca;
            $this->idade=$idade;
        }

        public function mostra(){
            echo "<br> a raça é ". $this->raca . " e a idade " . $this->idade;
        }
    }
    $cachorro = new Cachorro("delga", 4);
    $cachorro->mostra();
    


