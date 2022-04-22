<?php

    if(isset($_GET['nome'])){
        $nome = $_GET['nome'];
    }else{
        $nome = "padrão";
        
    }

?>
<h1>O sue nome é <?=$nome?></h1>