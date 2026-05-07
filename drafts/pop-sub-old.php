<?php
/* ============================================================
   PAGE CONFIGURATION — Edit everything here
   ============================================================ */

$page_title       = 'Population and Vital Statistics';
$page_description = 'Population and Vital Statistics (PVS) presents data on the size, composition, and characteristics of the population and vital events the occur in the country. These statistics support planning, policy-making, and research for social and economic development.';
$active_nav       = 'database';

$hero_icon       = 'Img/Pop-Sub/Pop-Banner.png';
$hero_bg_graphic = 'Img/Pop-Sub/Background.png';

$categories_section_title    = 'Categories';
$categories_section_subtitle = 'Explore the vital events and population data available in each category.';

$categories = [
  [
    'label'       => 'Population',
    'description' => 'Data on the total population size, population growth, density, and distribution by age, sex, and geographic area.',
    'icon'        => 'Img/Pop-Sub/Population.png',
    'href'        => 'pop-population.php',
    'count'       => '24 datasets',
  ],
  [
    'label'       => 'Birth',
    'description' => 'Statistics on live birth including number of births, birth rates, age of mother and other birth-related characteristics.',
    'icon'        => 'Img/Pop-Sub/Birth.png',
    'href'        => 'pop-birth.php',
    'count'       => '18 datasets',
  ],
  [
    'label'       => 'Death',
    'description' => 'Data on deaths including number of deaths, death rates, causes of death, age, sex, and other demographic details.',
    'icon'        => 'Img/Pop-Sub/Death.png',
    'href'        => 'pop-death.php',
    'count'       => '21 datasets',
  ],
  [
    'label'       => 'Marriage',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Pop-Sub/Marriage.png',
    'href'        => 'pop-marriage.php',
    'count'       => '15 datasets',
  ],
   [
    'label'       => 'Marriage',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Pop-Sub/Marriage.png',
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

  <!--
    FIX: Both views start hidden via inline style so there is ZERO flash
    before JavaScript runs. JS will immediately show the correct one.
  -->
  <style>
    #view-slider, #view-list { display: none; }
  </style>

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
    .navbar-top {
      background: #1a3269;
      display: flex; align-items: center; justify-content: space-between;
      padding: 8px 48px; min-height: 88px;
    }
    .navbar-top img { height: 80px; width: auto; object-fit: contain; }
    .navbar-nav {
      background: #142a56;
      display: flex; align-items: center; justify-content: center;
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

    /* ─── SECTION HEADER ROW ─── */
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

    /* ─── VIEW TOGGLE ─── */
    .view-toggle {
      display: flex;
      align-items: center;
      gap: 6px;
      background: #fff;
      border: 1.5px solid #c8d8ef;
      border-radius: 10px;
      padding: 4px;
      box-shadow: 0 2px 8px rgba(26,50,105,.08);
    }
    .toggle-btn {
      display: flex; align-items: center; justify-content: center;
      width: 36px; height: 36px;
      border: none;
      border-radius: 7px;
      background: transparent;
      cursor: pointer;
      color: #9ca3af;
      transition: background .18s, color .18s;
    }
    .toggle-btn:hover { background: #eff6ff; color: #1a3269; }
    .toggle-btn.active {
      background: #1a3269;
      color: #fff;
    }
    .toggle-btn svg { display: block; }

    /* ─── SLIDER WRAPPER ─── */
    .slider-section {
      position: relative;
      margin-bottom: 36px;
    }
    .slider-outer {
      position: relative;
      padding: 0 36px;
    }
    .slider-viewport {
      overflow: hidden;
      cursor: grab;
      user-select: none;
      border-radius: 6px;
    }
    .slider-viewport.is-dragging { cursor: grabbing; }
    .slider-track {
      display: flex;
      gap: 20px;
      transition: transform .45s cubic-bezier(.22,1,.36,1);
    }
    .slider-track.is-centered {
      justify-content: center;
    }

    /* ─── SLIDER NAV BUTTONS ─── */
    .slider-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      z-index: 10;
      width: 42px; height: 42px;
      border-radius: 8px;
      border: none;
      background: #fff;
      cursor: pointer;
      box-shadow: 0 2px 10px rgba(26,50,105,.18);
      display: flex; align-items: center; justify-content: center;
      transition: background .18s, box-shadow .18s;
    }
    .slider-btn:hover {
      background: #1a3269;
      box-shadow: 0 4px 18px rgba(26,50,105,.32);
    }
    .slider-btn svg { display: block; transition: stroke .18s; }
    .slider-btn:hover svg { stroke: #ffffff !important; }
    .slider-btn.prev { left: -4px; }
    .slider-btn.next { right: -4px; }

    /* ─── SLIDER DOTS ─── */
    .slider-dots {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      margin-top: 18px;
    }
    .dot-btn {
      width: 10px; height: 10px;
      border-radius: 50%;
      border: none;
      cursor: pointer;
      background: #cbd5e1;
      padding: 0;
      transition: background .2s, transform .2s;
    }
    .dot-btn.active { background: #1a3269; transform: scale(1.25); }

    /* ─── SLIDE CARD ─── */
    .slide-card {
      flex-shrink: 0;
      background: #fff;
      border: 1.5px solid #c8d8ef;
      border-radius: 14px;
      padding: 24px 20px 20px;
      display: flex;
      flex-direction: column;
      box-shadow: 0 4px 16px rgba(26,50,105,.10);
      transition: box-shadow .2s, transform .2s, background .2s;
      cursor: pointer;
      text-decoration: none;
    }
    .slide-card:hover {
      box-shadow: 0 8px 28px rgba(26,50,105,.18);
      transform: translateY(-4px);
      background: #eff6ff;
    }
    .slide-card-inner {
      display: flex;
      flex-direction: column;
      height: 100%;
      transition: transform .25s cubic-bezier(.22,1,.36,1);
    }
    .slide-card:hover .slide-card-inner { transform: translateY(-2px); }
    .card-header {
      display: flex; align-items: center; gap: 14px;
      margin-bottom: 14px;
    }
    .card-icon-wrap {
      flex-shrink: 0;
      width: 64px; height: 64px;
      background: #dce8f7;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
    }
    .card-icon-wrap img { width: 64px; height: 64px; object-fit: contain; }
    .card-header h3 { font-size: 16px; font-weight: 800; color: #1a3269; }
    .card-desc {
      font-size: 12.5px; color: #6b7280;
      line-height: 1.72; flex: 1; margin-bottom: 16px;
    }
    .card-count {
      display: inline-flex;
      align-items: center;
      gap: 5px;
      font-size: 12px;
      font-weight: 700;
      color: #4b6cb7;
      background: #eff6ff;
      border-radius: 20px;
      padding: 4px 12px;
      margin-bottom: 14px;
      width: fit-content;
    }
    .btn-view {
      display: block; text-align: center;
      background: #1a3269; color: #fff;
      font-size: 13px; font-weight: 700;
      padding: 10px 14px; border-radius: 7px;
      text-decoration: none; transition: background .18s;
      margin-top: auto;
    }
    .btn-view:hover { background: #142a56; }

    /* ─── LIST VIEW ─── */
    .categories-list {
      display: flex;
      flex-direction: column;
      gap: 12px;
      animation: fadeUp .35s cubic-bezier(.22,1,.36,1) both;
    }
    .list-card {
      background: #fff;
      border: 1.5px solid #c8d8ef;
      border-radius: 14px;
      padding: 18px 22px;
      display: flex;
      align-items: center;
      gap: 20px;
      box-shadow: 0 4px 14px rgba(26,50,105,.08);
      transition: box-shadow .2s, transform .2s, background .2s;
      text-decoration: none;
    }
    .list-card:hover {
      box-shadow: 0 6px 22px rgba(26,50,105,.16);
      transform: translateX(4px);
      background: #eff6ff;
    }
    .list-icon-wrap {
      flex-shrink: 0;
      width: 58px; height: 58px;
      background: #dce8f7;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
    }
    .list-icon-wrap img { width: 56px; height: 56px; object-fit: contain; }
    .list-info { flex: 1; }
    .list-info h3 { font-size: 15px; font-weight: 800; color: #1a3269; margin-bottom: 4px; }
    .list-info p { font-size: 12.5px; color: #6b7280; line-height: 1.65; }
    .list-meta {
      display: flex;
      align-items: center;
      gap: 14px;
      flex-shrink: 0;
    }
    .list-count {
      font-size: 12px; font-weight: 700;
      color: #4b6cb7; background: #eff6ff;
      border-radius: 20px; padding: 4px 12px;
      white-space: nowrap;
    }
    .list-arrow {
      width: 34px; height: 34px;
      background: #1a3269;
      border-radius: 8px;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
      transition: background .18s;
    }
    .list-card:hover .list-arrow { background: #142a56; }

    /* ─── FOOTER ─── */
    footer {
      background: #1f2937; color: #9ca3af;
      font-size: 12px; padding: 14px 36px;
      display: flex; align-items: center;
      justify-content: space-between; flex-wrap: wrap; gap: 8px;
    }
    footer a { color: #9ca3af; text-decoration: none; }
    footer a:hover { color: #fff; }

    /* ─── HIDDEN UTILITY ─── */
    /* Uses display:block / display:flex depending on which view is shown.
       The .hidden class sets display:none with !important so it always wins. */
    .hidden { display: none !important; }

    @media (max-width: 640px) {
      .list-info p { display: none; }
      .list-meta { flex-direction: column; gap: 8px; align-items: flex-end; }
      .slider-outer { padding: 0 28px; }
    }
  </style>

  <!--
    FIX: Run setView BEFORE the page renders (in <head>) so the correct
    view is shown from the very first paint — no flash, no flicker.
  -->
  <script>
    (function() {
      var saved = localStorage.getItem('pvs-view') || 'slider';
      /* Write a temporary inline style that will be applied as soon as
         the elements exist. We override the #view-slider / #view-list
         display:none set above for whichever view should be visible. */
      document.write('<style id="view-flash-fix">' +
        '#view-' + saved + ' { display: ' + (saved === 'list' ? 'flex' : 'block') + ' !important; }' +
      '</style>');
    })();
  </script>
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

  <!-- Section header with title + view toggle -->
  <div class="section-header">
    <div>
      <h2 class="section-title"><?= htmlspecialchars($categories_section_title) ?></h2>
    </div>
    <div class="view-toggle">
      <!-- Slider view — active class corrected by JS on DOMContentLoaded -->
      <button class="toggle-btn" id="btn-slider" title="Slider view" onclick="setView('slider')">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
          <rect x="1" y="4" width="5" height="10" rx="2" fill="currentColor"/>
          <rect x="7" y="4" width="5" height="10" rx="2" fill="currentColor"/>
          <rect x="13" y="4" width="4" height="10" rx="2" fill="currentColor"/>
        </svg>
      </button>
      <!-- List view -->
      <button class="toggle-btn" id="btn-list" title="List view" onclick="setView('list')">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
          <rect x="1" y="2.5" width="16" height="3" rx="1.5" fill="currentColor"/>
          <rect x="1" y="7.5" width="16" height="3" rx="1.5" fill="currentColor"/>
          <rect x="1" y="12.5" width="16" height="3" rx="1.5" fill="currentColor"/>
        </svg>
      </button>
    </div>
  </div>
  <p class="section-sub"><?= htmlspecialchars($categories_section_subtitle) ?></p>

  <!-- ══ SLIDER VIEW ══ (both views start hidden via <head> style; JS reveals the right one) -->
  <div id="view-slider" class="slider-section">
    <div class="slider-outer">
      <button class="slider-btn prev" id="sliderPrev" aria-label="Previous">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="#1a3269" stroke-width="2.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
        </svg>
      </button>

      <div class="slider-viewport" id="sliderViewport">
        <div class="slider-track" id="sliderTrack">
          <?php foreach ($categories as $cat): ?>
          <a href="<?= htmlspecialchars($cat['href']) ?>" class="slide-card">
            <div class="slide-card-inner">
              <div class="card-header">
                <div class="card-icon-wrap">
                  <img src="<?= htmlspecialchars($cat['icon']) ?>" alt="<?= htmlspecialchars($cat['label']) ?> icon"/>
                </div>
                <h3><?= htmlspecialchars($cat['label']) ?></h3>
              </div>
              <p class="card-desc"><?= htmlspecialchars($cat['description']) ?></p>
              <div class="card-count">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                  <rect x="1" y="1" width="4" height="4" rx="1" fill="#4b6cb7"/>
                  <rect x="7" y="1" width="4" height="4" rx="1" fill="#4b6cb7"/>
                  <rect x="1" y="7" width="4" height="4" rx="1" fill="#4b6cb7"/>
                  <rect x="7" y="7" width="4" height="4" rx="1" fill="#4b6cb7"/>
                </svg>
                <?= htmlspecialchars($cat['count']) ?>
              </div>
              <span class="btn-view">View Datasets &rsaquo;</span>
            </div>
          </a>
          <?php endforeach; ?>
        </div>
      </div>

      <button class="slider-btn next" id="sliderNext" aria-label="Next">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="#1a3269" stroke-width="2.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
        </svg>
      </button>
    </div>
    <div class="slider-dots" id="sliderDots"></div>
  </div>

  <!-- ══ LIST VIEW ══ -->
  <div id="view-list" class="categories-list">
    <?php foreach ($categories as $i => $cat): ?>
    <a href="<?= htmlspecialchars($cat['href']) ?>" class="list-card" style="animation-delay:<?= 0.04 + $i * 0.06 ?>s;">
      <div class="list-icon-wrap">
        <img src="<?= htmlspecialchars($cat['icon']) ?>" alt="<?= htmlspecialchars($cat['label']) ?> icon"/>
      </div>
      <div class="list-info">
        <h3><?= htmlspecialchars($cat['label']) ?></h3>
        <p><?= htmlspecialchars($cat['description']) ?></p>
      </div>
      <div class="list-meta">
        <span class="list-count"><?= htmlspecialchars($cat['count']) ?></span>
        <div class="list-arrow">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
          </svg>
        </div>
      </div>
    </a>
    <?php endforeach; ?>
  </div>

</div>

<!-- ════ FOOTER ════ -->
<footer>
  <span>2026 Philippine Statistics Authority. All content is public domain unless otherwise stated.</span>
  <div style="display:flex;align-items:center;gap:12px;">
    <a href="#">Terms Of Use</a>
    <span style="color:#4b5563;">|</span>
    <a href="#">Privacy Statement</a>
  </div>
</footer>

<script>
/* ══ VIEW TOGGLE ══
   setView() controls visibility purely via inline style.display so it
   always overrides both the <head> flash-fix style and the .hidden class,
   regardless of CSS specificity ordering.
   ═══════════════════════════════════════════════════════════════════════ */
const views = ['slider', 'list'];

function setView(v) {
  views.forEach(function(id) {
    var el  = document.getElementById('view-' + id);
    var btn = document.getElementById('btn-' + id);

    if (id === v) {
      /* Show: use the correct display type for each view */
      el.style.display = (id === 'list') ? 'flex' : 'block';
      btn.classList.add('active');
      if (id === 'slider') { sliderInit(); }
    } else {
      /* Hide */
      el.style.display = 'none';
      btn.classList.remove('active');
    }
  });

  localStorage.setItem('pvs-view', v);

  /* Remove the flash-fix <style> tag now that JS has full control */
  var fix = document.getElementById('view-flash-fix');
  if (fix) fix.parentNode.removeChild(fix);
}

/* ── Restore saved view immediately on DOM ready ── */
document.addEventListener('DOMContentLoaded', function() {
  var saved = localStorage.getItem('pvs-view') || 'slider';
  setView(saved);
});

/* ══ SLIDER ══ */
(function() {
  var track, viewport, dotsWrap, slides;
  var GAP        = 20;
  var current    = 0;
  var initialised = false;

  function init() {
    track    = document.getElementById('sliderTrack');
    viewport = document.getElementById('sliderViewport');
    dotsWrap = document.getElementById('sliderDots');
    slides   = Array.from(track.querySelectorAll('.slide-card'));
  }

  function getVW() {
    if (viewport && viewport.offsetWidth > 0) return viewport.offsetWidth;
    var wrap = document.querySelector('.main-wrap');
    return wrap ? wrap.offsetWidth - 72 : window.innerWidth - 120;
  }

  function visibleCount() {
    var vw = getVW();
    if (vw < 380) return 1;
    if (vw < 620) return 2;
    if (vw < 900) return 3;
    return 4;
  }

  function cardWidth() {
    var vis = visibleCount();
    return (getVW() - GAP * (vis - 1)) / vis;
  }

  function applyWidths() {
    var w = cardWidth();
    slides.forEach(function(s) { s.style.width = w + 'px'; s.style.minWidth = w + 'px'; });
    var fits = slides.length <= visibleCount();
    track.classList.toggle('is-centered', fits);
    if (fits) {
      track.style.transform = 'translateX(0)';
      document.getElementById('sliderPrev').style.display = 'none';
      document.getElementById('sliderNext').style.display = 'none';
      dotsWrap.style.display = 'none';
    } else {
      document.getElementById('sliderPrev').style.display = '';
      document.getElementById('sliderNext').style.display = '';
    }
  }

  function totalPages() {
    return Math.max(1, Math.ceil(slides.length / visibleCount()));
  }

  function buildDots() {
    dotsWrap.innerHTML = '';
    var pages = totalPages();
    if (pages <= 1) { dotsWrap.style.display = 'none'; return; }
    dotsWrap.style.display = 'flex';
    for (var i = 0; i < pages; i++) {
      (function(idx) {
        var d = document.createElement('button');
        d.className = 'dot-btn' + (idx === 0 ? ' active' : '');
        d.addEventListener('click', function() { goTo(idx); });
        dotsWrap.appendChild(d);
      })(i);
    }
  }

  function pageOffset(page) {
    return page * visibleCount() * (cardWidth() + GAP);
  }

  function goTo(page, animate) {
    var pages = totalPages();
    current = Math.max(0, Math.min(page, pages - 1));
    track.style.transition = (animate === false) ? 'none' : 'transform .45s cubic-bezier(.22,1,.36,1)';
    track.style.transform  = 'translateX(-' + pageOffset(current) + 'px)';
    dotsWrap.querySelectorAll('.dot-btn').forEach(function(d, i) {
      d.classList.toggle('active', i === current);
    });
    document.getElementById('sliderPrev').style.opacity = current === 0 ? '.35' : '1';
    document.getElementById('sliderNext').style.opacity = current >= pages - 1 ? '.35' : '1';
  }

  window.sliderInit = function() {
    /* Use a small timeout so the element is fully laid out (has real width)
       before we measure — this prevents the card-size jump bug.           */
    setTimeout(function() {
      if (!track) init();

      if (!initialised) {
        document.getElementById('sliderPrev').addEventListener('click', function() { goTo(current - 1); });
        document.getElementById('sliderNext').addEventListener('click', function() { goTo(current + 1); });

        /* Drag / swipe */
        var startX = 0, startOff = 0, dragging = false, moved = false;

        function onStart(x) {
          dragging = true; moved = false;
          startX = x; startOff = pageOffset(current);
          track.style.transition = 'none';
          viewport.classList.add('is-dragging');
        }
        function onMove(x) {
          if (!dragging) return;
          var d = x - startX;
          if (!moved && Math.abs(d) > 6) moved = true;
          if (!moved) return;
          var max = pageOffset(totalPages() - 1);
          track.style.transform = 'translateX(-' + Math.max(-60, Math.min(startOff - d, max + 60)) + 'px)';
        }
        function onEnd(x) {
          if (!dragging) return;
          dragging = false; viewport.classList.remove('is-dragging');
          if (!moved) return;
          var d = x - startX;
          var stride = visibleCount() * (cardWidth() + GAP);
          if      (d < -stride * 0.2) goTo(current + 1);
          else if (d >  stride * 0.2) goTo(current - 1);
          else                         goTo(current);
        }

        viewport.addEventListener('mousedown',  function(e) { onStart(e.clientX); });
        window.addEventListener('mousemove',    function(e) { onMove(e.clientX); });
        window.addEventListener('mouseup',      function(e) { onEnd(e.clientX); });
        viewport.addEventListener('touchstart', function(e) { onStart(e.touches[0].clientX); }, {passive:true});
        viewport.addEventListener('touchmove',  function(e) { onMove(e.touches[0].clientX); },  {passive:true});
        viewport.addEventListener('touchend',   function(e) { onEnd(e.changedTouches[0].clientX); });
        viewport.addEventListener('dragstart',  function(e) { e.preventDefault(); });

        /* Prevent link navigation on drag */
        slides.forEach(function(s) {
          s.addEventListener('click', function(e) { if (moved) e.preventDefault(); });
        });

        var resizeTimer;
        window.addEventListener('resize', function() {
          clearTimeout(resizeTimer);
          resizeTimer = setTimeout(function() {
            current = 0; applyWidths(); buildDots(); goTo(0, false);
          }, 120);
        });

        initialised = true;
      }

      applyWidths();
      buildDots();
      goTo(0, false);

    }, 60); /* 60 ms gives the browser time to fully render the visible slider */
  };

})();
</script>
</body>
</html>