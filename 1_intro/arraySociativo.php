<?php

    $arr = ['name' => "ferrari", 'ano' => 2022];

    print_r($arr);
    echo "<br>";
    echo $arr["name"];

    $pessoa = ['nome' => "Flávia", 'idade' => 20];

    echo "<br>";
    

    if($pessoa['idade'] >= 18){
        echo "É maior";
    }

?>