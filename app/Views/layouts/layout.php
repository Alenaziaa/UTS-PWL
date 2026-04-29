<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TechClub — Komunitas Teknologi Kampus. Berinovasi, Berkolaborasi, Berkembang.">
  <title><?= esc($title ?? 'TechClub') ?></title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- AdminLTE 3 CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Custom TechClub Styles -->
  <style>
    :root {
      --tc-primary:    #6c63ff;
      --tc-secondary:  #3ecf8e;
      --tc-dark:       #1a1a2e;
      --tc-sidebar-bg: #16213e;
      --tc-accent:     #e94560;
      --tc-text-light: #a8b2d8;
    }

    * { font-family: 'Inter', sans-serif; }
    h1, h2, h3, h4, h5, h6, .brand-text { font-family: 'Poppins', sans-serif; }

    /* ========== SIDEBAR ========== */
    .sidebar-techclub { background: var(--tc-sidebar-bg) !important; }
    .sidebar-techclub .brand-link {
      background: linear-gradient(135deg, var(--tc-primary), #a855f7);
      border-bottom: none !important;
      padding: 14px 16px;
    }
    .brand-image-wrapper { display: inline-flex; align-items: center; }
    .brand-icon { font-size: 1.5rem; color: #fff; margin-right: 10px; }
    .brand-text { color: #fff !important; font-size: 1.1rem; letter-spacing: 0.5px; }
    .sidebar-techclub .nav-sidebar .nav-link {
      color: var(--tc-text-light);
      border-radius: 8px;
      margin: 2px 8px;
      transition: all 0.25s;
    }
    .sidebar-techclub .nav-sidebar .nav-link:hover {
      background: rgba(108,99,255,0.15);
      color: #fff;
      transform: translateX(4px);
    }
    .sidebar-techclub .nav-sidebar .nav-link.active {
      background: linear-gradient(135deg, var(--tc-primary), #a855f7) !important;
      color: #fff !important;
      box-shadow: 0 4px 15px rgba(108,99,255,0.4);
    }
    .sidebar-section-title {
      color: rgba(168,178,216,0.5) !important;
      font-size: 0.65rem;
      letter-spacing: 1.5px;
      padding: 10px 16px 4px !important;
    }
    .user-panel {
      border-bottom: 1px solid rgba(255,255,255,0.1) !important;
      padding: 12px 16px !important;
    }
    .user-avatar { font-size: 2rem; color: var(--tc-primary); }
    .user-name { color: #fff !important; font-weight: 600; font-size: 0.9rem; }
    .user-role { color: var(--tc-text-light); font-size: 0.75rem; text-transform: capitalize; }
    .nav-link-logout { color: #ff6b6b !important; }
    .nav-link-logout:hover { background: rgba(233,69,96,0.15) !important; color: #ff6b6b !important; }
    .nav-link-login { color: var(--tc-secondary) !important; }
    .nav-link-login:hover { background: rgba(62,207,142,0.15) !important; }

    /* ========== HEADER / NAVBAR ========== */
    .navbar-techclub {
      background: linear-gradient(135deg, var(--tc-primary) 0%, #a855f7 100%) !important;
      box-shadow: 0 2px 20px rgba(108,99,255,0.35);
    }
    .navbar-techclub .nav-link { color: rgba(255,255,255,0.9) !important; transition: color 0.2s; }
    .navbar-techclub .nav-link:hover { color: #fff !important; }
    .brand-link-nav { font-weight: 600; font-size: 1rem; letter-spacing: 0.5px; }
    .btn-logout-nav {
      background: rgba(233,69,96,0.2) !important;
      border-radius: 20px;
      padding: 4px 14px !important;
      border: 1px solid rgba(233,69,96,0.5);
    }
    .btn-logout-nav:hover { background: rgba(233,69,96,0.4) !important; }
    .btn-login-nav {
      background: rgba(62,207,142,0.2) !important;
      border-radius: 20px;
      padding: 4px 14px !important;
      border: 1px solid rgba(62,207,142,0.5);
    }

    /* ========== CONTENT ========== */
    .content-wrapper {
      background: #f0f2f8 !important;
      min-height: calc(100vh - 57px - 57px);
    }
    .content-header h1 {
      font-size: 1.4rem;
      font-weight: 700;
      color: var(--tc-dark);
    }
    .breadcrumb { background: transparent; }

    /* ========== CARDS ========== */
    .card {
      border: none !important;
      border-radius: 16px !important;
      box-shadow: 0 4px 24px rgba(0,0,0,0.07) !important;
      transition: transform 0.25s, box-shadow 0.25s;
    }
    .card:hover { transform: translateY(-3px); box-shadow: 0 8px 30px rgba(0,0,0,0.12) !important; }
    .card-header {
      border-radius: 16px 16px 0 0 !important;
      background: linear-gradient(135deg, var(--tc-primary), #a855f7) !important;
      color: #fff !important;
      border: none !important;
      padding: 14px 20px;
    }
    .card-header h3, .card-header .card-title { color: #fff !important; font-weight: 600; }

    /* Info boxes */
    .info-box {
      border-radius: 16px !important;
      box-shadow: 0 4px 20px rgba(0,0,0,0.08) !important;
      border: none !important;
      transition: transform 0.25s;
    }
    .info-box:hover { transform: translateY(-3px); }
    .info-box-icon { border-radius: 16px 0 0 16px !important; }

    /* ========== ALERTS (flash messages) ========== */
    .alert {
      border: none;
      border-radius: 12px;
      font-size: 0.9rem;
    }
    .alert-success { background: rgba(62,207,142,0.15); color: #0d6e4f; border-left: 4px solid var(--tc-secondary); }
    .alert-danger  { background: rgba(233,69,96,0.1);  color: #c0392b; border-left: 4px solid var(--tc-accent); }

    /* ========== FOOTER ========== */
    .footer-techclub {
      background: var(--tc-dark) !important;
      color: var(--tc-text-light) !important;
      border-top: none !important;
      padding: 12px 20px !important;
    }
    .footer-content {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 8px;
    }
    .footer-techclub a { color: var(--tc-primary) !important; text-decoration: none; }
    .footer-techclub a:hover { color: #a855f7 !important; }
    .footer-divider { margin: 0 8px; opacity: 0.4; }

    /* ========== PAGE HERO ========== */
    .page-hero {
      background: linear-gradient(135deg, var(--tc-primary) 0%, #a855f7 100%);
      border-radius: 20px;
      color: #fff;
      padding: 40px 36px;
      margin-bottom: 28px;
      position: relative;
      overflow: hidden;
    }
    .page-hero::before {
      content: '';
      position: absolute; top: -50%; right: -10%; width: 300px; height: 300px;
      background: rgba(255,255,255,0.08);
      border-radius: 50%;
    }
    .page-hero::after {
      content: '';
      position: absolute; bottom: -60%; left: -5%; width: 200px; height: 200px;
      background: rgba(255,255,255,0.05);
      border-radius: 50%;
    }
    .page-hero h1 { font-size: 2rem; font-weight: 700; margin-bottom: 8px; position: relative; z-index: 1; }
    .page-hero p  { opacity: 0.9; margin: 0; font-size: 1rem; position: relative; z-index: 1; }
    .page-hero-icon {
      font-size: 3.5rem;
      opacity: 0.25;
      position: absolute;
      right: 40px; top: 50%;
      transform: translateY(-50%);
    }

    /* ========== SIDEBAR SEARCH ========== */
    .form-control-sidebar {
      background: rgba(255,255,255,0.08) !important;
      border-color: rgba(255,255,255,0.1) !important;
      color: #fff !important;
      border-radius: 8px !important;
    }
    .form-control-sidebar::placeholder { color: rgba(255,255,255,0.4) !important; }
    .btn-sidebar { background: rgba(108,99,255,0.3) !important; border-color: transparent !important; color: #fff !important; }

    /* Scrollbar sidebar */
    .sidebar::-webkit-scrollbar { width: 4px; }
    .sidebar::-webkit-scrollbar-track { background: transparent; }
    .sidebar::-webkit-scrollbar-thumb { background: rgba(108,99,255,0.4); border-radius: 10px; }

    /* Responsive tweaks */
    @media (max-width: 576px) {
      .page-hero h1 { font-size: 1.5rem; }
      .page-hero-icon { display: none; }
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- ===== HEADER (Soal 03) ===== -->
  <?= view('components/header') ?>

  <!-- ===== SIDEBAR (Soal 03) ===== -->
  <?= view('components/sidebar', ['activePage' => $activePage ?? '']) ?>

  <!-- ===== MAIN CONTENT ===== -->
  <div class="content-wrapper">

    <!-- Flash Messages -->
    <?php if (session()->getFlashdata('success')): ?>
      <div class="alert alert-success alert-dismissible fade show mx-3 mt-3" role="alert">
        <i class="fas fa-check-circle me-2"></i>
        <?= session()->getFlashdata('success') ?>
        <button type="button" class="close" data-dismiss="alert">
          <span>&times;</span>
        </button>
      </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="alert alert-danger alert-dismissible fade show mx-3 mt-3" role="alert">
        <i class="fas fa-exclamation-circle me-2"></i>
        <?= session()->getFlashdata('error') ?>
        <button type="button" class="close" data-dismiss="alert">
          <span>&times;</span>
        </button>
      </div>
    <?php endif; ?>

    <!-- Content Area (diisi oleh tiap view) -->
    <div class="content" style="padding:24px 24px 0">
      <?= $this->renderSection('content') ?>
    </div>

  </div>
  <!-- /.content-wrapper -->

  <!-- ===== FOOTER (Soal 03) ===== -->
  <?= view('components/footer') ?>

</div>
<!-- ./wrapper -->

<!-- AdminLTE & Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/js/adminlte.min.js"></script>

<!-- Auto-close alerts -->
<script>
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){ $(this).remove(); });
  }, 4000);
</script>

</body>
</html>
