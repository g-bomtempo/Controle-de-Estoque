<?php

class Produtos{

    public function exibirTodos():array{

        $produtos =[
            [
            'produto' => 'Folha A4',
            'quantidade' => '5',
            ],
            [
            'produto' => 'Folha A5',
            'quantidade' => '6',
            ]
            
        ];

        return $produtos;

    }
}
