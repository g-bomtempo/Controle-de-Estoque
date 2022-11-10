<?php

class Produtos{

    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function exibirTodos():array{

        $resultado = $this->mysql->query('SELECT id, produto, quantidade FROM controledosestoques');
        $produtos = $resultado->fetch_all(MYSQLI_ASSOC);

        return $produtos;

    }

    public function encontrarPorId(string $id): array{
        $selecionaProduto = $this->mysql->prepare("SELECT id, produto, quantidade FROM controleDosEstoques WHERE id = ?");
        $selecionaProduto->bind_param('s', $id);  
        $selecionaProduto->execute();
        $artigo = $selecionaProduto->get_result()->fetch_assoc();  
        return $artigo;
    }

}
