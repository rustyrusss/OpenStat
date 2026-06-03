<?php
$page_title       = 'Child Poverty Statistics';
$page_description = 'Explore official statistics on child poverty in the Philippines.';
$hero_image       = 'Img/Background-Data.png';
$active_nav       = 'about';

$breadcrumbs = [
  ['label' => 'About >', 'href' => 'about.php'],
];

$nav_items = [
  ['label' => 'Home',       'href' => 'index.php',    'key' => 'home'],
  ['label' => 'About',      'href' => 'about.php',    'key' => 'about'],
  ['label' => 'Database',   'href' => 'database.php', 'key' => 'database'],
  ['label' => 'Dashboard',  'href' => 'dashboard.php','key' => 'dashboard'],
  ['label' => 'Featured',   'href' => 'featured.php', 'key' => 'featured'],
  ['label' => 'Contact Us', 'href' => 'contact.php',  'key' => 'contact'],
];

/* ── Equity Focused Profiles ── */
$profiles = [
  [
    'label' => 'Stunting',
    'href'  => 'https://closestat.psa.gov.ph/Portals/0/downloads/Stunting.pdf?ver=2018-11-10-001858-097&timestamp=1553672003521',
    'img'   => 'Stunting.png',
  ],
  [
    'label' => 'Out-of-School Youth and Children',
    'href'  => 'https://closestat.psa.gov.ph/Portals/0/downloads/OOSCY.pdf?ver=2018-11-10-001846-003&timestamp=1553672015112',
    'img'   => 'Out-of-School.png',
  ],
  [
    'label' => 'Skilled Health Personnel and Health Facility',
    'href'  => 'https://closestat.psa.gov.ph/Portals/0/downloads/SBA.pdf',
    'img'   => 'Health.png',
  ],
  [
    'label' => 'Child Poverty',
    'href'  => 'https://closestat.psa.gov.ph/Portals/0/downloads/ChildPoverty.pdf?ver=2018-11-10-001824-813&timestamp=1553672022425',
    'img'   => 'Child-Poverty.png',
  ],
];

/* ── Database Sectors ── */
$sectors = [
  ['label' => 'Population and Housing',         'href' => 'https://closestat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__3E__CH__CP/?tablelist=true&rxid=4a05c93b-1423-407a-a422-a189d7d9f9af', 'img' => 'Population-and-Housing.png'],
  ['label' => 'Income, Poverty and Deprivations','href' => 'https://closestat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__3E__CH__IP/?tablelist=true&rxid=5bf7d5c2-1a5c-4991-a66d-5a3e07689377', 'img' => 'Income.png'],
  ['label' => 'Social Protection',              'href' => 'https://closestat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__3E__CH__SP/?tablelist=true&rxid=5bf7d5c2-1a5c-4991-a66d-5a3e07689377', 'img' => 'Social Protection.png'],
  ['label' => 'Education and Literacy',         'href' => 'https://closestat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__3E__CH__EL/?tablelist=true&rxid=5bf7d5c2-1a5c-4991-a66d-5a3e07689377', 'img' => 'Education.png'],
  ['label' => 'Health and Nutrition',           'href' => 'https://closestat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__3E__CH__HN/?tablelist=true&rxid=5bf7d5c2-1a5c-4991-a66d-5a3e07689377', 'img' => 'Health-and-Nutrition.png'],
  ['label' => 'Labor and Employment',           'href' => 'https://closestat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__3E__CH__LE/?tablelist=true&rxid=5bf7d5c2-1a5c-4991-a66d-5a3e07689377', 'img' => 'Labor.png'],
  ['label' => 'Macroeconomic Accounts',         'href' => 'https://closestat.psa.gov.ph/PXWeb/pxweb/en/DB/DB__3E__CH__MA/?tablelist=true&rxid=5bf7d5c2-1a5c-4991-a66d-5a3e07689377', 'img' => 'Macroeconomics.png'],
  ['label' => 'Sustainable Development Goals',  'href' => 'https://closestat.psa.gov.ph/Featured/National-Database-on-Child-Poverty/Sustainable-Development-Goals-Goal-1',           'img' => 'Sustainable-Development.png'],
];

$cards = [
  [
    'icon'  => 'Valuable.png',
    'title' => 'A Valuable Source for Evidence-Based Policy',
    'body'  => 'As a valuable source of statistics and statistical indicators in aid of policies and programs formulation, monitoring and evaluation designed to promote decent work in our country, the DeWS-Philippines is updated annually by the Philippine Statistics Authority (PSA). The data are presented from 1995 to the latest available from the source agencies at the time of compilation. The International Labour Organization (ILO) has a publication of data up to 2010, specifically in the report: "Philippine Decent Work Country Profile" released in October 2012.',
  ],
  [
    'icon'  => 'Supporting.png',
    'title' => 'Supporting in Informed Decisions',
    'body'  => 'The DeWS-Philippines also envisions to increase and strengthen awareness on decent work not only among policymakers (including those outside the labor sphere), but also among labor unions, employers and researchers. Moreover, it significantly assists in the effective monitoring and assessment in measuring the progress toward decent work in the country.',
  ],
  [
    'icon'  => 'Key.png',
    'title' => 'Key Data Source',
    'body'  => 'The PSA is the primary source of information in this publication, including data from the Labor Force Survey and other PSA surveys, (Income and Expenditure Survey, Functional Literacy, Education and Mass Media Survey), as well as administrative data from national agencies such as DOLE, DBM, DepEd, CHED, PhilHealth, SSS, and others. International sources include the ILO, World Bank, and WHO, among others.',
  ],
];

$references = [
  [
    'img'   => 'Img/NDCP/SDG.png',
    'title' => 'Sustainable Development Goals',
    'body'  => 'The 2030 Agenda, its 17 Goals and 169 targets are a universal set of goals and targets that aim to stimulate people-centered and planet-sensitive change.',
    'href'  => '#',
  ],
  [
    'img'   => 'Img/NDCP/psdp.png',
    'title' => 'Philippine Statistical Development Program',
    'body'  => 'The PSDP articulates the vision, direction, strategies and priority statistical programs and activities to be undertaken in the PSS for medium term in order to meet current and emerging needs of the national and local planners, policy-makers and data producers.',
    'href'  => '#',
  ],
  [
    'img'   => 'Img/NDCP/cwc.png',
    'title' => 'Council for the Welfare of Children',
    'body'  => 'Coordinates the implementation and enforcement of all laws, formulate, monitor and evaluate policies, programs and measures for children.',
    'href'  => '#',
  ],
  [
    'img'   => 'Img/NDCP/deped.png',
    'title' => 'Department of Education',
    'body'  => 'Links to datasets at the Department of Education.',
    'href'  => '#',
  ],
  [
    'img'   => 'Img/NDCP/dswd.png',
    'title' => 'Department of Social Welfare and Development',
    'body'  => 'Open Data Initiatives of the Department of Social Welfare and Development.',
    'href'  => '#',
  ],
  [
    'img'   => 'Img/NDCP/unicef.png',
    'title' => 'United Nations Children\'s Fund',
    'body'  => 'UNICEF data: Monitoring the situation of children and women.',
    'href'  => '#',
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PSA OpenSTAT - Child Poverty Statistics</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: { primary: '#1a3269', 'primary-dark': '#142a56' },
          fontFamily: { sans: ['Open Sans', 'sans-serif'] },
        }
      }
    }
  </script>
  <style>
    body { font-family: 'Open Sans', sans-serif; background: #f0f0f0; overflow-x: hidden; }
    html { scroll-behavior: smooth; }

    /* ════ NAVBAR ════ */
    .navbar { animation: slideDown 0.6s cubic-bezier(.22,1,.36,1) both; }
    @keyframes slideDown {
      from { transform: translateY(-100%); opacity: 0; }
      to   { transform: translateY(0);     opacity: 1; }
    }
    .nav-blue-link {
      display: inline-block; color: #fff; font-size: 15px; font-weight: 600;
      text-decoration: none; padding: 13px 30px; transition: background 0.2s;
      white-space: nowrap; letter-spacing: 0.3px;
    }
    .nav-blue-link:hover      { background: rgba(255,255,255,0.12); }
    .nav-blue-link.active-nav { background: rgba(255,255,255,0.18); font-weight: 700; }

    /* ════ HERO ════ */
    @keyframes heroFadeIn {
      from { opacity: 0; transform: translateY(-12px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .hero-title { animation: heroFadeIn 0.8s 0.2s cubic-bezier(.22,1,.36,1) both; }

    /* ════ YELLOW UNDERLINE ════ */
    .section-underline {
      width: 52px; height: 4px;
      background: #f5a623; border-radius: 2px;
      margin-top: 6px; margin-bottom: 20px;
      transform-origin: left center;
      transform: scaleX(0); opacity: 0;
      transition: transform 0.55s 0.1s cubic-bezier(.22,1,.36,1),
                  opacity   0.4s  0.1s ease;
    }
    .section-underline.visible { transform: scaleX(1); opacity: 1; }

    /* ════ SCROLL ANIMATIONS ════ */
    .anim {
      opacity: 0; transform: translateY(30px);
      transition: opacity 0.65s cubic-bezier(.22,1,.36,1), transform 0.65s cubic-bezier(.22,1,.36,1);
    }
    .anim.visible { opacity: 1; transform: translateY(0); }

    .anim-left {
      opacity: 0; transform: translateX(-40px);
      transition: opacity 0.65s cubic-bezier(.22,1,.36,1), transform 0.65s cubic-bezier(.22,1,.36,1);
    }
    .anim-left.visible { opacity: 1; transform: translateX(0); }

    .anim-zoom {
      opacity: 0; transform: scale(0.88);
      transition: opacity 0.6s cubic-bezier(.22,1,.36,1), transform 0.6s cubic-bezier(.22,1,.36,1);
    }
    .anim-zoom.visible { opacity: 1; transform: scale(1); }

    /* ════ INTRO TEXT ════ */
    .intro-text { font-size: 14.5px; color: #374151; line-height: 1.8; margin-bottom: 14px; }

    /* ════ CONTENT CARD ════ */
    .content-card {
      background: #fff; border-radius: 4px;
      padding: 32px 36px 0;
      box-shadow: 0 1px 6px rgba(0,0,0,0.07);
      margin-bottom: 20px;
    }

    /* ════ SECTION HEADING (reusable) ════ */
    .section-heading {
      font-size: 20px; font-weight: 800; color: #1a3269;
      margin-bottom: 6px;
    }
    .sub-heading {
      font-size: 17px; font-weight: 800; color: #1a3269;
      margin-bottom: 6px;
    }

    /* ════ EQUITY PROFILES GRID (4 cards) ════ */
    .profiles-section { margin: 28px 0 8px; padding-bottom: 28px; }
    .profiles-underline {
      width: 40px; height: 3px; background: #f5a623; border-radius: 2px;
      margin-bottom: 20px; transform-origin: left center;
      transform: scaleX(0); opacity: 0;
      transition: transform 0.55s 0.15s cubic-bezier(.22,1,.36,1), opacity 0.4s 0.15s ease;
    }
    .profiles-underline.visible { transform: scaleX(1); opacity: 1; }

    .profiles-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; }

    .profile-card {
      display: flex; flex-direction: column; align-items: center; text-align: center;
      padding: 24px 16px 20px;
      border: 1px solid #dde4f0; border-radius: 10px;
      background: #fff; box-shadow: 0 1px 4px rgba(26,50,105,0.06);
      text-decoration: none; color: #1a3269;
      transition: transform 0.28s cubic-bezier(.22,1,.36,1), box-shadow 0.28s ease, border-color 0.28s ease;
    }
    .profile-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 26px rgba(26,50,105,0.13);
      border-color: #b8cce8;
    }

    .profile-icon-wrap {
      width: 72px; height: 72px; border-radius: 50%;
      background: #eef2fb;
      display: flex; align-items: center; justify-content: center;
      margin-bottom: 14px;
      transition: background 0.28s ease, transform 0.28s cubic-bezier(.22,1,.36,1);
    }
    .profile-card:hover .profile-icon-wrap { background: #dce6f7; transform: scale(1.08) rotate(5deg); }
    .profile-icon-wrap img  { width: 72px; height: 72px; object-fit: contain; }
    .profile-icon-wrap svg  { width: 36px; height: 36px; opacity: 0.45; }

    .profile-num  { font-size: 11px; font-weight: 600; color: #7a90b8; letter-spacing: 0.6px; text-transform: uppercase; margin-bottom: 6px; }
    .profile-title { font-size: 13.5px; font-weight: 800; color: #1a3269; line-height: 1.35; }
    .profile-arrow { font-size: 18px; color: #7a90b8; margin-top: 12px; transition: transform 0.22s cubic-bezier(.22,1,.36,1), color 0.22s ease; }
    .profile-card:hover .profile-arrow { transform: translateX(3px); color: #1a3269; }

    /* ════ STATISTICAL DATABASE SECTION ════ */
    .stat-db-heading {
      font-size: 20px; font-weight: 800; color: #1a1a1a;
      margin-top: 28px; margin-bottom: 10px;
    }
    .stat-db-divider {
      border: none; border-top: 1px solid #e2e8f0;
      margin-bottom: 14px;
    }

    /* ════ SECTORS HEADER BAR ════ */
    .sectors-bar {
      display: flex; align-items: center; gap: 16px;
      border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;
      padding: 14px 0; margin-top: 24px;
    }
    .sectors-bar-icon {
      width: 54px; height: 54px;
      background: #eef2fb; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
    }
    .sectors-bar-icon svg { width: 28px; height: 28px; opacity: 0.5; }
    .sectors-bar-title { font-size: 18px; font-weight: 800; color: #1a3269; }

    /* ════ SECTORS GRID ════ */
    .sectors-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; padding: 20px 0 28px; }

    .sec-btn {
      display: flex; align-items: center; gap: 18px;
      padding: 18px 20px; text-decoration: none; color: #1a3269;
      background: #fff; border: 1px solid #dde4f0; border-radius: 10px;
      box-shadow: 0 1px 4px rgba(26,50,105,0.06);
      position: relative; overflow: hidden;
      transition: background 0.22s, box-shadow 0.22s, transform 0.22s cubic-bezier(.22,1,.36,1), border-color 0.22s;
    }
    .sec-btn::before {
      content: ''; position: absolute; left: 0; top: 0; bottom: 0; width: 4px;
      background: #1a3269; border-radius: 0 2px 2px 0;
      transform: scaleY(0); transform-origin: center;
      transition: transform 0.25s cubic-bezier(.22,1,.36,1);
    }
    .sec-btn:hover { background: #eef3fb; border-color: #b8cce8; box-shadow: 0 4px 16px rgba(26,50,105,0.12); transform: translateY(-2px); }
    .sec-btn:hover::before { transform: scaleY(1); }

    .sec-icon-wrap {
      flex-shrink: 0; width: 62px; height: 62px;
      background: #eef2fb; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      transition: background 0.22s;
    }
    .sec-btn:hover .sec-icon-wrap { background: #dce6f7; }
    .sec-icon-wrap img { width: 62px; height: 62px; object-fit: contain; }
    .sec-icon-wrap svg { width: 30px; height: 30px; opacity: 0.4; }

    .sec-text { flex: 1; min-width: 0; }
    .sec-number { font-size: 11px; font-weight: 600; color: #7a90b8; letter-spacing: 0.6px; text-transform: uppercase; margin-bottom: 4px; }
    .sec-label  { font-size: 14px; font-weight: 700; color: #1a3269; line-height: 1.35; }
    .sec-arrow  { flex-shrink: 0; font-size: 18px; color: #7a90b8; transition: transform 0.22s cubic-bezier(.22,1,.36,1), color 0.22s; margin-left: 4px; }
    .sec-btn:hover .sec-arrow { transform: translateX(4px); color: #1a3269; }

    /* ════ REFERENCES ════ */
    .references-section { margin-top: 28px; }
    .references-heading { font-size: 20px; font-weight: 800; color: #1a1a1a; margin-bottom: 6px; }
    .references-underline {
      width: 52px; height: 4px; background: #f5a623; border-radius: 2px;
      margin-bottom: 20px; transform-origin: left center;
      transform: scaleX(0); opacity: 0;
      transition: transform 0.55s 0.1s cubic-bezier(.22,1,.36,1), opacity 0.4s 0.1s ease;
    }
    .references-underline.visible { transform: scaleX(1); opacity: 1; }
    .ref-grid-wrap { display: flex; flex-direction: column; gap: 16px; }
    .ref-row { display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px; }
    .ref-row.ref-row-partial { display: flex; justify-content: center; gap: 16px; }
    .ref-row.ref-row-partial .ref-card { flex: 0 0 calc((100% - 32px) / 3); max-width: calc((100% - 32px) / 3); }
    .ref-card { background: #fff; border-radius: 4px; box-shadow: 0 1px 6px rgba(0,0,0,0.07); display: flex; flex-direction: column; overflow: hidden; transition: transform 0.28s cubic-bezier(.22,1,.36,1), box-shadow 0.28s ease; }
    .ref-card:hover { transform: translateY(-4px); box-shadow: 0 10px 26px rgba(26,50,105,0.13); }
    .ref-thumb { width: 100%; aspect-ratio: 3/2; background: #c8d4e8; display: flex; align-items: center; justify-content: center; overflow: hidden; border-bottom: 1px solid #b8c8de; padding: 10px; box-shadow: inset 0 3px 12px rgba(0,0,0,0.18), inset 0 -2px 8px rgba(0,0,0,0.10); }
    .ref-thumb img { width: 100%; height: 100%; object-fit: contain; filter: drop-shadow(0 6px 16px rgba(0,0,0,0.28)); transition: transform 0.3s cubic-bezier(.22,1,.36,1); }
    .ref-card:hover .ref-thumb img { transform: scale(1.05); }
    .ref-body { padding: 16px 18px 18px; flex: 1; display: flex; flex-direction: column; }
    .ref-title { font-size: 13.5px; font-weight: 700; color: #1a3269; line-height: 1.4; margin-bottom: 10px; }
    .ref-desc  { font-size: 12px; color: #4b5563; line-height: 1.7; flex: 1; margin-bottom: 14px; }
    .ref-dl-btn {
      display: inline-flex; align-items: center; gap: 6px;
      background: #fff; color: #1a3269; border: 1px solid #c0c8d8;
      border-radius: 4px; padding: 7px 14px; font-size: 12.5px; font-weight: 600;
      font-family: 'Open Sans', sans-serif; text-decoration: none; cursor: pointer; align-self: flex-start;
      transition: background 0.2s, border-color 0.2s, box-shadow 0.2s, transform 0.2s cubic-bezier(.22,1,.36,1);
    }
    .ref-dl-btn:hover { background: #eef3fb; border-color: #8aaad4; box-shadow: 0 2px 8px rgba(26,50,105,0.12); transform: translateY(-1px); }

    @media (max-width: 900px) {
      .profiles-grid { grid-template-columns: repeat(2,1fr); }
      .ref-row { grid-template-columns: repeat(2,1fr); }
      .ref-row-partial .ref-card { flex: 0 0 calc((100% - 16px)/2); max-width: calc((100% - 16px)/2); }
    }
    @media (max-width: 780px) {
      .sectors-grid { grid-template-columns: 1fr; }
      .bottom-cards { grid-template-columns: 1fr; }
      .profiles-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 560px) {
      .ref-row { grid-template-columns: 1fr; }
      .ref-row-partial { flex-direction: column; }
      .ref-row-partial .ref-card { flex: 0 0 100%; max-width: 100%; }
    }
  </style>
</head>
<body>

<!-- ════ NAVBAR ════ -->
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

<!-- ════ HERO ════ -->
<div class="relative" style="min-height:180px;">
  <img src="<?= htmlspecialchars($hero_image) ?>" alt=""
       style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center;z-index:0;"/>
  <div style="position:absolute;inset:0;background:rgba(4,17,61,0.72);z-index:1;"></div>
  <div class="relative z-10 py-7" style="max-width:1180px;margin:0 auto;padding-left:32px;">
    <div class="hero-title text-[12.5px] font-semibold mb-3" style="color:rgba(255,255,255,0.75);">
      <?php foreach ($breadcrumbs as $i => $crumb): ?>
        <?php if ($i > 0): ?><span class="mx-1.5" style="opacity:0.5;">›</span><?php endif; ?>
        <a href="<?= htmlspecialchars($crumb['href']) ?>"
           style="color:rgba(255,255,255,0.75);text-decoration:none;"
           onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.75)'">
          <?= htmlspecialchars($crumb['label']) ?>
        </a>
      <?php endforeach; ?>
    </div>
    <h1 class="hero-title text-[28px] font-bold text-white"
        style="text-shadow:0 2px 14px rgba(0,0,0,0.5);">
      Child Poverty Statistics
    </h1>
  </div>
</div>

<!-- ════ MAIN CONTENT ════ -->
<div style="max-width:1180px;margin:0 auto;padding:36px 32px 60px;">

  <!-- White content card -->
  <div class="content-card anim">

    <!-- ── About the PSA-UNICEF Project ── -->
    <h2 class="section-heading anim-left">About the PSA-UNICEF Project</h2>
    <div class="section-underline"></div>

    <p class="intro-text anim" style="transition-delay:0.06s;">
      The United Nations Children's Fund (UNICEF) supports the government in strengthening evidence generation and capacity building for planning including social sector management information systems to facilitate reporting and monitoring of key social indicator.
    </p>
    <p class="intro-text anim" style="transition-delay:0.12s;">
      The UNICEF-PSA Project seeks to conduct data assessment in terms of the availability of the latest data on child poverty indicators, update the database on statistics on child poverty, and prepare the Statistical Report on the Child Poverty Indicators. The Project also aims to produce equity focused profiles that will focus on child indicators to provide access and utilization of disaggregated information at national and sub-national levels to monitor and evaluate policies and plans.
    </p>

    <!-- ── Equity Focused Profiles ── -->
    <div class="profiles-section anim" style="transition-delay:0.20s;">
      <h3 class="sub-heading">Equity Focused Profiles</h3>
      <div class="profiles-underline"></div>

      <p class="intro-text" style="margin-bottom:20px;">
        The Equity Profile of Children developed by PSA and UNICEF focuses on child indicators to provide access and utilization of disaggregated information at national and sub-national levels to monitor and evaluate policies and plans. The Equity Profiles focus on following:
      </p>

      <div class="profiles-grid stagger">
        <?php foreach ($profiles as $idx => $profile): ?>
        <a href="<?= htmlspecialchars($profile['href']) ?>" target="_blank" rel="noopener"
           class="profile-card anim-zoom">
          <div class="profile-icon-wrap">
            <?php if (!empty($profile['img'])): ?>
              <img src="Img/NDCP/<?= htmlspecialchars($profile['img']) ?>"
                   alt="<?= htmlspecialchars($profile['label']) ?>"/>
            <?php else: ?>
              <svg viewBox="0 0 24 24" fill="none" stroke="#1a3269" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="18" height="18" rx="2"/><line x1="9" y1="9" x2="15" y2="15"/><line x1="15" y1="9" x2="9" y2="15"/>
              </svg>
            <?php endif; ?>
          </div>
          <div class="profile-num">Profile <?= $idx + 1 ?></div>
          <div class="profile-title"><?= htmlspecialchars($profile['label']) ?></div>
          <span class="profile-arrow">&#8250;</span>
        </a>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ── Updating of the National Database on Child Poverty ── -->
    <h2 class="section-heading anim-left" style="transition-delay:0.06s;margin-top:8px;">
      Updating of the National Database on Child Poverty
    </h2>
    <div class="section-underline"></div>

    <p class="intro-text anim" style="transition-delay:0.10s;">
      One of the objectives of updating the national database on child poverty is to provide information focusing on how poverty and disparities impact children in order to support efforts that protect children from risk, adversity and disadvantage. It proposes to look at gaps and opportunities in national poverty reduction strategies, including the demographic and economic context, employment, public and private social expenditures, fiscal space, and foreign aid. It also gives importance in making available updated and relevant statistics on children, particularly those living in poverty.
    </p>
    <p class="intro-text anim" style="transition-delay:0.16s;">
      In recognition of the Philippines' commitment to achieving the SDGs, it is deemed important to compile multi-dimensional information on children in poverty by updating the statistical database on child poverty indicators based on available data sources.
    </p>

    <!-- ── Statistical Database on Child Poverty Indicators ── -->
    <h2 class="section-heading anim-left" style="transition-delay:0.06s;margin-top:8px;">
      Statistical Database on Child Poverty Indicators
    </h2>
    <div class="section-underline"></div>
    <p class="intro-text anim" style="transition-delay:0.10s;">
      The databases presented in this section are multi-dimensional information on children in poverty based on available data sources.
    </p>

    <!-- Sectors grid -->
    <div class="sectors-grid">
      <?php foreach ($sectors as $idx => $sector): ?>
      <a href="<?= htmlspecialchars($sector['href']) ?>" target="_blank" rel="noopener"
         class="sec-btn anim" style="transition-delay:<?= round($idx * 0.07, 2) ?>s;">
        <div class="sec-icon-wrap">
          <?php if (!empty($sector['img'])): ?>
            <img src="Img/NDCP/<?= htmlspecialchars($sector['img']) ?>"
                 alt="<?= htmlspecialchars($sector['label']) ?>"/>
          <?php else: ?>
            <svg viewBox="0 0 24 24" fill="none" stroke="#1a3269" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
              <rect x="3" y="3" width="18" height="18" rx="2"/>
              <line x1="3" y1="9"  x2="21" y2="9"/>
              <line x1="9" y1="21" x2="9"  y2="9"/>
            </svg>
          <?php endif; ?>
        </div>
        <div class="sec-text">
          <div class="sec-number">Sector <?= $idx + 1 ?></div>
          <div class="sec-label"><?= htmlspecialchars($sector['label']) ?></div>
        </div>
        <span class="sec-arrow">&#8250;</span>
      </a>
      <?php endforeach; ?>
    </div>

  </div><!-- end content-card -->

  <!-- ════ INFOGRAPHICS SECTION ════ -->
  <?php
  $infographics = [
    ['file' => 'ig-livebirths',  'label' => 'Live Births'],
    ['file' => 'ig-outofschool', 'label' => 'Out-of-School Children'],
    ['file' => 'ig-poverty',     'label' => 'Child Poverty'],
    ['file' => 'ig-stunting',    'label' => 'Stunting'],
  ];
  ?>
  <div class="anim" style="background:#fff;border-radius:4px;box-shadow:0 1px 6px rgba(0,0,0,0.07);padding:32px 36px;margin-top:0;">
    <h2 class="section-heading anim-left">Infographics</h2>
    <div class="section-underline"></div>
    <p class="intro-text anim" style="transition-delay:0.06s;">
      Visual summaries of key child poverty indicators across the Philippines.
    </p>
    <div style="display:grid;grid-template-columns:repeat(2,1fr);gap:22px;margin-top:8px;max-width:900px;margin-left:auto;margin-right:auto;">
      <?php foreach ($infographics as $i => $ig): ?>
      <div class="anim-zoom" style="transition-delay:<?= $i * 0.1 ?>s;display:flex;flex-direction:column;align-items:center;">
        <div style="width:100%;border-radius:8px;overflow:hidden;border:1px solid #dde4f0;
                    box-shadow:0 2px 10px rgba(26,50,105,0.08);
                    transition:transform 0.28s cubic-bezier(.22,1,.36,1),box-shadow 0.28s ease;cursor:pointer;"
             onmouseover="this.style.transform='translateY(-5px)';this.style.boxShadow='0 12px 28px rgba(26,50,105,0.16)'"
             onmouseout="this.style.transform='translateY(0)';this.style.boxShadow='0 2px 10px rgba(26,50,105,0.08)'"
             onclick="document.getElementById('ig-modal').style.display='flex';
                      document.getElementById('ig-modal-img').src='Img/NDCP/<?= $ig['file'] ?>.png';
                      document.getElementById('ig-modal-label').textContent='<?= $ig['label'] ?>'">
          <img src="Img/NDCP/<?= $ig['file'] ?>.png"
               alt="<?= htmlspecialchars($ig['label']) ?>"
               style="width:100%;height:auto;display:block;"/>
        </div>
        <p style="margin-top:10px;font-size:13px;font-weight:700;color:#1a3269;text-align:center;">
          <?= htmlspecialchars($ig['label']) ?>
        </p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

  <!-- Lightbox modal -->
  <div id="ig-modal"
       style="display:none;position:fixed;inset:0;background:rgba(4,17,61,0.82);z-index:9999;
              align-items:center;justify-content:center;padding:24px;"
       onclick="this.style.display='none'">
    <div style="position:relative;max-width:780px;width:100%;" onclick="event.stopPropagation()">
      <button onclick="document.getElementById('ig-modal').style.display='none'"
              style="position:absolute;top:-14px;right:-14px;width:36px;height:36px;border-radius:50%;
                     background:#fff;border:none;cursor:pointer;font-size:18px;font-weight:700;
                     color:#1a3269;display:flex;align-items:center;justify-content:center;
                     box-shadow:0 2px 10px rgba(0,0,0,0.25);z-index:10;">✕</button>
      <img id="ig-modal-img" src="" alt=""
           style="width:100%;border-radius:8px;box-shadow:0 8px 40px rgba(0,0,0,0.4);display:block;"/>
      <p id="ig-modal-label"
         style="text-align:center;color:#fff;font-size:14px;font-weight:700;margin-top:14px;"></p>
    </div>
  </div>

  <!-- ════ REFERENCES ════ -->
  <div class="references-section anim">
    <h2 class="references-heading">References</h2>
    <div class="references-underline"></div>

    <?php $ref_chunks = array_chunk($references, 3); ?>
    <div class="ref-grid-wrap">
      <?php foreach ($ref_chunks as $row_refs): ?>
        <?php $is_partial = (count($row_refs) < 3); ?>
        <div class="ref-row <?= $is_partial ? 'ref-row-partial' : '' ?>">
          <?php foreach ($row_refs as $ref): ?>
          <div class="ref-card">
            <div class="ref-thumb">
             <img src="<?= htmlspecialchars($ref['img']) ?>"
                   alt="<?= htmlspecialchars($ref['title']) ?>"/>
            </div>
            <div class="ref-body">
              <div class="ref-title"><?= htmlspecialchars($ref['title']) ?></div>
              <p class="ref-desc"><?= htmlspecialchars($ref['body']) ?></p>
              <a href="<?= htmlspecialchars($ref['href']) ?>" class="ref-dl-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                     fill="none" stroke="currentColor" stroke-width="2.5"
                     stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                  <polyline points="7 10 12 15 17 10"/>
                  <line x1="12" y1="15" x2="12" y2="3"/>
                </svg>
                Download
              </a>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

</div>

<!-- ════ FOOTER ════ -->
<footer style="background:#1f2937;color:#9ca3af;font-size:12px;padding:14px 36px;
               display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:8px;">
  <span>2026 Philippine Statistics Authority. All content is public domain unless otherwise stated.</span>
  <div style="display:flex;align-items:center;gap:12px;">
    <a href="#" style="color:#9ca3af;text-decoration:none;"
       onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#9ca3af'">Terms Of Use</a>
    <span style="color:#4b5563;">|</span>
    <a href="#" style="color:#9ca3af;text-decoration:none;"
       onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#9ca3af'">Privacy Statement</a>
  </div>
</footer>

<!-- ════ SCROLL ANIMATION SCRIPT ════ -->
<script>
  (function () {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.08, rootMargin: '0px 0px -30px 0px' }
    );

    document.querySelectorAll(
      '.anim, .anim-left, .anim-zoom, .section-underline, .profiles-underline, .references-underline'
    ).forEach((el) => observer.observe(el));

    /* Staggered profiles grid */
    const profObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.querySelectorAll('.profile-card').forEach((card, i) => {
              card.style.transitionDelay = (i * 0.1) + 's';
              card.classList.add('visible');
            });
            profObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.05 }
    );
    const profGrid = document.querySelector('.profiles-grid');
    if (profGrid) profObserver.observe(profGrid);

    /* Staggered sectors grid */
    const secObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.querySelectorAll('.sec-btn').forEach((btn, i) => {
              btn.style.transitionDelay = (Math.floor(i / 2) * 0.09) + 's';
              btn.classList.add('visible');
            });
            secObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.05 }
    );
    const secGrid = document.querySelector('.sectors-grid');
    if (secGrid) secObserver.observe(secGrid);

    /* Bottom cards stagger */
    const cardObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.querySelectorAll('.anim-zoom').forEach((card, i) => {
              card.style.transitionDelay = (i * 0.12) + 's';
              card.classList.add('visible');
            });
            cardObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1 }
    );
    const cardsWrap = document.querySelector('.bottom-cards');
    if (cardsWrap) cardObserver.observe(cardsWrap);
  })();
</script>

</body>
</html>