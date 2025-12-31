<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg" style="background-color: var(--navbar-bg);">
    <div class="container">
      <a class="navbar-brand" href="<?php echo $domain_url; ?>/index.html">思辨空間</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'index.html') ? 'active' : ''; ?>" <?php echo ($current_page == 'index.html') ? 'aria-current="page"' : ''; ?> href="<?php echo $domain_url; ?>/index.html">首頁</a></li>
          <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'about.html') ? 'active' : ''; ?>" <?php echo ($current_page == 'about.html') ? 'aria-current="page"' : ''; ?> href="<?php echo $domain_url; ?>/about.html">關於我們</a></li>
          <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'faq.html') ? 'active' : ''; ?>" <?php echo ($current_page == 'faq.html') ? 'aria-current="page"' : ''; ?> href="<?php echo $domain_url; ?>/faq.html">常見問題</a></li>
          <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'pricing.html') ? 'active' : ''; ?>" <?php echo ($current_page == 'pricing.html') ? 'aria-current="page"' : ''; ?> href="<?php echo $domain_url; ?>/pricing.html">價目表</a></li>
          <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'rental.html') ? 'active' : ''; ?>" <?php echo ($current_page == 'rental.html') ? 'aria-current="page"' : ''; ?> href="<?php echo $domain_url; ?>/rental.html">租借辦法</a></li>
          <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'transport.html') ? 'active' : ''; ?>" <?php echo ($current_page == 'transport.html') ? 'aria-current="page"' : ''; ?> href="<?php echo $domain_url; ?>/transport.html">交通資訊</a></li>
          <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'spaces.html') ? 'active' : ''; ?>" <?php echo ($current_page == 'spaces.html') ? 'aria-current="page"' : ''; ?> href="<?php echo $domain_url; ?>/spaces.html">空間清單</a></li>
          <li class="nav-item"><a class="nav-link <?php echo ($current_page == 'application.html') ? 'active' : ''; ?>" <?php echo ($current_page == 'application.html') ? 'aria-current="page"' : ''; ?> href="<?php echo $domain_url; ?>/application.html">借用申請</a></li>
        </ul>
      </div>
    </div>
</nav>
