<?php include "../app/data/produtos.php";
$id = $_GET['id'] ?? null;


$produtoSelecionado = null;

for ($i = 0; $id < count(value: $produtos); $i++) {
    if ($produtos[$i]->id == $id) {
        $produtoSelecionado = $produtos[$i];
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lojinha | <?= $produtoSelecionado ? $produtoSelecionado->nome : "produto nao encontrado" ?></title>
    <link rel="stylesheet" href="assets/css/produto.css">
</head>

<body>
    <?php include "../app/view/header.php" ?>
    <div class="container">
        <div class="grade">
            <h1 class="nome"><?= $produtoSelecionado->nome ?></h1>
            <p class="descricao"><?= $produtoSelecionado->descricao ?></p>
            <button class="estoque"><?= $produtoSelecionado->estoque ?></button>
            <button class="preco"><?= $produtoSelecionado->preco ?></button>

        </div>
        <img class="imagem-produto" src="<?= $produtoSelecionado->imagem ?>" alt="<?= $produtoSelecionado->nome ?>">
    </div>
</body>

</html>