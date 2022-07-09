<?php 

namespace Pedidos;

class Conexao{

    private static $instance;

    public static function getConn(){

        if(!isset(self::$instance)){

            self::$instance = new \PDO('mysql:host=localhost;dbname=pedidoswebsocket;charset=utf8','root','12345');
        }

        return self::$instance;
    }
}