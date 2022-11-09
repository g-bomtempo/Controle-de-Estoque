<?php

include_once "produtos.php";

$materiais = new Produtos;
$dados = $materiais->exibirTodos();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Controle de Estoque</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div id="container">
        <h1>Controle de Estoque</h1>        
            <h2><?php foreach ($dados as $materiais):?></h2>
                <p><?php echo $materiais['produto']; ?></p>
                    <p class="quantidade"><?php echo $materiais['quantidade'];?></p>
                    <button>Adicionar</button>
                    <button>Remover</button> 

        <?php endforeach;?>                 
    </div>
</body>

</html>
