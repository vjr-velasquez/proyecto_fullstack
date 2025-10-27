<?= $this->extend('layout/template_menu'); ?>
<?php $this->setVar('bodyClass','portal-admin'); ?>
<?= $this->section('content'); ?>

<div class="container py-5">
  <div class="mx-auto portal-card rounded-4 p-4 p-md-5" style="max-width: 640px;">
    <h2 class="text-center mb-1 fw-bold">Portal Administrador</h2>
    <p class="text-center text-uppercase small mb-4 letter-1">Elige una categoría</p>

    <div class="row row-cols-2 row-cols-sm-3 g-4 portal-grid justify-content-center">
      <div class="col">
        <a class="tile text-decoration-none" href="<?= site_url('vehiculos') ?>">
          <div class="tile-icon"><i class="bi bi-car-front"></i></div>
          <div class="tile-label">Vehículo</div>
        </a>
      </div>
      <div class="col">
        <a class="tile text-decoration-none" href="<?= site_url('marcas') ?>">
          <div class="tile-icon"><i class="bi bi-infinity"></i></div>
          <div class="tile-label">Marca</div>
        </a>
      </div>
      <div class="col">
        <a class="tile text-decoration-none" href="<?= site_url('empleados') ?>">
          <div class="tile-icon"><i class="bi bi-person-badge"></i></div>
          <div class="tile-label">Empleado</div>
        </a>
      </div>
    </div>

    <div class="d-grid mt-4">
      <a class="btn btn-danger btn-portal py-3 rounded-3" href="<?= site_url('staff/logout') ?>">
        <i class="bi bi-box-arrow-right me-2"></i> Cerrar sesión
      </a>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>
