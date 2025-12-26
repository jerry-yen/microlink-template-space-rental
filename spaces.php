<!-- 空間清單頁面：延續首頁樣式與結構 -->
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>空間清單 | 思辨空間</title>
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

    .category-label {
      font-size: 1.25rem;
      font-weight: bold;
      color: var(--primary-color);
      margin-bottom: 1rem;
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
      src="https://images.pexels.com/photos/3184292/pexels-photo-3184292.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=1200&h=400"
      alt="空間清單橫幅" class="w-100" style="height: 267px; object-fit: cover; filter: brightness(90%);">
  </section>

  <!-- 空間列表 with Tabs -->
  <section class="py-5">
    <div class="container">
      <h1 class="text-center mb-5" style="color: var(--primary-color);">可預約空間清單</h1>

      <!-- Tabs -->
      <ul class="nav nav-tabs mb-4" id="spaceTab" role="tablist">
        <?php $index = 0; ?>
        <?php foreach ($branches->data as $key => $branch): ?>
          <li class="nav-item" role="presentation">
            <button class="nav-link <?php if ($index == 0): ?>active<?php endif; ?>" data-bs-toggle="tab"
              data-bs-target="#branch-<?php echo $key; ?>"
              type="button"><?php echo htmlspecialchars($branch->title); ?></button>
          </li>
          <?php $index++; endforeach; ?>
      </ul>

      <div class="tab-content">
        <?php $index = 0; ?>
        <?php foreach ($branches->data as $key => $branch): ?>
          <div class="tab-pane fade <?php if ($index == 0): ?>show active<?php endif; ?>" id="branch-<?php echo $key; ?>">
            <div class="row row-cols-1 row-cols-md-3 g-4">
              <?php foreach ($branch->spaces as $space): ?>
                <div class="col">
                  <div class="card h-100 shadow-sm position-relative">
                    <div class="ratio" style="--bs-aspect-ratio: 62.5%;">
                      <img class="card-img-top" alt="<?php echo $space->title; ?>"
                        style="object-fit: cover; width: 100%; height: 100%;"
                        src="<?php echo htmlspecialchars($space->images); ?>">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $space->title; ?></h5>
                      <p class="card-text text-muted"><?php echo nl2br($space->description); ?></p>
                    </div>
                    <div class="card-footer text-end bg-white border-top-0">
                      <a href="space.html" class="btn btn-primary btn-sm">查看詳情</a>
                    </div>
                    <a href="<?php echo $domain_url . '/space.html' . $space->url; ?>" class="stretched-link"
                      aria-label="查看 <?php echo $space->title; ?> 詳情"></a>
                  </div>
                </div>
              <?php endforeach; ?>

            </div>
          </div>
          <?php $index++; endforeach; ?>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="mt-auto text-center py-3">
    <p class="mb-0">&copy; 2025 思辨空間 All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <?php include dirname(__FILE__) . '/include/third-party-link.php'; ?>
</body>

</html>