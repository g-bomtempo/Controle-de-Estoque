<?php

require_once "config.php";
include_once "produtos.php";

$obj_produtos = new Produtos($mysql);
$produto = $obj_produtos->encontrarPorId($_GET['id']);

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Controle do Estoque Detalhado</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>
            <?php echo $produto['produto']; ?>
        </h1>
        <p>
            <?php echo $produto['quantidade']; ?>
        </p>
        <div>
            <a class="botaoVoltar" href="index.php">Voltar</a>
        </div>
    </div>
</body>

</html>
