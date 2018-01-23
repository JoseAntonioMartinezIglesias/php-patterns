<?php

class Pdo extends Db {
    
    private static $instance;
    private $db;
    private function connect() {
        try {
            $this->db = new \PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, array(
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING
            ));
        } catch (\PDOException $ex) {
            die('Error en la conexion' . $ex->getMessage());
        }
        
    }
    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instancia = new \Pdo();
        }
        return self::$instance;
    }
    
}
