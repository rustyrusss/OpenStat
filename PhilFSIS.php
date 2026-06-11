<?php
$page_title       = 'Decent Work Statistics';
$page_description = 'Explore official statistics on decent work and labor in the Philippines.';
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

$crop_commodities = [
  ['label' => 'Rice',         'icon' => 'Rice.png'],
  ['label' => 'Corn (Maize)', 'icon' => 'Corn.png'],
  ['label' => 'Sweet Potato', 'icon' => 'Sweet Potato.png'],
  ['label' => 'Cassava',      'icon' => 'Cassava.png'],
  ['label' => 'Banana Saba',  'icon' => 'Banana-Saba.png'],
];

$livestock_commodities = [
  ['label' => 'Hog',         'icon' => 'Hog.png'],
  ['label' => 'Chicken',     'icon' => 'Chicken.png'],
  ['label' => 'Chicken Egg', 'icon' => 'Chicken Egg.png'],
  ['label' => 'Milkfish',    'icon' => 'Milkfish.png'],
  ['label' => 'Tilapia',     'icon' => 'Tilapia.png'],
];

$dimensions = [
  [
    'img'   => 'Food Availability.png',
    'title' => 'Food Availability',
    'body'  => 'Food availability dimension addresses supply side of the food security and expects sufficient quantities of quality food from domestic agriculture production or import.',
  ],
  [
    'img'   => 'Food Accesiblity.png',
    'title' => 'Food Accessibility',
    'body'  => 'Food accessibility refers to the access by individuals to adequate resources for acquiring appropriate foods for a nutritious diet. It encompasses income, expenditure and buying capacity, with both economic and physical access aspects considered.',
  ],
  [
    'img'   => 'Food Utilization.png',
    'title' => 'Food Utilization',
    'body'  => 'Food utilization is defined as the ability of the human body to ingest and metabolize food through adequate diet, clean water, good sanitation and health care to reach a state of nutritional well-being where all physiological needs are met.',
  ],
  [
    'img'   => 'Exogenous Factor.png',
    'title' => 'Exogenous Factors',
    'body'  => 'Exogenous factors that affect food security, including external conditions and influences that impact the availability, accessibility, and utilization of food across communities.',
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PSA OpenSTAT - Decent Work Statistics</title>
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

    /* ════════════════════════════════
       NAVBAR
       ════════════════════════════════ */
    .navbar { animation: slideDown 0.6s cubic-bezier(.22,1,.36,1) both; }
    @keyframes slideDown {
      from { transform: translateY(-100%); opacity: 0; }
      to   { transform: translateY(0); opacity: 1; }
    }
    .nav-blue-link {
      display: inline-block; color: #fff; font-size: 15px; font-weight: 600;
      text-decoration: none; padding: 13px 30px; transition: background 0.2s;
      white-space: nowrap; letter-spacing: 0.3px;
    }
    .nav-blue-link:hover      { background: rgba(255,255,255,0.12); }
    .nav-blue-link.active-nav { background: rgba(255,255,255,0.18); font-weight: 700; }

    /* ════════════════════════════════
       HERO
       ════════════════════════════════ */
    @keyframes heroFadeIn {
      from { opacity: 0; transform: translateY(-12px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .hero-title { animation: heroFadeIn 0.8s 0.2s cubic-bezier(.22,1,.36,1) both; }

    /* ════════════════════════════════
       YELLOW UNDERLINE
       ════════════════════════════════ */
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

    /* ════════════════════════════════
       SCROLL ANIMATIONS
       ════════════════════════════════ */
    .anim {
      opacity: 0; transform: translateY(30px);
      transition: opacity 0.65s cubic-bezier(.22,1,.36,1),
                  transform 0.65s cubic-bezier(.22,1,.36,1);
    }
    .anim.visible { opacity: 1; transform: translateY(0); }

    .anim-left {
      opacity: 0; transform: translateX(-40px);
      transition: opacity 0.65s cubic-bezier(.22,1,.36,1),
                  transform 0.65s cubic-bezier(.22,1,.36,1);
    }
    .anim-left.visible { opacity: 1; transform: translateX(0); }

    .anim-zoom {
      opacity: 0; transform: scale(0.88);
      transition: opacity 0.6s cubic-bezier(.22,1,.36,1),
                  transform 0.6s cubic-bezier(.22,1,.36,1);
    }
    .anim-zoom.visible { opacity: 1; transform: scale(1); }

    .stagger > *:nth-child(1) { transition-delay: 0s;    }
    .stagger > *:nth-child(2) { transition-delay: 0.08s; }
    .stagger > *:nth-child(3) { transition-delay: 0.16s; }
    .stagger > *:nth-child(4) { transition-delay: 0.24s; }
    .stagger > *:nth-child(5) { transition-delay: 0.32s; }

    /* ════════════════════════════════
       INTRO TEXT
       ════════════════════════════════ */
    .intro-text {
      font-size: 14.5px; color: #374151; line-height: 1.8; margin-bottom: 14px;
    }

    /* ════════════════════════════════
       CONTENT CARD
       ════════════════════════════════ */
    .content-card {
      background: #fff;
      border-radius: 4px;
      padding: 32px 36px 0;
      box-shadow: 0 1px 6px rgba(0,0,0,0.07);
      margin-bottom: 20px;
    }

    /* ════════════════════════════════
       ELEMENTS HEADER BAR
       ════════════════════════════════ */
    .elements-bar {
      display: flex; align-items: center; gap: 16px;
      border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;
      padding: 14px 0; margin-top: 24px;
    }
    .elements-bar-title { font-size: 18px; font-weight: 800; color: #1a3269; }

    /* ════════════════════════════════
       COMMODITY COVERAGE
       ════════════════════════════════ */
    .commodity-group-heading {
      font-size: 18px; font-weight: 800; color: #1a3269;
      margin-bottom: 4px; margin-top: 22px; letter-spacing: -0.2px;
    }

    .commodity-grid {
      display: grid; grid-template-columns: repeat(5, 1fr); gap: 14px; padding-bottom: 4px;
    }

    .commodity-card {
      display: flex; flex-direction: column; align-items: center; text-align: center;
      padding: 18px 12px 14px;
      border: 1px solid #dde4f0; border-radius: 10px; background: #fff;
      box-shadow: 0 1px 4px rgba(26,50,105,0.06);
      transition: transform 0.28s cubic-bezier(.22,1,.36,1),
                  box-shadow 0.28s ease, border-color 0.28s ease;
      cursor: default;
    }
    .commodity-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 26px rgba(26,50,105,0.13);
      border-color: #b8cce8;
    }

    .commodity-icon-wrap {
      width: 90px; height: 90px; border-radius: 10px; background: #eef2fb;
      display: flex; align-items: center; justify-content: center;
      margin-bottom: 10px; overflow: hidden; padding: 10px;
      transition: background 0.28s ease, transform 0.28s cubic-bezier(.22,1,.36,1);
    }
    .commodity-card:hover .commodity-icon-wrap { background: #dce6f7; transform: scale(1.06); }
    .commodity-icon-wrap img { width: 100%; height: 100%; object-fit: contain; }

    /* ════════════════════════════════
       DIMENSIONS PILLAR GRID — bigger icons
       ════════════════════════════════ */
    .pillars-section {
      margin: 28px 0 8px;
      padding-bottom: 28px;
    }

    .pillars-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 16px;
    }

    .pillar-card {
      display: flex; flex-direction: column; align-items: center; text-align: center;
      padding: 28px 16px 24px;
      border: 1px solid #dde4f0; border-radius: 10px; background: #fff;
      box-shadow: 0 1px 4px rgba(26,50,105,0.06);
      transition: transform 0.28s cubic-bezier(.22,1,.36,1),
                  box-shadow 0.28s ease, border-color 0.28s ease;
      cursor: default;
    }
    .pillar-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 26px rgba(26,50,105,0.13);
      border-color: #b8cce8;
    }

    .pillar-icon-wrap {
      width: 72px; height: 72px; border-radius: 50%; background: #eef2fb;
      display: flex; align-items: center; justify-content: center; margin-bottom: 16px;
      transition: background 0.28s ease, transform 0.28s cubic-bezier(.22,1,.36,1);
    }
    .pillar-card:hover .pillar-icon-wrap { background: #dce6f7; transform: scale(1.08) rotate(5deg); }
    .pillar-icon-wrap img { width: 72px; height: 72px; object-fit: contain; }
    .pillar-title { font-size: 14px; font-weight: 800; color: #1a3269; margin-bottom: 0; }

    /* ════════════════════════════════
       DIMENSION DETAIL BLOCKS
       ════════════════════════════════ */
    .dim-detail-block {
      padding: 20px 0 18px;
      border-top: 1px solid #e2e8f0;
    }
    .dim-detail-block:last-child { padding-bottom: 0; }
    .dim-detail-title {
      font-size: 18px; font-weight: 800; color: #1a3269; margin-bottom: 10px;
    }
    .bottom-card-body { font-size: 14.5px; color: #4b5563; line-height: 1.75; }

    /* ════════════════════════════════
       RESPONSIVE
       ════════════════════════════════ */
    @media (max-width: 900px) {
      .pillars-grid { grid-template-columns: repeat(2, 1fr); }
      .commodity-grid { grid-template-columns: repeat(3, 1fr); }
    }
    @media (max-width: 780px) {
      .commodity-grid { grid-template-columns: repeat(2, 1fr); }
      .pillars-grid { grid-template-columns: 1fr; }
    }
    @media (max-width: 480px) {
      .commodity-grid { grid-template-columns: repeat(2, 1fr); }
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
    <h1 class="hero-title text-[28px] font-bold text-white"
        style="text-shadow:0 2px 14px rgba(0,0,0,0.5);">
      Philippine Food Security Information System (PhilFSIS)
    </h1>
  </div>
</div>

<!-- ════ MAIN CONTENT ════ -->
<div style="max-width:1180px;margin:0 auto;padding:36px 32px 60px;">

  <!-- ════ WHITE CONTENT CARD ════ -->
  <div class="content-card anim">

    <h2 class="anim-left" style="font-size:26px;font-weight:800;color:#1a1a1a;margin-bottom:6px;">
      Philippine Food Security Information System (PhilFSIS)
    </h2>
    <div class="section-underline"></div>

    <p class="intro-text anim" style="transition-delay:0.06s;">
      Food security has become an essential objective in the Philippine agricultural system. This poses a challenge to the statistical system to become an indispensable partner in attaining and maintaining food security. Since the country's statistics on food security are widely dispersed, are characterized by data gaps, are not readily available or accessible, are mostly outdated and are inadequate inputs to the decision-making process by the government and other stakeholders, there is a need for a well-organized food security information system with well-defined concepts that will address the data requirements of policy and decision makers. In response to this, the Philippine Food Security Information System (PhilFSIS) was proposed to be established.
    </p>

    <p class="intro-text anim" style="transition-delay:0.12s;">
      Food Agricultural Organization (FAO) project TCP/PHI/3401 provided for the establishment of the Food Security Information System (PhilFSIS) in the Philippines at the Bureau of Agricultural Statistics (BAS). The project was approved in March 2012 and was formally launched on July 31, 2012.
    </p>

    <p class="intro-text anim" style="transition-delay:0.18s;">
      Inspired after the ASEAN Food Security Information System (AFSIS), the PhilFSIS is envisioned as a one-stop shop containing relevant, timely, comprehensive, user-friendly, and accessible data affecting food security. It is a web-based information system that aims to enhance food security planning, implementation and evaluation through improved organization, analysis and dissemination of relevant information.
    </p>

    <!-- ════ COMMODITY COVERAGE HEADER BAR ════ -->
    <div class="elements-bar">
      <div>
        <span class="elements-bar-title anim" style="transition-delay:0.2s;">Commodity Coverage</span>
        <div style="width:44px;height:3px;background:#f5a623;border-radius:2px;margin-top:5px;"></div>
      </div>
    </div>

    <!-- ════ COMMODITY COVERAGE SECTION ════ -->
    <div class="commodity-section anim" style="transition-delay:0.24s;">

      <p class="intro-text" style="margin-top:18px;">
        Commodities covered by PhilFSIS fall under three (3) groups: <strong>Crops</strong>, <strong>Livestock and Poultry</strong>, and <strong>Fisheries</strong>.
      </p>

      <!-- Crops -->
      <div class="commodity-group-heading">Crops</div>
      <p class="intro-text">
        Among the crop commodities are rice, corn, sweet potato, cassava, and banana (saba). These were selected since they are part of the priority crops under the Food Staples Sufficiency Program (FSSP) of the Department of Agriculture (DA). Rice is the main staple food while corn, cassava, sweet potato and banana (saba) are traditionally part of the meal in the rural areas of Visayas and Mindanao.
      </p>
      <div class="commodity-grid stagger">
        <?php foreach ($crop_commodities as $idx => $item): ?>
        <div class="commodity-card anim-zoom" style="transition-delay:<?= round($idx * 0.08, 2) ?>s;">
          <div class="commodity-icon-wrap">
            <img src="Img/PhilFSIS/<?= htmlspecialchars($item['icon']) ?>"
                 alt="<?= htmlspecialchars($item['label']) ?>"/>
          </div>
          <div class="commodity-label"><?= htmlspecialchars($item['label']) ?></div>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- Livestock & Poultry + Fisheries -->
      <div class="commodity-group-heading" style="margin-top:22px;">Livestock and Poultry &amp; Fisheries</div>
      <p class="intro-text">
        Commodities under livestock and poultry and fisheries sectors were selected based on the inputs provided by concerned agencies during the PhilFSIS' User-Producer Forum. Hog, chicken, chicken egg, tilapia and milkfish are perceived as being the most common commodities purchased by wage earners.
      </p>
      <div class="commodity-grid stagger">
        <?php foreach ($livestock_commodities as $idx => $item): ?>
        <div class="commodity-card anim-zoom" style="transition-delay:<?= round($idx * 0.08, 2) ?>s;">
          <div class="commodity-icon-wrap">
            <img src="Img/PhilFSIS/<?= htmlspecialchars($item['icon']) ?>"
                 alt="<?= htmlspecialchars($item['label']) ?>"/>
          </div>
          <div class="commodity-label"><?= htmlspecialchars($item['label']) ?></div>
        </div>
        <?php endforeach; ?>
      </div>

    </div><!-- end commodity-section -->

    <!-- ════ FOOD SECURITY DIMENSIONS HEADER BAR ════ -->
    <div class="elements-bar">
      <div>
        <span class="elements-bar-title anim" style="transition-delay:0.2s;">Dimensions of Food Security</span>
        <div style="width:44px;height:3px;background:#f5a623;border-radius:2px;margin-top:5px;"></div>
      </div>
    </div>

    <!-- ════ DIMENSIONS PILLAR GRID ════ -->
    <div class="pillars-section anim" style="transition-delay:0.24s;">
      <div class="pillars-grid stagger">
        <?php foreach ($dimensions as $dim): ?>
        <div class="pillar-card anim-zoom">
          <div class="pillar-icon-wrap">
            <img src="Img/PhilFSIS/<?= htmlspecialchars($dim['img']) ?>"
                 alt="<?= htmlspecialchars($dim['title']) ?>"/>
          </div>
          <div class="pillar-title"><?= htmlspecialchars($dim['title']) ?></div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ════ DIMENSION DETAIL BLOCKS ════ -->
    <div class="anim" style="transition-delay:0.28s; padding-bottom:32px;">

      <div class="dim-detail-block">
        <div class="dim-detail-title">Food Availability</div>
        <p class="bottom-card-body">Food availability dimension addresses supply side of the food security and expects sufficient quantities of quality food from domestic agriculture production or import.</p>
      </div>

      <div class="dim-detail-block">
        <div class="dim-detail-title">Food Accessibility</div>
        <p class="bottom-card-body">Food accessibility refers to the access by individuals to adequate resources for acquiring appropriate foods for a nutritious diet. It addresses whether the households or individuals have enough resources to acquire appropriate quantity of quality foods, thus, it encompasses their income, expenditure and buying capacity.</p>
        <p class="bottom-card-body" style="margin-top:10px;">There are two aspects of food access – the economic and physical access. Economic access refers to factors such as income, poverty and other indicators of buying capacity. Physical access indicators are related to infrastructure and facilities that hasten the access to food.</p>
        <p class="bottom-card-body" style="margin-top:10px;">Furthermore, the indicators were grouped into the level of importance which were either key or support. Key indicators are those which best describe the dimension. In the absence of available data for the key indicators, the support indicators will be the alternative for use.</p>
      </div>

      <div class="dim-detail-block">
        <div class="dim-detail-title">Food Utilization</div>
        <p class="bottom-card-body">Food utilization is one of the three dimensions of food security. It is defined as the ability of the human body to ingest and metabolize food through adequate diet, clean water, good sanitation and health care to reach a state of nutritional well-being where all physiological needs are met.</p>
        <p class="bottom-card-body" style="margin-top:10px;">In this dimension, it is essential to know if the food available in a given period of time had been accessed and well utilized. A household makes decisions on what food to consume and how to allocate food within the household. Appropriate food intake is vital for nutritional status of the populace.</p>
      </div>

      <div class="dim-detail-block">
        <div class="dim-detail-title">Exogenous Factors</div>
        <p class="bottom-card-body">Exogenous factors that affect food security.</p>
      </div>

    </div>

  </div><!-- end content-card -->

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

<!-- ════ SCROLL + STAGGER ANIMATION SCRIPT ════ -->
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
      '.anim, .anim-left, .anim-zoom, .section-underline'
    ).forEach((el) => observer.observe(el));

    /* Staggered pillars/dimensions grid */
    const pillarsObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const cards = entry.target.querySelectorAll('.pillar-card');
            cards.forEach((card, i) => {
              card.style.transitionDelay = (i * 0.1) + 's';
              card.classList.add('visible');
            });
            pillarsObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.05 }
    );

    const pillarsGrid = document.querySelector('.pillars-grid');
    if (pillarsGrid) pillarsObserver.observe(pillarsGrid);

    /* Staggered commodity grids */
    const gridObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const cards = entry.target.querySelectorAll('.commodity-card');
            cards.forEach((card, i) => {
              card.style.transitionDelay = (i * 0.09) + 's';
              card.classList.add('visible');
            });
            gridObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.05 }
    );

    document.querySelectorAll('.commodity-grid').forEach(grid => gridObserver.observe(grid));

  })();
</script>

</body>
</html>