<?php 
    
    class Pessoa{

        //SOU UM OBJETO:
        function fala(){
            echo "olá sou um objeto";
        }
}
$flavia = new Pessoa;

$flavia -> fala();
echo '<br>';

    class Cachorro{

        function acao($movimento){
            if($movimento == "lati"){
                echo "o cachorro latiu";

            }else{
                echo "ele esta andando";
            }
        }
    }

    $toto = new Cachorro;
    $toto -> acao("lati");
    echo '<br>';
    $toto -> acao("andou");
    echo '<br>';
    $toto -> acao("lati");