<!DOCTYPE html>
<html lang="zh-Hant">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>借用申請 | <?php echo htmlspecialchars($setting->title); ?></title>
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

    .form-section {
      padding-top: 3.5rem;
      padding-bottom: 3.5rem;
    }

    .card {
      border-radius: 12px;
      box-shadow: 0 6px 24px rgba(16, 24, 40, 0.06);
    }
  </style>
</head>

<body class="d-flex flex-column min-vh-100">
  <!-- Navbar -->
  <?php include_once 'include/nav.php'; ?>

  <!-- Banner -->
  <section>
    <img
      src="https://images.pexels.com/photos/1181395/pexels-photo-1181395.jpeg?auto=compress&cs=tinysrgb&fit=crop&w=1200&h=400"
      alt="申請表橫幅" class="w-100" style="height: 267px; object-fit: cover; filter: brightness(90%);">
  </section>

  <!-- Form -->
  <section class="form-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="card p-4">
            <h2 class="mb-3" style="color: var(--primary-color);">思辨空間 借用申請表</h2>
            <p class="text-muted">請如實填寫下列資料，標示「*」者為必填欄位。提交後我們會透過你提供的聯絡方式與您確認。</p>

            <form id="applicationForm" novalidate>
              <div class="row g-3">
                <div class="col-md-6">
                  <label class="form-label">1. 公司名稱</label>
                  <input type="text" class="form-control" name="company" placeholder="若無可留白">
                </div>

                <div class="col-md-6">
                  <label class="form-label">2. 收據抬頭</label>
                  <input type="text" class="form-control" name="receipt_title" placeholder="例如：公司或個人姓名">
                </div>

                <div class="col-md-6">
                  <label class="form-label">3. 統一編號</label>
                  <input type="text" class="form-control" name="tax_id" placeholder="若需開立發票/收據請填寫">
                </div>

                <div class="col-md-6">
                  <label class="form-label">4. 收據地址</label>
                  <input type="text" class="form-control" name="receipt_address" placeholder="收據郵寄地址或公司地址">
                </div>

                <div class="col-md-6">
                  <label class="form-label">5. 租借人姓名 <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="title" required placeholder="請填寫聯絡人姓名">
                  <div class="invalid-feedback">請填寫租借人姓名。</div>
                </div>

                <div class="col-md-6">
                  <label class="form-label">6. LINE 名稱（以利人員核對資料） <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="line_id" required placeholder="例如：@username 或 顯示名稱">
                  <div class="invalid-feedback">請填寫 LINE 名稱以利聯絡。</div>
                </div>

                <div class="col-md-6">
                  <label class="form-label">7. 聯繫電話 <span class="text-danger">*</span></label>
                  <input type="tel" pattern="[0-9\-\s()+]{7,20}" class="form-control" name="phone" required
                    placeholder="例如：02-1234-5678 或 0912-345-678">
                  <div class="invalid-feedback">請填寫有效聯絡電話。</div>
                </div>

                <div class="col-md-6">
                  <label class="form-label">8. 電子信箱 <span class="text-danger">*</span></label>
                  <input type="email" class="form-control" name="email" required placeholder="example@domain.com">
                  <div class="invalid-feedback">請填寫有效的電子信箱。</div>
                </div>

                <div class="col-md-6">
                  <label class="form-label">9. 租借日期 <span class="text-danger">*</span></label>
                  <input type="date" class="form-control" name="rental_date" required>
                  <div class="invalid-feedback">請選擇租借日期。</div>
                </div>
                <label class="form-label">10. 欲租借空間 <span class="text-danger">*</span></label>
                <select class="form-select" name="space_choice" required>
                  <option value="">請選擇欲租借空間</option>
                  <?php foreach ($spaces->data as $branch): ?>
                    <?php foreach ($branch->spaces as $space): ?>
                      <option category="<?php echo $space->category; ?>" value="<?php echo $space->id; ?>">
                        <?php echo $branch->title; ?> - <?php echo $space->title; ?>
                      </option>
                    <?php endforeach; ?>
                  <?php endforeach; ?>
                </select>
                <div class="invalid-feedback">請選擇欲租借的空間。</div>
              </div>

              <!-- 11-18 特定空間專屬欄位 -->
              <div id="conference_options" class="col-12" style="display: none;">
                <div class="row g-3 p-z3">

                  <div class="col-12" id="q11_group_a">
                    <label class="form-label">11. 租借時間（多功能教室、會議室、團體室）<span class="text-danger">*</span></label>
                    <div class="form-check">
                      <input class="form-check-input conversation-field" type="checkbox" name="rental_time_slots[]"
                        value="上午 08:30-12:30" id="time_morning">
                      <label class="form-check-label" for="time_morning">上午 08:30-12:30</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input conversation-field" type="checkbox" name="rental_time_slots[]"
                        value="下午 13:00-17:00" id="time_afternoon">
                      <label class="form-check-label" for="time_afternoon">下午 13:00-17:00</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input conversation-field" type="checkbox" name="rental_time_slots[]"
                        value="晚上 17:30-21:30" id="time_evening">
                      <label class="form-check-label" for="time_evening">晚上 17:30-21:30</label>
                    </div>
                    <div class="invalid-feedback">請至少選擇一個租借時段。</div>
                  </div>

                  <div class="col-12" id="q11_group_b" style="display: none;">
                    <label class="form-label">11. 租借時數，請以小時為單位 （9:00-12:00，共3小時）<span
                        class="text-danger">*</span></label>
                    <input type="text" class="form-control conversation-field" name="rental_duration"
                      placeholder="輸入您的答案">
                    <div class="invalid-feedback">請填寫租借時數。</div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <label class="form-label">12. 租借事由</label>
                <input type="text" class="form-control conversation-field" name="rental_reason">
              </div>

              <div class="col-md-6">
                <label class="form-label">13. 預計使用人數</label>
                <input type="number" class="form-control conversation-field" name="rental_people_count" min="1">
              </div>

              <div class="col-md-6">
                <label class="form-label">14. 是否需要代訂餐點</label>
                <div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input conversation-field" type="radio" name="need_catering" value="是"
                      id="catering_yes">
                    <label class="form-check-label" for="catering_yes">是</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input conversation-field" type="radio" name="need_catering" value="否"
                      id="catering_no">
                    <label class="form-check-label" for="catering_no">否</label>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <label class="form-label">15. 租借公司類型</label>
                <div>
                  <div class="form-check">
                    <input class="form-check-input conversation-field" type="radio" name="company_type" value="縣市政府單位"
                      id="type_gov">
                    <label class="form-check-label" for="type_gov">縣市政府單位</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input conversation-field" type="radio" name="company_type"
                      value="非縣市政府單位" id="type_nongov">
                    <label class="form-check-label" for="type_nongov">非縣市政府單位</label>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <label class="form-label">16. 是否已加入思辨空間官方LINE</label>
                <div>
                  <div class="form-check">
                    <input class="form-check-input conversation-field" type="radio" name="line_joined" value="是！我已加入～"
                      id="line_joined_yes">
                    <label class="form-check-label" for="line_joined_yes">是！我已加入～</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input conversation-field" type="radio" name="line_joined" value="尚未"
                      id="line_joined_no">
                    <label class="form-check-label" for="line_joined_no">尚未</label>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <label class="form-label">17. 請問是如何得知思辨空間的呢？</label>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-check">
                      <input class="form-check-input conversation-field" type="radio" name="source_of_info"
                        value="FB臉書社團" id="source_fb">
                      <label class="form-check-label" for="source_fb">FB臉書社團</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-check">
                      <input class="form-check-input conversation-field" type="radio" name="source_of_info" value="IG"
                        id="source_ig">
                      <label class="form-check-label" for="source_ig">IG</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-check">
                      <input class="form-check-input conversation-field" type="radio" name="source_of_info"
                        value="GOOGLE搜尋" id="source_google">
                      <label class="form-check-label" for="source_google">GOOGLE搜尋</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-check">
                      <input class="form-check-input conversation-field" type="radio" name="source_of_info"
                        value="親友介紹" id="source_friend">
                      <label class="form-check-label" for="source_friend">親友介紹</label>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-check">
                      <input class="form-check-input conversation-field" type="radio" name="source_of_info"
                        value="曾經租借過" id="source_returned">
                      <label class="form-check-label" for="source_returned">曾經租借過</label>
                    </div>
                  </div>
                  <div class="col-md-12 mt-2">
                    <div class="input-group">
                      <div class="input-group-text">
                        <input class="form-check-input mt-0 conversation-field" type="radio" name="source_of_info"
                          value="其他" id="source_other">
                        <label class="form-check-label ms-2" for="source_other">其他</label>
                      </div>
                      <input type="text" class="form-control conversation-field" name="source_of_info_other"
                        placeholder="請說明..." aria-label="其他來源說明">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <label class="form-label">18. 其他備註</label>
                <input type="text" class="form-control conversation-field" name="other_notes_18"
                  placeholder="若有其他特殊需求請填寫">
              </div>


              <div class="col-12">
                <label class="form-label">備註（活動用途 / 參與人數 / 其他需求）</label>
                <textarea class="form-control" name="notes" rows="3" placeholder="選填：可註明活動用途、預估人數、設備需求等"></textarea>
              </div>

              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="agree" id="agreeCheck" required>
                  <label class="form-check-label" for="agreeCheck">我已閱讀並同意資料提供與使用規範（必填）</label>
                  <div class="invalid-feedback">請勾選同意才能提交表單。</div>
                </div>
              </div>

              <div class="col-12 text-end mt-4">
                <button type="submit" class="btn btn-primary">提交申請</button>
              </div>
          </div>
          </form>

          <div id="submitResult" class="alert mt-5" style="display:none;margin-top: 20px;"></div>

        </div>
      </div>
    </div>
    </div>
  </section>

  <?php include dirname(__FILE__) . '/include/footer.php'; ?>

  <?php include dirname(__FILE__) . '/include/third-party-link.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Bootstrap 自訂驗證（表單提交前檢查）
    (function() {
      'use strict'
      const form = document.getElementById('applicationForm')
      const spaceChoice = document.querySelector('select[name="space_choice"]');
      const conferenceOptions = document.getElementById('conference_options');
      const conferenceFields = document.querySelectorAll('.conversation-field');

      // 監聽空間選擇
      spaceChoice.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        const category = selectedOption.getAttribute('category');

        const q11GroupA = document.getElementById('q11_group_a');
        const q11GroupB = document.getElementById('q11_group_b');
        const inputB = q11GroupB.querySelector('input[name="rental_duration"]');
        const feedbackA = q11GroupA.querySelector('.invalid-feedback');

        // Reset validation state
        q11GroupA.querySelectorAll('.form-control, .form-check-input').forEach(el => el.classList.remove('is-invalid'));
        q11GroupB.querySelectorAll('.form-control').forEach(el => el.classList.remove('is-invalid'));
        if (feedbackA) feedbackA.style.display = 'none';

        if (category === 'large' || category === 'small') {
          conferenceOptions.style.display = 'block';

          if (category === 'large') {
            //顯示 Group A 的第11題，隱藏 Group B
            q11GroupA.style.display = 'block';
            q11GroupB.style.display = 'none';
            // 清除 Group B 的值並移除必填
            if (inputB) {
              inputB.value = '';
              inputB.removeAttribute('required');
            }
          } else if (category === 'small') {
            //顯示 Group B 的第11題，隱藏 Group A
            q11GroupA.style.display = 'none';
            q11GroupB.style.display = 'block';
            // 清除 Group A 的值
            const inputsA = q11GroupA.querySelectorAll('input[type="checkbox"]');
            inputsA.forEach(cb => cb.checked = false);
            // 增加 Group B 必填
            if (inputB) {
              inputB.setAttribute('required', '');
            }
          }

        } else {
          conferenceOptions.style.display = 'none';
          // 清除所有值並移除驗證
          conferenceFields.forEach(field => {
            if (field.type === 'checkbox' || field.type === 'radio') {
              field.checked = false;
            } else {
              field.value = '';
            }
            field.classList.remove('is-invalid');
            if (field.name === 'rental_duration') {
              field.removeAttribute('required');
            }
          });
        }
      });

      // 初始化 checkbox 監聽器以在選擇時清除錯誤
      const q11GroupA = document.getElementById('q11_group_a');
      const checkBoxesA = q11GroupA.querySelectorAll('input[type="checkbox"]');
      checkBoxesA.forEach(box => {
        box.addEventListener('change', function() {
          const feedbackA = q11GroupA.querySelector('.invalid-feedback');
          if (q11GroupA.querySelectorAll('input[type="checkbox"]:checked').length > 0) {
            feedbackA.style.display = 'none';
            checkBoxesA.forEach(b => b.classList.remove('is-invalid'));
          }
        });
      });

      // URL 參數自動填充
      const urlParams = new URLSearchParams(window.location.search);
      const dateParam = urlParams.get('date');
      const spaceIdParam = urlParams.get('space_id');

      if (dateParam) {
        const dateInput = document.querySelector('input[name="rental_date"]');
        if (dateInput) {
          dateInput.value = dateParam;
        }
      }

      if (spaceIdParam) {
        if (spaceChoice) {
          spaceChoice.value = spaceIdParam;
          // 觸發 change 事件以更新第11題的顯示邏輯
          spaceChoice.dispatchEvent(new Event('change'));
        }
      }

      form.addEventListener('submit', function(event) {
        let isCustomValid = true;

        // Custom Validation for Checkboxes in Group A (Large Spaces)
        // 只有當 Group A 顯示時才檢查
        if (q11GroupA.style.display !== 'none') {
          const checkedBoxes = q11GroupA.querySelectorAll('input[type="checkbox"]:checked');
          const feedbackA = q11GroupA.querySelector('.invalid-feedback');

          if (checkedBoxes.length === 0) {
            isCustomValid = false;
            // 顯示錯誤
            if (feedbackA) feedbackA.style.display = 'block';
            checkBoxesA.forEach(box => box.classList.add('is-invalid'));
          } else {
            // 隱藏錯誤
            if (feedbackA) feedbackA.style.display = 'none';
            checkBoxesA.forEach(box => box.classList.remove('is-invalid'));
          }
        }

        if (!form.checkValidity() || !isCustomValid) {
          event.preventDefault()
          event.stopPropagation()

          // 如果是 Group A 錯誤，捲動到該處
          if (!isCustomValid && q11GroupA.style.display !== 'none') {
            q11GroupA.scrollIntoView({
              behavior: 'smooth',
              block: 'center'
            });
          }

        } else {
          // 實際送出資料至後端 API
          event.preventDefault()
          const submitBtn = form.querySelector('button[type="submit"]')
          const result = document.getElementById('submitResult')

          // 避免重複送出
          submitBtn.disabled = true
          const originalBtnText = submitBtn.innerText
          submitBtn.innerText = '提交中...'

          const formData = new FormData(form)

          fetch('/api/space/booking?_token_=1234567890', {
              method: 'POST',
              body: formData
            })
            .then(response => {
              if (response.ok) {
                return response.json().catch(() => ({}))
              }
              throw new Error('Network response was not ok.')
            })
            .then(data => {
              // 成功
              result.style.display = 'block'
              result.className = 'alert alert-success'
              result.innerText = '已收到您的申請，我們會儘快以您提供的聯絡資訊與您確認。'
              form.reset()
              form.classList.remove('was-validated')
              // 重置 checkbox 相關 UI
              if (q11GroupA) {
                const feedbackA = q11GroupA.querySelector('.invalid-feedback');
                if (feedbackA) feedbackA.style.display = 'none';
                q11GroupA.querySelectorAll('input[type="checkbox"]').forEach(b => b.classList.remove('is-invalid'));
              }

              // 捲動至訊息處
              result.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
              })
            })
            .catch(error => {
              // 失敗
              console.error('Error:', error)
              result.style.display = 'block'
              result.className = 'alert alert-danger'
              result.innerText = '申請提交失敗，請檢查網路連線或稍後再試。'
              result.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
              })
            })
            .finally(() => {
              submitBtn.disabled = false
              submitBtn.innerText = originalBtnText
            })
        }
        form.classList.add('was-validated')
      }, false)
    })()
  </script>
</body>

</html>