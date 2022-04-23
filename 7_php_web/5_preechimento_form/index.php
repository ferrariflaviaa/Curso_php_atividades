<?php

    //PREENCHIMENTO DE FORMULARIO:
    $usuario = [
        'nome' => 'Flávia',
        'idade' => 20,
        'profissao' => 'Programador'
    ];

    if($usuario){
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissao'];
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <div>
            <input type="text" placeholder="Digite seu nome" value="<?= $nome ?>">
        </div>

        <div>
            <input type="text" placeholder="Digite seu idade" value="<?= $idade ?>">
        </div>

        <div>
            <input type="text" placeholder="Digite seu profissão" value="<?= $profissao ?>">
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>
</html>