<?php

class db
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "sena_db";

    public function conexion()
    {
        try {
            $PDO = new PDO("mysql:host=" . $this->servername . ";dbname=" . $this->database, $this->username, $this->password);
            // Establecer el modo de error de PDO a excepción
            $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $PDO;
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
}



