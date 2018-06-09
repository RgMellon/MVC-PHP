<?php

    namespace APP\Database;

    use PDO;

    Class ConnectionFactory 
    {
        private static $host = 'localhost';
        private static $name = 'vendas';
        private static $user = 'root';
        private static $pass = '0000';

        public static function getCon() {
            try{
                $con = new PDO('mysql:host'.self::$host.';dbname='.self::$name.'', self::$user, self::$pass);
            }catch(PDOException $e){
                echo 'Falha ao conectar'.$e->getMessage();
            }
            return $con;
        }
    }