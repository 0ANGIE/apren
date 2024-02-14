<?php
// require_once("../../views/head/header.php");
// require_once("c:laragon/www/registro/views/head/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/views/head/header.php");

// var_dump($_SERVER['DOCUMENT_ROOT']);
// var_dump($_SERVER['HTTP_HOST']);

require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/controller/aprendizController.php");
// require_once("../../controller/aprendizController.php");

$obj = new aprendizController();
$rows = $obj->index()
?>

<a href="crear.php" class="btn btn-primary">Registrar aprendiz</a>
<div class="col-8 p-4">
    <table class="table container-fluid">
        <thead class="bg-info">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tipo de Documento</th>
                <th scope="col">Numero de Documento</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>

            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php if ($rows) : ?>
                <?php foreach ($rows as $row) : ?>
                    <tr>
                        <td><?= $row[0] ?></td>
                        <td><?= $row[1] ?></td>
                        <td><?= $row[2] ?></td>
                        <td><?= $row[3] ?></td>
                        <td><?= $row[4] ?></td>
                        <th>
                            <a href="ver.php?id=<?= $row[0] ?>" class="btn btn-primary">Ver</a>
                            <a href="editar.php?id=<?= $row[0] ?>" class="btn btn-warning ">Editar</a>

                            <!-- Button trigger modal -->
                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</a>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">¿Desea eliminar el registro?</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            El registro sera eliminado permanentemente
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cerrar</button>
                                            <a href="eliminar.php?id=<?= $row[0] ?>" class="btn btn-danger">Eliminar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </th>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5" class="text-center">No hay registros</td>
                </tr>

            <?php endif; ?>

        </tbody>
    </table>
</div>

















<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/registro/views/head/footer.php"); ?>