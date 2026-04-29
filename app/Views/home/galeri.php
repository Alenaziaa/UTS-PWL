<?php $this->extend('layouts/layout') ?>
<?php $this->section('content') ?>
<!--
  home/galeri.php — Soal 01
  Halaman Galeri — Public (Guest & Admin)
-->

<!-- Page Hero -->
<div class="page-hero">
  <h1><i class="fas fa-images me-2"></i>Galeri TechClub</h1>
  <p>Momen berharga dari setiap kegiatan dan pencapaian TechClub yang tak terlupakan.</p>
  <i class="fas fa-camera page-hero-icon"></i>
</div>

<!-- Filter Buttons -->
<div class="mb-4 d-flex flex-wrap gap-2" style="gap:8px">
  <?php
    $categories = ['Semua','Workshop','Hackathon','Seminar','Networking','Kompetisi'];
  ?>
  <?php foreach ($categories as $i => $cat): ?>
  <button class="btn btn-sm filter-btn <?= $i===0?'active':'' ?>"
    style="border-radius:20px;border:1px solid <?= $i===0?'#6c63ff':'#ddd' ?>;background:<?= $i===0?'linear-gradient(135deg,#6c63ff,#a855f7)':'#fff' ?>;color:<?= $i===0?'#fff':'#555' ?>;padding:6px 18px;font-size:0.82rem;font-weight:500;transition:all 0.2s"
    onclick="filterGaleri(this, '<?= strtolower($cat) ?>')">
    <?= $cat ?>
  </button>
  <?php endforeach; ?>
</div>

<!-- Gallery Grid -->
<div class="row" id="galeriFoto">
  <?php
    $photos = [
      ['title'=>'Hackathon Nasional 2023','cat'=>'hackathon','icon'=>'fas fa-rocket','color'=>'#6c63ff','bg'=>'#6c63ff','desc'=>'Tim TechClub meraih juara 1','date'=>'15 Nov 2023'],
      ['title'=>'Workshop Web Dev','cat'=>'workshop','icon'=>'fas fa-laptop-code','color'=>'#3ecf8e','bg'=>'#3ecf8e','desc'=>'Pelatihan full-stack development','date'=>'20 Okt 2023'],
      ['title'=>'AI Seminar 2023','cat'=>'seminar','icon'=>'fas fa-brain','color'=>'#a855f7','bg'=>'#a855f7','desc'=>'Mengenal Machine Learning','date'=>'5 Sep 2023'],
      ['title'=>'TechTalk Networking','cat'=>'networking','icon'=>'fas fa-network-wired','color'=>'#f59e0b','bg'=>'#f59e0b','desc'=>'Sesi networking dengan profesional','date'=>'12 Agt 2023'],
      ['title'=>'CTF Competition','cat'=>'kompetisi','icon'=>'fas fa-flag','color'=>'#e94560','bg'=>'#e94560','desc'=>'Capture The Flag challenge','date'=>'1 Jul 2023'],
      ['title'=>'IoT Workshop','cat'=>'workshop','icon'=>'fas fa-microchip','color'=>'#06b6d4','bg'=>'#06b6d4','desc'=>'Belajar Internet of Things','date'=>'25 Jun 2023'],
      ['title'=>'Seminar UI/UX','cat'=>'seminar','icon'=>'fas fa-paint-brush','color'=>'#10b981','bg'=>'#10b981','desc'=>'Desain antarmuka pengguna','date'=>'10 Jun 2023'],
      ['title'=>'Hackathon Internal','cat'=>'hackathon','icon'=>'fas fa-code-branch','color'=>'#6c63ff','bg'=>'#8b5cf6','desc'=>'Kompetisi antar divisi TechClub','date'=>'20 Mei 2023'],
      ['title'=>'Mobile Dev Training','cat'=>'workshop','icon'=>'fas fa-mobile-alt','color'=>'#f59e0b','bg'=>'#f97316','desc'=>'Flutter & React Native basics','date'=>'15 Apr 2023'],
    ];
  ?>
  <?php foreach ($photos as $p): ?>
  <div class="col-lg-4 col-md-6 mb-4 galeri-item" data-cat="<?= $p['cat'] ?>">
    <div class="card galeri-card" style="cursor:pointer;overflow:hidden;border-radius:16px">
      <!-- Foto placeholder dengan ikon -->
      <div style="height:180px;background:linear-gradient(135deg,<?= $p['bg'] ?>,<?= $p['bg'] ?>bb);display:flex;align-items:center;justify-content:center;position:relative;overflow:hidden">
        <div style="position:absolute;inset:0;background:rgba(0,0,0,0.15)"></div>
        <i class="<?= $p['icon'] ?>" style="font-size:4rem;color:rgba(255,255,255,0.9);position:relative;z-index:1;filter:drop-shadow(0 4px 12px rgba(0,0,0,0.3))"></i>
        <!-- Badge kategori -->
        <span style="position:absolute;top:12px;left:12px;background:rgba(255,255,255,0.2);backdrop-filter:blur(8px);border:1px solid rgba(255,255,255,0.3);color:#fff;border-radius:20px;padding:3px 12px;font-size:0.72rem;font-weight:600;z-index:2">
          <?= ucfirst($p['cat']) ?>
        </span>
      </div>
      <div class="card-body pb-3">
        <h6 style="font-weight:700;color:#333;margin-bottom:4px"><?= $p['title'] ?></h6>
        <p style="color:#777;font-size:0.82rem;margin-bottom:8px"><?= $p['desc'] ?></p>
        <small style="color:#aaa"><i class="fas fa-calendar me-1"></i><?= $p['date'] ?></small>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>

<script>
function filterGaleri(btn, cat) {
  // Update button styles
  document.querySelectorAll('.filter-btn').forEach(function(b) {
    b.style.background = '#fff';
    b.style.color = '#555';
    b.style.borderColor = '#ddd';
  });
  btn.style.background = 'linear-gradient(135deg,#6c63ff,#a855f7)';
  btn.style.color = '#fff';
  btn.style.borderColor = '#6c63ff';

  // Filter items
  document.querySelectorAll('.galeri-item').forEach(function(item) {
    if (cat === 'semua' || item.dataset.cat === cat) {
      item.style.display = '';
    } else {
      item.style.display = 'none';
    }
  });
}
</script>
<?php $this->endSection() ?>
