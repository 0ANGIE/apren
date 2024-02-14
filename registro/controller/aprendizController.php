<?php

class aprendizController{

    private $model;
    public function __construct(){
    //    require_once("../../model/aprendizModel.php");
        require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/model/aprendizModel.php"); 
       $this->model =new aprendizModel(); 
    }

    public function guardar($tipoDocumento, $numeroDocumento, $nombres, $apellidos, $fechaNacimiento, $genero, $telefono, $direccion){
        $id = $this->model->insertar($tipoDocumento, $numeroDocumento, $nombres, $apellidos, $fechaNacimiento, $genero, $telefono, $direccion);
        return ($id!=false) ? header("Location:ver.php?id=.$id") : header("Location:crear.php?id=.$id") ;
    }

    public function ver($id){
        return($this->model->ver($id) != false) ? $this->model->ver($id) : header("Location:index.php");
    }

    public function index(){
        return ($this->model->index()) ? $this->model->index() : false;
    }

    public function actualizar($id, $tipoDocumento, $numeroDocumento, $nombres, $apellidos, $fechaNacimiento, $genero, $telefono, $direccion){
        return($this->model->actualizar($id, $tipoDocumento, $numeroDocumento, $nombres, $apellidos, $fechaNacimiento, $genero, $telefono, $direccion) != false) ? header("Location:ver.php? id=".$id) : header("Location:index.php");
    }

    public function eliminar($id){
        return ($this->model->eliminar($id)) ? header("Location:index.php") : header("Location:ver.php?id=" .$id);
    }
} 