<?php

namespace Source\Classes;

use PDO;
use PDOException;

class Connect
{
    private const HOST = "localhost"; // EDITE AQUI (HOST)
    private const USER = "root"; // EDITE AQUI (USUARIO DO BANCO DE DADOS)
    private const PASSWORD = ""; // EDITE AQUI (SENHA DO USUÁRIO DO BANCO DE DADOS)
    private const DATABASE = "db_cliente"; // EDITE AQUI (NOME DA DATABASE)
    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static $conn;

    public static function getConn() {
        if(empty(self::$conn)) {
            try {
                self::$conn = new PDO(
                    "mysql:host=".self::HOST.";dbname=".self::DATABASE,
                    self::USER,
                    self::PASSWORD,
                    self::OPTIONS
                );
            }catch(PDOException $e) {
                die("<p>Erro ao conectar!</p>");
            }
        }

        return self::$conn;
    }

    final private function __construct() {}
    final private function __clone(){}
}