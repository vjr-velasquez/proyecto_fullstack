<?= $this->extend('layout/template_menu'); ?>
<?= $this->section('content'); ?>

<div class="container py-5">
  <div class="mx-auto portal-card rounded-4 p-4 p-md-5" style="max-width: 640px;">
    <h2 class="text-center mb-1 fw-bold">Portal Usuario</h2>
    <p class="text-center text-uppercase small mb-4 letter-1">Elige una categoría</p>

    <!-- Opción A: GRID responsivo -->
    <div class="row row-cols-2 row-cols-sm-3 g-4 portal-grid justify-content-center">
      <div class="col">
        <a class="tile text-decoration-none" href="<?= site_url('portal/estadia?uid='.(int)session('usuario_id')) ?>" aria-label="Estadia">
          <div class="tile-icon"><i class="bi bi-calendar2-week"></i></div>
          <div class="tile-label">Estadia</div>
        </a>
      </div>
      <div class="col">
        <a class="tile text-decoration-none" href="<?= site_url('portal/vehiculo?uid='.(int)session('usuario_id')) ?>" aria-label="vehiculo">
          <div class="tile-icon"><i class="bi bi-car-front"></i></div>
          <div class="tile-label">Vehículo</div>
        </a>
      </div>
    </div>


    <!-- Acción secundaria -->
    <div class="d-grid mt-4">
      <a class="btn btn-danger btn-portal py-3 rounded-3" 
         href="<?= site_url('logout') ?>" id="btnLogout">
      <i class="bi bi-box-arrow-right me-2"></i> Cerrar sesión
    </a>
    <script>
      document.getElementById('btnLogout')?.addEventListener('click', function(){
        // Reemplaza la URL actual en el historial
        history.replaceState(null, '', '<?= site_url('login') ?>');
      });

      // Si el usuario vuelve por BFCache, forzamos recarga (el filtro lo redirigirá a login)
      window.addEventListener('pageshow', function(e){
        if (e.persisted) location.reload();
      });
    </script>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>