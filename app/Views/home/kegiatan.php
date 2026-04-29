<?php $this->extend('layouts/layout') ?>
<?php $this->section('content') ?>
<!--
  home/kegiatan.php — Soal 01
  Halaman Kegiatan — Admin Only (dilindungi AuthFilter — Soal 02)
-->
<div class="page-hero" style="background:linear-gradient(135deg,#3ecf8e,#0ab575)">
  <h1><i class="fas fa-calendar-alt me-2"></i>Program Kegiatan</h1>
  <p>Jadwal dan laporan seluruh kegiatan TechClub — hanya tersedia untuk Admin.</p>
  <i class="fas fa-calendar-check page-hero-icon"></i>
</div>

<div class="row">
  <?php
    $kegiatan = [
      ['title'=>'Workshop Full-Stack Web Development','date'=>'30 April 2024','time'=>'09:00-17:00','loc'=>'Aula Gedung A Lt.3','status'=>'Mendatang','stat_color'=>'#3ecf8e','icon'=>'fas fa-laptop-code','color'=>'#6c63ff','peserta'=>45,'max'=>50,'desc'=>'Pelatihan intensif pembuatan web dari frontend hingga backend menggunakan React dan Laravel.'],
      ['title'=>'Seminar AI & Machine Learning','date'=>'5 Mei 2024','time'=>'13:00-16:00','loc'=>'Auditorium Utama','status'=>'Mendatang','stat_color'=>'#3ecf8e','icon'=>'fas fa-brain','color'=>'#a855f7','peserta'=>120,'max'=>200,'desc'=>'Seminar nasional menghadirkan praktisi AI dari Google Indonesia dan Gojek.'],
      ['title'=>'Hackathon TechClub 2024','date'=>'20-21 Mei 2024','time'=>'08:00 - selesai','loc'=>'Lab Komputer Kampus','status'=>'Mendatang','stat_color'=>'#3ecf8e','icon'=>'fas fa-rocket','color'=>'#e94560','peserta'=>30,'max'=>60,'desc'=>'Kompetisi pengembangan solusi digital 24 jam dengan tema Smart Campus.'],
      ['title'=>'CTF Cybersecurity Challenge','date'=>'12 April 2024','time'=>'10:00-20:00','loc'=>'Online (Discord)','status'=>'Selesai','stat_color'=>'#aaa','icon'=>'fas fa-shield-alt','color'=>'#f59e0b','peserta'=>38,'max'=>40,'desc'=>'Kompetisi keamanan siber antar anggota TechClub. Juara: Tim CipherX.'],
      ['title'=>'Workshop IoT dengan Arduino','date'=>'1 April 2024','time'=>'09:00-15:00','loc'=>'Lab Elektronika','status'=>'Selesai','stat_color'=>'#aaa','icon'=>'fas fa-microchip','color'=>'#06b6d4','peserta'=>25,'max'=>25,'desc'=>'Praktik langsung pemrograman Arduino untuk membuat sistem monitoring suhu.'],
      ['title'=>'TechTalk: Karir di Industri Teknologi','date'=>'15 Maret 2024','time'=>'15:00-17:00','loc'=>'Ruang Seminar B','status'=>'Selesai','stat_color'=>'#aaa','icon'=>'fas fa-briefcase','color'=>'#10b981','peserta'=>80,'max'=>100,'desc'=>'Sharing session bersama alumni TechClub yang kini bekerja di perusahaan tech ternama.'],
    ];
  ?>
  <?php foreach ($kegiatan as $k): ?>
  <div class="col-lg-6 mb-4">
    <div class="card h-100">
      <div class="card-body">
        <div class="d-flex align-items-start mb-3">
          <div style="width:50px;height:50px;background:<?= $k['color'] ?>20;border-radius:14px;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-right:14px">
            <i class="<?= $k['icon'] ?>" style="color:<?= $k['color'] ?>;font-size:1.3rem"></i>
          </div>
          <div class="flex-grow-1">
            <div class="d-flex justify-content-between align-items-start">
              <h5 style="font-weight:700;color:#333;margin-bottom:4px;font-size:0.95rem"><?= $k['title'] ?></h5>
              <span style="background:<?= $k['stat_color'] ?>20;color:<?= $k['stat_color'] ?>;border-radius:20px;padding:2px 10px;font-size:0.72rem;font-weight:700;flex-shrink:0;margin-left:8px"><?= $k['status'] ?></span>
            </div>
            <p style="color:#777;font-size:0.83rem;margin:0"><?= $k['desc'] ?></p>
          </div>
        </div>
        <div class="row mb-3" style="font-size:0.82rem;color:#666">
          <div class="col-6"><i class="fas fa-calendar me-1" style="color:<?= $k['color'] ?>"></i> <?= $k['date'] ?></div>
          <div class="col-6"><i class="fas fa-clock me-1" style="color:<?= $k['color'] ?>"></i> <?= $k['time'] ?></div>
          <div class="col-12 mt-1"><i class="fas fa-map-marker-alt me-1" style="color:<?= $k['color'] ?>"></i> <?= $k['loc'] ?></div>
        </div>
        <div class="d-flex justify-content-between mb-1" style="font-size:0.78rem">
          <span style="color:#777"><i class="fas fa-users me-1"></i>Peserta</span>
          <span style="font-weight:700;color:<?= $k['color'] ?>"><?= $k['peserta'] ?>/<?= $k['max'] ?></span>
        </div>
        <div class="progress" style="height:6px;border-radius:20px;background:#f0f0f0">
          <div class="progress-bar" style="background:<?= $k['color'] ?>;width:<?= round($k['peserta']/$k['max']*100) ?>%;border-radius:20px"></div>
        </div>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<?php $this->endSection() ?>
