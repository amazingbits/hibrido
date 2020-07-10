<?php


namespace Source\Model;

use Source\Classes\Connect;

class Client extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findByCpf(string $table, string $cpf): bool
    {
        $query = "SELECT * FROM {$table} WHERE CPF = '{$cpf}' LIMIT 1";
        $conn = Connect::getConn()->prepare($query);
        $conn->execute();
        $row = $conn->rowCount();
        if($row === 0) {
            return false;
        }else{
            return true;
        }
    }

    public function findById(string $table, int $id): bool
    {
        $query = "SELECT * FROM {$table} WHERE ID = {$id}";
        $conn = Connect::getConn()->prepare($query);
        $conn->execute();
        $row = $conn->rowCount();
        if($row === 0) {
            return false;
        }else{
            return true;
        }
    }
}