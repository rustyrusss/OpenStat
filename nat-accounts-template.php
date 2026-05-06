<?php
/* ============================================================
   PAGE CONFIGURATION — Edit everything here
   ============================================================ */

$page_title       = 'Economic Accounts';
$page_description = 'Economic Accounts presents data on the economic indicators and statistics for the country. These statistics support planning, policy-making, and research for economic development.';
$active_nav       = 'database';

$hero_icon       = 'Img/Eco-Acc/Economic-Accounts.png';
$hero_bg_graphic = 'Img/Pop-Sub/Background.png';

$categories_section_title    = 'Categories';
$categories_section_subtitle = 'Explore the economic indicators and statistics available in each category.';

$categories = [
  [
    'label'       => 'National Accounts of the Philippines',
    'description' => 'Data on the total population size, population growth, density, and distribution by age, sex, and geographic area.',
    'icon'        => 'Img/Eco-Acc/National Accounts.png',
    'href'        => '',
    'count'       => '24 datasets',
 
  ],
  [
    'label'       => 'Seasonally Adjusted National Accounts of the Philippines',
    'description' => 'Statistics on live birth including number of births, birth rates, age of mother and other birth-related characteristics.',
     'icon'  => 'Img/Eco-Acc/National Accounts.png',
    'href'        => '',
    'count'       => '18 datasets',
  ],
  [
    'label'       => 'Gross Regional Domestic Expenditure (GRDE)',
    'description' => 'Data on deaths including number of deaths, death rates, causes of death, age, sex, and other demographic details.',
    'icon'        => 'Img/Eco-Acc/National Accounts.png',
    'href'        => '',
    'count'       => '21 datasets',
  ],
  [
    'label'       => 'Gross Regional Domestic Product (GRDP)',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Eco-Acc/National Accounts.png',
    'href'        => '',
    'count'       => '15 datasets',
  ],
    [
    'label'       => 'Provincial Product Accounts (PPA)',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Eco-Acc/National Accounts.png',
    'href'        => '',
    'count'       => '15 datasets',
  ],
    [
    'label'       => 'Consolidated Accounts and Income and Outlay Accounts',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Eco-Acc/National Accounts.png',
    'href'        => '',
    'count'       => '15 datasets',
    
  ],
    [
    'label'       => 'Satellite Accounts',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Eco-Acc/National Accounts.png',
    'href'        => '',
    'count'       => '15 datasets',
    'subcategories' => [
      ['label' => 'Creative Economy', 'href' => '', 'count' => '6 datasets'],
      ['label' => 'Digital Economy',        'href' => '',                             'count' => '4 datasets'],
      ['label' => 'Tourism Satellite Account',    'href' => '',                             'count' => '7 datasets'],
      ['label' => 'Sustainable Tourism',   'href' => '',                             'count' => '5 datasets'],
      ['label' => 'Health Account',    'href' => '',                             'count' => '2 datasets'],
      ['label' => 'Ocean Economy',    'href' => '',                             'count' => '2 datasets'],
    ], 
  ],
    [
    'label'       => 'Approved Investment',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Eco-Acc/National Accounts.png',
    'href'        => 'pop-marriage.php',
    'count'       => '15 datasets',
  ],
   [
    'label'       => 'Agricultural Accounts',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Eco-Acc/National Accounts.png',
    'href'        => 'pop-marriage.php',
    'count'       => '15 datasets',
  ],

];

$nav_items = [
  ['label' => 'Home',       'href' => 'index.php',    'key' => 'home'],
  ['label' => 'About',      'href' => 'about.php',    'key' => 'about'],
  ['label' => 'Database',   'href' => 'database.php', 'key' => 'database'],
  ['label' => 'Dashboard',  'href' => 'dashboard.php','key' => 'dashboard'],
  ['label' => 'Featured',   'href' => 'featured.php', 'key' => 'featured'],
  ['label' => 'Contact Us', 'href' => 'contact.php',  'key' => 'contact'],
];
/* ============================================================
   END CONFIGURATION
   ============================================================ */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PSA OpenSTAT – <?= htmlspecialchars($page_title) ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet"/>

  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    html { height: 100%; }
    body {
      font-family: 'Open Sans', sans-serif;
      background: #f0f0f0;
      color: #1f2937;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    /* ─── NAVBAR ─── */
    .navbar {
      position: sticky; top: 0; z-index: 100;
      box-shadow: 0 2px 8px rgba(0,0,0,.35);
      animation: slideDown .45s cubic-bezier(.22,1,.36,1) both;
    }
    @keyframes slideDown {
      from { transform: translateY(-100%); opacity: 0; }
      to   { transform: translateY(0);     opacity: 1; }
    }
    .nav-link {
      display: inline-block; color: #fff; font-size: 15px; font-weight: 600;
      text-decoration: none; padding: 13px 30px;
      transition: background .15s; white-space: nowrap;
    }
    .nav-link:hover      { background: rgba(255,255,255,.12); }
    .nav-link.active-nav { background: rgba(255,255,255,.20); font-weight: 700; }

    /* ─── HERO BANNER ─── */
    .hero-banner {
      position: relative;
      overflow: hidden;
      background: #e8ecf2;
      padding: 60px 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 320px;
      width: 100%;
    }
    .hero-bg-img {
      position: absolute;
      right: 0; top: 0; bottom: 0;
      height: 100%;
      width: auto;
      object-fit: contain;
      object-position: right center;
      opacity: 0.30;
      pointer-events: none;
      -webkit-mask-image: linear-gradient(to right, transparent 0%, black 30%);
      mask-image: linear-gradient(to right, transparent 0%, black 30%);
    }
    .hero-inner {
      position: relative; z-index: 1;
      display: flex; align-items: center; gap: 36px;
      width: 100%;
      max-width: 960px;
      animation: fadeUp .5s .06s cubic-bezier(.22,1,.36,1) both;
    }
    .hero-icon-box {
      flex-shrink: 0;
      width: 140px; height: 140px;
      background: #1a3269;
      border-radius: 22px;
      display: flex; align-items: center; justify-content: center;
      box-shadow: 0 6px 24px rgba(26,50,105,.28);
    }
    .hero-icon-box img { width: 90px; height: 90px; object-fit: contain; }
    .hero-text h1 {
      font-size: 30px; font-weight: 800; color: #1a3269;
      margin-bottom: 14px; line-height: 1.2;
    }
    .hero-text p {
      font-size: 14px; color: #374151; line-height: 1.8; max-width: 580px;
    }
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(16px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    /* ─── MAIN AREA ─── */
    .main-wrap {
      flex: 1;
      max-width: 1200px;
      width: 100%;
      margin: 0 auto;
      padding: 30px 32px 60px;
    }

    /* ─── SECTION HEADER ─── */
    .section-header {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      margin-bottom: 6px;
      flex-wrap: wrap;
      gap: 12px;
    }
    .section-title {
      font-size: 20px; font-weight: 800; color: #1a3269;
    }
    .section-sub {
      font-size: 13px; color: #6b7280; margin-bottom: 20px;
    }

    /* ─── FOOTER ─── */
    footer {
      background: #1f2937; color: #9ca3af;
      font-size: 12px; padding: 14px 36px;
      display: flex; align-items: center;
      justify-content: space-between; flex-wrap: wrap; gap: 8px;
    }
    footer a { color: #9ca3af; text-decoration: none; }
    footer a:hover { color: #fff; }
  </style>

  <!-- ★ Category list component stylesheet ★ -->
  <link rel="stylesheet" href="assets/css/category-list.css"/>
  <link rel="stylesheet" href="assets/css/scroll-top.css"/>
</head>
<body>

<!-- ════ NAVBAR ════ -->
<header class="navbar">
  <div style="background:#1a3269; display:flex; align-items:center; justify-content:space-between; padding:8px 48px; min-height:88px;">
    <div>
      <img src="Img/Logos/PSAHeader.png" alt="Philippine Statistics Authority" style="height:88px; width:auto; object-fit:contain;"/>
    </div>
    <div style="margin-right:60px;">
      <img src="Img/Logos/OpenStat-White.png" alt="OpenSTAT" style="height:90px; width:auto; object-fit:contain;"/>
    </div>
  </div>
  <nav style="background:#142a56; display:flex; align-items:center; justify-content:center;">
    <?php foreach ($nav_items as $item): ?>
    <a href="<?= htmlspecialchars($item['href']) ?>"
       class="nav-link <?= $item['key'] === $active_nav ? 'active-nav' : '' ?>">
      <?= htmlspecialchars($item['label']) ?>
    </a>
    <?php endforeach; ?>
  </nav>
</header>

<!-- ════ HERO BANNER ════ -->
<section class="hero-banner">
  <img src="<?= htmlspecialchars($hero_bg_graphic) ?>" alt="" class="hero-bg-img" aria-hidden="true"/>

  <!-- Breadcrumb -->
  <nav style="position:absolute; top:16px; left:50%; transform:translateX(-50%); z-index:2;
              width:100%; max-width:960px; padding:0 12px;
              display:flex; align-items:center; gap:8px; font-size:13px;">
    <a href="database.php" style="color:#4b6cb7; text-decoration:none; font-weight:600; transition:color .15s;"
       onmouseover="this.style.color='#1a3269'" onmouseout="this.style.color='#4b6cb7'">Database</a>
    <span style="color:#9ca3af; font-size:12px;">›</span>
    <span style="color:#1a3269; font-weight:700;"><?= htmlspecialchars($page_title) ?></span>
  </nav>

  <div class="hero-inner">
    <div class="hero-icon-box">
      <img src="<?= htmlspecialchars($hero_icon) ?>" alt="Population icon"/>
    </div>
    <div class="hero-text">
      <h1><?= htmlspecialchars($page_title) ?></h1>
      <p><?= htmlspecialchars($page_description) ?></p>
    </div>
  </div>
</section>

<!-- ════ MAIN CONTENT ════ -->
<div class="main-wrap">

  <div class="section-header">
    <h2 class="section-title"><?= htmlspecialchars($categories_section_title) ?></h2>
  </div>
  <p class="section-sub"><?= htmlspecialchars($categories_section_subtitle) ?></p>

  <!-- ══ CATEGORY LIST (uses category-list.css + category-list.js) ══ -->
  <div class="cl-list">
    <?php foreach ($categories as $i => $cat):
      $hasSubs = !empty($cat['subcategories']);
      $delay   = round(0.04 + $i * 0.06, 2);
    ?>
    <div class="cl-item" style="animation-delay: <?= $delay ?>s;">

      <!-- Main card -->
      <a href="<?= htmlspecialchars($cat['href']) ?>"
         class="cl-card"
         <?= $hasSubs ? 'onclick="return clCardClick(event, this)"' : '' ?>>

        <div class="cl-icon">
          <img src="<?= htmlspecialchars($cat['icon']) ?>" alt="<?= htmlspecialchars($cat['label']) ?> icon"/>
        </div>

        <div class="cl-info">
          <h3><?= htmlspecialchars($cat['label']) ?></h3>
          <p><?= htmlspecialchars($cat['description']) ?></p>
        </div>

        <div class="cl-meta">
          <span class="cl-count"><?= htmlspecialchars($cat['count']) ?></span>

          <?php if ($hasSubs): ?>
          <button class="cl-expand-btn" title="Show subcategories" onclick="clToggle(event, this)">
            <span class="icon-plus">+</span>
            <span class="icon-minus">−</span>
          </button>
          <?php else: ?>
          <div class="cl-arrow" aria-hidden="true">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
          </div>
          <?php endif; ?>
        </div>
      </a>

      <?php if ($hasSubs): ?>
      <div class="cl-sub-panel">
        <div class="cl-sub-inner">
          <?php foreach ($cat['subcategories'] as $sub): ?>
          <a href="<?= htmlspecialchars($sub['href']) ?>" class="cl-sub-item">
  <span class="cl-sub-left">
    <span class="cl-sub-dot" aria-hidden="true"></span>
    <?= htmlspecialchars($sub['label']) ?>
  </span>
  <span style="display:flex; align-items:center; gap:8px; flex-shrink:0;">
    <span class="cl-sub-count"><?= htmlspecialchars($sub['count']) ?></span>
    <span class="cl-sub-arrow" aria-hidden="true">
      <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#1a3269" stroke-width="2.5">
        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
      </svg>
    </span>
  </span>
</a>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>

    </div>
    <?php endforeach; ?>
  </div>

</div>
<button id="scroll-top-btn" aria-label="Back to top" title="Back to top">
  <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
       stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
    <path d="M18 15l-6-6-6 6"/>
  </svg>
</button>

<!-- ════ FOOTER ════ -->
<footer>
  <span>2026 Philippine Statistics Authority. All content is public domain unless otherwise stated.</span>
  <div style="display:flex;align-items:center;gap:12px;">
    <a href="#">Terms Of Use</a>
    <span style="color:#4b5563;">|</span>
    <a href="#">Privacy Statement</a>
  </div>
     </footer>

<!-- ★ Category list component script ★ -->
<script src="assets/js/category-list.js"></script>
<script src="assets/js/scroll-top.js"></script>

</body>
</html>