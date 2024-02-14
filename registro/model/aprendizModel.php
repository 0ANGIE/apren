<?php
    class aprendizModel{
        private $PDO;
        public function __construct(){
            // require_once("../../config/db.php");
        require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/config/db.php"); 
            $con = new db();
            $this->PDO = $con->conexion();
        }

        public function insertar($tipoDocumento, $numeroDocumento, $nombres, $apellidos, $fechaNacimiento, $genero, $telefono, $direccion){
        $stament = $this->PDO->prepare("INSERT INTO aprendices (tipoDocumento, numeroDocumento, nombres, apellidos, fechaNacimiento, genero, telefono, direccion) 
        VALUES (:tipoDocumento, :numeroDocumento, :nombres, :apellidos, :fechaNacimiento, :genero, :telefono, :direccion)");
            $stament->bindParam(':tipoDocumento', $tipoDocumento);
            $stament->bindParam(':numeroDocumento', $numeroDocumento);
            $stament->bindParam(':nombres', $nombres);
            $stament->bindParam(':apellidos', $apellidos);
            $stament->bindParam(':fechaNacimiento', $fechaNacimiento);
            $stament->bindParam(':genero', $genero);
            $stament->bindParam(':telefono', $telefono);
            $stament->bindParam(':direccion', $direccion);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
        }

        public function ver($id){
        $stament = $this->PDO->prepare("SELECT * FROM aprendices Where id = :id limit 1" );
        $stament->bindParam("id", $id);
        return ($stament->execute()) ? $stament->fetch() : false;
        }

        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM aprendices");
            return ($stament->execute()) ? $stament->fetchAll(): false;
        }

        public function actualizar($id, $tipoDocumento, $numeroDocumento, $nombres, $apellidos, $fechaNacimiento, $genero, $telefono, $direccion)
        {
            $stament = $this->PDO->prepare("UPDATE aprendices SET tipoDocumento = :tipoDocumento, numeroDocumento = :numeroDocumento, nombres = :nombres, apellidos = :apellidos, fechaNacimiento = :fechaNacimiento, genero = :genero, telefono = :telefono, direccion = :direccion WHERE id = :id");

            $stament->bindParam(':tipoDocumento', $tipoDocumento);
            $stament->bindParam(':numeroDocumento', $numeroDocumento);
            $stament->bindParam(':nombres', $nombres);
            $stament->bindParam(':apellidos', $apellidos);
            $stament->bindParam(':fechaNacimiento', $fechaNacimiento);
            $stament->bindParam(':genero', $genero);
            $stament->bindParam(':telefono', $telefono);
            $stament->bindParam(':direccion', $direccion);
            $stament->bindParam(':id', $id);
            return($stament->execute()) ? $id : false ;
            ;
        }

        public function eliminar($id){
            $stament = $this->PDO->prepare("DELETE FROM aprendices WHERE id = :id");
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? true : false;
        }



    }
