<?php

    // $arry = ["teste", 23, "hello"];

    // $x = count($arry);
    // $y = 0;
    // while($y <  $x){
        
    //     if(is_string($arry[$y])){
    //         echo "$arry[$y] <br>";
    //     }

    //     $y++;
 
    // }
    $arr = [];

    for ($i = 10; $i <= 20; $i++){

        array_push($arr,$i);

    }

    print_r($arr);

    for ($i = 0; $i < count($arr); $i++){
        
        
        if($arr[$i] % 2 != 0){
            echo "$arr[$i] <br>";
        }
    }

    

?>