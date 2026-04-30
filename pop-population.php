<?php
/* ============================================================
   PAGE CONFIGURATION — Edit everything here
   ============================================================ */

/* ── Page meta ── */
$page_title       = 'Population & Vital Statistics';
$page_description = 'Explore official statistics on population, births, deaths, marriage and other vital events in the Philippines.';
$hero_image       = 'Img/Background-Data.png';
$active_nav       = 'database'; // home | about | database | dashboard | featured | contact

/* ── Breadcrumb trail ── */
$breadcrumbs = [
  ['label' => 'Database',                       'href' => 'database.php'],
  ['label' => 'Population and Vital Statistics', 'href' => ''],  // empty = current page (no link)
];

/* ── Left: category sidebar ── */
$categories = [
  ['label' => 'Population', 'href' => '#', 'active' => true ],
  ['label' => 'Births',     'href' => '#', 'active' => false],
  ['label' => 'Deaths',     'href' => '#', 'active' => false],
  ['label' => 'Marriage',   'href' => '#', 'active' => false],
  /* ── Add more categories here ── */
];

/* ── Filter dropdowns ── */
$filter_categories   = ['All Categories', 'Population', 'Births', 'Deaths', 'Marriage'];
$filter_geolocations = ['All Geolocation', 'NCR', 'Region I', 'Region II', 'Region III', 'Region IV-A'];
$filter_years        = ['2010-2026', '2015-2026', '2020-2026'];
$sort_options        = ['Latest Updated', 'Oldest First', 'Alphabetical'];

/* ── Section heading above dataset list ── */
$dataset_section_label = 'Population';

/* ── Dataset list ──
   Each entry:
     title   → dataset name (linked)
     size    → record count
     updated → last updated date
     csv     → CSV download link  (use '#' as placeholder)
     details → Details page link  (use '#' as placeholder)
     meta    → array of [ 'label' => '...', 'val' => '...' ]
*/
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
    'title'   => 'Projected Population Based on 2020 CPH by Five-Year Age Group and Sex and Single- Year Interval',
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
  /* ── Add more datasets here ── */
];

/* ── Right sidebar: related links ── */
$related_links = [
  ['label' => "User's Guide",         'href' => '#'],
  ['label' => 'Metadata Dictionary',  'href' => '#'],
  ['label' => 'Related Publications', 'href' => '#'],
  /* ── Add more links here ── */
];

/* ── Right sidebar: contact info ── */
$contact = [
  'logo'     => 'Img/Logos/OpenStat-Logo.png',
  'intro'    => 'For data inquiries, contact:',
  'division' => 'Knowledge Management and Communication Division (KMCD)',
  'agency'   => 'Philippine Statistics Authority',
  'address'  => '9/F PSA Headquarters, PSA Complex, East Avenue, Diliman, Quezon City',
  'email'    => 'info@psa.gov.ph',
];

/* ── Navigation items ── */
$nav_items = [
  ['label' => 'Home',       'href' => 'index.php',    'key' => 'home'],
  ['label' => 'About',      'href' => 'about.php',    'key' => 'about'],
  ['label' => 'Database',   'href' => 'database.php', 'key' => 'database'],
  ['label' => 'Dashboard',  'href' => 'dashboard.php','key' => 'dashboard'],
  ['label' => 'Featured',   'href' => 'featured.php', 'key' => 'featured'],
  ['label' => 'Contact Us', 'href' => 'contact.php',  'key' => 'contact'],
];

/* ============================================================
   END CONFIGURATION — Do not edit below unless needed
   ============================================================ */
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
    body { font-family: 'Open Sans', sans-serif; background: #f0f0f0; overflow-x: hidden; }
    html { scroll-behavior: smooth; }

    /* ── Navbar ── */
    .navbar { animation: slideDown 0.5s cubic-bezier(.22,1,.36,1) both; }
    @keyframes slideDown {
      from { transform: translateY(-100%); opacity: 0; }
      to   { transform: translateY(0);     opacity: 1; }
    }

    /* ── Nav links ── */
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
      display: block; text-decoration: none; font-size: 14px; font-weight: 600;
      color: #374151; padding: 10px 18px; border-left: 3px solid transparent;
      transition: background 0.15s, color 0.15s, border-color 0.15s;
    }
    .cat-item:hover        { background: #eff6ff; color: #1a3269; border-left-color: #93c5fd; }
    .cat-item.active       { background: #e8eef8; color: #1a3269; border-left-color: #1a3269; font-weight: 700; }

    /* ── Filter bar ── */
    .filter-bar {
      display: flex; align-items: center; gap: 10px; flex-wrap: wrap;
      background: #fff; border-bottom: 1px solid #e5e7eb;
      padding: 12px 18px;
    }
    .filter-select {
      display: flex; align-items: center; gap: 6px;
      background: #fff; border: 1px solid #d1d5db; border-radius: 6px;
      padding: 7px 12px; font-size: 13px; font-weight: 600; color: #374151;
      cursor: pointer; white-space: nowrap;
      transition: border-color 0.15s, box-shadow 0.15s;
    }
    .filter-select:hover { border-color: #1a3269; box-shadow: 0 0 0 2px rgba(26,50,105,0.08); }
    .filter-select select {
      background: transparent; border: none; outline: none;
      font-size: 13px; font-weight: 600; color: #374151;
      font-family: 'Open Sans', sans-serif; cursor: pointer;
    }
    .search-box {
      display: flex; align-items: center; gap: 8px;
      background: #fff; border: 1px solid #d1d5db; border-radius: 6px;
      padding: 7px 14px; flex: 1; min-width: 200px; max-width: 340px;
      transition: border-color 0.15s, box-shadow 0.15s;
    }
    .search-box:focus-within { border-color: #1a3269; box-shadow: 0 0 0 2px rgba(26,50,105,0.10); }
    .search-box input {
      border: none; outline: none; font-size: 13px; color: #374151;
      background: transparent; width: 100%; font-family: 'Open Sans', sans-serif;
    }
    .quick-filter-label {
      font-size: 12.5px; font-weight: 600; color: #6b7280;
      display: flex; align-items: center; gap: 5px; white-space: nowrap;
    }

    /* ── Dataset items ── */
    .dataset-item {
      background: #fff; border: 1px solid #e0e0e0; border-radius: 10px;
      padding: 18px 20px; margin-bottom: 14px;
      transition: box-shadow 0.22s, transform 0.22s;
    }
    .dataset-item:hover { box-shadow: 0 6px 22px rgba(26,50,105,0.11); transform: translateY(-2px); }
    .dataset-num-title {
      font-size: 14px; font-weight: 700; color: #1a3269;
      text-decoration: none; line-height: 1.45;
      display: block; margin-bottom: 5px;
    }
    .dataset-num-title:hover { text-decoration: underline; }
    .dataset-size-updated {
      font-size: 12px; font-weight: 700; color: #374151; margin-bottom: 8px;
    }
    .dataset-meta-row { font-size: 12.5px; color: #374151; margin-bottom: 3px; line-height: 1.5; }
    .dataset-meta-row strong { font-weight: 700; }

    /* ── CSV / Details buttons ── */
    .btn-csv {
      display: inline-flex; align-items: center; gap: 6px;
      background: #16a34a; color: #fff; font-size: 12.5px; font-weight: 700;
      padding: 7px 16px; border-radius: 6px; text-decoration: none;
      transition: background 0.18s; white-space: nowrap;
    }
    .btn-csv:hover { background: #15803d; }
    .btn-details {
      display: inline-flex; align-items: center; justify-content: center;
      border: 2px solid #1a3269; color: #1a3269; font-size: 12.5px; font-weight: 700;
      padding: 6px 16px; border-radius: 6px; text-decoration: none;
      transition: background 0.18s, color 0.18s; white-space: nowrap;
    }
    .btn-details:hover { background: #1a3269; color: #fff; }

    /* ── Sidebar links ── */
    .sidebar-link {
      display: block; font-size: 13px; color: #374151; font-weight: 500;
      text-decoration: none; padding: 9px 14px;
      border-bottom: 1px solid #f3f4f6; transition: color 0.15s, background 0.15s;
    }
    .sidebar-link:last-child { border-bottom: none; }
    .sidebar-link:hover { color: #1a3269; background: #eff6ff; }

    /* ── Sort row ── */
    .sort-row {
      display: flex; align-items: center; justify-content: space-between;
      padding: 10px 18px 8px; background: #fff; border-bottom: 1px solid #e5e7eb;
    }
    .sort-select {
      display: flex; align-items: center; gap: 6px;
      font-size: 13px; font-weight: 600; color: #374151;
    }
    .sort-select select {
      background: #fff; border: 1px solid #d1d5db; border-radius: 6px;
      padding: 5px 28px 5px 10px; font-size: 13px; font-weight: 600;
      color: #374151; font-family: 'Open Sans', sans-serif;
      outline: none; cursor: pointer;
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='11' height='11' fill='none' viewBox='0 0 24 24' stroke='%236b7280' stroke-width='2.5'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' d='M19 9l-7 7-7-7'/%3E%3C/svg%3E");
      background-repeat: no-repeat; background-position: right 8px center;
    }
  </style>
</head>
<body>

<!-- ══════════════════ NAVBAR ══════════════════ -->
<header class="navbar sticky top-0 z-50" style="box-shadow:0 2px 8px rgba(0,0,0,0.35);">
  <div class="bg-primary flex items-center justify-between px-12"
       style="min-height:88px;padding-top:8px;padding-bottom:8px;">
    <img src="Img/Logos/PSAHeader.png" alt="Philippine Statistics Authority"
         style="height:88px;width:auto;object-fit:contain;"/>
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
       style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center center;z-index:0;"/>
  <div style="position:absolute;inset:0;background:rgba(4,17,61,0.72);z-index:1;"></div>
  <div class="relative z-10 py-8" style="max-width:1180px;margin:0 auto;padding-left:16px;">

    <!-- Breadcrumb -->
    <div class="hero-title text-[12.5px] font-semibold mb-3" style="color:rgba(255,255,255,0.75);">
      <?php foreach ($breadcrumbs as $i => $crumb): ?>
        <?php if ($i > 0): ?><span class="mx-1.5" style="opacity:0.5;">></span><?php endif; ?>
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
<div style="display:grid;grid-template-columns:190px 1fr;max-width:1180px;margin:0 auto;padding:20px 16px 50px;gap:0;">

  <!-- ── LEFT: Category Sidebar ── -->
  <div class="animate-in" style="animation-delay:0.05s;padding-right:0;padding-top:4px;">
    <div style="background:#fff;border-radius:10px;border:1px solid #e0e0e0;overflow:hidden;box-shadow:0 1px 6px rgba(0,0,0,0.07);">
      <div style="background:#1a3269;color:#fff;font-size:13.5px;font-weight:700;padding:11px 18px;">
        Category
      </div>
      <?php foreach ($categories as $cat): ?>
      <a href="<?= htmlspecialchars($cat['href']) ?>"
         class="cat-item <?= $cat['active'] ? 'active' : '' ?>">
        <?= htmlspecialchars($cat['label']) ?>
      </a>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- ── RIGHT: Content Panel ── -->
  <div class="animate-in" style="animation-delay:0.10s;padding-left:16px;">

    <!-- Filter Bar -->
    <div style="background:#fff;border-radius:10px 10px 0 0;border:1px solid #e0e0e0;border-bottom:none;overflow:hidden;box-shadow:0 1px 6px rgba(0,0,0,0.07);">

      <div class="filter-bar">
        <!-- Quick Filters label -->
        <div class="quick-filter-label">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
               viewBox="0 0 24 24" stroke="#6b7280" stroke-width="2.2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M3 4h18M7 8h10M11 12h2M9 16h6"/>
          </svg>
          Quick Filters
        </div>

        <!-- Search -->
        <div class="search-box">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
               viewBox="0 0 24 24" stroke="#9ca3af" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/>
          </svg>
          <input type="text" placeholder="Search for datasets"/>
        </div>

        <!-- Category dropdown -->
        <div class="filter-select">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
               viewBox="0 0 24 24" stroke="#6b7280" stroke-width="2">
            <rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/>
            <rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/>
          </svg>
          <select>
            <?php foreach ($filter_categories as $opt): ?>
            <option><?= htmlspecialchars($opt) ?></option>
            <?php endforeach; ?>
          </select>
          <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="none"
               viewBox="0 0 24 24" stroke="#6b7280" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </div>

        <!-- Geolocation dropdown -->
        <div class="filter-select">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
               viewBox="0 0 24 24" stroke="#6b7280" stroke-width="2">
            <circle cx="12" cy="10" r="3"/>
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M12 2C8.134 2 5 5.134 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.866-3.134-7-7-7z"/>
          </svg>
          <select>
            <?php foreach ($filter_geolocations as $opt): ?>
            <option><?= htmlspecialchars($opt) ?></option>
            <?php endforeach; ?>
          </select>
          <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="none"
               viewBox="0 0 24 24" stroke="#6b7280" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </div>

        <!-- Year dropdown -->
        <div class="filter-select">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"
               viewBox="0 0 24 24" stroke="#6b7280" stroke-width="2">
            <rect x="3" y="4" width="18" height="18" rx="2"/>
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 2v4M8 2v4M3 10h18"/>
          </svg>
          <select>
            <?php foreach ($filter_years as $opt): ?>
            <option><?= htmlspecialchars($opt) ?></option>
            <?php endforeach; ?>
          </select>
          <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" fill="none"
               viewBox="0 0 24 24" stroke="#6b7280" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
          </svg>
        </div>

      </div><!-- /filter-bar -->

      <!-- Sort row -->
      <div class="sort-row">
        <h2 style="font-size:18px;font-weight:700;color:#111827;">
          <?= htmlspecialchars($dataset_section_label) ?>
        </h2>
        <div class="sort-select">
          <span style="color:#6b7280;font-weight:600;font-size:13px;">Sort by:</span>
          <select>
            <?php foreach ($sort_options as $opt): ?>
            <option><?= htmlspecialchars($opt) ?></option>
            <?php endforeach; ?>
          </select>
        </div>
      </div>

    </div><!-- /filter panel top -->

    <!-- Dataset List -->
    <div style="background:#fff;border:1px solid #e0e0e0;border-top:none;border-radius:0 0 10px 10px;padding:16px 18px;box-shadow:0 1px 6px rgba(0,0,0,0.07);">
      <?php foreach ($datasets as $i => $ds): ?>
      <div class="dataset-item">
        <div style="display:flex;align-items:flex-start;justify-content:space-between;gap:16px;">

          <!-- Left: content -->
          <div style="flex:1;">
            <a href="<?= htmlspecialchars($ds['details']) ?>" class="dataset-num-title">
              <?= ($i + 1) ?>. <?= htmlspecialchars($ds['title']) ?>
            </a>
            <div class="dataset-size-updated">
              Size: <?= htmlspecialchars($ds['size']) ?>&nbsp;&nbsp;&nbsp;
              Updated: <?= htmlspecialchars($ds['updated']) ?>
            </div>
            <?php foreach ($ds['meta'] as $mi => $m): ?>
            <div class="dataset-meta-row">
              <strong><?= ($mi + 1) ?>. <?= htmlspecialchars($m['label']) ?>:</strong>
              <?= htmlspecialchars($m['val']) ?>
            </div>
            <?php endforeach; ?>
          </div>

          <!-- Right: buttons -->
          <div style="display:flex;flex-direction:column;gap:8px;flex-shrink:0;padding-top:2px;">
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
    </div><!-- /dataset list -->

  </div><!-- /right content -->

</div><!-- /main grid -->

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