<?php
/* ============================================================
   PAGE CONFIGURATION — Edit everything here
   ============================================================ */

$page_title       = 'Population & Vital Statistics';
$page_description = 'Explore official statistics on population, births, deaths, marriage and other vital events in the Philippines.';
$hero_image       = 'Img/Background-Data.png';
$active_nav       = 'database';

$breadcrumbs = [
  ['label' => 'Database',                        'href' => 'database.php'],
  ['label' => 'Population and Vital Statistics', 'href' => ''],
];

$categories = [
  ['label' => 'Population', 'href' => '?category=population', 'active' => true],
  ['label' => 'Births',     'href' => '?category=births',     'active' => false],
  ['label' => 'Deaths',     'href' => '?category=deaths',     'active' => false],
  ['label' => 'Marriage',   'href' => '?category=marriage',   'active' => false],
];

$filter_categories   = ['All Categories', 'Population', 'Births', 'Deaths', 'Marriage'];
$filter_geolocations = ['All Geolocation', 'NCR', 'Region I', 'Region II', 'Region III', 'Region IV-A'];
$filter_years        = ['2010–2026', '2015–2026', '2020–2026'];
$sort_options        = ['Latest Updated', 'Oldest First', 'Alphabetical'];

$dataset_section_label = 'Population';

$datasets = [
  [
    'title'   => 'Total Population, Household Population, and Number of Household by Region and Province/Highly Urbanized City: Philippines, 2020',
    'size'    => '7978',
    'updated' => '4/22/2024',
    'csv'     => '#',
    'details' => '#',
    'meta'    => [
      ['label' => 'Geographic Location', 'val' => 'PHILIPPINES/a, ..NATIONAL CAPITAL REGION (NCR), ....City of Manila, ....City of Mandaluyong, ..., ...Eight (8) Area Clusters *** (135)'],
      ['label' => 'Parameter',           'val' => 'Total Population, Household Population, Number of Households, (3)'],
    ],
  ],
  [
    'title'   => 'Projected Population Based on 2020 CPH by Five-Year Age Group and Sex and Single-Year Interval',
    'size'    => '4586',
    'updated' => '6/3/2024',
    'csv'     => '#',
    'details' => '#',
    'meta'    => [
      ['label' => 'Sex',       'val' => 'Both Sexes, Male, Female, (3)'],
      ['label' => 'Age Group', 'val' => 'All Ages, 0-4, 5-9, 10-14, ...., 85+ (19)'],
      ['label' => 'Year',      'val' => '2020, 2021, 2022, 2023, ..., 2030 (11)'],
    ],
  ],
  [
    'title'   => 'Population by Age Group, Sex, Region, and Province/Highly Urbanized City: Philippines, 2020',
    'size'    => '92393',
    'updated' => '4/22/2024',
    'csv'     => '#',
    'details' => '#',
    'meta'    => [
      ['label' => 'Geographic Location', 'val' => 'PHILIPPINES/a, ...NATIONAL CAPITAL REGION (NCR), ....City of Manila, ....City of Mandaluyong, ..., ...Eight (8) Area Clusters *** (135)'],
      ['label' => 'Parameter',           'val' => 'Total Population, Household Population, (2)'],
      ['label' => 'Sex',                 'val' => 'Both Sexes, Male, Female, (3)'],
      ['label' => 'Age Group',           'val' => 'All Ages, Below 5, 5-9, 10-14, ....80 years old and over (18)'],
    ],
  ],
  [
    'title'   => 'Occupied Housing Units, Number of Household, Household Population, by Types of Building and Province/Highly Urbanized City: Philippines, 2020',
    'size'    => '25657',
    'updated' => '4/22/2024',
    'csv'     => '#',
    'details' => '#',
    'meta'    => [
      ['label' => 'Geographic Location', 'val' => 'PHILIPPINES/a, ...Eight (8) Area Clusters *** (135)'],
      ['label' => 'Type of Building',    'val' => 'Single House, Duplex, Multi-unit Residential, (5)'],
    ],
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
    body { font-family: 'Open Sans', sans-serif; background: #f0f0f0; overflow-x: hidden; }
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

    /* ── Hero ── */
    @keyframes heroFadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .hero-title { animation: heroFadeIn 0.7s 0.15s cubic-bezier(.22,1,.36,1) both; }
    .hero-desc  { animation: heroFadeIn 0.7s 0.28s cubic-bezier(.22,1,.36,1) both; }

    /* ── Scroll animations ── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .animate-in {
      opacity: 0;
      animation: fadeUp 0.5s cubic-bezier(.22,1,.36,1) forwards;
      animation-play-state: paused;
    }

    /* ── Category sidebar ── */
    .cat-item {
      display: flex; align-items: center;
      text-decoration: none; font-size: 13.5px; font-weight: 600;
      color: #374151; padding: 10px 16px;
      border-left: 3px solid transparent;
      transition: background 0.15s, color 0.15s, border-color 0.15s;
    }
    .cat-item:hover  { background: #e8eef8; color: #1a3269; border-left-color: #1a3269; }
    .cat-item.active { background: #e8eef8; color: #1a3269; border-left-color: #1a3269; }

    /* ══════════════════════════════════════
       FILTER BAR — clean rebuild
    ══════════════════════════════════════ */
    .filter-bar {
      background: #fff;
      border-radius: 10px 10px 0 0;
      border: 1px solid #e0e0e0;
      border-bottom: none;
      overflow: visible;
      box-shadow: 0 1px 6px rgba(0,0,0,0.07);
    }

    /* Top row: Quick Filters label + controls */
    .filter-row {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 12px 16px;
      border-bottom: 1px solid #f0f0f0;
      flex-wrap: wrap;
    }

    .filter-label {
      display: flex; align-items: center; gap: 5px;
      font-size: 12px; font-weight: 700; color: #9ca3af;
      text-transform: uppercase; letter-spacing: 0.5px;
      white-space: nowrap; flex-shrink: 0;
      margin-right: 2px;
    }

    /* Search input */
    .filter-search {
      display: flex; align-items: center; gap: 7px;
      border: 1.5px solid #e5e7eb; border-radius: 7px;
      padding: 7px 12px; flex: 1; min-width: 150px; max-width: 240px;
      background: #f9fafb;
      transition: border-color 0.15s, box-shadow 0.15s, background 0.15s;
    }
    .filter-search:focus-within {
      border-color: #1a3269; background: #fff;
      box-shadow: 0 0 0 3px rgba(26,50,105,0.08);
    }
    .filter-search input {
      border: none; outline: none; font-size: 13px; color: #374151;
      background: transparent; width: 100%;
      font-family: 'Open Sans', sans-serif;
    }
    .filter-search input::placeholder { color: #9ca3af; }

    /* Custom select wrapper */
    .f-select-wrap {
      position: relative;
      display: inline-flex;
      align-items: center;
      flex-shrink: 0;
    }

    .f-select-icon {
      position: absolute;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      pointer-events: none;
      display: flex;
      align-items: center;
      z-index: 1;
      color: #6b7280;
    }

    .f-select-chevron {
      position: absolute;
      right: 9px;
      top: 50%;
      transform: translateY(-50%);
      pointer-events: none;
      display: flex;
      align-items: center;
      z-index: 1;
      color: #9ca3af;
    }

    .f-select-wrap select {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      display: block;
      width: 100%;
      min-width: 0;
      padding: 7px 26px 7px 30px;
      font-size: 13px;
      font-weight: 600;
      color: #374151;
      font-family: 'Open Sans', sans-serif;
      background: #f9fafb;
      border: 1.5px solid #e5e7eb;
      border-radius: 7px;
      cursor: pointer;
      outline: none;
      white-space: nowrap;
      transition: border-color 0.15s, box-shadow 0.15s, background 0.15s;
    }
    .f-select-wrap select:hover,
    .f-select-wrap select:focus {
      border-color: #1a3269;
      background: #fff;
      box-shadow: 0 0 0 3px rgba(26,50,105,0.08);
    }
    .f-select--category select { min-width: 148px; }
    .f-select--geo      select { min-width: 148px; }
    .f-select--year     select { min-width: 110px; }

    /* ── Sort row ── */
    .sort-row {
      display: flex; align-items: center; justify-content: space-between;
      padding: 11px 18px 10px;
    }
    .sort-row h2 { font-size: 17px; font-weight: 700; color: #111827; margin: 0; }

    .sort-wrap {
      display: flex; align-items: center; gap: 8px;
    }
    .sort-label {
      font-size: 12.5px; font-weight: 600; color: #6b7280; white-space: nowrap;
    }
    .sort-select-wrap {
      position: relative; display: inline-flex; align-items: center;
    }
    .sort-select-wrap select {
      appearance: none; -webkit-appearance: none;
      background: #f9fafb; border: 1.5px solid #e5e7eb; border-radius: 7px;
      padding: 6px 28px 6px 10px;
      font-size: 13px; font-weight: 600; color: #374151;
      font-family: 'Open Sans', sans-serif;
      outline: none; cursor: pointer;
      transition: border-color 0.15s, box-shadow 0.15s;
      min-width: 140px;
    }
    .sort-select-wrap select:hover,
    .sort-select-wrap select:focus {
      border-color: #1a3269;
      box-shadow: 0 0 0 3px rgba(26,50,105,0.08);
    }
    .sort-chevron {
      position: absolute; right: 9px; top: 50%; transform: translateY(-50%);
      pointer-events: none; color: #9ca3af;
    }

    /* ── Dataset items ── */
    .dataset-item {
      background: #fff; border: 1px solid #e5e7eb; border-radius: 10px;
      padding: 18px 20px; margin-bottom: 12px;
      transition: box-shadow 0.22s, transform 0.22s;
    }
    .dataset-item:last-child { margin-bottom: 0; }
    .dataset-item:hover { box-shadow: 0 6px 22px rgba(26,50,105,0.11); transform: translateY(-2px); }

    .dataset-title {
      font-size: 14px; font-weight: 700; color: #1a3269;
      text-decoration: none; line-height: 1.5;
      display: block; margin-bottom: 5px;
    }
    .dataset-title:hover { text-decoration: underline; }

    .dataset-meta-line {
      display: flex; align-items: center; gap: 4px;
      font-size: 12px; font-weight: 600; color: #6b7280; margin-bottom: 9px;
    }
    .dataset-meta-line span { color: #374151; }

    .dataset-param { font-size: 12.5px; color: #374151; margin-bottom: 4px; line-height: 1.5; }
    .dataset-param strong { font-weight: 700; }

    /* ── Action buttons ── */
    .btn-csv {
      display: inline-flex; align-items: center; gap: 6px;
      background: #16a34a; color: #fff; font-size: 12.5px; font-weight: 700;
      padding: 7px 16px; border-radius: 7px; text-decoration: none;
      border: none; cursor: pointer;
      transition: background 0.15s, transform 0.1s;
      white-space: nowrap;
    }
    .btn-csv:hover { background: #15803d; transform: translateY(-1px); }

    .btn-details {
      display: inline-flex; align-items: center; justify-content: center;
      border: 1.5px solid #1a3269; color: #1a3269; font-size: 12.5px; font-weight: 700;
      padding: 6px 16px; border-radius: 7px; text-decoration: none;
      transition: background 0.15s, color 0.15s, transform 0.1s;
      white-space: nowrap;
    }
    .btn-details:hover { background: #1a3269; color: #fff; transform: translateY(-1px); }

    /* ── Right sidebar panels ── */
    .sidebar-panel {
      background: #fff; border: 1px solid #e0e0e0; border-radius: 10px;
      overflow: hidden; box-shadow: 0 1px 6px rgba(0,0,0,0.07);
      margin-bottom: 14px;
    }
    .sidebar-panel-header {
      display: flex; align-items: center; gap: 8px;
      padding: 12px 16px; font-size: 14px; font-weight: 700; color: #111827;
      border-bottom: 1px solid #e5e7eb;
    }

    .tip-item {
      display: flex; align-items: flex-start; gap: 11px;
      padding: 12px 16px; border-bottom: 1px solid #f3f4f6;
    }
    .tip-item:last-child { border-bottom: none; }
    .tip-icon {
      width: 32px; height: 32px; border-radius: 8px;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0; margin-top: 1px;
    }
    .tip-title { font-size: 13px; font-weight: 700; color: #111827; margin-bottom: 3px; }
    .tip-desc  { font-size: 12px; color: #6b7280; line-height: 1.5; }

    .need-help-body { padding: 16px 18px; text-align: center; }
    .need-help-body p { font-size: 13.5px; color: #374151; line-height: 1.7; margin-bottom: 16px; }
    .need-help-body a { color: #1a3269; font-weight: 700; text-decoration: none; }
    .help-btns { display: flex; gap: 8px; }
    .btn-user-guide {
      flex: 1; display: inline-flex; align-items: center; justify-content: center;
      border: 1.5px solid #d1d5db; color: #374151; font-size: 12.5px; font-weight: 700;
      padding: 8px 12px; border-radius: 7px; text-decoration: none;
      transition: border-color 0.15s, background 0.15s;
    }
    .btn-user-guide:hover { border-color: #1a3269; background: #eff6ff; color: #1a3269; }
    .btn-contact-us {
      flex: 1; display: inline-flex; align-items: center; justify-content: center;
      background: #1a3269; color: #fff !important; font-size: 12.5px; font-weight: 700;
      padding: 8px 12px; border-radius: 7px; text-decoration: none !important;
      transition: background 0.15s;
    }
    .btn-contact-us:hover { background: #142a56; }
  </style>
</head>
<body>

<!-- ══════════════════ NAVBAR ══════════════════ -->
<header class="navbar sticky top-0 z-50" style="box-shadow:0 2px 8px rgba(0,0,0,0.35);">
  <div class="bg-primary flex items-center justify-between px-12"
       style="min-height:88px;padding-top:8px;padding-bottom:8px;">
    <a href="index.php">
      <img src="Img/Logos/PSAHeader.png" alt="Philippine Statistics Authority"
           style="height:88px;width:auto;object-fit:contain;"/>
    </a>
    <div style="margin-right:60px;">
      <img src="Img/Logos/OpenStat-White.png" alt="OpenSTAT"
           style="height:90px;width:auto;object-fit:contain;"/>
    </div>
  </div>
  <nav class="flex items-center justify-center" style="background:#142a56;gap:0;">
    <?php foreach ($nav_items as $nav): ?>
    <a href="<?= htmlspecialchars($nav['href']) ?>"
       class="nav-blue-link <?= $nav['key'] === $active_nav ? 'active-nav' : '' ?>">
      <?= htmlspecialchars($nav['label']) ?>
    </a>
    <?php endforeach; ?>
  </nav>
</header>

<!-- ══════════════════ HERO ══════════════════ -->
<div class="relative" style="min-height:180px;">
  <img src="<?= htmlspecialchars($hero_image) ?>" alt=""
       style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center;z-index:0;"/>
  <div style="position:absolute;inset:0;background:rgba(4,17,61,0.72);z-index:1;"></div>
  <div class="relative z-10 py-8" style="max-width:1180px;margin:0 auto;padding-left:16px;">

    <div class="hero-title text-[12.5px] font-semibold mb-3" style="color:rgba(255,255,255,0.75);">
      <?php foreach ($breadcrumbs as $i => $crumb): ?>
        <?php if ($i > 0): ?><span class="mx-1.5" style="opacity:0.5;">›</span><?php endif; ?>
        <?php if (!empty($crumb['href'])): ?>
          <a href="<?= htmlspecialchars($crumb['href']) ?>"
             style="color:rgba(255,255,255,0.75);text-decoration:none;"
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
      <?= htmlspecialchars($page_title) ?>
    </h1>
    <p class="hero-desc text-[13.5px] max-w-[600px] leading-relaxed"
       style="color:rgba(255,255,255,0.80);text-shadow:0 1px 6px rgba(0,0,0,0.35);">
      <?= htmlspecialchars($page_description) ?>
    </p>

  </div>
</div>

<!-- ══════════════════ MAIN LAYOUT ══════════════════ -->
<div style="display:grid;grid-template-columns:188px 1fr 260px;max-width:1400px;margin:0 auto;padding:20px 16px 50px;gap:0;">

  <!-- ── LEFT: Category Sidebar ── -->
  <div class="animate-in" style="animation-delay:0.05s;padding-right:0;padding-top:4px;">
    <div style="background:#fff;border-radius:10px;border:1px solid #e0e0e0;overflow:hidden;box-shadow:0 1px 6px rgba(0,0,0,0.07);">
      <div style="background:#1a3269;color:#fff;font-size:13px;font-weight:700;padding:11px 16px;letter-spacing:0.3px;">
        Category
      </div>
      <?php foreach ($categories as $cat): ?>
      <a href="<?= htmlspecialchars($cat['href']) ?>"
         class="cat-item <?= $cat['active'] ? 'active' : '' ?>">
        <span><?= htmlspecialchars($cat['label']) ?></span>
      </a>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- ── CENTER: Content ── -->
  <div class="animate-in" style="animation-delay:0.10s;padding-left:16px;padding-right:16px;">

    <!-- Filter Bar -->
    <div class="filter-bar">

      <!-- Filter Row -->
      <div class="filter-row">

        <!-- Label -->
        <div class="filter-label">
          <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="none"
               viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 4h18M7 8h10M11 12h2M9 16h6"/>
          </svg>
          Filters
        </div>

        <!-- Divider -->
        <div style="width:1px;height:20px;background:#e5e7eb;flex-shrink:0;"></div>

        <!-- Search -->
        <div class="filter-search">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
               viewBox="0 0 24 24" stroke="#9ca3af" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/>
          </svg>
          <input type="text" placeholder="Search datasets…"/>
        </div>

        <!-- Category -->
        <div class="f-select-wrap f-select--category">
          <span class="f-select-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <rect x="3" y="3" width="7" height="7" rx="1"/>
              <rect x="14" y="3" width="7" height="7" rx="1"/>
              <rect x="3" y="14" width="7" height="7" rx="1"/>
              <rect x="14" y="14" width="7" height="7" rx="1"/>
            </svg>
          </span>
          <select>
            <?php foreach ($filter_categories as $opt): ?>
            <option><?= htmlspecialchars($opt) ?></option>
            <?php endforeach; ?>
          </select>
          <span class="f-select-chevron">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
          </span>
        </div>

        <!-- Geolocation -->
        <div class="f-select-wrap f-select--geo">
          <span class="f-select-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <circle cx="12" cy="10" r="3"/>
              <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 2C8.134 2 5 5.134 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.866-3.134-7-7-7z"/>
            </svg>
          </span>
          <select>
            <?php foreach ($filter_geolocations as $opt): ?>
            <option><?= htmlspecialchars($opt) ?></option>
            <?php endforeach; ?>
          </select>
          <span class="f-select-chevron">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
          </span>
        </div>

        <!-- Year -->
        <div class="f-select-wrap f-select--year">
          <span class="f-select-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <rect x="3" y="4" width="18" height="18" rx="2"/>
              <path stroke-linecap="round" stroke-linejoin="round" d="M16 2v4M8 2v4M3 10h18"/>
            </svg>
          </span>
          <select>
            <?php foreach ($filter_years as $opt): ?>
            <option><?= htmlspecialchars($opt) ?></option>
            <?php endforeach; ?>
          </select>
          <span class="f-select-chevron">
            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
          </span>
        </div>

      </div><!-- /filter-row -->

      <!-- Sort row -->
      <div class="sort-row">
        <h2><?= htmlspecialchars($dataset_section_label) ?></h2>
        <div class="sort-wrap">
          <span class="sort-label">Sort by:</span>
          <div class="sort-select-wrap">
            <select>
              <?php foreach ($sort_options as $opt): ?>
              <option><?= htmlspecialchars($opt) ?></option>
              <?php endforeach; ?>
            </select>
            <span class="sort-chevron">
              <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="none"
                   viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
              </svg>
            </span>
          </div>
        </div>
      </div>

    </div><!-- /filter-bar -->

    <!-- Dataset List -->
    <div style="background:#fff;border:1px solid #e0e0e0;border-top:none;border-radius:0 0 10px 10px;padding:16px 18px;box-shadow:0 1px 6px rgba(0,0,0,0.07);">
      <?php foreach ($datasets as $i => $ds): ?>
      <div class="dataset-item">
        <div style="display:flex;align-items:flex-start;justify-content:space-between;gap:20px;">

          <div style="flex:1;min-width:0;">
            <a href="<?= htmlspecialchars($ds['details']) ?>" class="dataset-title">
              <?= ($i + 1) ?>. <?= htmlspecialchars($ds['title']) ?>
            </a>
            <div class="dataset-meta-line">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none"
                   viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path d="M9 12h6M9 16h6M7 4H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2V6a2 2 0 00-2-2h-2M9 4h6a1 1 0 010 2H9a1 1 0 010-2z"/>
              </svg>
              Size: <span><?= htmlspecialchars($ds['size']) ?></span>
              &nbsp;·&nbsp;
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none"
                   viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <rect x="3" y="4" width="18" height="18" rx="2"/>
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 2v4M8 2v4M3 10h18"/>
              </svg>
              Updated: <span><?= htmlspecialchars($ds['updated']) ?></span>
            </div>
            <?php foreach ($ds['meta'] as $mi => $m): ?>
            <div class="dataset-param">
              <strong><?= ($mi + 1) ?>. <?= htmlspecialchars($m['label']) ?>:</strong>
              <?= htmlspecialchars($m['val']) ?>
            </div>
            <?php endforeach; ?>
          </div>

          <div style="display:flex;flex-direction:column;gap:8px;flex-shrink:0;padding-top:2px;min-width:90px;">
            <a href="<?= htmlspecialchars($ds['csv']) ?>" class="btn-csv">
              <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="none"
                   viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5 5-5M12 3v12"/>
              </svg>
              CSV
            </a>
            <a href="<?= htmlspecialchars($ds['details']) ?>" class="btn-details">Details</a>
          </div>

        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div><!-- /center -->

  <!-- ── RIGHT: Sidebar ── -->
  <div class="animate-in" style="animation-delay:0.15s;padding-top:4px;">

    <!-- Quick Tips -->
    <div class="sidebar-panel">
      <div class="sidebar-panel-header">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
             viewBox="0 0 24 24" stroke="#f59e0b" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
        </svg>
        Quick Tips
      </div>
      <div class="tip-item">
        <div class="tip-icon" style="background:#fff3e0;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
               viewBox="0 0 24 24" stroke="#f97316" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 4h18M7 8h10M11 12h2M9 16h6"/>
          </svg>
        </div>
        <div>
          <div class="tip-title">Use filters</div>
          <div class="tip-desc">Refine results by category, location, and time period.</div>
        </div>
      </div>
      <div class="tip-item">
        <div class="tip-icon" style="background:#e8f5e9;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
               viewBox="0 0 24 24" stroke="#16a34a" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
          </svg>
        </div>
        <div>
          <div class="tip-title">View details</div>
          <div class="tip-desc">See full metadata, variable lists, and data dictionaries.</div>
        </div>
      </div>
      <div class="tip-item">
        <div class="tip-icon" style="background:#e8eef8;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
               viewBox="0 0 24 24" stroke="#1a3269" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5 5-5M12 3v12"/>
          </svg>
        </div>
        <div>
          <div class="tip-title">Download data</div>
          <div class="tip-desc">Datasets are available in CSV format.</div>
        </div>
      </div>
    </div>

    <!-- Need Help? -->
    <div class="sidebar-panel">
      <div class="sidebar-panel-header">
        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none"
             viewBox="0 0 24 24" stroke="#1a3269" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 18v-6a9 9 0 0118 0v6"/>
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 19a2 2 0 01-2 2h-1a2 2 0 01-2-2v-3a2 2 0 012-2h3v5zM3 19a2 2 0 002 2h1a2 2 0 002-2v-3a2 2 0 00-2-2H3v5z"/>
        </svg>
        Need Help?
      </div>
      <div class="need-help-body">
        <p>Visit our <a href="#">User Guide</a> or <a href="#">Contact Us</a> for assistance.</p>
        <div class="help-btns">
          <a href="#" class="btn-user-guide">User Guide</a>
          <a href="#" class="btn-contact-us">Contact Us</a>
        </div>
      </div>
    </div>

  </div><!-- /right -->

</div><!-- /grid -->

<!-- ══════════════════ FOOTER ══════════════════ -->
<footer style="background:#1f2937;color:#9ca3af;font-size:12px;padding:14px 36px;display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:8px;">
  <span>2026 Philippine Statistics Authority. All content is public domain unless otherwise stated.</span>
  <div style="display:flex;align-items:center;gap:12px;">
    <a href="#" style="color:#9ca3af;text-decoration:none;"
       onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#9ca3af'">Terms Of Use</a>
    <span style="color:#4b5563;">|</span>
    <a href="#" style="color:#9ca3af;text-decoration:none;"
       onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#9ca3af'">Privacy Statement</a>
  </div>
</footer>

<script>
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.style.animationPlayState = 'running';
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.06 });
  document.querySelectorAll('.animate-in').forEach(el => observer.observe(el));
</script>
</body>
</html>