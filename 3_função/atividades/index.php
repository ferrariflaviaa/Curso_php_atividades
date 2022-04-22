<?php 
    $array = ["email", "password", "nome"];

    echo implode(", ", $array);

    function multi ($a,$b,$c){
        $multiplicacao = $a*$b*$c;
        echo "<br>" .$multiplicacao;
    }
    function multi2 (){
        $multiplicacao = 2*2;
        echo "<br>" .$multiplicacao;
    }
    multi(3,3,3);
    multi2();

    function nomeSobrenome ($nome, $sobrenome){
        echo "<br>" . $nome . " " . $sobrenome;
    }

    nomeSobrenome("Flávia", "Ferrari");

    function verificar($nuemro){
        if ($nuemro % 2 == 0){
            echo "<br> é par";
        }else{
            echo "<br> é ímpar";
        }
    }
    verificar(2);
    verificar(3);

    function quadrado($numero){
        $resul = $numero ** 2;
        echo "<br>". $resul;
    }
    quadrado(4);

    //---------------------------------------

    $arr = [];

    for($i = 0; $i <= 30; $i++){
        array_push($arr, $i);
    }

    

    function maiorQue($array){
        $retornaArray = [];

        for($i = 0; $i < count($array); $i++){

            if($array[$i] > 7){
                array_push($retornaArray, $array[$i]);
            }
        }

        return $retornaArray;
    }

    echo "<br>";

    print_r (maiorQue($arr));

    //------------------

    function definirCarro($carro, $cor = "vermelho"){
        echo "<br> o carro $carro é de cor $cor";
    }

    definirCarro("ferrari");

    //------------------

    $lista = ["Arroz", "feijão", "trigo"];

    function mercado($arr){
        $str = "Você levou items do mercado";

        for($i = 0; $i < count($arr); $i++){

            if($i + 1 == count($arr)){
                $str .= " $arr[$i].";

            }else{
                $str .= " $arr[$i],";
            }
        }

        return $str;
    }

    echo mercado($lista);

    //Retorno Multiplos:
    function alterarDados($nome, $idade){

        $nome = $nome;
        $idade = "$idade anos";

        return [$nome, $idade];
    }

    $dados = alterarDados("Flávia", 20);

    echo "<br>";
    echo "Ola $dados[0], você tem $dados[1]";


    //---------------------------------------------

    $arr = [
        'porta' => 100,
        'maçaneta' => 5,
        'motor' => 200 
    ];

    function itensCaros($arr){
        $arrItensCaros = [];

        foreach ($arr as $item => $preco){
            if($preco > 10){
                array_push($arrItensCaros, $item);
            }
        }

        return $arrItensCaros;
    }

    $novoArr = itensCaros($arr);
    echo "<br>";
    print_r($novoArr);