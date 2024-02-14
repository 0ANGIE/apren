<?php
require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/controller/aprendizController.php");
require_once("../../controller/aprendizController.php");

$obj = new aprendizController();
$obj->guardar($_POST['tipoDocumento'] ,$_POST['numeroDocumento'] , $_POST['nombres'], $_POST['apellidos'], $_POST['fechaNacimiento'], $_POST['genero'], $_POST['telefono'],$_POST['direccion']);





















// echo $_POST['tipoDocumento'] . "<br>";
// echo $_POST['numeroDocumento'] . "<br>";
// echo $_POST['nombres'] . "<br>";
// echo $_POST['apellidos'] . "<br>";
// echo $_POST['fechaNacimiento'] . "<br>";
// echo $_POST['genero'] . "<br>";
// echo $_POST['telefono'] . "<br>";
// echo $_POST['direccion'] . "<br>";
