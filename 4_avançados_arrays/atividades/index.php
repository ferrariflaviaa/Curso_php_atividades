<?php
    $arr = [
        [1,2,3,4],
        [2,52,3,73],
        [3,22,53,4],
    ];

    for($i = 0; $i < count($arr); $i++){
        echo "imprimindo array externo: " . ($i + 1);
        for($j = 0; $j < count($arr[$i]); $j++){
            echo $arr[$i][$j]. "<br>";
            
        }
    }

    $frutas = ["peira", "melão", "abacaxi"];
    print_r($frutas);
    echo "<br>";
    $removidos = array_slice($frutas, 2);
    print_r ($removidos);

    //--------------------------------
    $pessoa = [
        "Flávia" => 20,
        "João" => 20
    ];

    ?>

    <table>
        <tr>
            <td>Nome</td>
            <td>Idade</td>
        </tr>

    <?php 

        foreach ($pessoa as $carac => $value): ?>
        <tr>
            <td><?=$carac; ?></td>
            <td><?=$value; ?></td>
        <tr>
        <?php endforeach; ?>

    </table>


<?php
    echo "<br>";
    $ordem = [
        "Flávia" => 20,
        "João" => 21,
        "Gabi" => 11,
        "Lyvia" => 25
    ];
    rsort($ordem);
?>
<h1>Ordem de idade</h1>
    <ol>
        <?php foreach ($ordem as $nome => $idade): ?>
            <li><?=$nome ?> -> <?= $idade ?> </li>
        <?php endforeach; ?>
    </ol>