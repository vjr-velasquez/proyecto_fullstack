<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion de empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    <h2>Modificar Estudiante</h2>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <form action="<?= base_url('editar_empleado') ?>" method="post">

                    <label for="txt_id" class="form-label">Carne Carne_alumno</label>
                    <input type="number" name="txt_id" id="txt_id" class="form-control" value="<?= $datos['empleado_id']; ?>" readonly>

                    <label for="txt_nombre" class="form-label">Nombre</label>
                    <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" value="<?= $datos['nombre']; ?>">

                    <label for="txt_apellido" class="form-label">Apellido</label>
                    <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" value="<?= $datos['apellido']; ?>">


                    <label for="txt_telefono" class="form-label">Teléfono</label>
                    <input type="number" name="txt_telefono" id="txt_telefono" class="form-control" value="<?= $datos['telefono']; ?>">


                    <label for="txt_correo" class="form-label">email</label>
                    <input type="text" name="txt_correo" id="txt_correo" class="form-control" value="<?= $datos['correo_electronico']; ?>">

                    <label for="txt_direccion" class="form-label">Direccion</label>
                    <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" value="<?= $datos['direccion']; ?>">


                    <label for="txt_tipo_usuario" class="form-label">Tipo de usuario</label>
                    <input type="text" name="txt_tipo_usuario" id="txt_tipo_usuario" class="form-control" value="<?= $datos['nombre_tipo']; ?>">


                    <button type="submit" class="btn btn-dark mt-3">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>