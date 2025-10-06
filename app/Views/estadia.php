<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadías</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
    body {
        padding-top: 70px;
    }
    </style>
</head>

<body>
    <!-- Navbar fija -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index"><i class="bi bi-house-fill"></i> Inicio</a>
            <span class="navbar-text text-white ms-3">
                <h3>Estadías</h3>
            </span>
            <button type="button" class="btn btn-primary ms-auto" data-bs-toggle="modal"
                data-bs-target="#modalAgregarEstadia">
                <i class="bi bi-plus-lg"></i> Agregar Estadía
            </button>
        </div>
    </nav>

    <div class="container mt-3">
        <!-- Tabla de estadias -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID Estadía</th>
                    <th>Tarifa</th>
                    <th>Entrada</th>
                    <th>Salida</th>
                    <th>Costo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datos as $estadia): ?>
                <tr>
                    <td><?= $estadia['estadia_id']; ?></td>
                    <td><?= $estadia['tarifa_id']; ?></td>
                    <td><?= $estadia['fecha_hora_entrada']; ?></td>
                    <td><?= $estadia['fecha_hora_salida']; ?></td>
                    <td><?= $estadia['costo']; ?></td>

                    <td>
                        <button class="btn btn-danger btn-eliminar" data-id="<?= $estadia['estadia_id']; ?>">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                        <a href="<?= base_url('buscar_estadia'.$estadia['estadia_id']); ?>" class="btn btn-info">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal agregar estadia -->
    <div class="modal fade" id="modalAgregarEstadia" tabindex="-1" aria-labelledby="modalAgregarEstadiaLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalAgregarEstadiaLabel">Agregar nueva estadía</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <form id="formAgregarEstadia" action="<?= base_url('agregar_estadia'); ?>" method="post">
                        <label for="txt_tarifa_id" class="form-label">Tarifa</label>
                        <select class="form-select" name="txt_tarifa_id" id="txt_tarifa_id">
                            <option value="" disabled selected>Seleccione una tarifa</option>
                            <option value="1">10</option>
                            <option value="2">20</option>
                            <option value="3">30</option>
                            <?php if (isset($tarifas) && is_array($tarifas)): ?>
                            <?php foreach ($tarifas as $tarifa): ?>
                            <option value="<?= $tarifa['tarifa_id']; ?>"><?= $tarifa['descripcion']; ?></option>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </select>

                        <label for="txt_fecha_entrada" class="form-label mt-2">Hora de Entrada</label>
                        <input type="datetime-local" name="txt_fecha_entrada" id="txt_fecha_entrada"
                            class="form-control">

                        <label for="txt_fecha_salida" class="form-label mt-2">Hora de Salida</label>
                        <input type="datetime-local" name="txt_fecha_salida" id="txt_fecha_salida" class="form-control">

                        <label for="txt_costo" class="form-label mt-2">Costo</label>
                        <input type="number" step="0.01" name="txt_costo" id="txt_costo" class="form-control">

                        <button type="submit" class="btn btn-dark mt-3 w-100">Guardar</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>

    <!-- SweetAlert confirmación eliminar -->
    <script>
    const botonesEliminar = document.querySelectorAll('.btn-eliminar');
    botonesEliminar.forEach(btn => {
        btn.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '<?= base_url("eliminar_estadia/"); ?>' + id;
                }
            });
        });
    });

    // Validación antes de enviar el formulario
    const form = document.getElementById("formAgregarEstadia");
form.addEventListener("submit", function(e) {
    e.preventDefault();

    let tarifa = document.getElementById("txt_tarifa_id").value.trim();
    let entrada = document.getElementById("txt_fecha_entrada").value.trim();
    let salida = document.getElementById("txt_fecha_salida").value.trim();
    let costo = document.getElementById("txt_costo").value.trim();

    if (tarifa === "" || entrada === "" || salida === "" || costo === "") {
        Swal.fire({
            title: "Campos vacíos",
            text: "Por favor completa todos los campos.",
            icon: "warning",
            confirmButtonText: "Aceptar"
        });
    } else {
        form.submit();
    }
});
    </script>

    <!-- Mensajes con flashdata -->
    <?php if(session()->getFlashdata('mensaje')): ?>
    <script>
    Swal.fire({
        title: '¡Aviso!',
        text: "<?= session()->getFlashdata('mensaje'); ?>",
        icon: "<?= session()->getFlashdata('tipo'); ?>",
        confirmButtonText: 'Aceptar'
    });
    </script>
    <?php endif; ?>

</body>

</html>