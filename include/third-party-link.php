<?php
// 此檔案顯示第三方連結（FB, IG, LINE）
// 若 $setting 變數中對應的欄位有值，則顯示該連結圖示
?>
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

<!-- 固定社群按鈕（FB / IG / 官方 LINE） -->
<?php if (!empty($setting->fb_url) || !empty($setting->ig_url) || !empty($setting->line_url)): ?>
        <div class="social-fixed" aria-hidden="false">
                <?php if (!empty($setting->fb_url)): ?>
                        <a class="social-fb" href="<?php echo htmlspecialchars($setting->fb_url); ?>" aria-label="Facebook - 打開新分頁"
                                target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                <?php endif; ?>

                <?php if (!empty($setting->ig_url)): ?>
                        <a class="social-ig" href="<?php echo htmlspecialchars($setting->ig_url); ?>" aria-label="Instagram - 打開新分頁"
                                target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                <?php endif; ?>

                <?php if (!empty($setting->line_url)): ?>
                        <a class="social-line" href="<?php echo htmlspecialchars($setting->line_url); ?>" aria-label="官方 LINE - 打開新分頁"
                                target="_blank" rel="noopener noreferrer"><i class="fab fa-line"></i></a>
                <?php endif; ?>
        </div>
<?php endif; ?>