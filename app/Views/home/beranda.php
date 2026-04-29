<?php $this->extend('layouts/layout') ?>
<?php $this->section('content') ?>
<!--
  home/beranda.php — Soal 01
  Halaman Beranda — Public (Guest & Admin)
-->

<!-- Page Hero -->
<div class="page-hero">
  <h1><i class="fas fa-home me-2"></i>Selamat Datang di TechClub</h1>
  <p>Komunitas Teknologi Kampus yang Berinovasi, Berkolaborasi, dan Berkembang bersama.</p>
  <i class="fas fa-microchip page-hero-icon"></i>
</div>

<!-- Stats Row -->
<div class="row mb-4">
  <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
    <div class="info-box">
      <span class="info-box-icon" style="background: linear-gradient(135deg,#6c63ff,#a855f7)">
        <i class="fas fa-users text-white"></i>
      </span>
      <div class="info-box-content">
        <span class="info-box-text">Total Anggota</span>
        <span class="info-box-number" style="font-weight:700;color:#6c63ff">250+</span>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
    <div class="info-box">
      <span class="info-box-icon" style="background: linear-gradient(135deg,#3ecf8e,#0ab575)">
        <i class="fas fa-calendar-check text-white"></i>
      </span>
      <div class="info-box-content">
        <span class="info-box-text">Kegiatan 2024</span>
        <span class="info-box-number" style="font-weight:700;color:#3ecf8e">42</span>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
    <div class="info-box">
      <span class="info-box-icon" style="background: linear-gradient(135deg,#f59e0b,#ef8c00)">
        <i class="fas fa-trophy text-white"></i>
      </span>
      <div class="info-box-content">
        <span class="info-box-text">Penghargaan</span>
        <span class="info-box-number" style="font-weight:700;color:#f59e0b">18</span>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
    <div class="info-box">
      <span class="info-box-icon" style="background: linear-gradient(135deg,#e94560,#c21b40)">
        <i class="fas fa-project-diagram text-white"></i>
      </span>
      <div class="info-box-content">
        <span class="info-box-text">Proyek Selesai</span>
        <span class="info-box-number" style="font-weight:700;color:#e94560">87</span>
      </div>
    </div>
  </div>
</div>

<!-- Main Content Row -->
<div class="row">
  <!-- Tentang singkat -->
  <div class="col-lg-8 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-star me-2"></i>Tentang TechClub</h3>
      </div>
      <div class="card-body">
        <p style="color:#555;line-height:1.8">
          <strong>TechClub</strong> adalah komunitas teknologi yang didirikan pada tahun 2018 di lingkungan kampus.
          Kami memiliki misi untuk menciptakan ekosistem inovasi digital melalui kolaborasi antar mahasiswa lintas prodi.
        </p>
        <p style="color:#555;line-height:1.8">
          Dengan lebih dari <strong>250 anggota aktif</strong>, TechClub telah menyelenggarakan berbagai hackathon,
          workshop coding, seminar teknologi, dan kompetisi programming yang diikuti oleh mahasiswa dari seluruh Indonesia.
        </p>
        <div class="row mt-3">
          <div class="col-sm-4 text-center mb-2">
            <div style="background:linear-gradient(135deg,rgba(108,99,255,0.1),rgba(168,85,247,0.1));border-radius:12px;padding:16px">
              <i class="fas fa-code fa-2x mb-2" style="color:#6c63ff"></i>
              <p class="mb-0" style="font-weight:600;font-size:0.85rem">Coding</p>
            </div>
          </div>
          <div class="col-sm-4 text-center mb-2">
            <div style="background:linear-gradient(135deg,rgba(62,207,142,0.1),rgba(10,181,117,0.1));border-radius:12px;padding:16px">
              <i class="fas fa-robot fa-2x mb-2" style="color:#3ecf8e"></i>
              <p class="mb-0" style="font-weight:600;font-size:0.85rem">AI & ML</p>
            </div>
          </div>
          <div class="col-sm-4 text-center mb-2">
            <div style="background:linear-gradient(135deg,rgba(245,158,11,0.1),rgba(239,140,0,0.1));border-radius:12px;padding:16px">
              <i class="fas fa-shield-alt fa-2x mb-2" style="color:#f59e0b"></i>
              <p class="mb-0" style="font-weight:600;font-size:0.85rem">Cybersecurity</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pengumuman / Agenda -->
  <div class="col-lg-4 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-bell me-2"></i>Agenda Terbaru</h3>
      </div>
      <div class="card-body p-0">
        <ul class="list-group list-group-flush">
          <?php
            $agenda = [
              ['icon'=>'fas fa-laptop-code','color'=>'#6c63ff','title'=>'Workshop Web Development','date'=>'30 Apr 2024'],
              ['icon'=>'fas fa-brain','color'=>'#3ecf8e','title'=>'Seminar AI & Machine Learning','date'=>'5 Mei 2024'],
              ['icon'=>'fas fa-shield-alt','color'=>'#f59e0b','title'=>'CTF Cybersecurity Challenge','date'=>'12 Mei 2024'],
              ['icon'=>'fas fa-rocket','color'=>'#e94560','title'=>'Hackathon Nasional 2024','date'=>'20 Mei 2024'],
            ];
            foreach ($agenda as $item):
          ?>
          <li class="list-group-item" style="border:none;border-bottom:1px solid #f0f0f0;padding:14px 20px">
            <div class="d-flex align-items-center">
              <div style="width:36px;height:36px;background:<?= $item['color'] ?>20;border-radius:10px;display:flex;align-items:center;justify-content:center;margin-right:12px;flex-shrink:0">
                <i class="<?= $item['icon'] ?>" style="color:<?= $item['color'] ?>;font-size:0.85rem"></i>
              </div>
              <div>
                <p class="mb-0" style="font-weight:600;font-size:0.85rem;color:#333"><?= $item['title'] ?></p>
                <small style="color:#999"><i class="fas fa-calendar-alt me-1"></i><?= $item['date'] ?></small>
              </div>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- CTA untuk Guest -->
<?php if (! session()->get('isLoggedIn')): ?>
<div class="card" style="background:linear-gradient(135deg,#1a1a2e,#16213e);border-radius:20px;border:none">
  <div class="card-body text-center py-4">
    <i class="fas fa-lock fa-2x mb-3" style="color:#6c63ff"></i>
    <h4 style="color:#fff;font-family:'Poppins',sans-serif">Ingin akses lebih?</h4>
    <p style="color:rgba(168,178,216,0.8)">Login sebagai Admin untuk melihat Kegiatan, Kontak, dan Dashboard pengelolaan.</p>
    <a href="<?= base_url('/login') ?>" class="btn" style="background:linear-gradient(135deg,#6c63ff,#a855f7);color:#fff;border-radius:12px;padding:10px 28px;font-weight:600;border:none">
      <i class="fas fa-sign-in-alt me-2"></i>Login Sekarang
    </a>
  </div>
</div>
<?php endif; ?>

<?php $this->endSection() ?>
