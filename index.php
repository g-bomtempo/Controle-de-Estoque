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
                    <a href="adiciona_Unidades.php?id=<?php echo $materiais['id'];?>"><button>+</button></a>
                    <a href="diminui_Unidade.php?id=<?php echo $materiais['id'];?>"><button>-</button></a>
                    <a href="editar_Produto.php?id=<?php echo $materiais['id'];?>"><button>Editar</button></a>
                    <a href="excluir_Produto.php?id=<?php echo $materiais['id'];?>"><button>Remover</button></a>
                    <hr size="1">
        <?php endforeach;?>                 
    </div>
    <a class="botaoAdicionar" href="adicionar_Produto.php">Adicionar Produto</a>
</body>
</html>
