<?= $this->extend('layout/template_form'); ?>
<?= $this->section('content'); ?>

<div class="row justify-content-center">
  <div class="col-11 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
      <div class="card-body p-4 p-md-5">
        <h1 class="h2 text-center mb-4">Acceso Staff</h1>

        <form action="<?= site_url('staff/attempt') ?>" method="post" novalidate>
          <?= csrf_field() ?>

          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="txt_correo" name="txt_correo"
                   placeholder="correo@dominio.com" required />
            <label for="txt_correo">Correo electrónico</label>
          </div>

          <div class="form-floating mb-2">
            <input type="password" class="form-control" id="txt_pass" name="txt_pass"
                   placeholder="Password" required />
            <label for="txt_pass">Password</label>
          </div>

          <?php if ($errs = session('val_errors')): ?> 
            <div class="alert alert-danger" role="alert">
              <?php foreach($errs as $e) echo esc($e).'<br>'; ?>
            </div>
          <?php endif; ?>

          <button type="submit" class="btn w-100 py-2">Ingresar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>
