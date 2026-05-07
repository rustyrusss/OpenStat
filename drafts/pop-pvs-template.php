<?php
/* ============================================================
   PAGE CONFIGURATION
   ─────────────────────────────────────────────────────────────
   This is the ONLY section you need to edit when creating a
   new subject-area page. Everything else — layout, styles,
   interactions — is handled by:

     assets/css/category-list.css
     assets/js/category-list.js

   HOW TO CREATE A NEW PAGE
   ─────────────────────────
   1. Copy this file and rename it (e.g. pop-labor.php).
   2. Update the variables below.
   3. Fill in $categories. Each entry must have:
        'label'       – Card heading
        'description' – Short paragraph text
        'icon'        – Path to the category icon image
        'href'        – Destination URL
        'count'       – e.g. "12 datasets"
      Optionally add 'subcategories' (array of items with
        'label', 'href', 'count') to get an expandable panel.
   4. Set $active_nav to match the nav key for this page.
   5. Done — no CSS or JS changes needed.
   ============================================================ */

/* ── Page meta ────────────────────────────────────────────── */
$page_title       = 'Population and Vital Statistics';
$page_description = 'Population and Vital Statistics (PVS) presents data on the size,
  composition, and characteristics of the population and vital events that occur in
  the country. These statistics support planning, policy-making, and research for
  social and economic development.';

/* ── Navigation ───────────────────────────────────────────── */
$active_nav = 'database';   /* matches the 'key' in $nav_items below */

/* ── Hero banner ──────────────────────────────────────────── */
$hero_icon       = 'Img/Pop-Sub/Pop-Banner.png';
$hero_bg_graphic = 'Img/Pop-Sub/Background.png';

/* ── Section labels ───────────────────────────────────────── */
$categories_section_title    = 'Categories';
$categories_section_subtitle = 'Explore the vital events and population data available in each category.';

/* ── Breadcrumb parent ────────────────────────────────────── */
$breadcrumb_parent_label = 'Database';
$breadcrumb_parent_href  = 'database.php';

/* ── Categories ───────────────────────────────────────────── */
/*
   Required keys per category:  label, description, icon, href, count
   Optional key:                subcategories  (array — see Population below)

   Sub-category keys: label, href, count
*/
$categories = [

  [
    'label'       => 'Population',
    'description' => 'Data on the total population size, population growth, density,
                      and distribution by age, sex, and geographic area.',
    'icon'        => 'Img/Pop-Sub/Population.png',
    'href'        => 'pop-population.php',
    'count'       => '24 datasets',
    /* ↓ Add or remove subcategory entries as needed */
    'subcategories' => [
      ['label' => 'Population Size & Growth', 'href' => 'pop-population.php?sub=size',    'count' => '6 datasets'],
      ['label' => 'Population Density',        'href' => 'pop-population.php?sub=density', 'count' => '4 datasets'],
      ['label' => 'Age & Sex Distribution',    'href' => 'pop-population.php?sub=age-sex', 'count' => '7 datasets'],
      ['label' => 'Geographic Distribution',   'href' => 'pop-population.php?sub=geo',     'count' => '5 datasets'],
      ['label' => 'Population Projections',    'href' => 'pop-population.php?sub=proj',    'count' => '2 datasets'],
    ],
  ],

  [
    'label'       => 'Birth',
    'description' => 'Statistics on live births including number of births, birth rates,
                      age of mother, and other birth-related characteristics.',
    'icon'        => 'Img/Pop-Sub/Birth.png',
    'href'        => 'pop-birth.php',
    'count'       => '18 datasets',
    /* No subcategories — card navigates directly */
  ],

  [
    'label'       => 'Death',
    'description' => 'Data on deaths including number of deaths, death rates, causes of
                      death, age, sex, and other demographic details.',
    'icon'        => 'Img/Pop-Sub/Death.png',
    'href'        => 'pop-death.php',
    'count'       => '21 datasets',
  ],

  [
    'label'       => 'Marriage',
    'description' => 'Statistics on marriages including number of marriages, marriage
                      rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Pop-Sub/Marriage.png',
    'href'        => 'pop-marriage.php',
    'count'       => '15 datasets',
  ],

];

/* ── Global nav items (same across all pages) ─────────────── */
$nav_items = [
  ['label' => 'Home',       'href' => 'index.php',    'key' => 'home'],
  ['label' => 'About',      'href' => 'about.php',    'key' => 'about'],
  ['label' => 'Database',   'href' => 'database.php', 'key' => 'database'],
  ['label' => 'Dashboard',  'href' => 'dashboard.php','key' => 'dashboard'],
  ['label' => 'Featured',   'href' => 'featured.php', 'key' => 'featured'],
  ['label' => 'Contact Us', 'href' => 'contact.php',  'key' => 'contact'],
];

/* ============================================================
   END CONFIGURATION — do not edit below this line
   ============================================================ */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PSA OpenSTAT – <?= htmlspecialchars($page_title) ?></title>

  <!-- Google Font (shared across all pages) -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet"/>

  <!-- ★ Reusable template stylesheet ★ -->
  <link rel="stylesheet" href="assets/css/category-list.css"/>
</head>
<body>

<!-- ════ NAVBAR ════ -->
<header class="navbar">
  <div class="navbar-top">
    <img src="Img/Logos/PSAHeader.png" alt="Philippine Statistics Authority"/>
    <img src="Img/Logos/OpenStat-White.png" alt="OpenSTAT" class="logo-right"/>
  </div>
  <nav class="navbar-nav">
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

  <nav class="hero-breadcrumb">
    <a href="<?= htmlspecialchars($breadcrumb_parent_href) ?>">
      <?= htmlspecialchars($breadcrumb_parent_label) ?>
    </a>
    <span class="sep">›</span>
    <span class="current"><?= htmlspecialchars($page_title) ?></span>
  </nav>

  <div class="hero-inner">
    <div class="hero-icon-box">
      <img src="<?= htmlspecialchars($hero_icon) ?>" alt="<?= htmlspecialchars($page_title) ?> icon"/>
    </div>
    <div class="hero-text">
      <h1><?= htmlspecialchars($page_title) ?></h1>
      <p><?= htmlspecialchars($page_description) ?></p>
    </div>
  </div>
</section>

<!-- ════ MAIN CONTENT ════ -->
<main class="main-wrap">

  <div class="section-header">
    <h2 class="section-title"><?= htmlspecialchars($categories_section_title) ?></h2>
  </div>
  <p class="section-sub"><?= htmlspecialchars($categories_section_subtitle) ?></p>

  <!-- Category list -->
  <div class="categories-list">
    <?php foreach ($categories as $i => $cat):
      $hasSubs = !empty($cat['subcategories']);
      $delay   = round(0.04 + $i * 0.06, 2);
    ?>
    <div class="list-item-wrap" style="animation-delay: <?= $delay ?>s;">

      <!-- Main card -->
      <a href="<?= htmlspecialchars($cat['href']) ?>"
         class="list-card"
         <?= $hasSubs ? 'onclick="return handleCardClick(event, this)"' : '' ?>>

        <div class="list-icon-wrap">
          <img src="<?= htmlspecialchars($cat['icon']) ?>"
               alt="<?= htmlspecialchars($cat['label']) ?> icon"/>
        </div>

        <div class="list-info">
          <h3><?= htmlspecialchars($cat['label']) ?></h3>
          <p><?= htmlspecialchars($cat['description']) ?></p>
        </div>

        <div class="list-meta">
          <span class="list-count"><?= htmlspecialchars($cat['count']) ?></span>

          <?php if ($hasSubs): ?>
            <!-- Expandable: show +/− toggle -->
            <button class="expand-btn"
                    title="Show subcategories"
                    onclick="toggleExpand(event, this)">
              <span class="icon-plus">+</span>
              <span class="icon-minus">−</span>
            </button>
          <?php else: ?>
            <!-- Direct link: show arrow -->
            <div class="list-arrow" aria-hidden="true">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none"
                   stroke="#fff" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
              </svg>
            </div>
          <?php endif; ?>
        </div>
      </a>

      <?php if ($hasSubs): ?>
      <!-- Subcategory dropdown panel -->
      <div class="subcategory-panel" role="region"
           aria-label="<?= htmlspecialchars($cat['label']) ?> subcategories">
        <div class="subcategory-inner">
          <?php foreach ($cat['subcategories'] as $sub): ?>
          <a href="<?= htmlspecialchars($sub['href']) ?>" class="sub-item">
            <span class="sub-item-left">
              <span class="sub-item-dot" aria-hidden="true"></span>
              <?= htmlspecialchars($sub['label']) ?>
            </span>
            <span class="sub-item-count"><?= htmlspecialchars($sub['count']) ?></span>
          </a>
          <?php endforeach; ?>
        </div>
      </div>
      <?php endif; ?>

    </div><!-- /.list-item-wrap -->
    <?php endforeach; ?>
  </div><!-- /.categories-list -->

</main>

<!-- ════ FOOTER ════ -->
<footer>
  <span>2026 Philippine Statistics Authority. All content is public domain unless otherwise stated.</span>
  <div class="footer-links">
    <a href="#">Terms Of Use</a>
    <span class="footer-divider">|</span>
    <a href="#">Privacy Statement</a>
  </div>
</footer>

<!-- ★ Reusable template script ★ -->
<script src="assets/js/category-list.js"></script>

</body>
</html>