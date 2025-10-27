<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ParkOne</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url("css/templatepgp.css");?>" />
    <!-- Bootstrap v5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- CDN Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <main>
      <section class="principal nobg">
        <div class="logo">
          <img
            src="img/ChatGPTImage-Fondo-Transparente.png"
            alt="ChatGPTImage-Fondo-Transparente"
          />
        </div>
        <div class="subcontenido">
          <h1>ParkOne</h1>
          <h3>El espacio que tu vehiculo merece</h3>
        </div>
        <div class="btncontenido">
          <div class="btns">
            <a href="<?= base_url('login') ?>"
              >Iniciar sesión<i class="fa-regular fa-circle-user"></i
            ></a>
          </div>
        </div>
      </section>
      <section class="vision bg vh">
        <div class="title-vision">
          <h2>Visión</h2>
        </div>
        <div class="image1-vision">
          <img src="img/image1-vision.jpg" alt="image1-vision" />
        </div>
        <div class="contenido-vision">
          <p>
            Ser el principal referente en soluciones de estacionamiento privado
            y residencial, reconocidos por ofrecer un servicio de alta calidad
            que garantiza la seguridad, comodidad y exclusividad que cada
            vehículo y su propietario merecen. Aspiramos a redefinir la
            experiencia de estacionar, transformándola de una simple necesidad a
            un servicio de valor que brinda tranquilidad y confianza.
          </p>
        </div>
        <div class="image2-vision">
          <img src="img/image2-vision.jpg" alt="image2-vision" />
        </div>
      </section>
      <section class="mision bg mh">
        <div class="title-mision">
          <h2>Misión</h2>
        </div>
        <div class="image1-mision">
          <img src="img/image1-mision.jpg" alt="image1-mision" />
        </div>
        <div class="contenido-mision">
          <p>
            Proveer un espacio seguro, limpio y accesible para cada vehículo,
            superando las expectativas de nuestros clientes a través de un
            servicio excepcional y una atención personalizada. Nos comprometemos
            a mantener una operación eficiente y tecnológicamente avanzada,
            asegurando la protección del activo más valioso de nuestros clientes
            y proporcionándoles la tranquilidad de saber que su vehículo está en
            el mejor lugar posible.
          </p>
        </div>
        <div class="image2-mision">
          <img src="img/image2-mision.jpg" alt="image2-mision" />
        </div>
      </section>
      <section class="price bg2 ph" id="info">
        <div class="title-price">
          <h2>Nuestras opciones de parqueo:</h2>
          <h3>Elige el espacio que tu vehículo merece</h3>
        </div>
        <div class="contenido-price">
          <div class="subcont1-price">
            <h3>1.</h3>
            <h4>Hora</h4>
            <p>
              Esta opción está diseñada para el conductor práctico que busca
              seguridad y un espacio asignado a un precio competitivo.
            </p>
          </div>
          <div class="subcont2-price">
            <h3>2.</h3>
            <h4>Dia</h4>
            <p>
              Además de la seguridad garantizada, los clientes disfrutan de
              beneficios que mejoran la comodidad y la accesibilidad.
            </p>
          </div>
          <div class="subcont3-price">
            <h3>3.</h3>
            <h4>Mes</h4>
            <p>
              Esta opción está diseñada para el conductor práctico que busca
              seguridad y un espacio asignado a un precio competitivo.
            </p>
          </div>
        </div>
        <div class="image1-price">
          <img src="img/image1-price.jpg" alt="image1-price" />
        </div>
      </section>
      <section class="contactos nobg2 ch">
        <div class="title-contacto">
          <h2>Ponte en contacto</h2>
        </div>
        <div class="blockcontac1">
          <div class="subcontacto1">
            <h4>Dirección</h4>
            <p>7a. Calle 5-45 Zona 1.</p>
          </div>
          <div class="subcontacto2">
            <h4>Número de teléfono</h4>
            <p>(502) 4568 7898</p>
          </div>
        </div>
        <div class="blockcontac2">
          <div class="subcontacto3">
            <h4>Correo Electrónico</h4>
            <p>parkonepk@empresarial.com</p>
          </div>
          <div class="subcontacto4">
            <h4>Redes Sociales</h4>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
          </div>
        </div>
      </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
    crossorigin="anonymous"></script>
    <!-- Toast global -->
    <?= $this->include('partials/toast') ?>
  </body>
</html>
