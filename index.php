<!-- Bootstrap 5 template for space booking site -->
<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>思辨空間</title>
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

        .carousel-inner img {
            height: 267px;
            object-fit: cover;
            filter: brightness(90%);
        }

        .container h2 {
            color: var(--primary-color);
        }

        .space-card {
            height: 100%;
            display: flex;
            flex-direction: column;
            border: none;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }

        .space-card .card-body {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background-color: var(--card-bg);
        }

        .space-card .card-title {
            color: var(--primary-color);
            font-weight: 600;
        }

        .space-card .card-text {
            color: var(--text-muted);
        }

        .space-card img {
            height: 200px;
            object-fit: cover;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--primary-hover);
            border-color: var(--primary-hover);
        }

        footer {
            background-color: var(--navbar-bg);
            color: var(--navbar-text);
        }

        /* 思辨空間專用樣式 */
        #thinking-space {
            /* 微微隔開上下區塊 */
            padding-top: 3.5rem;
            padding-bottom: 3.5rem;
        }

        #thinking-space .lead {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-dark);
        }

        #thinking-space .thinking-features li {
            margin-bottom: 0.65rem;
        }

        #thinking-space .thinking-features i {
            background-color: rgba(85, 103, 221, 0.08);
            color: var(--primary-color);
            border-radius: 50%;
            padding: 6px;
            width: 28px;
            height: 28px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.6rem;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.04);
        }

        /* 圖片大小與陰影微調 */
        .thinking-img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(16, 24, 40, 0.08);
            object-fit: cover;
        }

        /* 桌面時增加左右間距讓版面更平衡 */
        @media (min-width: 992px) {
            #thinking-space .col-md-7 {
                padding-right: 3.5rem;
            }

            #thinking-space .col-md-5 {
                padding-left: 1.5rem;
            }
        }

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

        /* 手機或窄螢幕：移到底部水平排列 */
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
</head>

<body>
    <!-- Navbar -->
    <?php include_once 'include/nav.php'; ?>

    <!-- Carousel -->
    <div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.pexels.com/photos/1181395/pexels-photo-1181395.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=1200&h=400"
                    class="d-block w-100" alt="會議室橫幅1">
            </div>
            <div class="carousel-item">
                <img src="https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=1200&h=400"
                    class="d-block w-100" alt="會議室橫幅2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Example Homepage Content -->

    <!-- 思辨空間簡介 -->
    <section class="py-5" id="thinking-space">
        <div class="container container-lg">
            <h2 class="mb-4 text-center">思辨空間簡介</h2>
            <div class="row align-items-center">
                <div class="col-md-7">
                    <p class="lead">思辨空間是為促進創意思考與跨領域對話所設計的共享場域。我們提供安靜且具設計感的討論區，適合讀書會、工作坊、學術座談與小型發表，讓思想在開放又專注的環境中被激盪。</p>
                    <ul class="list-unstyled text-muted thinking-features">
                        <li><i class="fas fa-check text-primary"></i> 彈性座位配置，支援小組討論與分組活動</li>
                        <li><i class="fas fa-check text-primary"></i> 投影、白板與音響等會議設施完備</li>
                        <li><i class="fas fa-check text-primary"></i> 提供茶水與網路，並定期清潔維護</li>
                    </ul>
                    <p class="mt-3">無論您是策劃讀書會、主持研討會或進行創作會議，思辨空間都能提供一個讓想法自由生長的中立場域。立即瀏覽空間清單並預約您理想的場地。</p>
                </div>
                <div class="col-md-5 text-center">
                    <img src="https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=800&h=600"
                        alt="思辨空間示意圖" class="img-fluid thinking-img">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container text-center">
            <h2 class="mb-4">特色與優點</h2>
            <div class="row row-cols-2 row-cols-md-4 g-4 justify-content-center">
                <div class="col"><button class="btn btn-outline-secondary w-100"><i
                            class="fas fa-mug-hot fa-lg mb-1"></i><br>茶水間</button></div>
                <div class="col"><button class="btn btn-outline-secondary w-100"><i
                            class="fas fa-wifi fa-lg mb-1"></i><br>WiFi</button></div>
                <div class="col"><button class="btn btn-outline-secondary w-100"><i
                            class="fas fa-project-diagram fa-lg mb-1"></i><br>先進設備</button></div>
                <div class="col"><button class="btn btn-outline-secondary w-100"><i
                            class="fas fa-broom fa-lg mb-1"></i><br>定期清潔</button></div>
                <div class="col"><button class="btn btn-outline-secondary w-100"><i
                            class="fas fa-music fa-lg mb-1"></i><br>音響設備</button></div>
                <div class="col"><button class="btn btn-outline-secondary w-100"><i
                            class="fas fa-star fa-lg mb-1"></i><br>全新裝潢</button></div>
                <div class="col"><button class="btn btn-outline-secondary w-100"><i
                            class="fas fa-store fa-lg mb-1"></i><br>鄰近超商</button></div>
                <div class="col"><button class="btn btn-outline-secondary w-100"><i
                            class="fas fa-parking fa-lg mb-1"></i><br>停車便利</button></div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="mb-4 text-center">精選空間照片</h2>
            <div class="row">
                <!-- 空間卡片1 -->
                <div class="col-md-4 mb-4">
                    <div class="card space-card position-relative">
                        <img src="https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=600&h=400"
                            class="card-img-top" alt="會議室 A">
                        <div class="card-body">
                            <h5 class="card-title">會議室 A</h5>
                            <p class="card-text">位於大樓 1F，提供白板與投影機</p>
                            <p><i class="fas fa-users"></i> 可容納 10 人</p>
                            <p><i class="fas fa-map-marker-alt"></i> 台北市中山區</p>
                            <a href="space.html" class="btn btn-primary">查看更多</a>
                        </div>
                        <a href="space.html" class="stretched-link" aria-label="查看 會議室 A 詳情"></a>
                    </div>
                </div>
                <!-- 空間卡片2 -->
                <div class="col-md-4 mb-4">
                    <div class="card space-card position-relative">
                        <img src="https://images.pexels.com/photos/260689/pexels-photo-260689.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=600&h=400"
                            class="card-img-top" alt="會議室 B">
                        <div class="card-body">
                            <h5 class="card-title">會議室 B</h5>
                            <p class="card-text">附設投影布幕，適合小型簡報</p>
                            <p><i class="fas fa-users"></i> 可容納 8 人</p>
                            <p><i class="fas fa-map-marker-alt"></i> 台北市信義區</p>
                            <a href="space.html" class="btn btn-primary">查看更多</a>
                        </div>
                        <a href="space.html" class="stretched-link" aria-label="查看 會議室 B 詳情"></a>
                    </div>
                </div>
                <!-- 空間卡片3 -->
                <div class="col-md-4 mb-4">
                    <div class="card space-card position-relative">
                        <img src="https://images.pexels.com/photos/1181396/pexels-photo-1181396.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=600&h=400"
                            class="card-img-top" alt="會議室 C">
                        <div class="card-body">
                            <h5 class="card-title">會議室 C</h5>
                            <p class="card-text">設有音響與錄影設備，適合線上會議</p>
                            <p><i class="fas fa-users"></i> 可容納 12 人</p>
                            <p><i class="fas fa-map-marker-alt"></i> 台中市西區</p>
                            <a href="space.html" class="btn btn-primary">查看更多</a>
                        </div>
                        <a href="space.html" class="stretched-link" aria-label="查看 會議室 C 詳情"></a>
                    </div>
                </div>
                <!-- 空間卡片4 -->
                <div class="col-md-4 mb-4">
                    <div class="card space-card position-relative">
                        <img src="https://images.pexels.com/photos/325229/pexels-photo-325229.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=600&h=400"
                            class="card-img-top" alt="會議室 D">
                        <div class="card-body">
                            <h5 class="card-title">會議室 D</h5>
                            <p class="card-text">落地窗景觀設計，採光佳</p>
                            <p><i class="fas fa-users"></i> 可容納 6 人</p>
                            <p><i class="fas fa-map-marker-alt"></i> 新竹市東區</p>
                            <a href="space.html" class="btn btn-primary">查看更多</a>
                        </div>
                        <a href="space.html" class="stretched-link" aria-label="查看 會議室 D 詳情"></a>
                    </div>
                </div>
                <!-- 空間卡片5 -->
                <div class="col-md-4 mb-4">
                    <div class="card space-card position-relative">
                        <img src="https://images.pexels.com/photos/1181398/pexels-photo-1181398.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=600&h=400"
                            class="card-img-top" alt="會議室 E">
                        <div class="card-body">
                            <h5 class="card-title">會議室 E</h5>
                            <p class="card-text">獨立包廂，適合一對一洽談</p>
                            <p><i class="fas fa-users"></i> 可容納 4 人</p>
                            <p><i class="fas fa-map-marker-alt"></i> 台南市中西區</p>
                            <a href="space.html" class="btn btn-primary">查看更多</a>
                        </div>
                        <a href="space.html" class="stretched-link" aria-label="查看 會議室 E 詳情"></a>
                    </div>
                </div>
                <!-- 空間卡片6 -->
                <div class="col-md-4 mb-4">
                    <div class="card space-card position-relative">
                        <img src="https://images.pexels.com/photos/267507/pexels-photo-267507.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=600&h=400"
                            class="card-img-top" alt="會議室 F">
                        <div class="card-body">
                            <h5 class="card-title">會議室 F</h5>
                            <p class="card-text">提供高速 Wi-Fi 與免費茶水</p>
                            <p><i class="fas fa-users"></i> 可容納 14 人</p>
                            <p><i class="fas fa-map-marker-alt"></i> 高雄市左營區</p>
                            <a href="space.html" class="btn btn-primary">查看更多</a>
                        </div>
                        <a href="space.html" class="stretched-link" aria-label="查看 會議室 F 詳情"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 聯絡資訊 -->
    <section class="py-4 bg-white" id="contact-info">
        <div class="container">
            <h2 class="mb-3 text-center">聯絡資訊</h2>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <p><i class="fas fa-envelope me-2"></i><?php echo htmlspecialchars($setting->email); ?></p>
                    <p><i class="fas fa-phone me-2"></i><?php echo htmlspecialchars($setting->phone); ?></p>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="text-center py-3">
        <p class="mb-0">&copy; 2025 思辨空間 All rights reserved.</p>
    </footer>

    <!-- 固定社群按鈕（FB / IG / 官方 LINE） -->
    <?php include dirname(__FILE__) . '/include/third-party-link.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>