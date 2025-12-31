<!DOCTYPE html>
<html lang="zh-Hant">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>申請通知信件</title>
</head>

<body
    style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f7f9fc; margin: 0; padding: 0; color: #2c2c2c; line-height: 1.6;">

    <!-- Main Container -->
    <div
        style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border-radius: 12px; box-shadow: 0 6px 24px rgba(16, 24, 40, 0.06); overflow: hidden; margin-top: 20px; margin-bottom: 20px;">

        <!-- Header -->
        <div style="background-color: #313a49; padding: 20px; text-align: center; color: #ffffff;">
            <h1 style="margin: 0; font-size: 24px; font-weight: 500;">思辨空間 借用申請通知</h1>
        </div>

        <!-- Banner Image (Optional, matching application page style) -->
        <div style="width: 100%; height: 200px; background-color: #e9ecef; overflow: hidden;">
            <img src="https://images.pexels.com/photos/1181395/pexels-photo-1181395.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=1200&h=400"
                alt="Banner" style="width: 100%; height: 100%; object-fit: cover; filter: brightness(90%);">
        </div>

        <!-- Content -->
        <div style="padding: 40px 30px;">
            <h2
                style="color: #5567dd; margin-top: 0; margin-bottom: 20px; border-bottom: 2px solid #f0f0f0; padding-bottom: 10px;">
                新申請資料詳情
            </h2>
            <p style="color: #666; margin-bottom: 20px;">
                系統已收到一筆新的租借申請，詳細資料如下：
            </p>

            <!-- Pending Review Notification -->
            <div
                style="background-color: #fff8e1; border-left: 5px solid #ffc107; padding: 15px; margin-bottom: 30px; border-radius: 4px;">
                <h3 style="margin-top: 0; margin-bottom: 10px; color: #b00020; font-size: 16px;">待審核</h3>
                <p style="margin: 0; color: #5f6368; font-size: 14px;">
                    這個申請還未完成，需要等待審核通過後，才算完成承租。
                </p>
            </div>

            <table style="width: 100%; border-collapse: collapse;">
                <!-- 1. 公司名稱 -->
                <tr>
                    <td
                        style="padding: 12px 0; border-bottom: 1px solid #eee; width: 35%; color: #666; font-weight: 600;">
                        公司名稱</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <?php echo !empty($booking->company) ? htmlspecialchars($booking->company) : '（未填寫）'; ?>
                    </td>
                </tr>
                <!-- 2. 收據抬頭 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">收據抬頭</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <?php echo !empty($booking->receipt_title) ? htmlspecialchars($booking->receipt_title) : '（未填寫）'; ?>
                    </td>
                </tr>
                <!-- 3. 統一編號 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">統一編號</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <?php echo !empty($booking->tax_id) ? htmlspecialchars($booking->tax_id) : '（未填寫）'; ?>
                    </td>
                </tr>
                <!-- 4. 收據地址 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">收據地址</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <?php echo !empty($booking->receipt_address) ? htmlspecialchars($booking->receipt_address) : '（未填寫）'; ?>
                    </td>
                </tr>
                <!-- 5. 租借人姓名 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">租借人姓名
                    </td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <?php echo htmlspecialchars($booking->title ?? ''); ?>
                    </td>
                </tr>
                <!-- 6. LINE 名稱 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">LINE 名稱
                    </td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <?php echo htmlspecialchars($booking->line_id ?? ''); ?>
                    </td>
                </tr>
                <!-- 7. 聯繫電話 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">聯繫電話</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <a href="tel:<?php echo htmlspecialchars($booking->phone ?? ''); ?>"
                            style="color: #5567dd; text-decoration: none;">
                            <?php echo htmlspecialchars($booking->phone ?? ''); ?>
                        </a>
                    </td>
                </tr>
                <!-- 8. 電子信箱 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">電子信箱</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <a href="mailto:<?php echo htmlspecialchars($booking->email ?? ''); ?>"
                            style="color: #5567dd; text-decoration: none;">
                            <?php echo htmlspecialchars($booking->email ?? ''); ?>
                        </a>
                    </td>
                </tr>
                <!-- 9. 租借日期 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">租借日期</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <?php echo htmlspecialchars($booking->rental_date ?? ''); ?>
                    </td>
                </tr>
                <!-- 10. 租借空間 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">租借空間</td>
                    <td
                        style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c; font-weight: bold; color: #5567dd;">
                        <?php echo htmlspecialchars($booking->space_name ?? $booking->space_choice ?? ''); ?>
                    </td>
                </tr>

                <!-- 11. 租借時段/時數 (Dynamic display based on input) -->
                <?php if (!empty($booking->rental_time_slots)): ?>
                    <tr>
                        <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">租借時段</td>
                        <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                            <?php
                            if (is_array($booking->rental_time_slots)) {
                                echo implode('、', $booking->rental_time_slots);
                            } else {
                                echo htmlspecialchars(str_replace(',', '、', $booking->rental_time_slots));
                            }
                            ?>
                        </td>
                    </tr>
                <?php endif; ?>

                <?php if (!empty($booking->rental_duration)): ?>
                    <tr>
                        <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">租借時數</td>
                        <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                            <?php echo htmlspecialchars($booking->rental_duration); ?>
                        </td>
                    </tr>
                <?php endif; ?>

                <!-- 12. 租借事由 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">租借事由</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <?php echo !empty($booking->rental_reason) ? htmlspecialchars($booking->rental_reason) : '（未填寫）'; ?>
                    </td>
                </tr>

                <!-- 13. 預計使用人數 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">預計使用人數
                    </td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <?php echo !empty($booking->rental_people_count) ? htmlspecialchars($booking->rental_people_count) . ' 人' : '（未填寫）'; ?>
                    </td>
                </tr>

                <!-- 14. 是否需要代訂餐點 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">代訂餐點</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <?php echo htmlspecialchars($booking->need_catering ?? ''); ?>
                    </td>
                </tr>

                <!-- 15. 租借公司類型 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">租借公司類型
                    </td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <?php echo htmlspecialchars($booking->company_type ?? ''); ?>
                    </td>
                </tr>

                <!-- 16. LINE 加入狀態 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">LINE
                        官方號狀態</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <?php echo htmlspecialchars($booking->line_joined ?? ''); ?>
                    </td>
                </tr>

                <!-- 17. 資訊來源 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">資訊來源</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <?php echo htmlspecialchars($booking->source_of_info ?? ''); ?>
                        <?php if (!empty($booking->source_of_info_other))
                            echo ' (' . htmlspecialchars($booking->source_of_info_other) . ')'; ?>
                    </td>
                </tr>

                <!-- 18. 其他備註 -->
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600;">其他備註</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <?php echo !empty($booking->other_notes_18) ? htmlspecialchars($booking->other_notes_18) : '（無）'; ?>
                    </td>
                </tr>

                <!-- 備註 -->
                <tr>
                    <td
                        style="padding: 12px 0; border-bottom: 1px solid #eee; color: #666; font-weight: 600; vertical-align: top;">
                        詳細備註</td>
                    <td style="padding: 12px 0; border-bottom: 1px solid #eee; color: #2c2c2c;">
                        <?php echo !empty($booking->notes) ? nl2br(htmlspecialchars($booking->notes)) : '（無）'; ?>
                    </td>
                </tr>
            </table>

            <div style="margin-top: 30px; text-align: center; color: #999; font-size: 14px;">
                <p>此信件為系統自動發送，請勿直接回覆。</p>
                <p>&copy; <?php echo date('Y'); ?> 思辨空間. All rights reserved.</p>
            </div>
        </div>
    </div>

</body>

</html>