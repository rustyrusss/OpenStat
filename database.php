<?php
/* ============================================================
   PAGE CONFIGURATION
   ============================================================ */
$page_title       = 'PSA Statistical Databases';
$page_description = '';
$hero_image       = 'Img/Background-Data.png';
$active_nav       = 'database';

$breadcrumbs = [
  ['label' => 'Database', 'href' => 'database.php'],
  ['label' => '',         'href' => ''],
];

$nav_items = [
  ['label' => 'Home',       'href' => 'index.php',    'key' => 'home'],
  ['label' => 'About',      'href' => 'about.php',    'key' => 'about'],
  ['label' => 'Database',   'href' => 'database.php', 'key' => 'database'],
  ['label' => 'Dashboard',  'href' => 'dashboard.php','key' => 'dashboard'],
  ['label' => 'Featured',   'href' => 'featured.php', 'key' => 'featured'],
  ['label' => 'Contact Us', 'href' => 'contact.php',  'key' => 'contact'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PSA OpenSTAT - <?= htmlspecialchars($page_title) ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#1a3269',
            'primary-dark': '#142a56',
            'primary-light': '#eff6ff',
          },
          fontFamily: { sans: ['Open Sans', 'sans-serif'] },
        }
      }
    }
  </script>
  <style>
    *, *::before, *::after { box-sizing: border-box; }
    body { font-family: 'Open Sans', sans-serif; background: #e8e8e8; overflow-x: hidden; }
    html { scroll-behavior: smooth; }

    /* ── Navbar ── */
    .navbar { animation: slideDown 0.5s cubic-bezier(.22,1,.36,1) both; }
    @keyframes slideDown {
      from { transform: translateY(-100%); opacity: 0; }
      to   { transform: translateY(0);     opacity: 1; }
    }

    .nav-blue-link {
      display: inline-block; color: #fff; font-size: 15px; font-weight: 600;
      text-decoration: none; padding: 13px 30px; transition: background 0.15s;
      white-space: nowrap; letter-spacing: 0.3px;
    }
    .nav-blue-link:hover      { background: rgba(255,255,255,0.12); }
    .nav-blue-link.active-nav { background: rgba(255,255,255,0.18); font-weight: 700; }

    #hamburgerBtn { display: none; }
    #mobileMenu   { display: none; flex-direction: column; background: #142a56; }
    #mobileMenu.open { display: flex; }
    #mobileMenu a {
      padding: 14px 20px; border-bottom: 1px solid rgba(255,255,255,0.08);
      font-size: 14px; font-weight: 600; color: #fff; text-decoration: none;
    }
    #mobileMenu a:hover, #mobileMenu a.active-nav { background: rgba(255,255,255,0.15); }

    /* ── Hero ── */
    @keyframes heroFadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .hero-title { animation: heroFadeIn 0.7s 0.15s cubic-bezier(.22,1,.36,1) both; }
    .hero-desc  { animation: heroFadeIn 0.7s 0.28s cubic-bezier(.22,1,.36,1) both; }

    /* ── Page layout ── */
    .main-wrap { max-width: 1100px; margin: 0 auto; padding: 26px 40px 50px; }
    .page-grid { display: grid; grid-template-columns: 1fr 220px; gap: 22px; align-items: start; }
    .left-col  { display: flex; flex-direction: column; gap: 18px; }

    /* ── Intro ── */
    .intro-block h2 {
      font-size: 24px; font-weight: 700; color: #1a3269;
    }
    .intro-block h2::after {
      content: ''; display: block; width: 48px; height: 3px;
      background: #FECC1A; margin-top: 6px; border-radius: 20px;
    }
    .intro-block p   { font-size: 14px; color: #374151; line-height: 1.8; margin-top: 14px; }
    .intro-block a   { color: #1a56db; text-decoration: none; }
    .intro-block a:hover { text-decoration: underline; }
    .intro-divider   { border: none; border-top: 1px solid #d1d5db; margin: 16px 0 20px; }

    /* ── Domain card ── */
    .domain-card {
      background: #fff; border: 1px solid #e5e7eb; border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.07); overflow: hidden;
      transition: box-shadow 0.28s cubic-bezier(.22,1,.36,1), transform 0.28s cubic-bezier(.22,1,.36,1);
    }
    .domain-card:hover { box-shadow: 0 8px 28px rgba(0,0,0,0.12); transform: translateY(-2px); }

    .domain-header {
      display: flex; align-items: center; gap: 14px;
      padding: 16px 20px 14px;
    }
    .domain-header-icon {
      width: 46px; height: 46px; background: #1a3269; border-radius: 50%;
      display: flex; align-items: center; justify-content: center; flex-shrink: 0;
      box-shadow: 0 3px 10px rgba(0,0,0,0.22);
    }
    .domain-header-icon img {
      width: 46px; height: 46px; object-fit: contain;
      filter: brightness(0) invert(1);
    }
    .domain-header h3 {
      color: #1a3269; font-size: 16px; font-weight: 700;
      padding-bottom: 5px;
      border-bottom: 4px solid #FECC1A;
      display: inline-block;
    }

    /* ══ SOCIAL STATISTICS — two-column inner grid ══ */
    .social-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      padding: 10px 16px 14px;
      gap: 0;
    }
    .social-col { display: flex; flex-direction: column; }
    .social-col:first-child {
      border-right: 1px solid #f0f0f0;
      padding-right: 6px;
    }
    .social-col:last-child { padding-left: 6px; }

    /* ── Stat row (shared by link <a> and button) ── */
    .stat-row {
      display: flex; align-items: center; gap: 10px;
      padding: 9px 8px; border-radius: 8px;
      text-decoration: none; position: relative;
      transition: transform 0.18s ease;
    }
    .stat-row::before {
      content: ''; position: absolute; inset: 0;
      background: #eff6ff; border-radius: 8px;
      opacity: 0; transition: opacity 0.18s ease;
    }
    .stat-row:hover::before { opacity: 1; }
    .stat-row:hover { transform: translateX(3px); }

    .stat-row-icon {
      width: 48px; height: 48px; flex-shrink: 0;
      display: flex; align-items: center; justify-content: center;
      position: relative; z-index: 1;
      transition: transform 0.18s ease;
    }
    .stat-row:hover .stat-row-icon { transform: scale(1.08); }
    .stat-row-icon img { width: 42px; height: 42px; object-fit: contain; }

    .stat-row-label {
      font-size: 13px; font-weight: 600; color: #1f2937;
      line-height: 1.35; position: relative; z-index: 1;
      display: flex; align-items: center; gap: 5px;
      transition: color 0.18s ease;
    }
    .stat-row:hover .stat-row-label { color: #1a3269; }

    /* button reset */
    button.stat-row {
      width: 100%; background: transparent; border: none;
      cursor: pointer; text-align: left;
    }

    /* ── Dropdown chevron ── */
    .stat-chevron { transition: transform 0.3s cubic-bezier(.22,1,.36,1); flex-shrink: 0; }

    /* ── Dropdown sub-menu ── */
    .stat-dropdown-menu {
      overflow: hidden; max-height: 0;
      transition: max-height 0.35s cubic-bezier(.22,1,.36,1);
    }
    .stat-dropdown-sub {
      display: flex; flex-direction: column;
      padding-left: 66px; padding-bottom: 4px;
    }
    .stat-sub-link {
      display: flex; align-items: center; gap: 6px;
      font-size: 12px; font-weight: 600; color: #4b5563;
      padding: 7px 10px; border-radius: 6px; text-decoration: none;
      transition: color 0.15s, background 0.15s;
    }
    .stat-sub-link:hover { color: #1a3269; background: #eff6ff; }

    /* ══ ECONOMIC / ENVIRONMENTAL — two-column inner grid ══ */
    .domain-body  { padding: 10px 16px 14px; }
    .items-2col   { display: grid; grid-template-columns: 1fr 1fr; gap: 0 6px; }

    .db-item {
      display: flex; align-items: center; gap: 10px;
      padding: 9px 8px; border-radius: 8px; text-decoration: none;
      position: relative; transition: transform 0.18s ease;
    }
    .db-item::before {
      content: ''; position: absolute; inset: 0;
      background: #eff6ff; border-radius: 8px;
      opacity: 0; transition: opacity 0.18s ease;
    }
    .db-item:hover::before { opacity: 1; }
    .db-item:hover { transform: translateX(3px); }
    .db-item-icon {
      width: 46px; height: 46px; flex-shrink: 0;
      display: flex; align-items: center; justify-content: center;
      position: relative; z-index: 1; transition: transform 0.18s ease;
    }
    .db-item:hover .db-item-icon { transform: scale(1.08); }
    .db-item-icon img { width: 40px; height: 40px; object-fit: contain; }
    .db-item span {
      font-size: 13px; font-weight: 600; color: #1f2937;
      line-height: 1.35; position: relative; z-index: 1;
      transition: color 0.18s ease;
    }
    .db-item:hover span { color: #1a3269; }

    /* ── Sidebar ── */
    .sidebar { display: flex; flex-direction: column; }
    .sidebar-block { background: #fff; border: 1px solid #e5e7eb; }
    .sidebar-block:first-child { border-radius: 10px 10px 0 0; }
    .sidebar-block:not(:first-child) { border-top: none; }
    .sidebar-block:last-child  { border-radius: 0 0 10px 10px; }
    .sidebar-block-header {
      color: #1a3269; font-size: 14px; font-weight: 700;
      padding: 12px 16px 12px;
    }
    .sidebar-block-header span {
      display: inline-block;
      padding-bottom: 5px;
      border-bottom: 3px solid #FECC1A;
    }
    .sidebar-block-body { padding: 10px 16px 16px; }
    .sidebar-link {
      display: block; font-size: 13px; color: #1a56db;
      text-decoration: none; padding: 5px 0;
    }
    .sidebar-link:hover { text-decoration: underline; color: #1a3269; }
    .contact-label   { font-size: 12px; color: #374151; margin-bottom: 6px; }
    .contact-org     { font-size: 12px; color: #1a3269; font-weight: 700; line-height: 1.6; display: block; }
    .contact-address { font-size: 12px; color: #374151; line-height: 1.75; margin-top: 6px; }
    .contact-email-label { font-size: 12px; color: #374151; margin-top: 8px; display: block; }
    .contact-email-link  { font-size: 12px; color: #1a56db; text-decoration: none; }
    .contact-email-link:hover { text-decoration: underline; }

    /* ── Scroll animations ── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(22px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .animate-in {
      opacity: 0;
      animation: fadeUp 0.60s cubic-bezier(.22,1,.36,1) forwards;
      animation-play-state: paused;
    }

    /* ── Footer ── */
    footer {
      background: #1f2937; color: #9ca3af; font-size: 12px;
      padding: 16px 36px; display: flex; align-items: center;
      justify-content: space-between; flex-wrap: wrap; gap: 8px;
    }
    footer a { color: #9ca3af; text-decoration: none; }
    footer a:hover { color: #fff; text-decoration: underline; }

    /* ── Responsive ── */
    @media (max-width: 1024px) {
      .page-grid { grid-template-columns: 1fr; }
      .sidebar { flex-direction: row; flex-wrap: wrap; gap: 12px; }
      .sidebar-block { flex: 1; min-width: 220px; border-radius: 10px !important; border: 1px solid #e5e7eb !important; }
      .main-wrap { padding: 20px 20px 40px; }
    }
    @media (max-width: 768px) {
      #desktopNav   { display: none !important; }
      #hamburgerBtn { display: flex !important; }
      .header-bar   { min-height: 64px !important; padding-left: 16px !important; padding-right: 16px !important; }
      .logo-psa     { height: 54px !important; }
      .logo-openstat { height: 54px !important; }
      .main-wrap    { padding: 16px 14px 40px; }
      .social-grid  { grid-template-columns: 1fr; }
      .social-col:first-child { border-right: none; border-bottom: 1px solid #f0f0f0; padding-right: 0; padding-bottom: 8px; }
      .social-col:last-child { padding-left: 0; padding-top: 8px; }
      .items-2col   { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

<!-- ══════════════════ NAVBAR ══════════════════ -->
<header class="navbar sticky top-0 z-50" style="box-shadow:0 2px 8px rgba(0,0,0,0.35);">
  <div class="header-bar bg-[#1a3269] flex items-center justify-between px-12"
       style="min-height:88px; padding-top:8px; padding-bottom:8px;">
    <div class="flex items-center gap-4">
      <a href="index.php">
        <img class="logo-psa" src="Img/Logos/PSAHeader.png" alt="Philippine Statistics Authority"
             style="height:88px; width:auto; object-fit:contain;"/>
      </a>
    </div>
    <div class="flex items-center gap-3">
      <div style="margin-right:60px;">
        <img class="logo-openstat" src="Img/Logos/OpenStat-White.png" alt="OpenSTAT"
             style="height:90px; width:auto; object-fit:contain;"/>
      </div>
      <button id="hamburgerBtn"
              class="items-center justify-center w-10 h-10 rounded-lg text-white hover:bg-white/20 transition-colors"
              onclick="document.getElementById('mobileMenu').classList.toggle('open')"
              aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>

  <nav id="desktopNav" class="flex items-center justify-center" style="background:#142a56; gap:0;">
    <?php foreach ($nav_items as $nav): ?>
    <a href="<?= htmlspecialchars($nav['href']) ?>"
       class="nav-blue-link <?= $nav['key'] === $active_nav ? 'active-nav' : '' ?>">
      <?= htmlspecialchars($nav['label']) ?>
    </a>
    <?php endforeach; ?>
  </nav>

  <div id="mobileMenu">
    <?php foreach ($nav_items as $nav): ?>
    <a href="<?= htmlspecialchars($nav['href']) ?>"
       <?= $nav['key'] === $active_nav ? 'class="active-nav"' : '' ?>>
      <?= htmlspecialchars($nav['label']) ?>
    </a>
    <?php endforeach; ?>
  </div>
</header>

<!-- ══════════════════ HERO ══════════════════ -->
<div class="relative" style="min-height:180px;">
  <img src="<?= htmlspecialchars($hero_image) ?>" alt=""
       style="position:absolute; inset:0; width:100%; height:100%; object-fit:cover; object-position:center center; z-index:0;"/>
  <div style="position:absolute; inset:0; background:rgba(4,17,61,0.72); z-index:1;"></div>
  <div class="relative z-10 py-8" style="max-width:1180px; margin:0 auto; padding-left:40px;">

    <!-- Breadcrumb -->
    <div class="hero-title text-[12.5px] font-semibold mb-3" style="color:rgba(255,255,255,0.75);">
      <?php foreach ($breadcrumbs as $i => $crumb): ?>
        <?php if ($i > 0): ?>
          <span class="mx-1.5" style="opacity:0.5;">&gt;</span>
        <?php endif; ?>
        <?php if (!empty($crumb['href'])): ?>
          <a href="<?= htmlspecialchars($crumb['href']) ?>"
             style="color:rgba(255,255,255,0.75); text-decoration:none;"
             onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.75)'">
            <?= htmlspecialchars($crumb['label']) ?>
          </a>
        <?php else: ?>
          <span style="color:#fff;"><?= htmlspecialchars($crumb['label']) ?></span>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>

    <h1 class="hero-title text-[30px] font-bold text-white mb-2"
        style="text-shadow:0 2px 14px rgba(0,0,0,0.5);">
      PSA Statistical Database
    </h1>
  </div>
</div>

<!-- ══════════════════ MAIN CONTENT ══════════════════ -->
<div class="bg-[#e8e8e8]">
  <div class="main-wrap">

    <!-- Intro -->
    <div class="intro-block animate-in" style="animation-delay:0.05s; margin-bottom:22px;">
      <h2>PSA Statistical Databases</h2>
      <p>
        The database presented in this section highlights the statistics generated and compiled by the PSA at
        the national and sub-national levels. These are limited to summarized and/or aggregated data which are
        organized into three (3) major domains, namely, (1) Social Statistics, (2) Economic and Financial Statistics, 
        and (3) Environmental Statistics.
      </p>
      <p style="margin-top:10px;">
        For those interested in microdata, please visit the
        <a href="https://psada.psa.gov.ph" target="_blank">Philippine Statistics Authority - Data Archive (PSADA).</a>
      </p>
      <hr class="intro-divider"/>
    </div>

    <!-- Page grid -->
    <div class="page-grid">
      <div class="left-col">

        <!-- ════════════════════════════════
             SOCIAL STATISTICS
             ════════════════════════════════ -->
        <div class="domain-card animate-in" style="animation-delay:0.10s;">
          <div class="domain-header">
            <div class="domain-header-icon">
              <img src="Img/Icons/Social Statistics/Population-Icon.png" alt="Social Statistics"/>
            </div>
            <h3>Social Statistics</h3>
          </div>

          <div class="social-grid">

            <!-- LEFT COL -->
            <div class="social-col">

              <!-- Population and Vital Statistics -->
              <a href="pop-sub.php" class="stat-row">
                <div class="stat-row-icon">
                  <img src="Img/Icons/Social Statistics/Pop-Vit.png" alt=""/>
                </div>
                <span class="stat-row-label">Population and Vital Statistics</span>
              </a>

              <!-- Education dropdown -->
              <button class="stat-row" onclick="toggleStatDropdown('edu-drop', this)">
                <div class="stat-row-icon">
                  <img src="Img/Icons/Social Statistics/Education.png" alt=""/>
                </div>
                <span class="stat-row-label">
                  Education
                  <svg class="stat-chevron" xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                       fill="none" viewBox="0 0 24 24" stroke="#6b7280" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                  </svg>
                </span>
              </button>
              <div id="edu-drop" class="stat-dropdown-menu">
                <div class="stat-dropdown-sub">
                  <a href="education-facilities.php" class="stat-sub-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#1a3269" viewBox="0 0 6 6"><circle cx="3" cy="3" r="3"/></svg>
                    Education Facilities
                  </a>
                  <a href="education-outcomes.php" class="stat-sub-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#1a3269" viewBox="0 0 6 6"><circle cx="3" cy="3" r="3"/></svg>
                    Education Outcomes
                  </a>
                </div>
              </div>

              <!-- Health dropdown -->
              <button class="stat-row" onclick="toggleStatDropdown('health-drop', this)">
                <div class="stat-row-icon">
                  <img src="Img/Icons/Social Statistics/Health.png" alt=""/>
                </div>
                <span class="stat-row-label">
                  Health
                  <svg class="stat-chevron" xmlns="http://www.w3.org/2000/svg" width="13" height="13"
                       fill="none" viewBox="0 0 24 24" stroke="#6b7280" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                  </svg>
                </span>
              </button>
              <div id="health-drop" class="stat-dropdown-menu">
                <div class="stat-dropdown-sub">
                  <a href="health-facilities.php" class="stat-sub-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#1a3269" viewBox="0 0 6 6"><circle cx="3" cy="3" r="3"/></svg>
                    Health Facilities
                  </a>
                  <a href="health-outcomes.php" class="stat-sub-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#1a3269" viewBox="0 0 6 6"><circle cx="3" cy="3" r="3"/></svg>
                    Health Outcomes
                  </a>
                </div>
              </div>

              <!-- Migration -->
              <a href="migration.php" class="stat-row">
                <div class="stat-row-icon">
                  <img src="Img/Icons/Social Statistics/Gender Statistics.png" alt=""/>
                </div>
                <span class="stat-row-label">Migration</span>
              </a>

              <!-- Reproductive Health -->
              <a href="reproductive-health.php" class="stat-row">
                <div class="stat-row-icon">
                  <img src="Img/Icons/Social Statistics/Reproductive Health.png" alt=""/>
                </div>
                <span class="stat-row-label">Reproductive Health</span>
              </a>

            </div><!-- /social-col left -->

            <!-- RIGHT COL -->
            <div class="social-col">

              <!-- Food Security and Nutrition -->
              <a href="food-security.php" class="stat-row">
                <div class="stat-row-icon">
                  <img src="Img/Icons/Social Statistics/Food Security and Nutritions.png" alt=""/>
                </div>
                <span class="stat-row-label">Food Security and Nutrition</span>
              </a>

              <!-- Gender Statistics -->
              <a href="gender-statistics.php" class="stat-row">
                <div class="stat-row-icon">
                  <img src="Img/Icons/Social Statistics/Gender Statistics.png" alt=""/>
                </div>
                <span class="stat-row-label">Gender Statistics</span>
              </a>

              <!-- Crime and Justice Statistics -->
              <a href="crime-justice.php" class="stat-row">
                <div class="stat-row-icon">
                  <img src="Img/Icons/Social Statistics/Crime and Justice Statistics.png" alt=""/>
                </div>
                <span class="stat-row-label">Crime and Justice Statistics</span>
              </a>

              <!-- Poverty and Income Statistics -->
              <a href="poverty-income.php" class="stat-row">
                <div class="stat-row-icon">
                  <img src="Img/Icons/Social Statistics/Poverty and Income Statistics.png" alt=""/>
                </div>
                <span class="stat-row-label">Poverty and Income Statistics</span>
              </a>

            </div><!-- /social-col right -->

          </div><!-- /social-grid -->
        </div><!-- /Social domain-card -->


        <!-- ════════════════════════════════
             ECONOMIC AND FINANCIAL STATISTICS
             ════════════════════════════════ -->
        <div class="domain-card animate-in" style="animation-delay:0.18s;">
          <div class="domain-header">
            <div class="domain-header-icon">
              <img src="Img/Icons/Economic and Financial Statistics/Economic-Statistics.png" alt="Economic Statistics"/>
            </div>
            <h3>Economic and Financial Statistics</h3>
          </div>
          <div class="domain-body">
            <div class="items-2col">
              <?php
              $economic = [
                ['icon'=>'Img/Icons/Economic and Financial Statistics/National Accounts.png',  'label'=>'National Accounts',  'href'=>'national-accounts.php'],
                ['icon'=>'Img/Icons/Economic and Financial Statistics/Labor Statistics.png',    'label'=>'Labor Statistics',   'href'=>'labor-statistics.php'],
                ['icon'=>'Img/Icons/Economic and Financial Statistics/Price Indexes.png',       'label'=>'Price Indexes',      'href'=>'price-indexes.php'],
                ['icon'=>'Img/Icons/Economic and Financial Statistics/Government Finance.png',  'label'=>'Government Finance', 'href'=>'government-finance.php'],
                ['icon'=>'Img/Icons/Economic and Financial Statistics/Money and Banking.png',   'label'=>'Money and Banking',  'href'=>'money-banking.php'],
                ['icon'=>'Img/Icons/Economic and Financial Statistics/International Trade.png', 'label'=>'International Trade','href'=>'international-trade.php'],
                ['icon'=>'Img/Icons/Economic and Financial Statistics/Balance of Payments.png', 'label'=>'Balance of Payments','href'=>'balance-payments.php'],
              ];
              foreach ($economic as $i => $item): ?>
              <?php if ($i > 0 && $i % 2 === 0): ?>
                <hr style="grid-column:1/-1; border:none; border-top:1px solid #f3f4f6; margin:0;"/>
              <?php endif; ?>
              <a href="<?= htmlspecialchars($item['href']) ?>" class="db-item">
                <div class="db-item-icon"><img src="<?= htmlspecialchars($item['icon']) ?>" alt=""/></div>
                <span><?= htmlspecialchars($item['label']) ?></span>
              </a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>


        <!-- ════════════════════════════════
             ENVIRONMENTAL STATISTICS
             ════════════════════════════════ -->
        <div class="domain-card animate-in" style="animation-delay:0.26s;">
          <div class="domain-header">
            <div class="domain-header-icon">
              <img src="Img/Icons/Environmental Statistics/Environment-Statistics.png" alt="Environmental Statistics"/>
            </div>
            <h3>Environmental Statistics</h3>
          </div>
          <div class="domain-body">
            <div class="items-2col">
              <?php
              $environmental = [
                ['icon'=>'Img/Icons/Environmental Statistics/Agriculture and Land Use.png', 'label'=>'Agriculture and Land Use', 'href'=>'agriculture-land.php'],
                ['icon'=>'Img/Icons/Environmental Statistics/Resource Use.png',             'label'=>'Resource Use',             'href'=>'resource-use.php'],
                ['icon'=>'Img/Icons/Environmental Statistics/Energy.png',                   'label'=>'Energy',                   'href'=>'energy.php'],
                ['icon'=>'Img/Icons/Environmental Statistics/Pollution.png',                'label'=>'Pollution',                'href'=>'pollution.php'],
                ['icon'=>'Img/Icons/Environmental Statistics/Built Environment.png',        'label'=>'Built Environment',        'href'=>'built-environment.php'],
                ['icon'=>'Img/Icons/Environmental Statistics/Digital Connectivity.png',     'label'=>'Digital Connectivity',     'href'=>'digital-connectivity.php'],
              ];
              foreach ($environmental as $i => $item): ?>
              <?php if ($i > 0 && $i % 2 === 0): ?>
                <hr style="grid-column:1/-1; border:none; border-top:1px solid #f3f4f6; margin:0;"/>
              <?php endif; ?>
              <a href="<?= htmlspecialchars($item['href']) ?>" class="db-item">
                <div class="db-item-icon"><img src="<?= htmlspecialchars($item['icon']) ?>" alt=""/></div>
                <span><?= htmlspecialchars($item['label']) ?></span>
              </a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

      </div><!-- /left-col -->


      <!-- ════════════════════════════════
           SIDEBAR
           ════════════════════════════════ -->
      <div class="sidebar animate-in" style="animation-delay:0.14s;">

        <div class="sidebar-block">
          <div class="sidebar-block-header"><span>Related Links</span></div>
          <div class="sidebar-block-body">
            <a href="#" class="sidebar-link">User Guide's</a>
          </div>
        </div>

        <div class="sidebar-block">
          <div class="sidebar-block-header"><span>Contact Us</span></div>
          <div class="sidebar-block-body">
            <p class="contact-label">For data inquiries, contact:</p>
            <span class="contact-org">Knowledge Management and</span>
            <span class="contact-org">Division (KMD)</span>
            <span class="contact-org">Philippines Statistics Authority</span>
            <p class="contact-address">
              Philippine Statistics Authority<br/>
              9/F PSA Headquarters PSA Complex,<br/>
              East Avenue, Diliman, Quezon City
            </p>
            <span class="contact-email-label">Email</span>
            <a href="mailto:info@psa.gov.ph" class="contact-email-link">info@psa.gov.ph</a>
          </div>
        </div>

      </div><!-- /sidebar -->

    </div><!-- /page-grid -->

  </div><!-- /main-wrap -->
</div>

<!-- ══════════════════ FOOTER ══════════════════ -->
<footer>
  <span>2026 Philippine Statistics Authority. All content is public domain unless otherwise stated.</span>
  <div style="display:flex; align-items:center; gap:12px;">
    <a href="#">Terms Of Use</a>
    <span style="color:#4b5563;">|</span>
    <a href="#">Privacy Statement</a>
  </div>
</footer>

<script>
  /* ── Scroll-triggered animations ── */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.style.animationPlayState = 'running';
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.06 });
  document.querySelectorAll('.animate-in').forEach(el => observer.observe(el));

  /* ── Stat dropdown toggle — one open at a time ── */
  function toggleStatDropdown(id, btn) {
    const menu    = document.getElementById(id);
    const chevron = btn.querySelector('.stat-chevron');
    const isOpen  = menu.style.maxHeight && menu.style.maxHeight !== '0px';

    /* close all */
    document.querySelectorAll('.stat-dropdown-menu').forEach(m => { m.style.maxHeight = '0px'; });
    document.querySelectorAll('.stat-chevron').forEach(c => { c.style.transform = 'rotate(0deg)'; });

    if (!isOpen) {
      menu.style.maxHeight = menu.scrollHeight + 'px';
      chevron.style.transform = 'rotate(180deg)';
    }
  }
</script>
</body>
</html>