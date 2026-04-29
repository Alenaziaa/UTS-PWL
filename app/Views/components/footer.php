<?php
/**
 * components/footer.php — Soal 03
 * Komponen Footer untuk layout utama.
 * Di-include oleh layout.php
 */
?>
<!-- Main Footer -->
<footer class="main-footer footer-techclub">
  <div class="footer-content">
    <div class="footer-left">
      <strong>
        <i class="fas fa-microchip me-1"></i>
        <a href="<?= base_url('/') ?>">TechClub</a>
      </strong>
      &mdash; Komunitas Teknologi Kampus
      <span class="footer-divider">|</span>
      &copy; <?= date('Y') ?> All rights reserved.
    </div>
    <div class="footer-right d-none d-sm-block">
      Dibangun dengan <i class="fas fa-heart text-danger mx-1"></i> menggunakan
      <strong>CodeIgniter 4</strong>
    </div>
  </div>
</footer>
