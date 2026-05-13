<?php
/* ============================================================
   PAGE CONFIGURATION — Edit everything here
   ============================================================ */

$page_title       = 'Dashboard';
$page_description = 'Lorem Ipsum.';
$hero_image       = 'Img/Background-Data.png';
$active_nav       = 'dashboard';

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
  ],
  [
    'label'       => 'Birth',
    'description' => 'Statistics on live birth including number of births, birth rates, age of mother and other birth-related characteristics.',
    'icon'        => 'Img/Pop-Sub/Birth.png',
    'href'        => 'pop-birth.php',
  ],
  [
    'label'       => 'Death',
    'description' => 'Data on deaths including number of deaths, death rates, causes of death, age, sex, and other demographic details.',
    'icon'        => 'Img/Pop-Sub/Death.png',
    'href'        => 'pop-death.php',
  ],
  [
    'label'       => 'Marriage',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Pop-Sub/Marriage.png',
    'href'        => 'pop-marriage.php',
  ],
  [
    'label'       => 'Marriage',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Pop-Sub/Marriage.png',
    'href'        => 'pop-marriage.php',
  ],
  [
    'label'       => 'Marriage',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Pop-Sub/Marriage.png',
    'href'        => 'pop-marriage.php',
  ],
  [
    'label'       => 'Marriage',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Pop-Sub/Marriage.png',
    'href'        => 'pop-marriage.php',
  ],
  [
    'label'       => 'Marriage',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Pop-Sub/Marriage.png',
    'href'        => 'pop-marriage.php',
  ],
  [
    'label'       => 'Marriage',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Pop-Sub/Marriage.png',
    'href'        => 'pop-marriage.php',
  ],
  [
    'label'       => 'Marriage',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Pop-Sub/Marriage.png',
    'href'        => 'pop-marriage.php',
  ],
  [
    'label'       => 'Marriage',
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type of ceremony.',
    'icon'        => 'Img/Pop-Sub/Marriage.png',
    'href'        => 'pop-marriage.php',
  ],
];

$breadcrumbs = [
  ['label' => 'Dashboard', 'href' => 'database.php'],
  ['label' => '',          'href' => ''],
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

  <!-- Both views hidden until JS runs — prevents flash -->
  <style>
    #view-grid, #view-list { display: none; }
  </style>

  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { height: 100%; scroll-behavior: smooth; }
    body {
      font-family: 'Open Sans', sans-serif;
      background: #f0f0f0;
      color: #1f2937;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      overflow-x: hidden;
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
      transition: background .15s; white-space: nowrap; letter-spacing: .3px;
    }
    .nav-link:hover      { background: rgba(255,255,255,.12); }
    .nav-link.active-nav { background: rgba(255,255,255,.18); font-weight: 700; }

    /* ─── HERO (copied from about.php) ─── */
    .hero-banner {
      position: relative;
      min-height: 180px;
    }
    .hero-banner-bg {
      position: absolute; inset: 0;
      width: 100%; height: 100%;
      object-fit: cover; object-position: center;
      z-index: 0;
    }
    .hero-overlay {
      position: absolute; inset: 0;
      background: rgba(4,17,61,.72);
      z-index: 1;
    }
    .hero-content {
      position: relative; z-index: 10;
      max-width: 1180px;
      margin: 0 auto;
      padding: 28px 32px;
    }
    .hero-breadcrumb {
      font-size: 12.5px; font-weight: 600;
      color: rgba(255,255,255,.75);
      margin-bottom: 12px;
    }
    .hero-breadcrumb a {
      color: rgba(255,255,255,.75); text-decoration: none;
      transition: color .15s;
    }
    .hero-breadcrumb a:hover { color: #fff; }
    .hero-breadcrumb .sep { opacity: .5; margin: 0 6px; }
    .hero-title {
      font-size: 28px; font-weight: 800; color: #fff;
      text-shadow: 0 2px 14px rgba(0,0,0,.5);
      animation: heroFadeIn .7s .15s cubic-bezier(.22,1,.36,1) both;
    }
    @keyframes heroFadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    /* ─── MAIN ─── */
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
    .section-title { font-size: 20px; font-weight: 800; color: #1a3269; }
    .section-sub   { font-size: 13px; color: #6b7280; margin-bottom: 20px; }

    /* ─── VIEW TOGGLE ─── */
    .view-toggle {
      display: flex; align-items: center; gap: 6px;
      background: #fff;
      border: 1.5px solid #c8d8ef;
      border-radius: 10px;
      padding: 4px;
      box-shadow: 0 2px 8px rgba(26,50,105,.08);
    }
    .toggle-btn {
      display: flex; align-items: center; justify-content: center;
      width: 36px; height: 36px;
      border: none; border-radius: 7px;
      background: transparent; cursor: pointer;
      color: #9ca3af;
      transition: background .18s, color .18s;
    }
    .toggle-btn:hover  { background: #eff6ff; color: #1a3269; }
    .toggle-btn.active { background: #1a3269; color: #fff; }
    .toggle-btn svg    { display: block; }

    /* ─── GRID VIEW (4 columns) ─── */
    .categories-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 20px;
    }
    .grid-card {
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
    .grid-card:hover {
      box-shadow: 0 8px 28px rgba(26,50,105,.18);
      transform: translateY(-4px);
      background: #eff6ff;
    }
    .card-header {
      display: flex; align-items: center; gap: 14px;
      margin-bottom: 14px;
    }
    .card-icon-wrap {
      flex-shrink: 0;
      width: 60px; height: 60px;
      background: #dce8f7;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
    }
    .card-icon-wrap img { width: 60px; height: 60px; object-fit: contain; }
    .card-header h3 { font-size: 15px; font-weight: 800; color: #1a3269; }
    .card-desc {
      font-size: 12.5px; color: #6b7280;
      line-height: 1.72; flex: 1; margin-bottom: 16px;
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
    }
    .list-card {
      background: #fff;
      border: 1.5px solid #c8d8ef;
      border-radius: 14px;
      padding: 18px 22px;
      display: flex; align-items: center; gap: 20px;
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
    .list-info p  { font-size: 12.5px; color: #6b7280; line-height: 1.65; }
    .list-meta {
      display: flex; align-items: center; gap: 14px; flex-shrink: 0;
    }
    .list-arrow {
      width: 34px; height: 34px;
      background: #1a3269; border-radius: 8px;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0; transition: background .18s;
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

    /* ─── RESPONSIVE ─── */
    @media (max-width: 1024px) {
      .categories-grid { grid-template-columns: repeat(3, 1fr); }
    }
    @media (max-width: 700px) {
      .categories-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 480px) {
      .categories-grid { grid-template-columns: 1fr; }
      .list-info p { display: none; }
      .list-meta { flex-direction: column; gap: 8px; align-items: flex-end; }
    }
  </style>

  <!-- Flash-fix: reveal the saved view before first paint -->
  <script>
    (function() {
      var saved = localStorage.getItem('pvs-view') || 'grid';
      document.write('<style id="view-flash-fix">' +
        '#view-' + saved + ' { display: ' + (saved === 'list' ? 'flex' : 'grid') + ' !important; }' +
      '</style>');
    })();
  </script>
</head>
<body>

<!-- ════ NAVBAR ════ -->
<header class="navbar">
  <div class="navbar-top">
    <img src="Img/Logos/PSAHeader.png" alt="Philippine Statistics Authority"/>
    <div style="margin-right:60px;">
      <img src="Img/Logos/OpenStat-White.png" alt="OpenSTAT" style="height:90px;"/>
    </div>
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

<!-- ════ HERO (copied from about.php) ════ -->
<div class="hero-banner">
  <img src="<?= htmlspecialchars($hero_image) ?>" alt="" class="hero-banner-bg"/>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <div class="hero-breadcrumb">
      <?php foreach ($breadcrumbs as $i => $crumb): ?>
        <?php if ($i > 0): ?><span class="sep">›</span><?php endif; ?>
        <?php if (!empty($crumb['href'])): ?>
          <a href="<?= htmlspecialchars($crumb['href']) ?>"
             onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.75)'">
            <?= htmlspecialchars($crumb['label']) ?>
          </a>
        <?php else: ?>
          <span style="color:#fff;"><?= htmlspecialchars($crumb['label']) ?></span>
        <?php endif; ?>
      <?php endforeach; ?>
    </div>
    <h1 class="hero-title"><?= htmlspecialchars($page_title) ?></h1>
  </div>
</div>

<!-- ════ MAIN CONTENT ════ -->
<div class="main-wrap">

  <!-- Section header -->
  <div class="section-header">
    <div>
      <h2 class="section-title"><?= htmlspecialchars($categories_section_title) ?></h2>
    </div>
  </div>
  <p class="section-sub"><?= htmlspecialchars($categories_section_subtitle) ?></p>

  <!-- ══ GRID VIEW (4 columns) ══ -->
  <div id="view-grid" class="categories-grid">
    <?php foreach ($categories as $cat): ?>
    <a href="<?= htmlspecialchars($cat['href']) ?>" class="grid-card">
      <div class="card-header">
        <div class="card-icon-wrap">
          <img src="<?= htmlspecialchars($cat['icon']) ?>" alt="<?= htmlspecialchars($cat['label']) ?> icon"/>
        </div>
        <h3><?= htmlspecialchars($cat['label']) ?></h3>
      </div>
      <p class="card-desc"><?= htmlspecialchars($cat['description']) ?></p>
      <span class="btn-view">View Datasets &rsaquo;</span>
    </a>
    <?php endforeach; ?>
  </div>

  <!-- ══ LIST VIEW ══ -->
  <div id="view-list" class="categories-list">
    <?php foreach ($categories as $i => $cat): ?>
    <a href="<?= htmlspecialchars($cat['href']) ?>" class="list-card"
       style="animation-delay:<?= 0.04 + $i * 0.06 ?>s;">
      <div class="list-icon-wrap">
        <img src="<?= htmlspecialchars($cat['icon']) ?>" alt="<?= htmlspecialchars($cat['label']) ?> icon"/>
      </div>
      <div class="list-info">
        <h3><?= htmlspecialchars($cat['label']) ?></h3>
        <p><?= htmlspecialchars($cat['description']) ?></p>
      </div>
      <div class="list-meta">
        <div class="list-arrow">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
          </svg>
        </div>
      </div>
    </a>
    <?php endforeach; ?>
  </div>

</div><!-- /.main-wrap -->

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
/* ══ VIEW TOGGLE ══ */
function setView(v) {
  var views    = ['grid', 'list'];
  var displays = { grid: 'grid', list: 'flex' };

  views.forEach(function(id) {
    var el  = document.getElementById('view-' + id);
    var btn = document.getElementById('btn-'  + id);
    if (id === v) {
      el.style.display = displays[id];
      btn.classList.add('active');
    } else {
      el.style.display = 'none';
      btn.classList.remove('active');
    }
  });

  localStorage.setItem('pvs-view', v);

  var fix = document.getElementById('view-flash-fix');
  if (fix) fix.parentNode.removeChild(fix);
}

document.addEventListener('DOMContentLoaded', function() {
  var saved = localStorage.getItem('pvs-view') || 'grid';
  setView(saved);
});
</script>
</body>
</html>