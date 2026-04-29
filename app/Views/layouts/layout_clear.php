<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TechClub — Login Admin Panel">
  <title><?= esc($title ?? 'Login — TechClub') ?></title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <style>
    :root {
      --tc-primary:   #6c63ff;
      --tc-secondary: #3ecf8e;
      --tc-dark:      #1a1a2e;
      --tc-accent:    #e94560;
    }

    * { font-family: 'Inter', sans-serif; box-sizing: border-box; }
    h1, h2, h3, h4, h5, h6 { font-family: 'Poppins', sans-serif; }

    body {
      min-height: 100vh;
      background: var(--tc-dark);
      background-image:
        radial-gradient(ellipse at 20% 50%, rgba(108,99,255,0.15) 0%, transparent 60%),
        radial-gradient(ellipse at 80% 20%, rgba(62,207,142,0.1) 0%, transparent 50%);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      position: relative;
      overflow: hidden;
    }

    /* Animated background shapes */
    body::before {
      content: '';
      position: fixed;
      top: -200px; left: -200px;
      width: 600px; height: 600px;
      background: radial-gradient(circle, rgba(108,99,255,0.08) 0%, transparent 70%);
      border-radius: 50%;
      animation: floatShape 8s ease-in-out infinite alternate;
    }
    body::after {
      content: '';
      position: fixed;
      bottom: -200px; right: -200px;
      width: 500px; height: 500px;
      background: radial-gradient(circle, rgba(62,207,142,0.06) 0%, transparent 70%);
      border-radius: 50%;
      animation: floatShape 10s ease-in-out infinite alternate-reverse;
    }
    @keyframes floatShape {
      from { transform: translate(0,0) scale(1); }
      to   { transform: translate(40px, 30px) scale(1.1); }
    }

    /* Grid dots decoration */
    .bg-grid {
      position: fixed;
      inset: 0;
      background-image: radial-gradient(rgba(255,255,255,0.04) 1px, transparent 1px);
      background-size: 32px 32px;
      pointer-events: none;
      z-index: 0;
    }

    /* Login card */
    .login-wrapper {
      position: relative;
      z-index: 1;
      width: 100%;
      max-width: 420px;
    }

    .login-brand {
      text-align: center;
      margin-bottom: 32px;
    }
    .login-brand .brand-icon-wrap {
      width: 72px; height: 72px;
      background: linear-gradient(135deg, var(--tc-primary), #a855f7);
      border-radius: 20px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      color: #fff;
      margin-bottom: 16px;
      box-shadow: 0 8px 32px rgba(108,99,255,0.4);
      animation: logoFloat 3s ease-in-out infinite alternate;
    }
    @keyframes logoFloat {
      from { transform: translateY(0); }
      to   { transform: translateY(-6px); }
    }
    .login-brand h1 {
      color: #fff;
      font-size: 1.8rem;
      font-weight: 700;
      margin: 0;
      letter-spacing: 0.5px;
    }
    .login-brand p {
      color: rgba(168,178,216,0.8);
      font-size: 0.9rem;
      margin-top: 6px;
    }

    .login-card {
      background: rgba(255,255,255,0.05);
      backdrop-filter: blur(20px);
      -webkit-backdrop-filter: blur(20px);
      border: 1px solid rgba(255,255,255,0.08);
      border-radius: 24px;
      padding: 36px;
      box-shadow: 0 24px 64px rgba(0,0,0,0.4);
    }

    .login-card h2 {
      color: #fff;
      font-size: 1.3rem;
      font-weight: 600;
      margin-bottom: 4px;
    }
    .login-card .subtitle {
      color: rgba(168,178,216,0.7);
      font-size: 0.85rem;
      margin-bottom: 28px;
    }

    .form-group label {
      color: rgba(168,178,216,0.9);
      font-size: 0.85rem;
      font-weight: 500;
      margin-bottom: 8px;
    }
    .form-control-login {
      background: rgba(255,255,255,0.07) !important;
      border: 1px solid rgba(255,255,255,0.1) !important;
      border-radius: 12px !important;
      color: #fff !important;
      padding: 12px 16px !important;
      font-size: 0.95rem;
      transition: all 0.25s;
    }
    .form-control-login::placeholder { color: rgba(255,255,255,0.3) !important; }
    .form-control-login:focus {
      border-color: var(--tc-primary) !important;
      box-shadow: 0 0 0 3px rgba(108,99,255,0.2) !important;
      background: rgba(255,255,255,0.09) !important;
    }
    .input-group-text-login {
      background: rgba(255,255,255,0.07) !important;
      border: 1px solid rgba(255,255,255,0.1) !important;
      border-right: none !important;
      border-radius: 12px 0 0 12px !important;
      color: rgba(168,178,216,0.7) !important;
    }
    .input-group-text-login + .form-control-login { border-left: none !important; border-radius: 0 12px 12px 0 !important; }

    .btn-login {
      background: linear-gradient(135deg, var(--tc-primary), #a855f7) !important;
      border: none !important;
      border-radius: 12px !important;
      padding: 13px 24px !important;
      color: #fff !important;
      font-weight: 600;
      font-size: 0.95rem;
      width: 100%;
      transition: all 0.3s;
      box-shadow: 0 4px 20px rgba(108,99,255,0.35);
      letter-spacing: 0.3px;
    }
    .btn-login:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 28px rgba(108,99,255,0.5);
    }
    .btn-login:active { transform: translateY(0); }

    /* Alerts */
    .alert-login-danger {
      background: rgba(233,69,96,0.15);
      border: 1px solid rgba(233,69,96,0.3);
      border-radius: 12px;
      color: #ff8fa3;
      padding: 12px 16px;
      font-size: 0.88rem;
      margin-bottom: 20px;
    }
    .alert-login-success {
      background: rgba(62,207,142,0.15);
      border: 1px solid rgba(62,207,142,0.3);
      border-radius: 12px;
      color: #3ecf8e;
      padding: 12px 16px;
      font-size: 0.88rem;
      margin-bottom: 20px;
    }

    /* Hint box */
    .login-hint {
      background: rgba(108,99,255,0.1);
      border: 1px solid rgba(108,99,255,0.2);
      border-radius: 12px;
      padding: 14px 16px;
      margin-top: 20px;
      font-size: 0.82rem;
      color: rgba(168,178,216,0.8);
    }
    .login-hint strong { color: var(--tc-primary); }

    /* Back to home */
    .back-home {
      text-align: center;
      margin-top: 24px;
    }
    .back-home a {
      color: rgba(168,178,216,0.6);
      font-size: 0.85rem;
      text-decoration: none;
      transition: color 0.2s;
    }
    .back-home a:hover { color: var(--tc-secondary); }
    .back-home a i { margin-right: 6px; }
  </style>
</head>
<body>
  <div class="bg-grid"></div>

  <!-- Konten halaman login dirender di sini (Soal 03) -->
  <?= $this->renderSection('content') ?>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
