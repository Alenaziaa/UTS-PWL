<?php
/**
 * components/sidebar.php — Soal 03
 * Komponen Sidebar navigasi untuk layout utama.
 * Di-include oleh layout.php
 * Menerapkan pembagian menu berdasarkan role — Soal 04
 */
$activePage = $activePage ?? '';
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-techclub">

  <!-- Brand Logo -->
  <a href="<?= base_url('/') ?>" class="brand-link">
    <div class="brand-image-wrapper">
      <i class="fas fa-microchip brand-icon"></i>
    </div>
    <span class="brand-text font-weight-light">
      <strong>Tech</strong>Club
    </span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">

    <!-- Sidebar user panel -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <div class="user-avatar">
          <i class="fas fa-user-circle"></i>
        </div>
      </div>
      <div class="info">
        <?php if (session()->get('isLoggedIn')): ?>
          <a href="#" class="d-block user-name"><?= esc(session()->get('name')) ?></a>
          <span class="user-role"><i class="fas fa-shield-alt me-1"></i><?= esc(session()->get('role')) ?></span>
        <?php else: ?>
          <a href="<?= base_url('/login') ?>" class="d-block user-name">Guest</a>
          <span class="user-role text-muted"><i class="fas fa-user me-1"></i>Belum Login</span>
        <?php endif; ?>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline px-3 mb-2">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Cari menu..." aria-label="Search" />
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <!-- ============================================================ -->
        <!-- Menu Public — tampil untuk Guest & Admin — Soal 04           -->
        <!-- ============================================================ -->
        <li class="nav-header sidebar-section-title">MENU UTAMA</li>

        <li class="nav-item">
          <a href="<?= base_url('/beranda') ?>" class="nav-link <?= ($activePage === 'beranda') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-home"></i>
            <p>Beranda</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('/tentang') ?>" class="nav-link <?= ($activePage === 'tentang') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-info-circle"></i>
            <p>Tentang Kami</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('/galeri') ?>" class="nav-link <?= ($activePage === 'galeri') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-images"></i>
            <p>Galeri</p>
          </a>
        </li>

        <?php if (session()->get('isLoggedIn')): ?>
        <!-- ============================================================ -->
        <!-- Menu Admin Only — hanya muncul jika sudah login — Soal 04    -->
        <!-- ============================================================ -->
        <li class="nav-header sidebar-section-title">MENU ADMIN</li>

        <li class="nav-item">
          <a href="<?= base_url('/dashboard') ?>" class="nav-link <?= ($activePage === 'dashboard') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('/kegiatan') ?>" class="nav-link <?= ($activePage === 'kegiatan') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>Kegiatan</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="<?= base_url('/kontak') ?>" class="nav-link <?= ($activePage === 'kontak') ? 'active' : '' ?>">
            <i class="nav-icon fas fa-envelope"></i>
            <p>Kontak</p>
          </a>
        </li>

        <li class="nav-item mt-2">
          <a href="<?= base_url('/logout') ?>" class="nav-link nav-link-logout">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout</p>
          </a>
        </li>

        <?php else: ?>
        <!-- Login item untuk Guest -->
        <li class="nav-header sidebar-section-title">AKUN</li>
        <li class="nav-item">
          <a href="<?= base_url('/login') ?>" class="nav-link nav-link-login">
            <i class="nav-icon fas fa-sign-in-alt"></i>
            <p>Login Admin</p>
          </a>
        </li>
        <?php endif; ?>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
