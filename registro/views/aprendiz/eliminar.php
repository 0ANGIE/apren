<?php

// require_once("../../controller/aprendizController.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/controller/aprendizController.php");
$obj = new aprendizController();
$obj->eliminar($_GET['id']);


// ?>
