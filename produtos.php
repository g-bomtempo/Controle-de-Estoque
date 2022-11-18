<?php

class Produtos{

    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function adicionar(string $produto, string $quantidade):void {

        $insereProduto = $this->mysql->prepare('INSERT INTO controledosestoques (produto, quantidade) VALUES (?,?)');  
        $insereProduto->bind_param('ss', $produto, $quantidade);   
        $insereProduto->execute();   
    }

    public function remover (string $id):void{
        $removerArtigo = $this->mysql->prepare('DELETE FROM controledosestoques WHERE id = ?');  
        $removerArtigo->bind_param('s', $id);   
        $removerArtigo->execute(); 

    }

    public function editar (string $id, string $produto, string $quantidade):void{
        $editarProduto = $this->mysql->prepare('UPDATE controledosestoques SET produto = ?, quantidade = ? WHERE id = ?');
        $editarProduto->bind_param('sss', $produto, $quantidade, $id);
        $editarProduto->execute();

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
