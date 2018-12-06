<?php
/**
 * Created by PhpStorm.
 * User: mark
 * Date: 22.11.18
 * Time: 20:31
 */

class Connection
{
    public static function make($config)
    {
        $host = $config['host'];
        $db = $config['name'];
        $user = $config['user'];
        $pass = $config['password'];

        $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

        try {
            $pdo = new PDO($dsn, $user, $pass);

        } catch (\PDOException $e) {
            echo 'Can`t connect to database because: ';
            echo $e->getMessage();
            die();
        }
        return $pdo;
    }
}

