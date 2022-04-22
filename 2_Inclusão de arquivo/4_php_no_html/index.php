<?php

    include_once "backend.php"

?>

<h1>Lista de produto</h1>
<p><?= $nome; ?> veja nossas ofertas </p>

<h2>Produtos</h2>
<ul>
    <?php foreach($produto as $produtos): ?>
        <li><?= $produtos; ?></li>
    <?php endforeach; ?>
</ul>
