<?php

require_once "config.php";
include_once "produtos.php";

$materiais = new produtos($mysql);
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
            <h2><?php foreach ($dados as $materiais):?>
                <a href="detalhado.php?id=<?php echo $materiais['id']; ?>"><?php echo $materiais['produto']; ?></a>
            </h2>
            
                    <p class="quantidade"><?php echo $materiais['quantidade'];?></p>
                    <button>Adicionar</button>
                    <button>Remover</button> 
                    <hr size="1">
        <?php endforeach;?>                 
    </div>
    <a class="botaoAdicionar" href="adicionar_Produto.php">Adicionar Produto</a>
</body>

</html>
