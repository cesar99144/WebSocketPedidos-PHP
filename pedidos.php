<?php

require './vendor/autoload.php';

use Pedidos\PedidosServer;

$app = new Ratchet\App('localhost', 9990);
$app->route('/pedidos', new PedidosServer, ['*']);
$app->run();