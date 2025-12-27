<!-- 租借辦法頁面：延續網站共用樣式 -->
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>租借辦法 | <?php echo htmlspecialchars($setting->title); ?></title>
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

        .step-box {
            background: #fff;
            border-radius: 10px;
            padding: 1rem;
            box-shadow: 0 6px 18px rgba(16, 24, 40, 0.06);
            text-align: center;
        }

        .rule-list li {
            margin-bottom: 0.6rem;
        }

        footer {
            background-color: var(--navbar-bg);
            color: var(--navbar-text);
        }
    </style>
</head>


<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <?php include_once 'include/nav.php'; ?>

    <!-- Banner -->
    <section>
        <img src="https://images.pexels.com/photos/3182756/pexels-photo-3182756.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=1200&h=400"
            class="w-100 page-banner" alt="租借辦法 橫幅">
    </section>

    <!-- 主要內容 -->
    <main class="flex-grow-1">
        <section class="py-5">
            <div class="container">
                <h2 class="section-title mb-3">租借辦法</h2>
                <p class="text-muted mb-4">以下說明為租借我們空間的一般程序與使用規範，請在預訂前詳閱，以確保雙方權益。</p>

                <!-- 申請流程 -->
                <div class="mb-5">
                    <h4 class="mb-3">申請流程</h4>
                    <div class="row g-3">
                        <div class="col-md-3">
                            <div class="step-box">
                                <i class="fas fa-phone fa-2x text-primary mb-2"></i>
                                <h6>聯繫館方</h6>
                                <p class="text-muted small">電話或 Email 詢問場地可用性與需求</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="step-box">
                                <i class="fas fa-file-signature fa-2x text-primary mb-2"></i>
                                <h6>申請租借</h6>
                                <p class="text-muted small">填寫申請表或線上表單，提供活動資訊</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="step-box">
                                <i class="fas fa-calendar-check fa-2x text-primary mb-2"></i>
                                <h6>確認時間</h6>
                                <p class="text-muted small">館方確認場地與可用時段後回覆</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="step-box">
                                <i class="fas fa-money-bill-wave fa-2x text-primary mb-2"></i>
                                <h6>訂金匯款</h6>
                                <p class="text-muted small">依通知繳交訂金以確保預約時段</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 使用規範 -->
                <div class="mb-5">
                    <h4 class="mb-3">使用規範</h4>
                    <div class="row">
                        <?php foreach ($rentals->data as $rental): ?>
                            <div class="col-md-6">
                                <h6><?php echo $rental->title; ?></h6>
                                <?php echo $rental->content; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="contact-box p-3 bg-white rounded" style="border-left:5px solid var(--primary-color);">
                    <strong>如需申請或有疑問，請與我們聯絡：</strong>
                    <p class="mb-1"><i class="fas fa-envelope me-2"></i><?php echo htmlspecialchars($setting->email); ?>
                    </p>
                    <p class="mb-0"><i class="fas fa-phone me-2"></i><?php echo htmlspecialchars($setting->phone); ?>
                    </p>
                </div>

            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include dirname(__FILE__) . '/include/footer.php'; ?>

    <?php include dirname(__FILE__) . '/include/third-party-link.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>