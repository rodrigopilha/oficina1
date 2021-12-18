<?php

namespace App\classes;

class conexao{

    private static $pdo;

    public static function getcon(){
        if(!isset(self::$pdo)):
            self::$pdo = new \PDO("mysql:host=localhost;dbname=sistema","root","");
           self::$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return self::$pdo;
        endif;
    }
}
?>