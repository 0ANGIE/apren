<?php

// require_once("../../views/head/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/views/head/header.php");
// require_once("../../controller/aprendizController.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/controller/aprendizController.php");
$obj = new aprendizController();
$user = $obj->ver($_GET['id']);
?>
<link rel="stylesheet" href="../../style.css">

<div class="contenedor" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
    <form class="" action="actualizar.php" method="POST" autocomplete="off">
        <h3 class="text-center text-secondary">Actualizar Aprendices</h3>

        <div class=" text-centar p-2 row">
            <label for="staticEmail" class="col-sm col-form-label">Id</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="staticEmail" name="id" value="<?= $user[0] ?>">
            </div>
        </div>

        <div class="text-centar p-2">
            <label for="autoSizingSelect">Tipo de documento</label>
            <select class="form-select" id="autoSizingSelect" name="tipoDocumento">
                <option selected value="<?= $user[1] ?>"> <?= $user[1] ?> </option>
                <option value="CC">CC</option>
                <option value="TI">TI</option>
            </select>
        </div>

        <div class="text-centar p-2">
            <label for="autoSizingInput">Numero de Documento</label>
            <input type="number" class="form-control" name="numeroDocumento" value="<?= $user[2] ?>">
        </div>

        <div class="text-centar p-2">
            <label for="autoSizingInput">Nombres</label>
            <input type="text" class="form-control" name="nombres" value="<?= $user[3] ?>">
        </div>

        <div class="text-centar p-2">
            <label for="autoSizingInput">Apellidos</label>
            <input type="text" class="form-control" name="apellidos" value="<?= $user[4] ?>">
        </div>

        <div class="text-centar p-2">
            <label>Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fechaNacimiento" value="<?= $user[5] ?>">
        </div>

        <div class="text-centar p-2">
            <label for="autoSizingSelect">Genero</label>
            <select class="form-select" name="genero">
                <option selected value="<?= $user[6] ?>"> <?= $user[6] ?> </option>
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
                <option value="Otro">Otro </option>
            </select>
        </div>

        <div class="text-centar p-2">
            <label>Telefono</label>
            <input type="number" class="form-control" name="telefono" value="<?= $user[7] ?>">
        </div>

        <div class="text-centar p-2">
            <label>Direccion</label>
            <input type="text" class="form-control" name="direccion" value="<?= $user[8] ?>">
        </div>

        <div class="text-centar p-2">
            <button type="submit" class="btn btn-primary" name="enviar" value="bien">Actualizar</button>
            <a href="ver.php?id=" <?= $user[0] ?> class="btn btn-danger">Cancelar</a>
        </div>

    </form>
</div>



<?php
require_once("../../views/head/footer.php"); ?>
<? require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/views/head/footer.php");?>