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
  ],
  [
    'label'       => 'Birth',
    'description' => 'Statistics on live birth including number of births, birth rates, age of mother and, other birth-related characteristics.',
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
    'description' => 'Statistics on marriages including number of marriages, marriage rates, age of couple, and type o ceremony.',
    'icon'        => 'Img/Pop-Sub/Marriage.png',
    'href'        => 'pop-marriage.php',
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

    /* ── Make body a flex column so footer is always at the bottom ── */
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
      background: #e8ecf2;   /* match page background — no separate color block */
      padding: 60px 48px;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 320px;     /* much taller banner */
      width: 100%;
    }
    /* Background.png — natural size, anchored to the right side */
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
    /* Make hero icon box bigger to match the taller banner */
    .hero-icon-box {
      flex-shrink: 0;
      width: 140px; height: 140px;
      background: #1a3269;
      border-radius: 22px;
      display: flex; align-items: center; justify-content: center;
      box-shadow: 0 6px 24px rgba(26,50,105,.28);
    }
    .hero-icon-box img {
      width: 90px; height: 90px;
      object-fit: contain;
    }
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

    /* ─── MAIN AREA ───
       flex: 1 makes this grow and fill the remaining space,
       pushing the footer all the way down. */
    .main-wrap {
      flex: 1;
      max-width: 1200px;
      width: 100%;
      margin: 0 auto;
      padding: 30px 32px 60px;
    }

    .section-title {
      font-size: 20px; font-weight: 800; color: #1a3269; margin-bottom: 4px;
    }
    .section-sub {
      font-size: 13px; color: #6b7280; margin-bottom: 26px;
    }

    /* ─── CARDS GRID ─── */
  .categories-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));  /* was 220px */
  gap: 18px;
}
    .cat-card {
  background: #fff;
  border: 1.5px solid #c8d8ef;      /* was 1px solid #dde5f0 */
  border-radius: 14px;              /* was 12px */
  padding: 24px 20px 20px;          /* slightly more padding */
  display: flex; flex-direction: column;
  box-shadow: 0 4px 16px rgba(26,50,105,.10);  /* slightly stronger */
  transition: box-shadow .2s, transform .2s;
  animation: fadeUp .5s cubic-bezier(.22,1,.36,1) both;
}
    .cat-card:hover {
      box-shadow: 0 8px 28px rgba(26,50,105,.14);
      transform: translateY(-3px);
    }
    .cat-header {
  display: flex; align-items: center; gap: 16px;  /* gap was 12px */
  margin-bottom: 14px;
}
.cat-header h3 {
  font-size: 17px; font-weight: 800; color: #1a3269;  /* was 15px */
}
   .cat-icon-wrap {
  flex-shrink: 0;
  width: 72px; height: 72px;        /* was 46px × 46px */
  background: #dce8f7;
  border-radius: 50%;
  display: flex; align-items: center; justify-content: center;
}
.cat-icon-wrap img {
  width: 72px; height: px;        /* was 28px × 28px */
  object-fit: contain;
}
    .cat-header h3 {
      font-size: 15px; font-weight: 800; color: #1a3269;
    }
    .cat-card p {
      font-size: 12.5px; color: #6b7280;
      line-height: 1.72; flex: 1; margin-bottom: 18px;
    }
    .btn-view {
      display: block; text-align: center;
      background: #1a3269; color: #fff;
      font-size: 13px; font-weight: 700;
      padding: 10px 14px; border-radius: 7px;
      text-decoration: none; transition: background .18s;
    }
    .btn-view:hover { background: #142a56; }

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
</head>
<body>

<!-- ════ NAVBAR ════ -->
<header class="navbar sticky top-0 z-50" style="box-shadow: 0 2px 8px rgba(0,0,0,0.35);">

  <div style="background:#1a3269; display:flex; align-items:center; justify-content:space-between; padding:8px 48px; min-height:88px;">
    <div class="flex items-center gap-4">
      <img src="Img/Logos/PSAHeader.png" alt="Philippine Statistics Authority"
           style="height:88px; width:auto; object-fit:contain;"/>
    </div>
    <div style="margin-right:60px;">
      <img src="Img/Logos/OpenStat-White.png" alt="OpenSTAT"
           style="height:90px; width:auto; object-fit:contain;"/>
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

<section class="hero-banner">
  <img src="<?= htmlspecialchars($hero_bg_graphic) ?>"
       alt="" class="hero-bg-img" aria-hidden="true"/>

  <!-- Breadcrumb inside banner -->
  <nav style="position:absolute; top:16px; left:50%; transform:translateX(-50%); z-index:2;
              width:100%; max-width:960px; padding:0 12px;
              display:flex; align-items:center; gap:8px; font-size:13px;">
    <a href="database.php" style="color:#4b6cb7; text-decoration:none; font-weight:600; transition:color .15s;"
       onmouseover="this.style.color='#1a3269'" onmouseout="this.style.color='#4b6cb7'">
      Database
    </a>
    <span style="color:#9ca3af; font-size:12px;">›</span>
    <span style="color:#1a3269; font-weight:700;">
      <?= htmlspecialchars($page_title) ?>
    </span>
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
  <h2 class="section-title"><?= htmlspecialchars($categories_section_title) ?></h2>
  <p  class="section-sub"><?= htmlspecialchars($categories_section_subtitle) ?></p>

  <div class="categories-grid">
    <?php foreach ($categories as $i => $cat): ?>
    <div class="cat-card" style="animation-delay:<?= 0.05 + $i * 0.08 ?>s;">
      <div class="cat-header">
        <div class="cat-icon-wrap">
          <img src="<?= htmlspecialchars($cat['icon']) ?>"
               alt="<?= htmlspecialchars($cat['label']) ?> icon"/>
        </div>
        <h3><?= htmlspecialchars($cat['label']) ?></h3>
      </div>
      <p><?= htmlspecialchars($cat['description']) ?></p>
      <a href="<?= htmlspecialchars($cat['href']) ?>" class="btn-view">
        View Datasets &gt;
      </a>
    </div>
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

</body>
</html>