<?php include "../app/data/produtos.php"?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
</head>
<body>
    <?php include"../app/view/header.php" ?>
   <div class="produtos">
    <?php foreach ($produtos as $produto) : ?>
    <div class="produto">
        <img src=" <?= $produto->imagem ?>" alt=" <?= $produto->nome ?>">
        <h2><strong> nome :</strong> <?= $produto->nome ?></h2>
        <p><strong>descricao :</strong> <?= $produto->descricao ?></p>
        <p><strong>estoque :</strong> <?= $produto->estoque ?></p>
        <a href="produto.php?id=<?= $produto->id ?>">ver mais</a>
        
    </div>
        <?php endforeach; ?>
   </div>
</body>
</html>