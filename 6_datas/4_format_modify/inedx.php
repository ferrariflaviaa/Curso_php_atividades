<?php
    //DATA ATUAL 

    $data = new DateTime();

    echo $data->format('d/m/y') . "<br>";

    echo $data->format('D/M/Y') . "<br>";

    echo $data->format('l/F/Y') . "<br>";


    //CRESCENTA DIAS, MESES E ANOS

    $data->modify('+5 days');

    echo $data->format('d/m/Y') . "<br>";