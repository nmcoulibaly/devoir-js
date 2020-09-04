<?php

/*
* Classe Singleton de connexion a la base de donnee
**/
class DB {
    // propriete contenant la connexion a la base de donnee
    private static $connection;
    
    private function __construct()
    {
        try {
            self::$connection = new PDO('mysql:charset=utf8mb4;host=localhost;port=3306;dbname=universite', 'root', '');
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$connection->setAttribute(PDO::ATTR_PERSISTENT, false);
        } catch (\Throwable $th) {
            echo 'Could not connect to database';
            exit;
        }
    }

    public static function getConnection()
    {
        if (!self::$connection) {
            // Si la connexion est nulle, creation d'une instance de la base de donnee
            new DB();
        }
        return self::$connection;
    }
}
