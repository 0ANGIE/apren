<?php

// require_once("../../views/head/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/views/head/header.php");
// require_once("../../controller/aprendizController.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/controller/aprendizController.php");

$obj = new aprendizController();
$datos = $obj->ver($_GET['id']);
$id = $datos[0];

?>

<div class="pb-3">
    <a href="index.php" class="btn btn-primary">Regresar</a>
    <a href="editar.php?id=<?= $datos[0] ?>" class="btn btn-warning">Editar</a>

    <!-- Button trigger modal -->
    <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">¿Desea eliminar el registro?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    El registro sera eliminado permanentemente
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                    <a href="eliminar.php?id =<?= $datos[0] ?>" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        </div>
    </div>

</div>



<div class="col-8 p-4">
    <table class="table container-fluid">
        <thead class="bg-info">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tipo de Documento</th>
                <th scope="col">Numero de Documento</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">Genero</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <tr>
                <td><?= $datos[0] ?></td>
                <td><?= $datos[1] ?></td>
                <td><?= $datos[2] ?></td>
                <td><?= $datos[3] ?></td>
                <td><?= $datos[4] ?></td>
                <td><?= $datos[5] ?></td>
                <td><?= $datos[6] ?></td>
                <td><?= $datos[7] ?></td>
                <td><?= $datos[8] ?></td>
                </td>
            </tr>
        </tbody>
    </table>
</div>






<?php
require_once("../../views/head/footer.php"); ?>
<? require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/views/head/footer.php");?>