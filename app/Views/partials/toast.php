<?php if ($t = session('toast')): ?>
  <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index:1080">
    <div id="appToast"
         class="toast fade align-items-center text-bg-<?= esc($t['type'] ?? 'primary') ?> border-0 shadow-sm"
         role="alert" aria-live="assertive" aria-atomic="true"
         data-bs-autohide="true" data-bs-delay="5000">
      <div class="d-flex">
        <div class="toast-body"><?= esc($t['msg'] ?? '') ?></div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>

  <script>
    (function () {
      const el = document.getElementById('appToast');
      if (!el || !window.bootstrap || !bootstrap.Toast) return;

      const toast = new bootstrap.Toast(el);

      // Fade-in suave (deja que el navegador pinte primero)
      requestAnimationFrame(() => toast.show());

      // Marca visual para el fade-out (se aplica justo antes del hidden)
      el.addEventListener('hide.bs.toast', () => {
        el.classList.add('leaving'); // activa el CSS de salida
      });

      el.addEventListener('hidden.bs.toast', () => {
        el.classList.remove('leaving'); // limpieza por si hubiera otro toast
      });
    })();
  </script>

  <style>
    /* Efectos suaves de entrada/salida */
    .toast.fade {
      opacity: 0;
      transform: translateX(16px) translateY(-6px) scale(.98);
      transition: opacity .45s ease, transform .45s ease, box-shadow .3s ease;
      will-change: opacity, transform;
    }
    /* Estado visible (fade-in) */
    .toast.fade.show {
      opacity: 1;
      transform: translateX(0) translateY(0) scale(1);
    }
    /* Marcador de salida (fade-out + slide/scale) */
    .toast.leaving {
      opacity: 0 !important;
      transform: translateX(16px) translateY(-6px) scale(.98) !important;
      box-shadow: none;
    }
  </style>
<?php endif; ?>