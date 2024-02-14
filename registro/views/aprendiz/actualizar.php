<?php

require_once("../../controller/aprendizController.php");
// require_once("../../controller/aprendizController.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/controller/aprendizController.php"); 
$obj = new aprendizController();
$obj->actualizar($_POST['id'], $_POST['tipoDocumento'], $_POST['numeroDocumento'], $_POST['nombres'], $_POST['apellidos'], $_POST['fechaNacimiento'], $_POST['genero'], $_POST['telefono'], $_POST['direccion'] );
