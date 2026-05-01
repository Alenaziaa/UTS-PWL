<?php $this->extend('layouts/layout') ?>
<?php $this->section('content') ?>
<!--
  home/kontak.php — Soal 01
  Halaman Kontak — Admin Only (dilindungi AuthFilter — Soal 02)
-->
<div class="page-hero" style="background:linear-gradient(135deg,#f59e0b,#ef8c00)">
  <h1><i class="fas fa-envelope me-2"></i>Kontak & Pesan Masuk</h1>
  <?php if (session()->get('role') === 'admin'): ?>
  <p>Kelola informasi kontak dan pesan yang masuk dari email.</p>
<?php endif; ?>
  
  <i class="fas fa-headset page-hero-icon"></i>
</div>

<div class="row">
  <!-- Info Kontak -->
  <div class="col-lg-4 mb-4">
    <div class="card mb-4">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-address-book me-2"></i>Info Kontak</h3>
      </div>
      <div class="card-body">
        <?php
          $contacts = [
            ['icon'=>'fas fa-map-marker-alt','color'=>'#6c63ff','label'=>'Alamat','value'=>'Gedung Student Center Lt.2, Kampus Utama'],
            ['icon'=>'fas fa-envelope','color'=>'#3ecf8e','label'=>'Email','value'=>'techclub@kampus.ac.id'],
            ['icon'=>'fas fa-phone','color'=>'#f59e0b','label'=>'Telepon','value'=>'+62 812-3456-7890'],
            ['icon'=>'fab fa-instagram','color'=>'#e94560','label'=>'Instagram','value'=>'@techclub.kampus'],
            ['icon'=>'fab fa-youtube','color'=>'#a855f7','label'=>'YouTube','value'=>'TechClub Official'],
          ];
        ?>
        <?php foreach ($contacts as $c): ?>
        <div class="d-flex align-items-start mb-3">
          <div style="width:38px;height:38px;background:<?= $c['color'] ?>15;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-right:12px">
            <i class="<?= $c['icon'] ?>" style="color:<?= $c['color'] ?>"></i>
          </div>
          <div>
            <small style="color:#aaa;display:block"><?= $c['label'] ?></small>
            <span style="font-weight:600;color:#333;font-size:0.88rem"><?= $c['value'] ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Jam Operasional -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"><i class="fas fa-clock me-2"></i>Jam Operasional</h3>
      </div>
      <div class="card-body">
        <?php
          $jadwal = [
            ['hari'=>'Senin - Jumat','jam'=>'09:00 - 17:00 WIB','buka'=>true],
            ['hari'=>'Sabtu','jam'=>'10:00 - 14:00 WIB','buka'=>true],
            ['hari'=>'Minggu','jam'=>'Tutup','buka'=>false],
          ];
        ?>
        <?php foreach ($jadwal as $j): ?>
        <div class="d-flex justify-content-between align-items-center mb-2 pb-2" style="border-bottom:1px solid #f5f5f5">
          <span style="font-size:0.85rem;color:#555"><?= $j['hari'] ?></span>
          <span style="font-size:0.82rem;font-weight:600;color:<?= $j['buka']?'#3ecf8e':'#e94560' ?>"><?= $j['jam'] ?></span>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <!-- Pesan Masuk -->
  <?php if (session()->get('role') === 'admin'): ?>
  <div class="col-lg-8 mb-4">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title mb-0"><i class="fas fa-inbox me-2"></i>Pesan Masuk</h3>
        <span class="badge" style="background:rgba(255,255,255,0.2);border-radius:20px;padding:4px 12px">4 Belum Dibaca</span>
      </div>
      <div class="card-body p-0">
        <?php
          $messages = [
            ['nama'=>'Rina Kusuma','email'=>'rina@gmail.com','subj'=>'Pendaftaran Workshop Web Dev','pesan'=>'Halo TechClub! Saya ingin mendaftar workshop web development bulan depan. Apakah masih ada slot tersedia?','waktu'=>'5 menit lalu','status'=>'unread','avatar_color'=>'#6c63ff'],
            ['nama'=>'Dimas Prasetya','email'=>'dimas@student.ac.id','subj'=>'Kolaborasi Proyek Capstone','pesan'=>'Kami dari prodi Manajemen ingin berkolaborasi dengan TechClub untuk proyek digitalisasi UMKM.','waktu'=>'2 jam lalu','status'=>'unread','avatar_color'=>'#3ecf8e'],
            ['nama'=>'PT. Innovatech','email'=>'hr@innovatech.co.id','subj'=>'Rekrutmen Fresh Graduate 2024','pesan'=>'Kami membuka lowongan untuk anggota TechClub yang berminat bergabung sebagai Software Engineer.','waktu'=>'1 hari lalu','status'=>'unread','avatar_color'=>'#f59e0b'],
            ['nama'=>'Sarah Amelia','email'=>'sarah@email.com','subj'=>'Sponsorship Hackathon 2024','pesan'=>'Startup kami tertarik menjadi sponsor Hackathon TechClub 2024. Mohon info lebih lanjut.','waktu'=>'2 hari lalu','status'=>'unread','avatar_color'=>'#a855f7'],
            ['nama'=>'Budi Hartono','email'=>'budi.h@gmail.com','subj'=>'Pertanyaan tentang Keanggotaan','pesan'=>'Saya mahasiswa semester 3 ingin bergabung dengan TechClub. Apa saja persyaratannya?','waktu'=>'3 hari lalu','status'=>'read','avatar_color'=>'#06b6d4'],
          ];
        ?>
        <ul class="list-group list-group-flush">
          <?php foreach ($messages as $m): ?>
          <li class="list-group-item" style="padding:16px 20px;background:<?= $m['status']==='unread'?'rgba(108,99,255,0.04)':'#fff' ?>;border-bottom:1px solid #f5f5f5">
            <div class="d-flex align-items-start">
              <div style="width:42px;height:42px;background:<?= $m['avatar_color'] ?>;border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;margin-right:14px;color:#fff;font-weight:700;font-size:1rem">
                <?= strtoupper(substr($m['nama'],0,1)) ?>
              </div>
              <div class="flex-grow-1 min-width-0">
                <div class="d-flex justify-content-between align-items-center mb-1">
                  <strong style="font-size:0.88rem;color:#333">
                    <?= $m['nama'] ?>
                    <?php if($m['status']==='unread'): ?>
                    <span style="width:7px;height:7px;background:#6c63ff;border-radius:50%;display:inline-block;margin-left:6px;vertical-align:middle"></span>
                    <?php endif; ?>
                  </strong>
                  <small style="color:#aaa;flex-shrink:0;margin-left:8px"><?= $m['waktu'] ?></small>
                </div>
                <p style="font-size:0.82rem;color:#6c63ff;font-weight:600;margin-bottom:4px"><?= $m['subj'] ?></p>
                <p style="font-size:0.82rem;color:#777;margin:0;overflow:hidden;display:-webkit-box;-webkit-line-clamp:2;-webkit-box-orient:vertical"><?= $m['pesan'] ?></p>
                <small style="color:#aaa;font-size:0.75rem"><i class="fas fa-at me-1"></i><?= $m['email'] ?></small>
              </div>
            </div>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
  
  <?php else: ?>
  
  <div class="col-lg-8 mb-4">
  <div class="card">
    <div class="card-body text-center py-5">
      <i class="fas fa-lock fa-2x mb-3 text-muted"></i>
      <h5>Akses Terbatas</h5>
      <p class="text-muted">Pesan masuk hanya dapat dilihat oleh admin.</p>
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

</div>



<?php endif; ?>


</div>
<?php $this->endSection() ?>
