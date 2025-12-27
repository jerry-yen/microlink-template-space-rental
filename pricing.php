<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>價目表 | 思辨空間</title>
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

    .price-table th {
      background: #f1f4ff;
      color: var(--primary-color);
    }

    .card-equip {
      border-radius: 10px;
      box-shadow: 0 6px 20px rgba(16, 24, 40, 0.06);
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
  <?php include_once 'include/nav.php'; ?>

  <!-- Banner -->
  <section>
    <img
      src="https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=1200&h=400"
      alt="價目表橫幅" class="w-100" style="height: 267px; object-fit: cover; filter: brightness(90%);">
  </section>

  <main class="flex-grow-1">
    <section class="py-5">
      <div class="container">
        <div class="d-flex justify-content-between align-items-start mb-4">
          <div>
            <h1 class="mb-1" style="color: var(--primary-color);">價目表</h1>
            <p class="text-muted">以下內容依據現場公告與報價為準，請於預約時確認最終金額與可用設備。</p>
          </div>

        </div>

        <div class="row">
          <div class="col-lg-8">
            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title">時段借用（大空間）</h4>
                <p class="text-muted">可選時段：08:30-12:30 / 13:00-17:00 / 17:30-21:30（每時段含場佈與場復時間）</p>
                <div class="table-responsive">
                  <table class="table table-bordered price-table align-middle">
                    <thead>
                      <tr>
                        <th>場地</th>
                        <th>坪數</th>
                        <th>1 時段</th>
                        <th>2 時段</th>
                        <th>3 時段</th>
                        <th>延時（每小時）</th>
                        <th>可容納人數</th>
                        <th>桌椅</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (isset($pricing->large) && is_array($pricing->large)): ?>
                        <?php foreach ($pricing->large as $space): ?>
                          <tr>
                            <td><?php echo htmlspecialchars($space->title); ?></td>
                            <td><?php echo htmlspecialchars($space->ping); ?> 坪</td>
                            <td>NT$<?php echo number_format($space->price_1_session); ?></td>
                            <td>NT$<?php echo number_format($space->price_2_session); ?></td>
                            <td>NT$<?php echo number_format($space->price_3_session); ?></td>
                            <td>NT$<?php echo number_format($space->overtime_hourly_price); ?></td>
                            <td><?php echo htmlspecialchars($space->capacity); ?> 人</td>
                            <td><?php echo $space->has_furniture === 'Y' ? '有' : '無'; ?></td>
                          </tr>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>

                <h5 class="mt-4">以小時計費（小空間）</h5>
                <p class="text-muted">短時段借用 08:30-21:30，請自行預估場佈與場復時間。</p>
                <div class="table-responsive">
                  <table class="table table-bordered price-table align-middle">
                    <thead>
                      <tr>
                        <th>場地</th>
                        <th>坪數</th>
                        <th>每小時</th>
                        <th>3 小時（含）以上</th>
                        <th>6 小時（含）以上</th>
                        <th>可容納人數</th>
                        <th>桌椅</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if (isset($pricing->small) && is_array($pricing->small)): ?>
                        <?php foreach ($pricing->small as $space): ?>
                          <tr>
                            <td><?php echo htmlspecialchars($space->title); ?></td>
                            <td><?php echo htmlspecialchars($space->ping); ?> 坪</td>
                            <td>NT$<?php echo number_format($space->default_hourly_price_cents); ?></td>
                            <td>NT$<?php echo number_format($space->hourly_price_3hr_plus); ?> /hr</td>
                            <td>NT$<?php echo number_format($space->hourly_price_6hr_plus); ?> /hr</td>
                            <td><?php echo htmlspecialchars($space->capacity); ?> 人</td>
                            <td><?php echo $space->has_furniture === 'Y' ? '有' : '無'; ?></td>
                          </tr>
                        <?php endforeach; ?>
                      <?php endif; ?>
                    </tbody>
                  </table>
                </div>

                <h5 class="mt-3">注意事項</h5>
                <ol>
                  <li>表列之借用時段皆包含場佈及場復時間（多功能教室、會議室、團體室）。</li>
                  <li>借用時間不可超時，以免影響下一位借用人的權益，若需延長請洽櫃台。</li>
                </ol>
              </div>
            </div>

            <div class="card mb-4">
              <div class="card-body">
                <h4 class="card-title">設備租借</h4>
                <div class="row g-3">
                  <?php if (isset($equipments) && isset($equipments->data) && is_array($equipments->data)): ?>
                    <?php foreach ($equipments->data as $item): ?>
                      <div class="col-md-6">
                        <div class="card card-equip p-3">
                          <h6 class="mb-1"><?php echo htmlspecialchars($item->title); ?></h6>
                          <p class="mb-1"><strong>租金：</strong>NT$<?php echo number_format($item->price); ?> /
                            <?php echo htmlspecialchars($item->unit); ?>
                          </p>
                          <p class="mb-0 text-muted"><?php echo htmlspecialchars($item->description); ?></p>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  <?php else: ?>
                    <div class="col-12">
                      <p class="text-muted">目前沒有相關設備資訊。</p>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">使用規範</h5>
                <?php if (isset($rentals) && isset($rentals->data) && is_array($rentals->data)): ?>
                  <div class="vstack gap-3">
                    <?php foreach ($rentals->data as $rental): ?>
                      <div>
                        <h6 class="fw-bold mb-1"><?php echo htmlspecialchars($rental->title); ?></h6>
                        <div class="text-muted small">
                          <?php echo $rental->content; ?>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                <?php else: ?>
                  <p class="text-muted small">詳細規範請洽管理人員。</p>
                <?php endif; ?>
              </div>
            </div>

            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">快速聯絡</h5>
                <p class="mb-1"><i class="fas fa-phone me-2"></i><?php echo htmlspecialchars($setting->phone); ?></p>
                <p class="mb-1"><i class="fas fa-envelope me-2"></i><?php echo htmlspecialchars($setting->email); ?></p>
                <a href="spaces.html" class="btn btn-outline-primary mt-2">回到空間清單</a>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section>
  </main>

  <?php include dirname(__FILE__) . '/include/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <?php include dirname(__FILE__) . '/include/third-party-link.php'; ?>
</body>

</html>