<?php
/**
 * Created by PhpStorm.
 * User: ALVARO
 * Date: 01/11/2018
 * Time: 13:03
 */

class Connection
{
    private static $instance = null;



    public static function conectDB()
    {


        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO("mysql:host=localhost;dbname=teste", "root", "password");
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
        }

        return self::$instance;

    }
}