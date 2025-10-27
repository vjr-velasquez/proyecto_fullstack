<?php
// app/Views/partials/toast.php
$t = session('toast') ?: null;

// Si no hay toast en sesión, intenta leer la cookie 'appToast'
if (!$t && isset($_COOKIE['appToast'])) {
    $decoded = json_decode($_COOKIE['appToast'], true);
    if (is_array($decoded) && isset($decoded['msg'])) {
        $t = $decoded;
    }
}
?>

<?php if ($t): ?>
  <style>
    .toast.slide-in  { animation: toastIn .35s ease forwards; }
    .toast.slide-out { animation: toastOut .30s ease forwards; }
    @keyframes toastIn  { from { transform: translateX(30%); opacity:.0 } to { transform:none; opacity:1 } }
    @keyframes toastOut { from { transform:none; opacity:1 } to { transform: translateX(30%); opacity:0 } }
    @media (max-width: 575.98px){
      .toast-container { inset: auto 0 0 0 !important; display:flex; justify-content:center; }
      .toast.slide-in  { animation: toastUp .35s ease forwards; }
      .toast.slide-out { animation: toastDown .30s ease forwards; }
      @keyframes toastUp   { from { transform: translateY(20%); opacity:.0 } to { transform:none; opacity:1 } }
      @keyframes toastDown { from { transform:none; opacity:1 } to { transform: translateY(20%); opacity:0 } }
    }
  </style>

  <div class="toast-container position-fixed top-0 end-0 p-3" style="z-index:1080">
    <div id="appToast"
         class="toast align-items-center text-bg-<?= esc($t['type'] ?? 'primary') ?> border-0 slide-in"
         role="alert" aria-live="assertive" aria-atomic="true"
         data-bs-autohide="true" data-bs-delay="4500">
      <div class="d-flex">
        <div class="toast-body"><?= esc($t['msg'] ?? '') ?></div>
        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
    </div>
  </div>

  <script>
    (function () {
      var el = document.getElementById('appToast');
      if (!el || !(window.bootstrap && bootstrap.Toast)) return;
      new bootstrap.Toast(el).show();

      // Borrar la cookie del toast después de mostrarla
      document.cookie = 'appToast=; Max-Age=0; path=/; SameSite=Lax';
      el.addEventListener('hide.bs.toast', function(){
        el.classList.remove('slide-in'); el.classList.add('slide-out');
      });
    })();
  </script>
<?php endif; ?>
