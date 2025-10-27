<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión - ParkOne</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- CSS personalizado -->
     <link rel="stylesheet" href="<?php echo base_url("css/formstemplate.css");?>">
</head>
<body class="bg-dark">

    <!-- centrar el contenido -->
    <div class="contenido_bg d-flex flex-column min-vh-100">

        <!-- Logo: fijo en desktop, fluido en móvil -->
        <div class="logo">
            <a href="<?= site_url('/') ?>" aria-label="Ir a página principal">
                <img src="<?php echo base_url('img/logo.png');?>" alt="ParkOne">
            </a>
        </div>

        <!-- Wrapper responsivo: centra verticalmente el formulario -->
        <main class="flex-fill d-flex align-items-center justify-content-center py-4">
            <div class="menu container">
                <?php echo $this->renderSection('content');?>
            </div>
        </main>
    </div>

    <!-- Script JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"></script>
    
    <!-- Toast global -->
    <?= $this->include('partials/toast') ?>
</body>
</html>
