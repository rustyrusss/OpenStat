<?php
// PSA OpenSTAT - Dashboard
$current = basename($_SERVER['PHP_SELF'], '.php');
$pageMap = [
  'index'    => 'home',
  'about'    => 'about',
  'database' => 'database',
  'metadata' => 'metadata',
  'featured' => 'featured',
  'contact'  => 'contact',
];
$activePage = $pageMap[$current] ?? 'home';

function navClass($page, $activePage) {
  return $page === $activePage ? 'nav-link active' : 'nav-link';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PSA OpenSTAT - Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <style>
    /* ══════════════════════════════════════════
       DESIGN TOKENS
    ══════════════════════════════════════════ */
    :root {
      --color-primary:           #1a3269;
      --color-primary-dark:      #142a56;
      --color-primary-light:     #eff6ff;
      --color-primary-ring:      rgba(26, 50, 105, 0.12);

      --color-bg:                #e8e8e8;
      --color-surface:           #ffffff;
      --color-surface-white:     #ffffff;
      --color-border:            #d1d5db;
      --color-text-body:         #374151;
      --color-text-heading:      #1f2937;
      --color-text-muted:        #9ca3af;
      --color-text-subtle:       #4b5563;
      --color-icon-stroke:       #374151;
      --color-search-icon:       #9ca3af;

      --color-hero-base:         #06124a;
      --color-hero-text:         #ffffff;
      --color-hero-subtext:      #dbeafe;

      --color-footer-bg:         #1f2937;
      --color-footer-text:       #9ca3af;
      --color-navbar-bg:         #ffffff;
      --color-navbar-shadow:     rgba(0,0,0,0.10);

      --shadow-card:             0 2px 12px rgba(0,0,0,0.08);
      --shadow-card-hover:       0 16px 40px rgba(0,0,0,0.16);
      --shadow-search-bar:       0 4px 24px rgba(0,0,0,0.35);
      --shadow-search-bar-focus: 0 10px 40px rgba(0,0,0,0.45);

      --ease-out:      cubic-bezier(.22,1,.36,1);
      --ease-standard: cubic-bezier(.4,0,.2,1);
      --dur-fast:      0.18s;
      --dur-base:      0.28s;
      --dur-slow:      0.50s;
    }

    /* ══════════════════════════════════════════
       RESET
    ══════════════════════════════════════════ */
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body {
      font-family: 'Open Sans', sans-serif;
      background: var(--color-bg);
      overflow-x: hidden;
    }

    /* ══════════════════════════════════════════
       NAVBAR
    ══════════════════════════════════════════ */
    .navbar {
      background: var(--color-navbar-bg);
      box-shadow: 0 2px 8px var(--color-navbar-shadow);
      padding: 0 160px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 75px;
      position: sticky;
      top: 0;
      z-index: 100;
      animation: slideDown 0.5s var(--ease-out) both;
    }
    @keyframes slideDown {
      from { transform: translateY(-100%); opacity: 0; }
      to   { transform: translateY(0);     opacity: 1; }
    }

    .nav-links { display: flex; align-items: center; gap: 2px; }
    .nav-link {
      color: var(--color-text-body);
      font-size: 15px;
      font-weight: 500;
      text-decoration: none;
      padding: 8px 20px;
      border-radius: 6px;
      white-space: nowrap;
      transition: color var(--dur-fast) var(--ease-standard),
                  background var(--dur-fast) var(--ease-standard);
    }
    .nav-link:hover {
      color: var(--color-primary);
      background: var(--color-primary-light);
    }
    .nav-link.active {
      background: var(--color-primary);
      color: #fff;
      font-weight: 600;
      padding: 9px 26px;
    }
    .nav-link.active:hover {
      background: var(--color-primary-dark);
      color: #fff;
    }

    /* Search pill */
    .search-pill {
      display: flex;
      align-items: center;
      margin-left: 6px;
      background: var(--color-surface-white);
      border: 2px solid var(--color-border);
      border-radius: 24px;
      height: 38px;
      overflow: hidden;
      width: 38px;
      transition: border-color var(--dur-base) var(--ease-standard),
                  width var(--dur-slow) var(--ease-standard),
                  box-shadow var(--dur-base) var(--ease-standard);
    }
    .search-pill.open {
      width: 220px;
      border-color: var(--color-primary);
      box-shadow: 0 0 0 3px var(--color-primary-ring);
    }
    .search-pill-btn {
      flex-shrink: 0;
      width: 34px; height: 34px;
      display: flex; align-items: center; justify-content: center;
      cursor: pointer;
      background: transparent;
      border: none;
      border-radius: 50%;
      transition: background var(--dur-fast) var(--ease-standard);
    }
    .search-pill-btn:hover { background: var(--color-primary-light); }
    .search-pill-input {
      flex: 1;
      min-width: 0;
      padding: 0 10px 0 2px;
      font-size: 14px;
      color: var(--color-text-body);
      background: transparent;
      border: none;
      outline: none;
      font-family: 'Open Sans', sans-serif;
      opacity: 0;
      pointer-events: none;
      transition: opacity var(--dur-fast) var(--ease-standard) 0.12s;
    }
    .search-pill.open .search-pill-input { opacity: 1; pointer-events: auto; }

    /* ══════════════════════════════════════════
       HERO  — image fades naturally into page bg
    ══════════════════════════════════════════ */
    .hero-wrapper {
      position: relative;
      padding-bottom: 20px;
      background: var(--color-bg);
    }

    /* Backdrop image — full-width, masked to fade at the bottom */
    .hero-wrapper > img.hero-backdrop {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center top;
      z-index: 0;
      -webkit-mask-image: linear-gradient(to bottom,
        black  0%,
        black  50%,
        rgba(0,0,0,0.55) 72%,
        rgba(0,0,0,0.0) 100%
      );
      mask-image: linear-gradient(to bottom,
        black  0%,
        black  50%,
        rgba(0,0,0,0.55) 72%,
        rgba(0,0,0,0.0) 100%
      );
    }

    .hero-bg {
      position: relative;
      z-index: 1;
      min-height: 290px;
      display: flex;
      align-items: center;
      justify-content: center;
      /* Dark navy overlay so text is readable, fades out near the bottom */
      background: linear-gradient(to bottom,
        rgba(4,17,61,0.88)  0%,
        rgba(4,17,61,0.78) 40%,
        rgba(4,17,61,0.40) 72%,
        rgba(4,17,61,0.00) 100%
      );
    }

    /* Remove the old separate fade strip */
    .hero-fade { display: none; }

    .hero-content {
      position: relative;
      z-index: 2;
      padding: 56px 24px 64px;
      text-align: center;
      color: var(--color-hero-text);
      width: 100%;
    }
    .hero-title {
      font-size: 30px;
      font-weight: 700;
      margin-bottom: 16px;
      text-shadow: 0 2px 18px rgba(0,0,0,0.55);
      letter-spacing: 0.2px;
      animation: heroFadeIn 0.8s 0.2s var(--ease-out) both;
    }
    .hero-desc {
      font-size: 14px;
      line-height: 1.95;
      color: var(--color-hero-subtext);
      max-width: 660px;
      margin: 0 auto 34px;
      text-shadow: 0 1px 8px rgba(0,0,0,0.40);
      animation: heroFadeIn 0.8s 0.35s var(--ease-out) both;
    }
    .search-bar-wrap {
      display: flex;
      justify-content: center;
      animation: heroFadeIn 0.8s 0.50s var(--ease-out) both;
    }
    .search-bar {
      display: flex;
      width: 100%;
      max-width: 620px;
      border-radius: 5px;
      overflow: hidden;
      box-shadow: var(--shadow-search-bar);
      transition: box-shadow var(--dur-base) var(--ease-standard),
                  transform  var(--dur-base) var(--ease-standard);
    }
    .search-bar:focus-within {
      box-shadow: var(--shadow-search-bar-focus);
      transform: translateY(-2px);
    }
    .search-bar-icon {
      background: var(--color-surface-white);
      display: flex;
      align-items: center;
      padding: 0 14px;
    }
    .search-bar input {
      flex: 1;
      padding: 13px 6px;
      font-size: 14px;
      color: var(--color-text-body);
      background: var(--color-surface-white);
      border: none;
      outline: none;
      font-family: 'Open Sans', sans-serif;
    }
    .search-bar button {
      background: var(--color-primary);
      color: #fff;
      padding: 13px 34px;
      font-size: 14px;
      font-weight: 600;
      border: none;
      cursor: pointer;
      font-family: 'Open Sans', sans-serif;
      transition: background var(--dur-fast) var(--ease-standard);
    }
    .search-bar button:hover { background: var(--color-primary-dark); }

    /* ══════════════════════════════════════════
       CONTENT AREA
    ══════════════════════════════════════════ */
    .content-backdrop {
      background-image: url('Img/Backdop white.png');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center top;
      background-color: var(--color-bg);
      padding-top: 0;
      margin-top: -40px;
    }

    .main-content {
      max-width: 1100px;
      margin: 0 auto;
      padding: 20px 40px 60px;
    }

    /* ══════════════════════════════════════════
       STAT CARDS
    ══════════════════════════════════════════ */
    .stat-card {
      background: var(--color-surface);
      border-radius: 12px;
      box-shadow: var(--shadow-card);
      transition: box-shadow var(--dur-base) var(--ease-out),
                  transform  var(--dur-base) var(--ease-out);
    }
    .stat-card:hover {
      box-shadow: var(--shadow-card-hover);
      transform: translateY(-4px);
    }
    .card-inner { padding: 26px 28px; }

    .card-header {
      display: flex;
      align-items: center;
      gap: 16px;
      margin-bottom: 22px;
    }
    .sec-icon {
      width: 60px; height: 60px;
      background: var(--color-surface-white);
      border: 5px solid var(--color-primary);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
      box-shadow: 0 2px 10px rgba(26,50,105,0.15);
    }
    .sec-icon img { width: 65px; height: 65px; object-fit: contain; }
    .card-title {
      font-size: 16px;
      font-weight: 700;
      color: var(--color-primary);
      line-height: 1.35;
    }

    /* Stat items */
    .stat-item {
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 10px 8px;
      border-radius: 8px;
      text-decoration: none;
      position: relative;
      overflow: hidden;
      transition: transform var(--dur-fast) var(--ease-out);
    }
    .stat-item::before {
      content: '';
      position: absolute;
      inset: 0;
      background: var(--color-primary-light);
      border-radius: 8px;
      opacity: 0;
      transition: opacity var(--dur-fast) var(--ease-standard);
    }
    .stat-item:hover::before { opacity: 1; }
    .stat-item:hover { transform: translateX(3px); }

    .row-icon {
      width: 52px; height: 52px;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
      position: relative; z-index: 1;
      transition: transform var(--dur-fast) var(--ease-out);
    }
    .stat-item:hover .row-icon { transform: scale(1.1); }
    .row-icon img { width: 50px; height: 50px; object-fit: contain; }

    .stat-item span {
      font-size: 14px;
      font-weight: 600;
      color: var(--color-text-heading);
      line-height: 1.35;
      position: relative; z-index: 1;
      transition: color var(--dur-fast) var(--ease-standard);
    }
    .stat-item:hover span { color: var(--color-primary); }
    .stat-item span.sm { font-size: 13px; }

    /* Social 3-col grid */
    .grid-3col-social {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 4px 12px;
    }

    /* Two-col row */
    .row-two-col {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      margin-bottom: 20px;
    }

    /* ══════════════════════════════════════════
       FEATURED CARDS
    ══════════════════════════════════════════ */
    .featured-grid {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      gap: 20px;
    }
    .featured-card {
      background: var(--color-surface);
      border-radius: 12px;
      box-shadow: var(--shadow-card);
      overflow: hidden;
      text-decoration: none;
      display: flex;
      flex-direction: column;
      transition: box-shadow var(--dur-base) var(--ease-out),
                  transform  var(--dur-base) var(--ease-out);
    }
    .featured-card:hover {
      box-shadow: var(--shadow-card-hover);
      transform: translateY(-5px);
    }
    .featured-card-img-wrap {
      overflow: hidden;
      height: 155px;
    }
    .featured-card-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform var(--dur-slow) var(--ease-out);
    }
    .featured-card:hover .featured-card-img { transform: scale(1.06); }
    .featured-card-body {
      padding: 16px 18px 22px;
      flex: 1;
    }
    .featured-card-title {
      font-size: 14px;
      font-weight: 700;
      color: var(--color-primary);
      margin-bottom: 8px;
    }
    .featured-card-desc {
      font-size: 13px;
      color: var(--color-text-subtle);
      line-height: 1.75;
    }

    /* ══════════════════════════════════════════
       SECTION DIVIDER LABEL
    ══════════════════════════════════════════ */
    .section-label {
      font-size: 11px;
      font-weight: 700;
      letter-spacing: 0.12em;
      text-transform: uppercase;
      color: var(--color-text-muted);
      margin-bottom: 12px;
      padding-left: 2px;
    }

    /* ══════════════════════════════════════════
       ANIMATIONS
    ══════════════════════════════════════════ */
    @keyframes heroFadeIn {
      from { opacity: 0; transform: translateY(-14px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(30px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeIn {
      from { opacity: 0; }
      to   { opacity: 1; }
    }

    .animate-card {
      opacity: 0;
      animation: fadeUp 0.65s var(--ease-out) forwards;
      animation-play-state: paused;
    }

    /* Stagger child stat items inside cards */
    .stat-item {
      opacity: 0;
      animation: fadeIn 0.4s var(--ease-out) forwards;
      animation-play-state: paused;
    }
    .featured-card {
      opacity: 0;
      animation: fadeUp 0.55s var(--ease-out) forwards;
      animation-play-state: paused;
    }

    /* ══════════════════════════════════════════
       FOOTER
    ══════════════════════════════════════════ */
    footer {
      background: var(--color-footer-bg);
      color: var(--color-footer-text);
      font-size: 12px;
      padding: 16px 36px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 8px;
    }
    footer a {
      color: var(--color-footer-text);
      text-decoration: none;
      transition: color var(--dur-fast) var(--ease-standard);
    }
    footer a:hover { color: #fff; text-decoration: underline; }
  </style>
</head>
<body>

<!-- ══════════════════ NAVBAR ══════════════════ -->
<nav class="navbar">
  <div>
    <img src="Img/OpenStat-Logo.png" alt="PSA OpenSTAT" style="height:58px;width:auto;object-fit:contain;"/>
  </div>
  <div class="nav-links">
    <a href="index.php"    class="<?= navClass('home',     $activePage) ?>">Home</a>
    <a href="about.php"    class="<?= navClass('about',    $activePage) ?>">About</a>
    <a href="database.php" class="<?= navClass('database', $activePage) ?>">Database</a>
    <a href="metadata.php" class="<?= navClass('metadata', $activePage) ?>">Metadata</a>
    <a href="featured.php" class="<?= navClass('featured', $activePage) ?>">Featured</a>
    <a href="contact.php"  class="<?= navClass('contact',  $activePage) ?>">Contact Us</a>

    <div class="search-pill" id="searchPill">
      <button class="search-pill-btn" id="searchBtn" title="Search" aria-label="Toggle search">
        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 24 24"
             stroke="var(--color-icon-stroke)" stroke-width="2.3">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/>
        </svg>
      </button>
      <input class="search-pill-input" id="searchInput" type="text"
             placeholder="Search for statistics…" aria-label="Search"/>
    </div>
  </div>
</nav>

<!-- ══════════════════ HERO ══════════════════ -->
<div class="hero-wrapper">
  <img src="Img/Backdrop.png" alt="" class="hero-backdrop"/>
  <div class="hero-bg">
    <div class="hero-content">
      <h1 class="hero-title">Welcome to PSA OpenSTAT Website</h1>
      <p class="hero-desc">
        OpenSTAT is an open data platform powered by PC-Axis, a user-friendly application<br/>
        for presenting statistical data and metadata coupled with API and visualization features.<br/>
        This system allows the PSA to share data under an open data license where data can be freely
        used, re-used and redistributed by anyone without any restrictions other than proper source attribution.
      </p>
      <div class="search-bar-wrap">
        <div class="search-bar">
          <div class="search-bar-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="none" viewBox="0 0 24 24"
                 stroke="var(--color-search-icon)" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/>
            </svg>
          </div>
          <input type="text" placeholder="Search for statistics"/>
          <button>Search</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════ CONTENT ══════════════════ -->
<div class="content-backdrop">
  <div class="main-content">

    <!-- ── Social Statistics ── -->
    <div class="stat-card animate-card" style="margin-bottom:20px; animation-delay:0.05s;">
      <div class="card-inner">
        <div class="card-header">
          <div class="sec-icon">
            <img src="Img/Icons/Population and Vital Statistics/Population Icon.png" alt="Social Statistics"/>
          </div>
          <h2 class="card-title">Social Statistics</h2>
        </div>
        <div class="grid-3col-social" id="socialGrid">
          <?php
            $social = [
              ['icon' => 'Img/Icons/Population and Vital Statistics/Population and Vital Statistics.png', 'label' => 'Population and Vital Statistics', 'href' => 'pop-migration.php'],
              ['icon' => 'Img/Icons/Population and Vital Statistics/Health Outcomes.png',                 'label' => 'Health Outcomes',                 'href' => 'health-outcomes.php'],
              ['icon' => 'Img/Icons/Population and Vital Statistics/Gender Statistics.png',               'label' => 'Gender Statistics',               'href' => 'gender-statistics.php'],
              ['icon' => 'Img/Icons/Population and Vital Statistics/Education Facilities.png',            'label' => 'Education Facilities',            'href' => 'education-facilities.php'],
              ['icon' => 'Img/Icons/Population and Vital Statistics/Reproductive Health.png',             'label' => 'Reproductive Health',             'href' => 'reproductive-health.php'],
              ['icon' => 'Img/Icons/Population and Vital Statistics/Crime and Justice Statistics.png',    'label' => 'Crime and Justice Statistics',    'href' => 'crime-justice.php'],
              ['icon' => 'Img/Icons/Population and Vital Statistics/Education Outcomes.png',              'label' => 'Education Outcomes',              'href' => 'education-outcomes.php'],
              ['icon' => 'Img/Icons/Population and Vital Statistics/Food Security and Nutritions.png',    'label' => 'Food Security and Nutrition',     'href' => 'food-security.php'],
              ['icon' => 'Img/Icons/Population and Vital Statistics/Poverty and Income Statistics.png',   'label' => 'Poverty and Income Statistics',   'href' => 'poverty-income.php'],
              ['icon' => 'Img/Icons/Population and Vital Statistics/Health Facilities.png',               'label' => 'Health Facilities',               'href' => 'health-facilities.php'],
            ];
            foreach($social as $i => $item): ?>
            <a href="<?= htmlspecialchars($item['href']) ?>" class="stat-item" style="animation-delay:<?= 0.08 + $i * 0.045 ?>s;">
              <div class="row-icon"><img src="<?= htmlspecialchars($item['icon']) ?>" alt=""/></div>
              <span class="sm"><?= htmlspecialchars($item['label']) ?></span>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <!-- ── Economic + Environmental ── -->
    <div class="row-two-col">

      <div class="stat-card animate-card" style="animation-delay:0.15s;">
        <div class="card-inner">
          <div class="card-header">
            <div class="sec-icon">
              <img src="Img/Icons/Economic and Financial Statistics/Economic-Statistics.png" alt="Economic"/>
            </div>
            <h2 class="card-title">Economic and Financial Statistics</h2>
          </div>
          <?php
            $economic = [
              ['icon' => 'Img/Icons/Economic and Financial Statistics/National Accounts.png',  'label' => 'National Accounts',  'href' => 'national-accounts.php'],
              ['icon' => 'Img/Icons/Economic and Financial Statistics/Labor Statistics.png',    'label' => 'Labor Statistics',   'href' => 'labor-statistics.php'],
              ['icon' => 'Img/Icons/Economic and Financial Statistics/Price Indexes.png',       'label' => 'Price Indexes',      'href' => 'price-indexes.php'],
              ['icon' => 'Img/Icons/Economic and Financial Statistics/Government Finance.png',  'label' => 'Government Finance', 'href' => 'government-finance.php'],
              ['icon' => 'Img/Icons/Economic and Financial Statistics/Money and Banking.png',   'label' => 'Money and Banking',  'href' => 'money-banking.php'],
              ['icon' => 'Img/Icons/Economic and Financial Statistics/International Trade.png', 'label' => 'International Trade','href' => 'international-trade.php'],
              ['icon' => 'Img/Icons/Economic and Financial Statistics/Balance of Payments.png', 'label' => 'Balance of Payments','href' => 'balance-payments.php'],
            ];
            foreach($economic as $i => $item): ?>
            <a href="<?= htmlspecialchars($item['href']) ?>" class="stat-item" style="animation-delay:<?= 0.10 + $i * 0.05 ?>s;">
              <div class="row-icon"><img src="<?= htmlspecialchars($item['icon']) ?>" alt=""/></div>
              <span class="sm"><?= htmlspecialchars($item['label']) ?></span>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="stat-card animate-card" style="animation-delay:0.22s;">
        <div class="card-inner">
          <div class="card-header">
            <div class="sec-icon">
              <img src="Img/Icons/Environmental Statistics/Environment-Statistics.png" alt="Environmental"/>
            </div>
            <h2 class="card-title">Environmental Statistics</h2>
          </div>
          <?php
            $environmental = [
              ['icon' => 'Img/Icons/Environmental Statistics/Agriculture and Land Use.png', 'label' => 'Agriculture and Land Use', 'href' => 'agriculture-land.php'],
              ['icon' => 'Img/Icons/Environmental Statistics/Resource Use.png',              'label' => 'Resource Use',             'href' => 'resource-use.php'],
              ['icon' => 'Img/Icons/Environmental Statistics/Energy.png',                   'label' => 'Energy',                   'href' => 'energy.php'],
              ['icon' => 'Img/Icons/Environmental Statistics/Pollution.png',                'label' => 'Pollution',                'href' => 'pollution.php'],
              ['icon' => 'Img/Icons/Environmental Statistics/Built Environment.png',        'label' => 'Built Environment',        'href' => 'built-environment.php'],
              ['icon' => 'Img/Icons/Environmental Statistics/Digital Connectivity.png',     'label' => 'Digital Connectivity',     'href' => 'digital-connectivity.php'],
            ];
            foreach($environmental as $i => $item): ?>
            <a href="<?= htmlspecialchars($item['href']) ?>" class="stat-item" style="animation-delay:<?= 0.10 + $i * 0.05 ?>s;">
              <div class="row-icon"><img src="<?= htmlspecialchars($item['icon']) ?>" alt=""/></div>
              <span class="sm"><?= htmlspecialchars($item['label']) ?></span>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

    </div><!-- end row-two-col -->

    <!-- ── Featured ── -->
    <div class="featured-grid" id="featuredGrid">

      <a href="#" class="featured-card" style="animation-delay:0.10s;">
        <div class="featured-card-img-wrap">
          <img src="Img/stat.png" alt="CountrySTAT Philippines" class="featured-card-img"/>
        </div>
        <div class="featured-card-body">
          <div class="featured-card-title">CountrySTAT Philippines</div>
          <p class="featured-card-desc">
            CountrySTAT is a web-based information system which aims to improve access
            to food and agricultural statistics at regional, national and subnational levels.
          </p>
        </div>
      </a>

      <a href="#" class="featured-card" style="animation-delay:0.20s;">
        <div class="featured-card-img-wrap">
          <img src="Img/work.png" alt="Decent Work Statistics" class="featured-card-img"/>
        </div>
        <div class="featured-card-body">
          <div class="featured-card-title">Decent Work Statistics</div>
          <p class="featured-card-desc">
            Decent work is integral to efforts to reduce poverty and is a key mechanism
            for achieving equitable, inclusive and sustainable development.
          </p>
        </div>
      </a>

      <a href="#" class="featured-card" style="animation-delay:0.30s;">
        <div class="featured-card-img-wrap">
          <img src="Img/food.png" alt="Food Security Indicators" class="featured-card-img"/>
        </div>
        <div class="featured-card-body">
          <div class="featured-card-title">Food Security Indicators</div>
          <p class="featured-card-desc">
            Food security has become an essential objective in the Philippine agricultural
            system — a challenge to the statistical system to become an indispensable
            partner in attaining and maintaining food security.
          </p>
        </div>
      </a>

    </div><!-- end featured-grid -->

  </div><!-- end main-content -->
</div><!-- end content-backdrop -->

<!-- ══════════════════ FOOTER ══════════════════ -->
<footer>
  <span>2026 Philippine Statistics Authority. All content is public domain unless otherwise stated.</span>
  <div style="display:flex;align-items:center;gap:12px;">
    <a href="#">Terms Of Use</a>
    <span style="color:#6b7280;">|</span>
    <a href="#">Privacy Statement</a>
  </div>
</footer>

<script>
  /* ── Intersection Observer: triggers CSS animations when scrolled into view ── */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;

      const el = entry.target;

      // Animate the card itself
      el.style.animationPlayState = 'running';

      // Animate children (stat-items, featured-cards) inside this element
      el.querySelectorAll('.stat-item, .featured-card').forEach(child => {
        child.style.animationPlayState = 'running';
      });

      observer.unobserve(el);
    });
  }, { threshold: 0.08 });

  // Observe big wrapper elements
  document.querySelectorAll('.animate-card, #featuredGrid').forEach(el => observer.observe(el));

  /* ── Search pill toggle ── */
  const pill = document.getElementById('searchPill');
  const btn  = document.getElementById('searchBtn');
  const inp  = document.getElementById('searchInput');

  btn.addEventListener('click', e => {
    e.stopPropagation();
    const isOpen = pill.classList.toggle('open');
    if (isOpen) setTimeout(() => inp.focus(), 360);
    else { inp.value = ''; inp.blur(); }
  });

  document.addEventListener('click', e => {
    if (!pill.contains(e.target)) {
      pill.classList.remove('open');
      inp.value = '';
    }
  });

  document.addEventListener('keydown', e => {
    if (e.key === 'Escape') {
      pill.classList.remove('open');
      inp.value = '';
      inp.blur();
    }
  });
</script>
</body>
</html>