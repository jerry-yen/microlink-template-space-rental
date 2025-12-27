<!-- 關於我們頁面：延續首頁樣式與結構 -->
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>關於我們 | 思辨空間</title>
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

    footer {
      background-color: var(--navbar-bg);
      color: var(--navbar-text);
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
      src="https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=1200&h=400"
      alt="關於我們橫幅" class="w-100" style="height: 267px; object-fit: cover; filter: brightness(90%);">
  </section>

  <!-- Main Content -->
  <section class="py-5 bg-white">
    <div class="container">
      <h1 class="text-center mb-4" style="color: var(--primary-color);">關於我們</h1>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <?php echo nl2br($about->content); ?>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-4 text-center">
          <i class="fas fa-briefcase fa-2x text-primary mb-2"></i>
          <h5 class="fw-bold">專業經營</h5>
          <p class="text-muted">我們擁有多年空間營運經驗，致力於提供高品質場地服務。</p>
        </div>
        <div class="col-md-4 text-center">
          <i class="fas fa-clock fa-2x text-primary mb-2"></i>
          <h5 class="fw-bold">即時預約</h5>
          <p class="text-muted">透過平台即可快速瀏覽與預約空間，節省寶貴時間。</p>
        </div>
        <div class="col-md-4 text-center">
          <i class="fas fa-handshake fa-2x text-primary mb-2"></i>
          <h5 class="fw-bold">用戶信任</h5>
          <p class="text-muted">數千名用戶的選擇與肯定，是我們持續進步的動力。</p>
        </div>
      </div>
    </div>
  </section>

  <hr class="my-5">
  <!-- Contact Info Section -->
  <section class="pb-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center">
          <h2 class="mb-3" style="color: var(--primary-color);">聯絡我們</h2>
          <p class="mb-2"><i class="fas fa-envelope me-2"></i><?php echo htmlspecialchars($setting->email); ?></p>
          <p><i class="fas fa-phone me-2"></i><?php echo htmlspecialchars($setting->phone); ?></p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include dirname(__FILE__) . '/include/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <?php include dirname(__FILE__) . '/include/third-party-link.php'; ?>
</body>

</html>