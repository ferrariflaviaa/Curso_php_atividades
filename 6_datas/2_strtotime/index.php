<?php
    //STRTOIME ACRESCENTA + DIAS, MESES OU ANOS.

    $cincoDias = strtotime("5 days");

    echo $cincoDias . "<br>";

    $dezDias = strtotime("10 days");

    echo $dezDias . "<br>";

    $dataAtualMais = date('d/m/y', $cincoDias);

    echo $dataAtualMais . "<br>";