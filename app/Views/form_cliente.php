<?php echo $this->extend('layout/template_form.php'); ?>
<?php echo $this->section('content'); ?>

<div class="row justify-content-center">
  <!-- Columnas responsivas: ancho amable por breakpoint -->
  <div class="col-11 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
      <div class="card-body p-4 p-md-5">
        <h1 class="h2 text-center mb-4">Iniciar Sesión</h1>

        <form action="<?= site_url('auth/attempt') ?>" method="post" novalidate>
          <?= csrf_field() ?>

          <!-- Sugerencia: usa type="text" + inputmode numérico para no perder ceros -->
          <div class="form-floating mb-3">
            <input
              type="text"
              inputmode="numeric"
              pattern="[0-9]*"
              class="form-control"
              id="txt_usuario"
              name="txt_usuario"
              placeholder="Ingrese su número de identificación"
              autocomplete="username"
              required
            />
            <label for="txt_usuario">Número de identificación</label>
            <div id="DPIHelp" class="form-text">
              Ingrese Licencia, DPI o Pasaporte (solo dígitos).
            </div>
          </div>

          <div class="form-floating mb-2">
            <input
              type="password"
              class="form-control"
              id="txt_contrasena"
              name="txt_contrasena"
              placeholder="Password"
              autocomplete="current-password"
              minlength="9"
              required
            />
            <label for="txt_contrasena">Password</label>
          </div>
          <div id="passwordHelpBlock" class="form-text mb-3">
            Mínimo 9 caracteres.
          </div>

          <?php if ($errs = session('val_errors')): ?> 
            <div class="alert alert-danger" role="alert">
              <?php foreach($errs as $e) echo esc($e).'<br>'; ?>
            </div>
          <?php endif; ?>

          <button type="submit" class="btn w-100 py-2">Confirmar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php if (! session('isLoggedIn')): ?>
<script>
  // Evita volver al portal; si vuelve, lo llevamos a la página principal
  history.pushState(null, '', location.href);
  window.addEventListener('popstate', function () {
    location.href = '<?= site_url('/') ?>'; // pagina_principal.php
  });

  // Mitiga BFCache en iOS/Safari/Firefox
  window.addEventListener('pageshow', function(e){
    // Si la página viene del caché del navegador, nos aseguramos de que esté fresca
    if (e.persisted) location.reload();
  });
</script>
<?php endif; ?>

<?php echo $this->endSection(); ?>
