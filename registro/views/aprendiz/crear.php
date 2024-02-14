<?php

require_once("../../views/head/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/views/head/header.php"); ?>
<link rel="stylesheet" href="../../style.css">

<div class="contenedor" style="display: flex; justify-content: center; align-items: center; height: 90vh;">
    <form class="" action="store.php" method="POST" autocomplete="off">
        <h3 class="text-center text-secondary">Registro Aprendices</h3>

        <div class="text-centar p-2">
            <label for="autoSizingSelect">Tipo de documento</label>
            <select class="form-select" id="autoSizingSelect" name="tipoDocumento">
                <option selected></option>
                <option value="CC">CC</option>
                <option value="TI">TI</option>
            </select>
        </div>

        <div class="text-centar p-2">
            <label for="autoSizingInput">Numero de Documento</label>
            <input type="number" class="form-control" name="numeroDocumento">
        </div>

        <div class="text-centar p-2">
            <label for="autoSizingInput">Nombres</label>
            <input type="text" class="form-control" name="nombres">
        </div>

        <div class="text-centar p-2">
            <label for="autoSizingInput">Apellidos</label>
            <input type="text" class="form-control" name="apellidos">
        </div>

        <div class="text-centar p-2">
            <label>Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fechaNacimiento">
        </div>

        <div class="text-centar p-2">
            <label for="autoSizingSelect">Genero</label>
            <select class="form-select" name="genero">
                <option selected></option>
                <option value="Femenino">Femenino</option>
                <option value="Masculino">Masculino</option>
                <option value="Otro">Otro </option>
            </select>
        </div>

        <div class="text-centar p-2">
            <label>Telefono</label>
            <input type="number" class="form-control" name="telefono">
        </div>

        <div class="text-centar p-2">
            <label>Direccion</label>
            <input type="text" class="form-control" name="direccion">
        </div>

        <div class="text-centar p-2">
            <button type="submit" class="btn btn-primary" name="enviar" value="bien">Enviar</button>
            <a href="index.php" class="btn btn-danger">Cancelar</a>
        </div>

    </form>
</div>

<?php require_once("../../views/head/footer.php"); ?>
<? require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/views/head/footer.php");?>







<!-- Resto del formulario -->