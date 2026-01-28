<?php

class Database
{
    private static $instance;

    public static function getConnection()
    {
        if (!self::$instance) {
            $config = require '../config/database.php';

            self::$instance = new PDO(
                "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8",
                $config['user'],
                $config['password']
            );

            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$instance;
    }
}
