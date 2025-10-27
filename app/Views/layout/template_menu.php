<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Usuario - ParkOne</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet">
    <!-- CSS personalizado Fondo/overlay compartido -->
     <link rel="stylesheet" href="<?php echo base_url("css/formstemplate.css");?>">
    <!-- Estilos específicos del portal -->
    <link rel="stylesheet" href="<?= base_url('css/portaltemplate.css'); ?>">
</head>
<!-- usa portal-usuario o portal-admin según el caso -->
<body class="bg-dark portal-usuario">

  <div class="contenido_bg d-flex flex-column min-vh-100">
    <div class="logo">
      <a>
        <img src="<?= base_url('img/logo.png'); ?>" alt="ParkOne">
      </a>
    </div>

    <main class="flex-fill d-flex align-items-center justify-content-center py-4">
      <div class="menu container">
        <?= $this->renderSection('content'); ?>
      </div>
    </main>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
          crossorigin="anonymous"></script>

  <?= $this->include('partials/toast') ?>
</body>
</html>