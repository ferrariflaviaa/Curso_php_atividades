<?php 


    //PREENCHIMENTO DE FORMULARIO:
    $usuario = [];
    $usuario = [
        'nome' => 'Flávia',
        'idade' => '20',
        
        
    ];

    if($usuario){
        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
    }

    
    //VALIDAÇÃO PESO:
    if(count($_POST) > 0){

        if($_POST['peso'] === ""){
            $usuario[] = "Por favor preecha seu peso";
    
        }
    }

    if(isset($_POST['opcoes'])){
        $opcoes = $_POST['opcoes'];

        print_r($opcoes);
    }

    if(isset($_FILES)){
        print_r($_FILES);
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
    <?php if(count($usuario)): ?>
        <ul>
            <?php foreach($usuario as $usu): ?>
                <li><?= $usu ?></li>
                <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <h1>Formulário</h1>

    <form action="index.php" method="post">
        <div>
            <input type="text" 
            name="nome" placeholder="nome" value="<?= $nome ?>">
        </div>

        <div>
            <input type="text" name="idade" placeholder="idade" value="<?= $idade ?>">
        </div>

        <div>
            <input type="text" name="peso" placeholder="peso" >
        </div>

        <div>
            <input type="checkbox" name="opcoes[]" value="altura" >altura
        </div>

        <div>
            <input type="checkbox" name="opcoes[]" value="cor" >cor
        </div>

        <div>
            <input type="file" name="imagem">
        </div>

        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>

</body>
</html>