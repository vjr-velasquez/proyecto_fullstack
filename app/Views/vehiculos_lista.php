<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Vehículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            padding-top: 70px;
        }
    </style>
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url('portal')?>"><i class="bi bi-house-fill"></i> Inicio</a>
            <span class="navbar-text text-white ms-3">
                <h3>Mis Vehículos</h3>
            </span>
            <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal" data-bs-target="#modalAgregarVehiculo">
                <i class="bi bi-plus-lg"></i> Agregar vehiculo
            </button>
        </div>
    </nav>

    <div class="container mt-3">
        <h1>Mis Vehículos</h1>

        <?php if (empty($vehiculos)): ?>
            <p>No tienes vehículos registrados.</p>
        <?php else: ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Matrícula</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Color</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($vehiculos as $vehiculo): ?>
                        <tr>
                            <td><?= $vehiculo['matricula'] ?></td>
                            <td><?= $vehiculo['nombre_marca'] ?></td>
                            <td><?= $vehiculo['modelo'] ?></td>
                            <td><?= $vehiculo['color'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>

        <div class="modal fade" id="modalAgregarVehiculo" tabindex="-1" aria-labelledby="modalAgregarEstadiaLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalAgregarEstadiaLabel">Agregar nueva vehiculo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('agregar_vehiculo');?>" method="post">
                            <label for="txt_matricula" class="form-label">Matricula del Vehiculo</label>
                            <input type="text" id="txt_matricula" name="txt_matricula" class="form-control" required maxlength="7">
                            <label for="txt_marca" class="form-label">Marca</label>
                            <select name="txt_marca" id="txt_marca" class="form-select">
                                <?php 
                                    foreach ($marcas as $marca) {
                                ?>
                                <option value="<?php echo $marca['marca_id'];?>"><?php echo $marca['nombre_marca'];?></option>
                                <?php
                                    }
                                ?>
                            </select>
                            <label for="txt_modelo" class="form-label">Modelo</label>
                            <input type="text" id=txt_modelo"" name="txt_modelo" class="form-control">
                            <label for="txt_color" class="form-label">Color</label>
                            <input type="text" id="txt_color" name="txt_color" class="form-control">
                            <br>
                            <button type="submit" class="btn btn-outline-warning">AGREGAR VEHICULO</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <a href="<?= base_url('estadia') ?>" class="btn btn-primary">Ir a Estadias</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>