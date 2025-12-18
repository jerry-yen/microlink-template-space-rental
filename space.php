<!-- 空間詳細頁面：延續首頁樣式與結構 -->
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $space->title; ?> | 思辨空間</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.css" rel="stylesheet">
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

    .banner {
      height: 267px;
      object-fit: cover;
      filter: brightness(90%);
    }

    .calendar-container {
      background-color: #fff;
      padding: 2rem;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    iframe {
      border: 0;
      width: 100%;
      height: 600px;
    }

    .contact-box {
      background-color: #ffffff;
      padding: 1.5rem;
      border-radius: 10px;
      border-left: 5px solid var(--primary-color);
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }

    .contact-box p {
      font-size: 1.1rem;
      margin-bottom: 0.5rem;
    }

    .contact-box strong {
      display: block;
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
      color: var(--primary-color);
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
      src="https://images.pexels.com/photos/1595385/pexels-photo-1595385.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=1200&h=400"
      class="w-100 banner" alt="空間橫幅">
  </section>

  <!-- 價目與容量摘要：已移至下方「設備圖片」區塊以便整合頁面內容 -->

  <!-- 空間詳細內容 -->
  <section class="py-5">
    <div class="container">
      <h1 class="mb-4" style="color: var(--primary-color);"><?php echo $space->title; ?></h1>
      <p class="lead"><?php echo $space->description ?? ''; ?></p>

      <div class="row mb-4">
        <div class="col-md-6">
          <h5>空間資訊</h5>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">容納人數：<?php echo $space->capacity ?? '0'; ?>人</li>
            <li class="list-group-item">坪數：<?php echo $space->ping ?? '0'; ?>坪</li>
            <li class="list-group-item">館別：<?php echo $space->branch->title ?? ''; ?></li>
            <li class="list-group-item">地點：<?php echo $space->branch->address ?? ''; ?></li>
            <li class="list-group-item">桌椅：<?php echo $space->has_furniture == 'Y' ? '有' : '無'; ?></li>
            <li class="list-group-item">設備：<?php echo $space->facilities ?? ''; ?></li>
            <li class="list-group-item">
              <strong>使用規範：</strong>
              <?php echo $space->regulations ?? ''; ?>
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <h5>圖片</h5>
          <div class="ratio rounded overflow-hidden" style="--bs-aspect-ratio: 62.5%;">
            <img src="<?php echo $domain_url . '/' . htmlspecialchars($space->images); ?>"
              alt="<?php echo $space->title; ?>" style="object-fit: cover; width: 100%; height: 100%;">
          </div>
        </div>

        <!-- 價目表（整合於設備圖片下方） -->

        <div class="col-12 mt-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title" style="color: var(--primary-color);">價目表</h5>
              <div class="row">
                <div class="col-md-6">
                  <?php if ($space->category == 'large'): ?>
                    <ul class="list-unstyled mb-0">
                      <li><strong>1 個時段的總價：</strong>NT$<?php echo number_format($space->price_1_session ?? 0); ?></li>
                      <li><strong>2 個時段的總價：</strong>NT$<?php echo number_format($space->price_2_session ?? 0); ?></li>
                      <li><strong>3 個時段的總價：</strong>NT$<?php echo number_format($space->price_3_session ?? 0); ?></li>
                      <li><strong>延時 (每小時)
                          的費用：</strong>NT$<?php echo number_format($space->overtime_hourly_price ?? 0); ?></li>
                    </ul>
                  <?php else: ?>
                    <ul class="list-unstyled mb-0">
                      <li><strong>每小時價格：</strong>NT$<?php echo number_format($space->default_hourly_price_cents ?? 0); ?>
                      </li>
                      <li><strong>3 小時 (含)
                          以上的每小時費率：</strong>NT$<?php echo number_format($space->hourly_price_3hr_plus ?? 0); ?></li>
                      <li><strong>6 小時 (含)
                          以上的每小時費率：</strong>NT$<?php echo number_format($space->hourly_price_6hr_plus ?? 0); ?></li>
                    </ul>
                  <?php endif; ?>
                </div>
                <div class="col-md-6">
                  <p class="text-muted mb-2">常用租借設備：投影機、白板、桌椅、麥克風/音響、視訊鏡頭等。詳細收費請參考「價目表」頁面。</p>
                </div>
              </div>
            </div>
          </div>
        </div>


      </div>



      <!-- 行事曆區塊 -->
      <div class="calendar-container mb-5">
        <h5 class="mb-3">空間使用行事曆</h5>
        <div id="calendar"></div>
        <p class="text-muted mt-2">以上行事曆顯示此空間的預約狀況，點選事件可查看詳細資訊。</p>
      </div>

      <!-- 聯絡資訊 -->
      <div class="contact-box mb-5">
        <strong>如有任何問題，歡迎與我們聯絡！</strong>
        <p><i class="fas fa-envelope me-2"></i><?php echo $setting->email; ?></p>
        <p><i class="fas fa-phone me-2"></i><?php echo $setting->phone; ?></p>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="mt-auto text-center py-3">
    <p class="mb-0">&copy; 2025 思辨空間 All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/locales-all.global.min.js"></script>
  <style>
    /* FullCalendar container styling */
    #calendar {
      background: #fff;
      padding: 1rem;
      border-radius: 8px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
    }
  </style>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {
        locale: 'zh-tw',
        initialView: 'dayGridMonth',
        height: 600,
        // 將右側的檢視按鈕移除，只保留上一頁/下一頁/今天與標題
        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: ''
        },
        // 明確指定 Today 的中文顯示（確保即使 locale 資源未載入也會中文化）
        buttonText: {
          today: '今天'
        },
        selectable: true,
        selectMirror: true,
        navLinks: true,
        events: [], // will load from API
        // 點擊某一天（空白日期）時導向申請頁面，帶入日期與空間 id
        dateClick: function (info) {
          var dateStr = info.dateStr || (info.date ? info.date.toISOString().slice(0, 10) : '');
          var appUrl = '<?php echo $domain_url; ?>/application.html?date=' + encodeURIComponent(dateStr) + '&space_id=<?php echo $space->id; ?>';
          window.location.href = appUrl;
        },
        eventClick: function (info) {
          info.jsEvent.preventDefault();
          var startIso = info.event.start ? info.event.start.toISOString() : '';
          var bookingUrl = '/booking.php?space_id=<?php echo $space->id; ?>&start=' + encodeURIComponent(startIso) + '&event_id=' + encodeURIComponent(info.event.id || '');
          // 如果想改為 modal，可在此改成顯示 modal
          window.location.href = bookingUrl;
        }
      });

      calendar.render();

      // ---- 範例：產生一些最近日期的隨機承租事件（示範用途，不會寫入後端）
      (function () {
        function randInt(min, max) { return Math.floor(Math.random() * (max - min + 1)) + min; }
        var titles = ['示範：社團活動', '示範：場地租借', '示範：會議', '示範：講座', '示範：工作坊', '示範：攝影場次'];
        var sampleEvents = [];
        var today = new Date();
        // 產生 6 個範例事件，日期分布在最近兩週內（含過去與接近未來）
        for (var i = 0; i < 6; i++) {
          var offset = randInt(-13, 2); // -13 天 ~ +2 天
          var start = new Date(today);
          start.setDate(start.getDate() + offset);
          // 亂數起始時段：08~18 小時內
          var startHour = randInt(8, 17);
          start.setHours(startHour, 0, 0, 0);
          var end = new Date(start);
          end.setHours(start.getHours() + randInt(1, 3)); // 1~3 小時

          sampleEvents.push({
            id: 'sample-' + i,
            title: titles[i % titles.length],
            start: start.toISOString(),
            end: end.toISOString(),
            allDay: false,
            backgroundColor: '#ffbc42',
            borderColor: '#ff9f1a'
          });
        }

        // 加入到 calendar（示範事件先加入，之後 API 事件會再加入）
        calendar.addEventSource(sampleEvents);
      })();

      var eventsApiUrl = '/api/space_events.php?space_id=<?php echo $space->id; ?>';
      fetch(eventsApiUrl)
        .then(function (res) { return res.json(); })
        .then(function (data) {
          calendar.addEventSource(data);
        })
        .catch(function (err) {
          console.error('載入事件失敗', err);
        });
    });
  </script>
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