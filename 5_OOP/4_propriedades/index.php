<?php
    class Car{

        //DECLARANDO PROPRIEDADES
        public $rodas = 4;
        public $aro = 20;

    }
    
    $ferrari = new Car;
    //CHAMANDO PROPRIEDADES
    echo $ferrari->aro . "<br>";

    //TROCANDO VALOR DA PROPRIEDADES;
    $ferrari->rodas = 18;

    echo $ferrari->rodas . "<br>";