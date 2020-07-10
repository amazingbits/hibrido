<?php

namespace Source\Model;

use Source\Classes\Connect;

class Model
{
    public function __construct()
    {
    }

    public function list(string $table, string $terms = "", bool $one = false, int $id = null)
    {
        $query = "SELECT * FROM {$table}";
        if($one) {
            $query .= " WHERE ID = {$id} {$terms}";
        }

        $conn = Connect::getConn()->prepare($query);
        $conn->execute();
        $conn = $conn->fetchAll();

        return $conn;
    }

    public function create(string $table, array $values)
    {
        $query = "INSERT INTO {$table} VALUES (NULL,";
        for($i = 0; $i < count($values); $i++) {
            if($i == count($values) - 1) {
                $query .= "?";
            }else {
                $query .= "?,";
            }
        }
        $query .= ")";
        $conn = Connect::getConn()->prepare($query);
        $conn->execute($values);
    }

    public function update(string $table, string $terms, int $id)
    {
        $query = "UPDATE {$table} SET {$terms} WHERE ID = {$id}";
        $conn = Connect::getConn()->prepare($query);
        $conn->execute();
    }

    public function delete(string $table, int $id)
    {
        $query = "DELETE FROM {$table} WHERE ID = {$id}";
        $conn = Connect::getConn()->prepare($query);
        $conn->execute();
    }
}