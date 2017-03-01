<?php
namespace Agent\DB;

class DB
{
    const DB_HOST = 'localhost';
    const DB_NAME = 'agent';
    const DB_USER = 'root';
    const DB_PASSWORD = '';

    public static $con = '';

    public static function connect(){
        try{
            self::$con = new \PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME,self::DB_USER,self::DB_PASSWORD);
            self::$con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}