<?php

$mysql = new mysqli('localhost', 'root', '', 'estoque');
$mysql->set_charset('utf8');

if ($mysql == FALSE){
    echo "Erro na conexao";
}
