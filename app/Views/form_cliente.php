<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

      <div
        class="container d-flex justify-content-center"
      >
        <div class="mx-auto p-1" style="width: 450px;">
          <div
            class="cardform p-1"
            style="border-radius: 20px;">
            <div class="text-center pt-4 pb-5">
              <h1>Iniciar Sesión</h1>
            </div>
            <form action="<?php echo base_url('validacion') ?>" method="post">
              <div class="form-floating mb-3">
                <input
                  type="number"
                  class="form-control"
                  id="txt_usuario"
                  aria-describedby="DPIHelp"
                  placeholder="Ingrese su número de identificación"
                  name="txt_usuario"
                />
                <label for="floatingInputValue"
                  >Número de identificación</label
                >
                <div id="DPIHelp" class="form-text link-light">
                  Ingrese número de identificación DPI, Licencia o Pasaporte.
                </div>
              </div>
              <div class="form-floating">
                <input
                  type="password"
                  class="form-control"
                  id="txt_contraseña"
                  placeholder="Password"
                  aria-describedby="passwordHelpBlock"
                  name="txt_contraseña"
                />
                <label for="floatingInputValue">Password</label>
                <div id="passwordHelpBlock" class="form-text link-light mb-3">
                  Su contraseña debe tener 8 caracteres, números o caracteres especiales.
                </div>
              </div>
              <div class="">
                
              </div>
              <button type="submit" class="btn btn-primary">Confirmar</button>
            </form>
          </div>
        </div>
      </div>

<?php echo $this->endSection(); ?>