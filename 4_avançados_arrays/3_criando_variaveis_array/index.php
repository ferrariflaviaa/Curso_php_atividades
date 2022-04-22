<?php
    $carro = ["jaguar", 3.0, "azul", 18, "Telo solar", "automatico"];

    print_r ($carro);

    list($tipo, $versão, $cor, $ano, $automatico) = $carro;
    echo "<br>";
    echo "$tipo <br>";
    echo "$versão <br>";
    echo "$cor <br>";
    echo "$ano <br>";
    echo "$automatico <br>";
    