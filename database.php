<?php
$current = basename($_SERVER['PHP_SELF'], '.php');
$pageMap = ['index'=>'home','about'=>'about','database'=>'database','metadata'=>'metadata','featured'=>'featured','contact'=>'contact'];
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
  <title>PSA OpenSTAT - Databases</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { font-family: 'Open Sans', sans-serif; background: #f3f4f6; color: #1f2937; }

    /* ── NAVBAR ── */
    .navbar {
      background: #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.10);
      padding: 0 160px; display: flex; align-items: center;
      justify-content: space-between; height: 75px;
      position: sticky; top: 0; z-index: 100;
    }
    .nav-links { display: flex; align-items: center; gap: 2px; }
    .nav-link {
      color: #374151; font-size: 15px; font-weight: 500; text-decoration: none;
      padding: 8px 20px; border-radius: 6px;
      transition: color 0.2s ease, background 0.2s ease; white-space: nowrap;
    }
    .nav-link:hover { color: #1a3269; background: #eff6ff; }
    .nav-link.active { background: #1a3269; color: #fff; font-weight: 600; padding: 9px 26px; }
    .nav-link.active:hover { background: #142a56; color: #fff; }

    /* ── SEARCH PILL ── */
    .search-pill {
      display: flex; align-items: center; margin-left: 6px; background: #fff;
      border: 2px solid #d1d5db; border-radius: 24px; height: 38px; overflow: hidden;
      transition: border-color 0.3s ease, width 0.4s cubic-bezier(.4,0,.2,1), box-shadow 0.3s ease;
      width: 38px;
    }
    .search-pill.open { width: 220px; border-color: #1a3269; box-shadow: 0 0 0 3px rgba(26,50,105,0.12); }
    .search-pill-btn {
      flex-shrink: 0; width: 34px; height: 34px; display: flex; align-items: center;
      justify-content: center; cursor: pointer; background: transparent; border: none;
      border-radius: 50%; transition: background 0.2s ease;
    }
    .search-pill-btn:hover { background: #eff6ff; }
    .search-pill-input {
      flex: 1; min-width: 0; padding: 0 10px 0 2px; font-size: 14px; color: #374151;
      background: transparent; border: none; outline: none; font-family: 'Open Sans', sans-serif;
      opacity: 0; pointer-events: none; transition: opacity 0.25s ease 0.12s;
    }
    .search-pill.open .search-pill-input { opacity: 1; pointer-events: auto; }

    /* ── PAGE HERO ── */
    .page-hero {
      position: relative; background: #0a1a6e; overflow: hidden;
      height: 80px; display: flex; align-items: center; justify-content: center;
    }
    .page-hero img.hero-backdrop {
      position: absolute; inset: 0; width: 100%; height: 100%;
      object-fit: cover; opacity: 0.45; mix-blend-mode: screen;
    }
    .page-hero::before {
      content: ''; position: absolute; inset: 0; z-index: 1;
      background: linear-gradient(to right, rgba(8,20,90,0.85) 0%, rgba(26,50,105,0.70) 100%);
    }
    .page-hero h1 {
      position: relative; z-index: 2; color: #fff; font-size: 20px; font-weight: 700;
      letter-spacing: 0.3px; text-shadow: 0 2px 8px rgba(0,0,0,0.4);
    }

    /* ── MAIN WRAPPER ── */
    .main-wrap { max-width: 1100px; margin: 0 auto; padding: 26px 40px 50px; }

    /* ── INTRO ── */
    .intro-block { margin-bottom: 22px; }
    .intro-block h2 { font-size: 20px; font-weight: 700; color: #1f2937; margin-bottom: 10px; }
    .intro-block p { font-size: 13px; color: #374151; line-height: 1.75; margin-bottom: 10px; }
    .intro-block a { color: #1a56db; text-decoration: none; }
    .intro-block a:hover { text-decoration: underline; }

    /* ── MAIN GRID: content + sidebar ── */
    .main-grid {
      display: grid;
      grid-template-columns: 1fr 230px;
      gap: 18px;
      align-items: start;
    }

    .left-col { display: flex; flex-direction: column; gap: 16px; }

    /* ── DOMAIN CARD ── */
    .domain-card {
      background: #ffffff;
      border: 1px solid #e5e7eb;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 10px rgba(0,0,0,0.06);
      transition: box-shadow 0.3s cubic-bezier(.22,1,.36,1), transform 0.3s cubic-bezier(.22,1,.36,1);
    }
    .domain-card:hover { box-shadow: 0 8px 28px rgba(0,0,0,0.12); transform: translateY(-3px); }

    .domain-header {
      background: #1a3269; display: flex; align-items: center; gap: 14px; padding: 12px 16px;
    }
    .domain-header-icon {
      width: 50px; height: 50px;
      background: #fff;
      border: 4px solid rgba(255,255,255,0.3);
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center; flex-shrink: 0;
    }
    .domain-header-icon img { width: 46px; height: 46px; object-fit: contain; }
    .domain-header h3 { color: #fff; font-size: 14px; font-weight: 700; line-height: 1.3; }

    .domain-body { padding: 12px 14px 16px; background: #ffffff; }

    /* Item row */
    .db-item {
      display: flex; align-items: center; gap: 10px; padding: 9px 8px;
      border-radius: 7px; text-decoration: none; position: relative; overflow: hidden;
      transition: transform 0.18s ease;
    }
    .db-item::before {
      content: ''; position: absolute; inset: 0; background: #eff6ff;
      border-radius: 7px; opacity: 0; transition: opacity 0.18s ease;
    }
    .db-item:hover::before { opacity: 1; }
    .db-item:hover { transform: translateX(3px); }
    .db-item-icon {
      width: 48px; height: 48px; flex-shrink: 0; position: relative; z-index: 1;
      display: flex; align-items: center; justify-content: center;
      transition: transform 0.18s ease;
    }
    .db-item:hover .db-item-icon { transform: scale(1.08); }
    .db-item-icon img { width: 46px; height: 46px; object-fit: contain; }
    .db-item span {
      font-size: 13px; font-weight: 600; color: #1f2937;
      line-height: 1.35; position: relative; z-index: 1;
      transition: color 0.18s ease;
    }
    .db-item:hover span { color: #1a3269; }

    /* Grid layouts */
    .items-2col { display: grid; grid-template-columns: 1fr 1fr; gap: 2px 8px; }
    .items-3col { display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 2px 8px; }

    /* ── SIDEBAR ── */
    .sidebar { display: flex; flex-direction: column; gap: 0; }
    .sidebar-block {
      background: #ffffff; border: 1px solid #e5e7eb; overflow: hidden;
    }
    .sidebar-block:first-child { border-radius: 10px 10px 0 0; }
    .sidebar-block:last-child  { border-radius: 0 0 10px 10px; border-top: none; }
    .sidebar-block-header {
      background: #1a3269; color: #fff; font-size: 13.5px; font-weight: 700; padding: 10px 14px;
    }
    .sidebar-block-body { padding: 8px 14px 14px; }
    .sidebar-link {
      display: block; font-size: 12.5px; color: #374151; text-decoration: none;
      padding: 7px 2px; border-bottom: 1px solid #f3f4f6; transition: color 0.2s ease;
    }
    .sidebar-link:last-child { border-bottom: none; }
    .sidebar-link:hover { color: #1a3269; }
    .contact-text { font-size: 11.5px; color: #374151; line-height: 1.8; padding: 4px 2px 0; }
    .contact-text strong { color: #111827; font-weight: 700; display: block; }
    .contact-text a { color: #1a3269; text-decoration: none; }
    .contact-text a:hover { text-decoration: underline; }

    /* ── FOOTER ── */
    footer {
      background: #1f2937; color: #9ca3af; font-size: 12px; padding: 16px 36px;
      display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 8px;
    }
    footer a { color: #9ca3af; text-decoration: none; transition: color 0.2s ease; }
    footer a:hover { color: #fff; text-decoration: underline; }

    /* ── ANIMATIONS ── */
    @keyframes fadeUp {
      from { opacity: 0; transform: translateY(20px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .animate-in {
      opacity: 0;
      animation: fadeUp 0.55s cubic-bezier(.22,1,.36,1) forwards;
      animation-play-state: paused;
    }
  </style>
</head>
<body>

<!-- NAVBAR -->
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
        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="none" viewBox="0 0 24 24" stroke="#374151" stroke-width="2.3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/>
        </svg>
      </button>
      <input class="search-pill-input" id="searchInput" type="text" placeholder="Search for statistics…" aria-label="Search"/>
    </div>
  </div>
</nav>

<!-- PAGE HERO -->
<div class="page-hero">
  <img src="Img/Backdrop.png" alt="" class="hero-backdrop"/>
  <h1>Databases</h1>
</div>

<!-- MAIN -->
<div class="main-wrap">

  <!-- Intro -->
  <div class="intro-block animate-in" style="animation-delay:0.05s;">
    <h2>PSA Statistical Databases</h2>
    <p>
      The database presented in this section highlights the statistics generated and compiled by the PSA at the
      national and sub-national levels. These are limited to summarized and/or aggregated data which are
      organized into three (3) major domains, namely, (1) Social Statistics, (2) Economic and Financial
      Statistics, and (3) Environmental Statistics.
    </p>
    <p>
      For those interested in microdata, please visit the
      <a href="https://psada.psa.gov.ph" target="_blank">Philippine Statistics Authority - Data Archive (PSADA).</a>
    </p>
  </div>

  <!-- MAIN GRID -->
  <div class="main-grid">

    <!-- LEFT COLUMN -->
    <div class="left-col">

      <!-- ── Social Statistics ── -->
      <div class="domain-card animate-in" style="animation-delay:0.10s;">
        <div class="domain-header">
          <div class="domain-header-icon">
            <img src="Img/Icons/Population and Vital Statistics/Population Icon.png" alt="Social Statistics"/>
          </div>
          <h3>Social Statistics</h3>
        </div>
        <div class="domain-body">
          <div class="items-3col">
            <?php
              $social = [
                ['icon' => 'Img/Icons/Population and Vital Statistics/Population and Vital Statistics.png', 'label' => 'Population and Vital Statistics'],
                ['icon' => 'Img/Icons/Population and Vital Statistics/Health Outcomes.png',                 'label' => 'Health Outcomes'],
                ['icon' => 'Img/Icons/Population and Vital Statistics/Gender Statistics.png',               'label' => 'Gender Statistics'],
                ['icon' => 'Img/Icons/Population and Vital Statistics/Education Facilities.png',            'label' => 'Education Facilities'],
                ['icon' => 'Img/Icons/Population and Vital Statistics/Reproductive Health.png',             'label' => 'Reproductive Health'],
                ['icon' => 'Img/Icons/Population and Vital Statistics/Crime and Justice Statistics.png',    'label' => 'Crime and Justice Statistics'],
                ['icon' => 'Img/Icons/Population and Vital Statistics/Education Outcomes.png',              'label' => 'Education Outcomes'],
                ['icon' => 'Img/Icons/Population and Vital Statistics/Food Security and Nutritions.png',    'label' => 'Food Security and Nutrition'],
                ['icon' => 'Img/Icons/Population and Vital Statistics/Poverty and Income Statistics.png',   'label' => 'Poverty and Income Statistics'],
                ['icon' => 'Img/Icons/Population and Vital Statistics/Health Facilities.png',               'label' => 'Health Facilities'],
              ];
              foreach($social as $item): ?>
              <a href="#" class="db-item">
                <div class="db-item-icon"><img src="<?= htmlspecialchars($item['icon']) ?>" alt=""/></div>
                <span><?= htmlspecialchars($item['label']) ?></span>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- ── Economic and Financial Statistics ── -->
      <div class="domain-card animate-in" style="animation-delay:0.18s;">
        <div class="domain-header">
          <div class="domain-header-icon">
            <img src="Img/Icons/Economic and Financial Statistics/Economic-Statistics.png" alt="Economic"/>
          </div>
          <h3>Economic and Financial Statistics</h3>
        </div>
        <div class="domain-body">
          <div class="items-3col">
            <?php
              $economic = [
                ['icon' => 'Img/Icons/Economic and Financial Statistics/National Accounts.png',  'label' => 'National Accounts'],
                ['icon' => 'Img/Icons/Economic and Financial Statistics/Labor Statistics.png',    'label' => 'Labor Statistics'],
                ['icon' => 'Img/Icons/Economic and Financial Statistics/Price Indexes.png',       'label' => 'Price Indexes'],
                ['icon' => 'Img/Icons/Economic and Financial Statistics/Government Finance.png',  'label' => 'Government Finance'],
                ['icon' => 'Img/Icons/Economic and Financial Statistics/Money and Banking.png',   'label' => 'Money and Banking'],
                ['icon' => 'Img/Icons/Economic and Financial Statistics/International Trade.png', 'label' => 'International Trade'],
                ['icon' => 'Img/Icons/Economic and Financial Statistics/Balance of Payments.png', 'label' => 'Balance of Payments'],
              ];
              foreach($economic as $item): ?>
              <a href="#" class="db-item">
                <div class="db-item-icon"><img src="<?= htmlspecialchars($item['icon']) ?>" alt=""/></div>
                <span><?= htmlspecialchars($item['label']) ?></span>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- ── Environmental Statistics ── -->
      <div class="domain-card animate-in" style="animation-delay:0.26s;">
        <div class="domain-header">
          <div class="domain-header-icon">
            <img src="Img/Icons/Environmental Statistics/Environment-Statistics.png" alt="Environmental"/>
          </div>
          <h3>Environmental Statistics</h3>
        </div>
        <div class="domain-body">
          <div class="items-3col">
            <?php
              $environmental = [
                ['icon' => 'Img/Icons/Environmental Statistics/Agriculture and Land Use.png', 'label' => 'Agriculture and Land Use'],
                ['icon' => 'Img/Icons/Environmental Statistics/Resource Use.png',              'label' => 'Resource Use'],
                ['icon' => 'Img/Icons/Environmental Statistics/Energy.png',                   'label' => 'Energy'],
                ['icon' => 'Img/Icons/Environmental Statistics/Pollution.png',                'label' => 'Pollution'],
                ['icon' => 'Img/Icons/Environmental Statistics/Built Environment.png',        'label' => 'Built Environment'],
                ['icon' => 'Img/Icons/Environmental Statistics/Digital Connectivity.png',     'label' => 'Digital Connectivity'],
              ];
              foreach($environmental as $item): ?>
              <a href="#" class="db-item">
                <div class="db-item-icon"><img src="<?= htmlspecialchars($item['icon']) ?>" alt=""/></div>
                <span><?= htmlspecialchars($item['label']) ?></span>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </div><!-- /left-col -->

    <!-- RIGHT SIDEBAR -->
    <div class="sidebar animate-in" style="animation-delay:0.14s;">
      <div class="sidebar-block">
        <div class="sidebar-block-header">Related Links</div>
        <div class="sidebar-block-body">
          <a href="#" class="sidebar-link">User's Guide</a>
        </div>
      </div>
      <div class="sidebar-block">
        <div class="sidebar-block-header">Contact Us</div>
        <div class="sidebar-block-body">
          <div class="contact-text">
            For data inquiries, contact:<br/><br/>
            <strong>Knowledge Management and Communications Division</strong>
            <strong>Philippine Statistics Authority</strong>
            9/F PSA Headquarters PSA Complex, East Avenue Diliman, Quezon City<br/><br/>
            Email: <a href="mailto:info@psa.gov.ph">info@psa.gov.ph</a>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /main-grid -->

</div><!-- /main-wrap -->

<!-- FOOTER -->
<footer>
  <span>2026 Philippine Statistics Authority. All content is public domain unless otherwise stated.</span>
  <div style="display:flex;align-items:center;gap:12px;">
    <a href="#">Terms Of Use</a>
    <span style="color:#4b5563;">|</span>
    <a href="#">Privacy Statement</a>
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

  const pill = document.getElementById('searchPill');
  const btn  = document.getElementById('searchBtn');
  const inp  = document.getElementById('searchInput');
  btn.addEventListener('click', (e) => {
    e.stopPropagation();
    const isOpen = pill.classList.toggle('open');
    if (isOpen) { setTimeout(() => inp.focus(), 360); }
    else { inp.value = ''; inp.blur(); }
  });
  document.addEventListener('click', (e) => {
    if (!pill.contains(e.target)) { pill.classList.remove('open'); inp.value = ''; }
  });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') { pill.classList.remove('open'); inp.value = ''; inp.blur(); }
  });
</script>

</body>
</html>