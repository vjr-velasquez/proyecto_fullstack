<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carriles</title>
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
            <a class="navbar-brand" href="index"><i class="bi bi-house-fill"></i>Inicio</a>
            <span class="navbar-text text-white ms-3">
                <h3>Carriles</h3>
            </span>
        </div>
    </nav>

    <div class="container mt-3">
        <h1>Carriles:</h1>

        <?php if (empty($carriles)): ?>
            <p>No hay carriles registrados</p>
        <?php else: ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Disponibilidad</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($carriles as $carril): ?>
                        <tr>
                            <td><?= $carril['carril_id'] ?></td>
                            <td><?= $carril['disponibilidad'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>