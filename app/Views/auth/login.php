<?php $this->extend('layouts/layout_clear') ?>
<?php $this->section('content') ?>
<!--
  auth/login.php — Soal 04
  Halaman Login menggunakan data statis (username & password di Auth.php)
  Menggunakan layout_clear.php sebagai base layout — Soal 03
  Hanya ditampilkan untuk Guest (belum login) — Soal 04
-->
<div class="login-wrapper">

  <!-- Brand -->
  <div class="login-brand">
    <div class="brand-icon-wrap">
      <i class="fas fa-microchip"></i>
    </div>
    <h1>TechClub</h1>
    <p>Komunitas Teknologi Kampus</p>
  </div>

  <!-- Login Card -->
  <div class="login-card">
    <h2>Selamat Datang</h2>
    <p class="subtitle">Masuk ke panel Admin TechClub</p>

    <!-- Flash messages -->
    <?php if (session()->getFlashdata('error')): ?>
      <div class="alert-login-danger">
        <i class="fas fa-exclamation-circle me-2"></i>
        <?= session()->getFlashdata('error') ?>
      </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('success')): ?>
      <div class="alert-login-success">
        <i class="fas fa-check-circle me-2"></i>
        <?= session()->getFlashdata('success') ?>
      </div>
    <?php endif; ?>

    <!-- Form Login — POST ke /login -->
    <form action="<?= base_url('/login') ?>" method="POST" id="loginForm">
      <?= csrf_field() ?>

      <div class="form-group">
        <label for="username"><i class="fas fa-user me-1"></i> Username</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text input-group-text-login">
              <i class="fas fa-user fa-sm"></i>
            </span>
          </div>
          <input
            type="text"
            class="form-control form-control-login"
            id="username"
            name="username"
            placeholder="Masukkan username..."
            value="<?= old('username') ?>"
            required
            autocomplete="username"
          >
        </div>
      </div>

      <div class="form-group">
        <label for="password"><i class="fas fa-lock me-1"></i> Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text input-group-text-login">
              <i class="fas fa-lock fa-sm"></i>
            </span>
          </div>
          <input
            type="password"
            class="form-control form-control-login"
            id="password"
            name="password"
            placeholder="Masukkan password..."
            required
            autocomplete="current-password"
          >
        </div>
      </div>

      <button type="submit" class="btn btn-login mt-2" id="btnLogin">
        <i class="fas fa-sign-in-alt me-2"></i> Masuk ke Dashboard
      </button>
    </form>

    <!-- Hint kredensial -->
    <!-- <div class="login-hint">
      <i class="fas fa-info-circle me-1"></i>
      <strong>Kredensial Demo:</strong><br>
      Username: <strong>admin</strong> &nbsp;|&nbsp; Password: <strong>admin123</strong>
    </div>
  </div> -->

  <!-- Back to Home -->
  <div class="back-home">
    <a href="<?= base_url('/') ?>">
      <i class="fas fa-arrow-left"></i> Kembali ke Beranda
    </a>
  </div>

</div>

<script>
  // Simple loading state on submit
  document.getElementById('loginForm').addEventListener('submit', function() {
    var btn = document.getElementById('btnLogin');
    btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Memproses...';
    btn.disabled = true;
  });
</script>
<?php $this->endSection() ?>
