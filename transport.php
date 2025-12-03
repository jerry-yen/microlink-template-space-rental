<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>交通資訊 | 思辨空間</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --primary-color: #5567dd;
      --primary-hover: #3d4eb1;
      --text-dark: #2c2c2c;
      --text-muted: #666;
      --bg-light: #f7f9fc;
      --card-bg: #ffffff;
      --navbar-bg: #313a49;
      --navbar-text: #ffffff;
      --accent-color: #ffbc42;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: var(--bg-light);
      color: var(--text-dark);
    }

    .navbar {
      background-color: var(--navbar-bg);
    }

    .navbar-brand,
    .navbar-nav .nav-link {
      color: var(--navbar-text) !important;
      font-weight: 500;
    }

    .navbar-nav .nav-link:hover {
      color: var(--accent-color) !important;
    }

    .page-banner {
      height: 220px;
      object-fit: cover;
      filter: brightness(88%);
    }

    h2.section-title {
      color: var(--primary-color);
    }

    .info-box {
      background: #fff;
      border-radius: 10px;
      padding: 1rem;
      box-shadow: 0 6px 18px rgba(16, 24, 40, 0.06);
    }

    footer {
      background-color: var(--navbar-bg);
      color: var(--navbar-text);
    }

    iframe.map {
      border: 0;
      width: 100%;
      height: 420px;
      border-radius: 8px;
      box-shadow: 0 8px 30px rgba(16, 24, 40, 0.06);
    }
  </style>
</head>
<style>
  /* 固定社群按鈕（桌面側邊 / 手機底部） */
  .social-fixed {
    position: fixed;
    right: 18px;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    gap: 10px;
    z-index: 1050;
  }

  .social-fixed a {
    width: 48px;
    height: 48px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    color: #fff;
    text-decoration: none;
    box-shadow: 0 6px 18px rgba(16, 24, 40, 0.12);
    transition: transform 0.14s ease, box-shadow 0.14s ease;
    font-size: 20px;
  }

  .social-fixed a:focus,
  .social-fixed a:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 22px rgba(16, 24, 40, 0.16);
  }

  .social-fb {
    background: #1877F2;
  }

  .social-ig {
    background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
  }

  .social-line {
    background: #00C300;
  }

  @media (max-width: 767.98px) {
    .social-fixed {
      right: 0;
      left: 0;
      bottom: 0;
      top: auto;
      transform: none;
      flex-direction: row;
      justify-content: center;
      padding: 10px 6px;
      background: rgba(255, 255, 255, 0.92);
      box-shadow: 0 -6px 18px rgba(16, 24, 40, 0.06);
    }

    .social-fixed a {
      width: 44px;
      height: 44px;
      font-size: 18px;
    }
  }
</style>

<body class="d-flex flex-column min-vh-100">
  <!-- Navbar -->
  <?php include_once 'include/nav.php'; ?>

  <!-- Banner -->
  <section>
    <img
      src="https://images.pexels.com/photos/373965/pexels-photo-373965.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=1200&h=400"
      class="w-100 page-banner" alt="交通資訊橫幅">
  </section>

  <main class="flex-grow-1">
    <section class="py-5">
      <div class="container">
        <h1 class="mb-3" style="color: var(--primary-color);">交通資訊</h1>
        <p class="text-muted mb-4">以下說明包含大眾運輸、開車路線、地圖位置、停車與營業時間，協助您順利抵達。</p>

        <div class="row ">
          <?php foreach ($transports->data as $transport): ?>
            <div class="col-lg-6">
              <div class="info-box mb-4">
                <h4 class="mb-3"><?php echo $transport->title; ?></h4>
                <?php if ($transport->content_type == 'google-map'): ?>
                  <iframe class="map"
                    src="https://www.google.com/maps?q=<?php echo strip_tags($transport->content); ?>&z=16&output=embed"
                    allowfullscreen loading="lazy"></iframe>
                <?php else: ?>
                  <?php echo $transport->content; ?>
                <?php endif; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="mt-auto text-center py-3">
    <p class="mb-0">&copy; 2025 思辨空間 All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- 固定社群按鈕（FB / IG / 官方 LINE） -->
  <div class="social-fixed" aria-hidden="false">
    <a class="social-fb" href="#" aria-label="Facebook - 打開新分頁" target="_blank" rel="noopener noreferrer"><i
        class="fab fa-facebook-f"></i></a>
    <a class="social-ig" href="#" aria-label="Instagram - 打開新分頁" target="_blank" rel="noopener noreferrer"><i
        class="fab fa-instagram"></i></a>
    <a class="social-line" href="#" aria-label="官方 LINE - 打開新分頁" target="_blank" rel="noopener noreferrer"><i
        class="fab fa-line"></i></a>
  </div>
</body>

</html>