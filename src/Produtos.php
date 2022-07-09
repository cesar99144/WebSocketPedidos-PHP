<?php

namespace Pedidos;
use Pedidos\Conexao;

class Produtos extends Conexao{

    public function listaProdutos(){

        $query = "select * from produtos";
        $stmt = self::getConn()->prepare($query);
        $stmt->execute();

        if($stmt->rowCount() > 0){

            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $resultado;

        }else{

            return [];

       }
    }
}