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
  <title>PSA OpenSTAT - Population and Vital Statistics</title>
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
      transition: color 0.2s, background 0.2s; white-space: nowrap;
    }
    .nav-link:hover { color: #1a3269; background: #eff6ff; }
    .nav-link.active { background: #1a3269; color: #fff; font-weight: 600; padding: 9px 26px; }
    .nav-link.active:hover { background: #142a56; }

    /* ── SEARCH PILL ── */
    .search-pill {
      display: flex; align-items: center; margin-left: 6px; background: #fff;
      border: 2px solid #d1d5db; border-radius: 24px; height: 38px; overflow: hidden;
      transition: border-color 0.3s, width 0.4s cubic-bezier(.4,0,.2,1), box-shadow 0.3s;
      width: 38px;
    }
    .search-pill.open { width: 220px; border-color: #1a3269; box-shadow: 0 0 0 3px rgba(26,50,105,0.12); }
    .search-pill-btn {
      flex-shrink: 0; width: 34px; height: 34px; display: flex; align-items: center;
      justify-content: center; cursor: pointer; background: transparent; border: none;
      border-radius: 50%; transition: background 0.2s;
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
      background: linear-gradient(to right, rgba(8,20,90,0.85), rgba(26,50,105,0.70));
    }
    .page-hero h1 {
      position: relative; z-index: 2; color: #fff; font-size: 20px; font-weight: 700;
      letter-spacing: 0.3px; text-shadow: 0 2px 8px rgba(0,0,0,0.4);
    }

    /* ── BREADCRUMB ── */
    .breadcrumb {
      background: #fff; border-bottom: 1px solid #e5e7eb;
      padding: 9px 40px; font-size: 12.5px; color: #6b7280;
    }
    .breadcrumb a { color: #1a3269; text-decoration: none; }
    .breadcrumb a:hover { text-decoration: underline; }
    .breadcrumb span { margin: 0 6px; }

    /* ── MAIN LAYOUT ── */
    .main-wrap { max-width: 1100px; margin: 0 auto; padding: 26px 40px 50px; }

    /* Page title block */
    .page-title-block {
      margin-bottom: 18px;
      padding-bottom: 14px;
      border-bottom: 2px solid #e5e7eb;
    }
    .page-title-block h2 {
      font-size: 22px; font-weight: 700; color: #1a3269; margin-bottom: 12px;
    }
    .page-title-block p {
      font-size: 13px; color: #4b5563; line-height: 1.8; max-width: 780px;
    }

    /* ── CONTENT + SIDEBAR grid ── */
    .content-sidebar {
      display: grid;
      grid-template-columns: 1fr 240px;
      gap: 20px;
      align-items: start;
    }

    /* ── TOPIC CARDS ── */
    .explore-label {
      font-size: 13px; font-weight: 600; color: #374151; margin-bottom: 14px;
    }
    .topic-cards {
      display: flex;
      gap: 16px;
      margin-bottom: 22px;
      flex-wrap: wrap;
    }
    .topic-card {
      background: #fff;
      border: 1px solid #e5e7eb;
      border-radius: 10px;
      overflow: hidden;
      width: 180px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06);
      text-decoration: none;
      display: flex;
      flex-direction: column;
      transition: box-shadow 0.25s ease, transform 0.25s ease;
    }
    .topic-card:hover {
      box-shadow: 0 8px 24px rgba(0,0,0,0.13);
      transform: translateY(-4px);
    }
    .topic-card-img {
      width: 100%; height: 110px; object-fit: cover; display: block;
      transition: transform 0.35s ease;
    }
    .topic-card:hover .topic-card-img { transform: scale(1.05); }
    .topic-card-img-wrap { overflow: hidden; height: 110px; }
    .topic-card-body { padding: 10px 12px 4px; }
    .topic-card-title {
      font-size: 13px; font-weight: 700; color: #1a3269;
      text-align: center; margin-bottom: 10px;
    }
    .topic-card-btn {
      display: block; width: 100%;
      background: #1a3269; color: #fff;
      font-size: 11.5px; font-weight: 600;
      text-align: center; padding: 7px 0;
      border: none; cursor: pointer;
      font-family: 'Open Sans', sans-serif;
      text-decoration: none;
      transition: background 0.2s;
    }
    .topic-card-btn:hover { background: #142a56; }

    /* ── CHART + SUMMARY grid ── */
    .chart-summary {
      display: grid;
      grid-template-columns: 1fr 260px;
      gap: 16px;
      margin-top: 4px;
    }

    /* Chart panel */
    .chart-panel {
      background: #fff;
      border: 1px solid #e5e7eb;
      border-radius: 10px;
      padding: 18px 20px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.06);
    }
    .chart-panel-title {
      font-size: 12px; font-weight: 700; color: #1f2937;
      margin-bottom: 4px; text-align: center;
    }
    .chart-panel-sub {
      font-size: 10.5px; color: #9ca3af; text-align: center; margin-bottom: 16px;
    }

    /* Bar chart */
    .bar-chart { display: flex; align-items: flex-end; gap: 10px; height: 160px; padding: 0 4px; }
    .bar-group { display: flex; flex-direction: column; align-items: center; flex: 1; gap: 4px; }
    .bar-pair { display: flex; gap: 3px; align-items: flex-end; width: 100%; justify-content: center; }
    .bar {
      width: 18px; border-radius: 3px 3px 0 0;
      transition: opacity 0.2s;
      position: relative;
    }
    .bar:hover { opacity: 0.8; }
    .bar-teal  { background: #14b8a6; }
    .bar-blue  { background: #3b82f6; }
    .bar-label { font-size: 9.5px; color: #6b7280; text-align: center; line-height: 1.3; margin-top: 4px; }
    .bar-value { font-size: 8.5px; color: #374151; font-weight: 600; }

    .chart-legend {
      display: flex; gap: 14px; justify-content: center; margin-top: 12px; flex-wrap: wrap;
    }
    .legend-item { display: flex; align-items: center; gap: 5px; font-size: 10.5px; color: #6b7280; }
    .legend-dot { width: 10px; height: 10px; border-radius: 2px; }

    /* Summary panel */
    .summary-panel {
      background: #1a3269;
      border-radius: 10px;
      padding: 16px 18px;
      color: #fff;
    }
    .summary-panel-title {
      font-size: 13px; font-weight: 700; margin-bottom: 12px;
      padding-bottom: 8px; border-bottom: 1px solid rgba(255,255,255,0.2);
    }
    .summary-label {
      font-size: 10px; font-weight: 700; letter-spacing: 0.08em;
      text-transform: uppercase; color: #93c5fd; margin-bottom: 8px;
    }
    .summary-item {
      display: flex; gap: 6px; margin-bottom: 9px; align-items: flex-start;
    }
    .summary-item-dot {
      width: 6px; height: 6px; border-radius: 50%;
      background: #60a5fa; flex-shrink: 0; margin-top: 5px;
    }
    .summary-item-text { font-size: 11.5px; line-height: 1.55; color: #dbeafe; }
    .summary-item-text strong { color: #fff; font-weight: 700; }

    /* ── SIDEBAR ── */
    .sidebar { display: flex; flex-direction: column; gap: 0; }
    .sidebar-block {
      background: #fff; border: 1px solid #e5e7eb; overflow: hidden;
    }
    .sidebar-block:first-child { border-radius: 10px 10px 0 0; }
    .sidebar-block + .sidebar-block { border-top: none; }
    .sidebar-block:last-child { border-radius: 0 0 10px 10px; }
    .sidebar-block-header {
      background: #1a3269; color: #fff; font-size: 13px; font-weight: 700; padding: 10px 14px;
    }
    .sidebar-block-body { padding: 8px 14px 14px; }
    .sidebar-link {
      display: block; font-size: 12.5px; color: #374151; text-decoration: none;
      padding: 8px 2px; border-bottom: 1px solid #f3f4f6; transition: color 0.2s;
    }
    .sidebar-link:last-child { border-bottom: none; }
    .sidebar-link:hover { color: #1a3269; }
    .contact-logo { width: 56px; height: 56px; object-fit: contain; margin-bottom: 8px; }
    .contact-text { font-size: 11.5px; color: #374151; line-height: 1.8; }
    .contact-text strong { color: #111827; font-weight: 700; display: block; }
    .contact-text a { color: #1a3269; text-decoration: none; }
    .contact-text a:hover { text-decoration: underline; }

    /* ── FOOTER ── */
    footer {
      background: #1f2937; color: #9ca3af; font-size: 12px; padding: 16px 36px;
      display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 8px;
    }
    footer a { color: #9ca3af; text-decoration: none; transition: color 0.2s; }
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

<!-- BREADCRUMB -->
<div class="breadcrumb">
  <a href="database.php">Database</a>
  <span>›</span>
  Population and Vital Statistics
</div>

<!-- MAIN -->
<div class="main-wrap">

  <div class="content-sidebar">

    <!-- LEFT CONTENT -->
    <div>

      <!-- Page title -->
      <div class="page-title-block animate-in" style="animation-delay:0.05s;">
        <h2>Population and Vital Statistics</h2>
        <p>
          Explore comprehensive and detailed statistics on the Philippine population structure, dynamics, vital
          event, and migration patterns. Access raw data, curated reports, and interactive visualizations.
        </p>
      </div>

      <!-- Topic cards -->
      <div class="animate-in" style="animation-delay:0.12s;">
        <p class="explore-label">Explore the following topics:</p>
        <div class="topic-cards">

          <div class="topic-card">
            <div class="topic-card-img-wrap">
              <img src="Img/Icons/Population and Vital Statistics/Population and Vital Statistics/Population.png"
                   alt="Population" class="topic-card-img"/>
            </div>
            <div class="topic-card-body">
              <div class="topic-card-title">Population</div>
            </div>
            <div style="padding: 0 10px 12px;">
              <p style="font-size:11px; color:#6b7280; text-align:center; line-height:1.5; margin-bottom:8px;">
                Census data, regional distribution, age-sex profile.
              </p>
            </div>
            <a href="#" class="topic-card-btn">VIEW DATA</a>
          </div>

          <div class="topic-card">
            <div class="topic-card-img-wrap">
              <img src="Img/Icons/Population and Vital Statistics/Population and Vital Statistics/Birth.png"
                   alt="Birth" class="topic-card-img"/>
            </div>
            <div class="topic-card-body">
              <div class="topic-card-title">Birth</div>
            </div>
            <div style="padding: 0 10px 12px;">
              <p style="font-size:11px; color:#6b7280; text-align:center; line-height:1.5; margin-bottom:8px;">
                Live births by region, attendance, and mother's characteristics.
              </p>
            </div>
            <a href="#" class="topic-card-btn">VIEW DATA</a>
          </div>

          <div class="topic-card">
            <div class="topic-card-img-wrap">
              <img src="Img/Icons/Population and Vital Statistics/Population and Vital Statistics/Death.png"
                   alt="Death" class="topic-card-img"/>
            </div>
            <div class="topic-card-body">
              <div class="topic-card-title">Death</div>
            </div>
            <div style="padding: 0 10px 12px;">
              <p style="font-size:11px; color:#6b7280; text-align:center; line-height:1.5; margin-bottom:8px;">
                Mortality rates, causes of death, and life expectancy data.
              </p>
            </div>
            <a href="#" class="topic-card-btn">VIEW DATA</a>
          </div>

        </div>
      </div>

      <!-- Chart + Summary -->
      <div class="chart-summary animate-in" style="animation-delay:0.20s;">

        <!-- Bar Chart -->
        <div class="chart-panel">
          <div class="chart-panel-title">Detailed Breakdown of Population &amp; Vital Statistics (2024 - SAMPLE DATA)</div>
          <div class="chart-panel-sub">SAMPLE DATA</div>

          <div class="bar-chart">
            <!-- Total Population -->
            <div class="bar-group">
              <div class="bar-pair">
                <div class="bar bar-teal" style="height:140px;" title="112M"></div>
                <div class="bar bar-blue" style="height:135px;" title="110M"></div>
              </div>
              <div class="bar-value">112 M</div>
              <div class="bar-label">Total<br/>Population</div>
            </div>
            <!-- Provincial Dist -->
            <div class="bar-group">
              <div class="bar-pair">
                <div class="bar bar-teal" style="height:50px;" title="15M"></div>
                <div class="bar bar-blue" style="height:48px;" title="14M"></div>
              </div>
              <div class="bar-value">15 M</div>
              <div class="bar-label">Provincial<br/>Dist.</div>
            </div>
            <!-- Age/Sex Profile -->
            <div class="bar-group">
              <div class="bar-pair">
                <div class="bar bar-teal" style="height:45px;" title="13M"></div>
                <div class="bar bar-blue" style="height:43px;" title="13M"></div>
              </div>
              <div class="bar-value">13 M</div>
              <div class="bar-label">Age/Sex<br/>Profile</div>
            </div>
            <!-- Live Births -->
            <div class="bar-group">
              <div class="bar-pair">
                <div class="bar bar-teal" style="height:65px;" title="20M"></div>
                <div class="bar bar-blue" style="height:62px;" title="19M"></div>
              </div>
              <div class="bar-value">20 M</div>
              <div class="bar-label">Live Births</div>
            </div>
            <!-- Causes of Death -->
            <div class="bar-group">
              <div class="bar-pair">
                <div class="bar bar-teal" style="height:24px;" title="700k"></div>
                <div class="bar bar-blue" style="height:22px;" title="690k"></div>
              </div>
              <div class="bar-value">700 k</div>
              <div class="bar-label">Causes of<br/>Death</div>
            </div>
            <!-- Life Expectancy -->
            <div class="bar-group">
              <div class="bar-pair">
                <div class="bar bar-teal" style="height:22px;" title="72 yrs"></div>
                <div class="bar bar-blue" style="height:21px;" title="70 yrs"></div>
              </div>
              <div class="bar-value">72 yrs</div>
              <div class="bar-label">Life Expectancy<br/>(Years)</div>
            </div>
          </div>

          <div class="chart-legend">
            <div class="legend-item"><div class="legend-dot" style="background:#14b8a6;"></div> 2024</div>
            <div class="legend-item"><div class="legend-dot" style="background:#3b82f6;"></div> 2023</div>
          </div>
        </div>

        <!-- Summary Panel -->
        <div class="summary-panel">
          <div class="summary-panel-title">Key Population &amp; Vital Statistics Summary</div>
          <div class="summary-label">Summary Highlights</div>

          <div class="summary-item">
            <div class="summary-item-dot"></div>
            <div class="summary-item-text">
              <strong>Highest Provincial Population:</strong> NCR (15M)
            </div>
          </div>
          <div class="summary-item">
            <div class="summary-item-dot"></div>
            <div class="summary-item-text">
              <strong>Population Distribution:</strong> Majority in central regions
            </div>
          </div>
          <div class="summary-item">
            <div class="summary-item-dot"></div>
            <div class="summary-item-text">
              <strong>Primary Age Bracket:</strong> Young Population (0–14 Yrs)
            </div>
          </div>
          <div class="summary-item">
            <div class="summary-item-dot"></div>
            <div class="summary-item-text">
              <strong>Highest Live Birth Attendance:</strong> Type: 90% (High Attendant)
            </div>
          </div>
          <div class="summary-item">
            <div class="summary-item-dot"></div>
            <div class="summary-item-text">
              <strong>Top Cause of Death:</strong> Cardiovascular Disease (CVD)
            </div>
          </div>
          <div class="summary-item">
            <div class="summary-item-dot"></div>
            <div class="summary-item-text">
              <strong>Data Completeness:</strong> 100% (Provincial level for PPV)
            </div>
          </div>
        </div>

      </div><!-- /chart-summary -->

    </div><!-- /left content -->

    <!-- SIDEBAR -->
    <div class="sidebar animate-in" style="animation-delay:0.10s;">
      <div class="sidebar-block">
        <div class="sidebar-block-header">Related Links</div>
        <div class="sidebar-block-body">
          <a href="#" class="sidebar-link">User's Guide</a>
          <a href="#" class="sidebar-link">Metadata Dictionary</a>
          <a href="#" class="sidebar-link">Related Publications</a>
        </div>
      </div>
      <div class="sidebar-block">
        <div class="sidebar-block-header">Contact Us</div>
        <div class="sidebar-block-body">
          <div style="display:flex; align-items:center; gap:10px; margin-bottom:10px;">
            <img src="Img/OpenStat-Logo.png" alt="PSA" class="contact-logo"/>
          </div>
          <div class="contact-text">
            For data inquiries, contact:<br/><br/>
            <strong>Knowledge Management and Communication Division (KMCD)</strong>
            <strong>Philippine Statistics Authority</strong>
            9/F PSA Headquarters PSA Complex, East Avenue, Diliman, Quezon City<br/><br/>
            Email: <a href="mailto:info@psa.gov.ph">info@psa.gov.ph</a>
          </div>
        </div>
      </div>
    </div>

  </div><!-- /content-sidebar -->

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
    if (isOpen) setTimeout(() => inp.focus(), 360);
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