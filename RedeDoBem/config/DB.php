<?php

if (!function_exists('connectDB')) {
    function connectDB() {
        try {
            $mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT);
            if ($mysql->connect_error) {
                throw new \DomainException("Erro de conexão com a base de dados - {$mysql->connect_error}");
            }
        
            define('DB', $mysql);
        } catch (Throwable $th) {
            echo $th->getMessage();
            die();
        }
    }
}

connectDB();
