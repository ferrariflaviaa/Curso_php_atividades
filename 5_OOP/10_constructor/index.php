<?php 
    class Car{
        public $portas;
        public $cor;
        public $marca;

        function __construct($portas, $cor, $marca){
            $this->portas = $portas;
            $this->cor = $cor;
            $this->marca = $marca; 

        }
    }

    $carro = new Car(4,"veremelha", "ferrari");
    echo "O carro é da marca $carro->marca e tem $carro->portas portas e a cor é $carro->cor.";
