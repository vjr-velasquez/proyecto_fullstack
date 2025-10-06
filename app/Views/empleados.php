<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista de los empleados del parqueo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <h2>
        Empleados
    </h2>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Agregar nuevo empleado 
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Empleado</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form action="<?php echo base_url('agregarEmpleado'); ?>" method="post">

                <label for="txt_id" class="form-label">Empleado Id</label>
                <input type="text" name="txt_id" id="txt_id" class="form-control">

                <label for="txt_nombre" class="form-label">Nombre</label>
                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

                <label for="txt_apellido" class="form-label">Apellido</label>
                <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">

                <label for="txt_telefono" class="form-label">Telefono</label>
                <input type="text" name="txt_telefono" id="txt_telefono" class="form-control">

                <label for="txt_correo" class="form-label">Correo Electronico</label>
                <input type="text" name="txt_correo" id="txt_correo" class="form-control">

                <label for="txt_direccion" class="form-label">Direccion</label>
                <input type="text" name="txt_direccion" id="txt_direccion" class="form-control">

                <label for="txt_tipo_usuario" class="form-label">Tipo de usuario</label>
                <select class="form-select" name="txt_tipo_usuario" id="txt_tipo_usuario">
                    <?php
                        foreach($tipoUsuario as $tipo){
                    ?>
                    <option value="<?=$tipo['tipo_usuario_id'];?>">
                        <?=$tipo['nombre_tipo'];?>
                    </option>
                    <?php
                        }
                    ?>
                </select>
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
                <th>Empleado Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Correo electronico</th>
                <th>Direccion</th>
                <th>Tipo de Usuarios</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($datos as $empleado) {
        ?>
            <tr>
                <td><?=$empleado['empleado_id'];?></td>
                <td><?=$empleado['nombre'];?></td>
                <td><?=$empleado['apellido'];?></td>
                <td><?=$empleado['telefono'];?></td>
                <td><?=$empleado['correo_electronico'];?></td>
                <td><?=$empleado['direccion'];?></td>
                <td><?=$empleado['tipo_usuario'];?></td>
                <td>
                    <a href="<?php echo base_url('eliminar/').$empleado['empleado_id'];?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                    <a href="<?php echo base_url('actualizar/').$empleado['empleado_id'];?>" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
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