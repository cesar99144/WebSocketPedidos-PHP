<?php

require '../vendor/autoload.php';

use Pedidos\Produtos;


$produtos = new Produtos();
$listaProdutos = $produtos->listaProdutos();

echo json_encode($listaProdutos);