<?php 

    //FORMATA A DATA QUE VC DEFINER
    $dataNascimento = mktime(02,12,33,02,05,1991);

    echo $dataNascimento . "<br>";

    $dataNascimentoFormatada = date('d/m/y', $dataNascimento);

    echo $dataNascimentoFormatada . "<br>";