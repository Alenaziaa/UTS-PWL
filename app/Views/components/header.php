<?php
/**
 * components/header.php — Soal 03
 * Komponen Header / Navbar atas untuk layout utama.
 * Di-include oleh layout.php
 */
?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark navbar-techclub">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button" title="Toggle Sidebar">
        <i class="fas fa-bars"></i>
      </a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="<?= base_url('/') ?>" class="nav-link brand-link-nav">
        <i class="fas fa-microchip me-1"></i> TechClub
      </a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <?php if (session()->get('isLoggedIn')): ?>
      <!-- Admin badge -->
      <li class="nav-item">
        <span class="nav-link">
          <i class="fas fa-user-shield me-1"></i>
          <span class="d-none d-md-inline"><?= esc(session()->get('name')) ?></span>
          <span class="badge badge-success badge-sm ml-1">Admin</span>
        </span>
      </li>
      <!-- Logout -->
      <li class="nav-item">
        <a class="nav-link btn-logout-nav" href="<?= base_url('/logout') ?>" title="Logout">
          <i class="fas fa-sign-out-alt"></i>
          <span class="d-none d-sm-inline ml-1">Logout</span>
        </a>
      </li>
    <?php else: ?>
      <!-- Login button -->
      <li class="nav-item">
        <a class="nav-link btn-login-nav" href="<?= base_url('/login') ?>">
          <i class="fas fa-sign-in-alt me-1"></i>
          <span class="d-none d-sm-inline">Login</span>
        </a>
      </li>
    <?php endif; ?>
  </ul>
</nav>
<!-- /.navbar -->
