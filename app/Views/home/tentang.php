<?php $this->extend('layouts/layout') ?>
<?php $this->section('content') ?>
<!--
  home/tentang.php — Soal 01
  Halaman Tentang Kami — Public (Guest & Admin)
-->

<!-- Page Hero -->
<div class="page-hero">
  <h1><i class="fas fa-info-circle me-2"></i>Tentang TechClub</h1>
  <p>Mengenal lebih dalam komunitas teknologi kampus yang penuh inovasi dan semangat.</p>
  <i class="fas fa-users page-hero-icon"></i>
</div>

<div class="row">
  <!-- Visi Misi -->
  <div class="col-lg-6 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-eye me-2"></i>Visi & Misi</h3>
      </div>
      <div class="card-body">
        <div class="mb-4">
          <h5 style="color:#6c63ff;font-weight:700"><i class="fas fa-bullseye me-2"></i>Visi</h5>
          <p style="color:#555;line-height:1.8">
            Menjadi komunitas teknologi mahasiswa yang terdepan dalam inovasi digital,
            melahirkan talenta-talenta teknologi unggulan yang berdampak bagi masyarakat Indonesia.
          </p>
        </div>
        <hr style="border-color:#f0f0f0">
        <div>
          <h5 style="color:#3ecf8e;font-weight:700"><i class="fas fa-tasks me-2"></i>Misi</h5>
          <ul style="color:#555;line-height:2;padding-left:20px">
            <li>Membangun ekosistem belajar teknologi yang inklusif dan kolaboratif</li>
            <li>Menyelenggarakan program pelatihan dan workshop berkualitas tinggi</li>
            <li>Mendorong terciptanya inovasi digital dari lingkungan kampus</li>
            <li>Membangun jaringan profesional muda di bidang teknologi</li>
            <li>Berkontribusi pada kemajuan teknologi informasi Indonesia</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Sejarah -->
  <div class="col-lg-6 mb-4">
    <div class="card h-100">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-history me-2"></i>Sejarah Singkat</h3>
      </div>
      <div class="card-body">
        <?php
          $milestones = [
            ['year'=>'2018','color'=>'#6c63ff','event'=>'TechClub didirikan oleh 12 mahasiswa Teknik Informatika sebagai wadah belajar bersama.'],
            ['year'=>'2019','color'=>'#3ecf8e','event'=>'Meraih juara 1 Hackathon Nasional pertama dengan 120 anggota aktif.'],
            ['year'=>'2020','color'=>'#f59e0b','event'=>'Adaptasi ke era digital dengan menggelar seminar & workshop online selama pandemi.'],
            ['year'=>'2021','color'=>'#e94560','event'=>'Membuka divisi baru: AI/ML, Cybersecurity, dan Mobile Development.'],
            ['year'=>'2022','color'=>'#a855f7','event'=>'Kolaborasi dengan 5 perusahaan teknologi nasional untuk program magang.'],
            ['year'=>'2024','color'=>'#6c63ff','event'=>'Lebih dari 250 anggota aktif dan 87 proyek teknologi berhasil diselesaikan.'],
          ];
        ?>
        <div class="timeline-custom">
          <?php foreach ($milestones as $m): ?>
          <div class="timeline-item-custom d-flex mb-3">
            <div style="flex-shrink:0;width:52px;height:28px;background:<?= $m['color'] ?>20;border-radius:20px;display:flex;align-items:center;justify-content:center;margin-right:14px;margin-top:2px">
              <small style="font-weight:700;color:<?= $m['color'] ?>;font-size:0.72rem"><?= $m['year'] ?></small>
            </div>
            <p style="color:#555;font-size:0.88rem;line-height:1.6;margin:0"><?= $m['event'] ?></p>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Pengurus -->
<div class="card mb-4">
  <div class="card-header">
    <h3 class="card-title"><i class="fas fa-id-badge me-2"></i>Struktur Pengurus</h3>
  </div>
  <div class="card-body">
    <div class="row text-center">
      <?php
        $pengurus = [
          ['nama'=>'Ahmad Rizky Pratama','jabatan'=>'Ketua Umum','icon'=>'fas fa-crown','color'=>'#6c63ff'],
          ['nama'=>'Siti Nurhaliza','jabatan'=>'Wakil Ketua','icon'=>'fas fa-star','color'=>'#a855f7'],
          ['nama'=>'Budi Santoso','jabatan'=>'Sekretaris','icon'=>'fas fa-pen','color'=>'#3ecf8e'],
          ['nama'=>'Dewi Rahayu','jabatan'=>'Bendahara','icon'=>'fas fa-coins','color'=>'#f59e0b'],
          ['nama'=>'Eko Prasetyo','jabatan'=>'Divisi Teknis','icon'=>'fas fa-code','color'=>'#e94560'],
          ['nama'=>'Fitri Handayani','jabatan'=>'Divisi Humas','icon'=>'fas fa-comments','color'=>'#06b6d4'],
        ];
      ?>
      <?php foreach ($pengurus as $p): ?>
      <div class="col-lg-2 col-md-4 col-6 mb-3">
        <div style="background:<?= $p['color'] ?>12;border-radius:16px;padding:20px 10px;transition:all 0.25s" onmouseover="this.style.transform='translateY(-4px)'" onmouseout="this.style.transform='translateY(0)'">
          <div style="width:52px;height:52px;background:<?= $p['color'] ?>25;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;margin-bottom:10px">
            <i class="<?= $p['icon'] ?>" style="color:<?= $p['color'] ?>;font-size:1.2rem"></i>
          </div>
          <p style="font-weight:700;font-size:0.82rem;color:#333;margin-bottom:4px"><?= $p['nama'] ?></p>
          <small style="color:<?= $p['color'] ?>;font-weight:600"><?= $p['jabatan'] ?></small>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<?php $this->endSection() ?>
