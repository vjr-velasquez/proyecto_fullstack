<?php echo $this->extend('layout/template_menu'); ?>

<?php echo $this->section('content'); ?>

<div class="container py-5">
  <div class="mx-auto bg-dark bg-opacity-50 text-white rounded-4 shadow p-4" 
       style="max-width: 520px;">
    <h2 class="text-center mb-1">Portal Usuario</h2>
    <p class="text-center text-uppercase small mb-4">Elige una categoría</p>

    <div class="d-grid gap-3">
      <a class="btn btn-outline-light py-3 rounded-3"
         href="<?= site_url('portal/estadia?uid=' . (int)session('usuario_id')) ?>">
        <i class="bi bi-calendar2-week me-2"></i> Estadia
      </a>

      <a class="btn btn-outline-light py-3 rounded-3"
         href="<?= site_url('portal/usuario?uid=' . (int)session('usuario_id')) ?>">
        <i class="bi bi-person-circle me-2"></i> Usuario
      </a>

      <!-- Botón cerrar sesión -->
      <a class="btn btn-danger py-3 rounded-3" href="<?= site_url('logout') ?>">
        <i class="bi bi-box-arrow-right me-2"></i> Cerrar sesión
      </a>
    </div>
  </div>
</div>

<?php echo $this->endSection(); ?>