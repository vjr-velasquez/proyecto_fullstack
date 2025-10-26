<?php echo $this->extend('layout/template_form.php'); ?>

<?php echo $this->section('content'); ?>

<div class="container d-flex justify-content-center">
  <div class="mx-auto p-1" style="width: 450px">
    <div class="cardform p-1" style="border-radius: 20px">
      <div class="text-center pt-4 pb-5">
        <h1>Iniciar Sesión</h1>
      </div>
      <form action="<?= site_url('auth/attempt') ?>" method="post" novalidate>
        <?= csrf_field() ?>
        <div class="form-floating mb-3">
          <input
          type="number"
          class="form-control"
          id="txt_usuario"
          name="txt_usuario"
          placeholder="Ingrese su número de identificación"
          required
          />
          <label for="floatingInputValue">Número de identificación</label>
          <div id="DPIHelp" class="form-text link-light">
            Ingrese número de identificación DPI, Licencia o Pasaporte.
          </div>
        </div>
        <div class="form-floating">
          <input
          type="password"
          class="form-control"
          id="txt_contrasena"
          name="txt_contrasena"
          placeholder="Password"
          required
          />
          <label for="floatingInputValue">Password</label>
          <div id="passwordHelpBlock" class="form-text link-light mb-3">
             Mínimo 8 caracteres.
          </div>
        </div>
        <?php if ($errs = session('val_errors')): ?> 
            <div class="alert alert-danger">
              <?php foreach($errs as $e) echo esc($e).'<br>'; ?>
            </div>
        <?php endif; ?>
        <button type="submit" class="btn btn-primary w-100">Confirmar</button>
      </form>
    </div>
  </div>
</div>

<?php if (! session('isLoggedIn')): ?>
<script>
  // Solo en login sin sesión:
  // 1) Insertamos un estado artificial
  history.pushState(null, '', location.href);
  // 2) Si el usuario pulsa Atrás, lo enviamos a la página principal
  window.addEventListener('popstate', function () {
    location.href = '<?= site_url('/') ?>';
  });
</script>
<?php endif; ?>

<?php echo $this->endSection(); ?>