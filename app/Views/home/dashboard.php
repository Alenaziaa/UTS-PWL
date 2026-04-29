<?php $this->extend('layouts/layout') ?>
<?php $this->section('content') ?>
<!--
  home/dashboard.php — Soal 04
  Halaman Dashboard — Admin Only (dilindungi AuthFilter — Soal 02)
  Hanya muncul untuk user yang sudah login sebagai admin
-->

<!-- Page Hero -->
<div class="page-hero" style="background:linear-gradient(135deg,#1a1a2e,#16213e)">
  <h1><i class="fas fa-tachometer-alt me-2"></i>Dashboard Admin</h1>
  <p>
    Selamat datang, <strong><?= esc(session()->get('name')) ?></strong>!
    &nbsp;<span style="background:rgba(108,99,255,0.3);border-radius:20px;padding:2px 12px;font-size:0.82rem">
      <i class="fas fa-shield-alt me-1"></i><?= esc(session()->get('role')) ?>
    </span>
  </p>
  <i class="fas fa-chart-line page-hero-icon"></i>
</div>

<!-- Stats Row -->
<div class="row mb-4">
  <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
    <div class="info-box" style="border-left:4px solid #6c63ff">
      <span class="info-box-icon" style="background:linear-gradient(135deg,#6c63ff,#a855f7)">
        <i class="fas fa-users text-white"></i>
      </span>
      <div class="info-box-content">
        <span class="info-box-text">Total Anggota</span>
        <span class="info-box-number" style="font-weight:700">250</span>
        <div class="progress"><div class="progress-bar" style="background:#6c63ff;width:70%"></div></div>
        <span class="progress-description"><i class="fas fa-arrow-up text-success me-1"></i>+12 bulan ini</span>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
    <div class="info-box" style="border-left:4px solid #3ecf8e">
      <span class="info-box-icon" style="background:linear-gradient(135deg,#3ecf8e,#0ab575)">
        <i class="fas fa-calendar-check text-white"></i>
      </span>
      <div class="info-box-content">
        <span class="info-box-text">Kegiatan Aktif</span>
        <span class="info-box-number" style="font-weight:700">8</span>
        <div class="progress"><div class="progress-bar" style="background:#3ecf8e;width:55%"></div></div>
        <span class="progress-description">Bulan April 2024</span>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
    <div class="info-box" style="border-left:4px solid #f59e0b">
      <span class="info-box-icon" style="background:linear-gradient(135deg,#f59e0b,#ef8c00)">
        <i class="fas fa-trophy text-white"></i>
      </span>
      <div class="info-box-content">
        <span class="info-box-text">Total Penghargaan</span>
        <span class="info-box-number" style="font-weight:700">18</span>
        <div class="progress"><div class="progress-bar" style="background:#f59e0b;width:85%"></div></div>
        <span class="progress-description"><i class="fas fa-arrow-up text-success me-1"></i>+3 tahun ini</span>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
    <div class="info-box" style="border-left:4px solid #e94560">
      <span class="info-box-icon" style="background:linear-gradient(135deg,#e94560,#c21b40)">
        <i class="fas fa-project-diagram text-white"></i>
      </span>
      <div class="info-box-content">
        <span class="info-box-text">Proyek Selesai</span>
        <span class="info-box-number" style="font-weight:700">87</span>
        <div class="progress"><div class="progress-bar" style="background:#e94560;width:90%"></div></div>
        <span class="progress-description">Sejak 2018</span>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <!-- Aktivitas terbaru -->
  <div class="col-lg-8 mb-4">
    <div class="card h-100">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0"><i class="fas fa-history me-2"></i>Aktivitas Terbaru</h3>
        <span class="badge" style="background:rgba(255,255,255,0.2);border-radius:20px;padding:4px 12px;font-size:0.75rem">Live</span>
      </div>
      <div class="card-body p-0">
        <?php
          $activities = [
            ['icon'=>'fas fa-user-plus','color'=>'#3ecf8e','bg'=>'#3ecf8e20','text'=>'Anggota baru bergabung: Rafi Mahendra','time'=>'5 menit lalu'],
            ['icon'=>'fas fa-calendar-plus','color'=>'#6c63ff','bg'=>'#6c63ff20','text'=>'Kegiatan baru ditambahkan: Workshop Flutter','time'=>'1 jam lalu'],
            ['icon'=>'fas fa-image','color'=>'#f59e0b','bg'=>'#f59e0b20','text'=>'Foto baru diunggah ke Galeri','time'=>'3 jam lalu'],
            ['icon'=>'fas fa-envelope','color'=>'#a855f7','bg'=>'#a855f720','text'=>'Pesan masuk dari: dewi@email.com','time'=>'5 jam lalu'],
            ['icon'=>'fas fa-trophy','color'=>'#e94560','bg'=>'#e9456020','text'=>'TechClub juara 2 Hackathon Kota','time'=>'1 hari lalu'],
            ['icon'=>'fas fa-check-circle','color'=>'#10b981','bg'=>'#10b98120','text'=>'Proyek "EduTrack App" berhasil diselesaikan','time'=>'2 hari lalu'],
          ];
        ?>
        <ul class="list-group list-group-flush">
          <?php foreach ($activities as $a): ?>
          <li class="list-group-item" style="border:none;border-bottom:1px solid #f5f5f5;padding:14px 20px">
            <div class="d-flex align-items-center">
              <div style="width:38px;height:38px;background:<?= $a['bg'] ?>;border-radius:12px;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-right:14px">
                <i class="<?= $a['icon'] ?>" style="color:<?= $a['color'] ?>;font-size:0.9rem"></i>
              </div>
              <div class="flex-grow-1">
                <p style="margin:0;font-size:0.88rem;color:#333;font-weight:500"><?= $a['text'] ?></p>
              </div>
              <small style="color:#aaa;flex-shrink:0;margin-left:10px"><?= $a['time'] ?></small>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>

  <!-- Info Akun & Quick Access -->
  <div class="col-lg-4 mb-4">
    <!-- Kartu akun admin -->
    <div class="card mb-4" style="background:linear-gradient(135deg,#1a1a2e,#16213e);border:none">
      <div class="card-body text-center py-4">
        <div style="width:72px;height:72px;background:linear-gradient(135deg,#6c63ff,#a855f7);border-radius:50%;display:inline-flex;align-items:center;justify-content:center;margin-bottom:14px;box-shadow:0 8px 24px rgba(108,99,255,0.4)">
          <i class="fas fa-user-shield fa-2x text-white"></i>
        </div>
        <h5 style="color:#fff;font-weight:700;margin-bottom:4px"><?= esc(session()->get('name')) ?></h5>
        <p style="color:rgba(168,178,216,0.7);font-size:0.85rem;margin-bottom:12px">
          <i class="fas fa-at me-1"></i><?= esc(session()->get('username')) ?>
        </p>
        <span style="background:linear-gradient(135deg,#6c63ff,#a855f7);border-radius:20px;color:#fff;padding:4px 16px;font-size:0.8rem;font-weight:600">
          <i class="fas fa-shield-alt me-1"></i><?= esc(session()->get('role')) ?>
        </span>
      </div>
    </div>

    <!-- Quick Access -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-bolt me-2"></i>Akses Cepat</h3>
      </div>
      <div class="card-body">
        <?php
          $links = [
            ['href'=>'/kegiatan','icon'=>'fas fa-calendar-alt','label'=>'Kelola Kegiatan','color'=>'#6c63ff'],
            ['href'=>'/galeri','icon'=>'fas fa-images','label'=>'Lihat Galeri','color'=>'#3ecf8e'],
            ['href'=>'/kontak','icon'=>'fas fa-envelope','label'=>'Pesan Masuk','color'=>'#f59e0b'],
            ['href'=>'/tentang','icon'=>'fas fa-info-circle','label'=>'Profil Organisasi','color'=>'#a855f7'],
          ];
        ?>
        <div class="row">
          <?php foreach ($links as $l): ?>
          <div class="col-6 mb-3">
            <a href="<?= base_url($l['href']) ?>" style="text-decoration:none">
              <div style="background:<?= $l['color'] ?>15;border-radius:12px;padding:14px;text-align:center;transition:all 0.2s;border:1px solid <?= $l['color'] ?>25"
                   onmouseover="this.style.background='<?= $l['color'] ?>25';this.style.transform='translateY(-2px)'"
                   onmouseout="this.style.background='<?= $l['color'] ?>15';this.style.transform='translateY(0)'">
                <i class="<?= $l['icon'] ?>" style="color:<?= $l['color'] ?>;font-size:1.4rem;display:block;margin-bottom:8px"></i>
                <small style="color:#555;font-weight:600;font-size:0.78rem"><?= $l['label'] ?></small>
              </div>
            </a>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->endSection() ?>
