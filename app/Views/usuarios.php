<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <h2>
        Usuarios
    </h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar nuevo usuario 
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="<?php echo base_url('agregar_usuario'); ?>" method="post">

                <label for="txt_nit" class="form-label">NIT</label>
                <input type="text" name="txt_nit" id="txt_nit" class="form-control">

                <label for="txt_nombre" class="form-label">Nombre</label>
                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

                <label for="txt_apellido" class="form-label">Apellido</label>
                <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">

                <label for="txt_direccion" class="form-label">Direccion</label>
                <input type="text" name="txt_direccion" id="txt_direccion" class="form-control">
                <br>
                <button type="submit" class="btn btn-outline-success">Guardar Cambios</button>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Usuario Id</th>
                <th>NIT</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Direccion</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($datos as $usuario) {
        ?>
            <tr>
                <td><?=$usuario['usuario_id'];?></td>
                <td><?=$usuario['nit'];?></td>
                <td><?=$usuario['nombre'];?></td>
                <td><?=$usuario['apellido'];?></td>
                <td><?=$usuario['direccion'];?></td>
                <td>
                    <a href="<?php echo base_url('eliminar_usuario/').$usuario['usuario_id'];?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                    <a href="<?php echo base_url('actualizar/').$usuario['usuario_id'];?>" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                </td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</body>
</html>