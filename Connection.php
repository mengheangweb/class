<?php

class Connection {
    public static function make()
    {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=class", "root", "Test@123");
            return $pdo;
        } catch (\Throwable $th) {
            die("Something went wrong.");
        }
    }
}
