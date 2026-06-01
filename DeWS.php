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

$elements = [
  ['label' => 'Economic and Social for Decent Work',                     'icon' => 'Economic-And-Social.png', 'href' => '#economic-social'],
  ['label' => 'Stability and Security for Work',                         'icon' => 'Stability.png',           'href' => '#stability'],
  ['label' => 'Employment Opportunities',                                'icon' => 'Employment (1).png',      'href' => '#employment'],
  ['label' => 'Equal Opportunity and Treatment in Employment',           'icon' => 'Equal.png',               'href' => '#equal'],
  ['label' => 'Adequate Earnings and Productive Work',                   'icon' => 'Adequate.png',            'href' => '#adequate'],
  ['label' => 'Safe Work Environment',                                   'icon' => 'Safe-Work.png',           'href' => '#safe-work'],
  ['label' => 'Decent Hours',                                            'icon' => 'Decent-Hours.png',        'href' => '#decent-hours'],
  ['label' => 'Social Security',                                         'icon' => 'Social-Security.png',     'href' => '#social-security'],
  ['label' => 'Combining Work, Family and Personal Life',                'icon' => 'Combining-Work.png',      'href' => '#combining-work'],
  ['label' => "Social Dialogue, Workers' and Employers' Representation", 'icon' => 'Social Dialogue.png',     'href' => '#social-dialogue'],
  ['label' => 'Work that Should be Abolished',                           'icon' => 'Work.png',                'href' => '#work-abolished'],
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
       YELLOW UNDERLINE — grows in
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

    /* Fade up — default */
    .anim {
      opacity: 0;
      transform: translateY(30px);
      transition: opacity 0.65s cubic-bezier(.22,1,.36,1),
                  transform 0.65s cubic-bezier(.22,1,.36,1);
    }
    .anim.visible { opacity: 1; transform: translateY(0); }

    /* Fade in from left */
    .anim-left {
      opacity: 0;
      transform: translateX(-40px);
      transition: opacity 0.65s cubic-bezier(.22,1,.36,1),
                  transform 0.65s cubic-bezier(.22,1,.36,1);
    }
    .anim-left.visible { opacity: 1; transform: translateX(0); }

    /* Fade in from right */
    .anim-right {
      opacity: 0;
      transform: translateX(40px);
      transition: opacity 0.65s cubic-bezier(.22,1,.36,1),
                  transform 0.65s cubic-bezier(.22,1,.36,1);
    }
    .anim-right.visible { opacity: 1; transform: translateX(0); }

    /* Zoom in */
    .anim-zoom {
      opacity: 0;
      transform: scale(0.88);
      transition: opacity 0.6s cubic-bezier(.22,1,.36,1),
                  transform 0.6s cubic-bezier(.22,1,.36,1);
    }
    .anim-zoom.visible { opacity: 1; transform: scale(1); }

    /* Stagger delays for siblings */
    .stagger > *:nth-child(1) { transition-delay: 0s;    }
    .stagger > *:nth-child(2) { transition-delay: 0.08s; }
    .stagger > *:nth-child(3) { transition-delay: 0.16s; }
    .stagger > *:nth-child(4) { transition-delay: 0.24s; }
    .stagger > *:nth-child(5) { transition-delay: 0.32s; }
    .stagger > *:nth-child(6) { transition-delay: 0.40s; }
    .stagger > *:nth-child(7) { transition-delay: 0.48s; }

    /* ════════════════════════════════
       INTRO TEXT
       ════════════════════════════════ */
    .intro-text {
      font-size: 14.5px; color: #374151; line-height: 1.8; margin-bottom: 14px;
    }

    /* ════════════════════════════════
       CONTENT CARD (white wrapper)
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
      border-top: 1px solid #e2e8f0;
      border-bottom: 1px solid #e2e8f0;
      padding: 14px 0;
      margin-top: 24px;
    }
    .elements-bar img {
      width: 54px; height: 54px; object-fit: contain;
      /* Spin-in on load */
      animation: spinIn 0.7s 0.4s cubic-bezier(.22,1,.36,1) both;
    }
    @keyframes spinIn {
      from { transform: rotate(-180deg) scale(0.5); opacity: 0; }
      to   { transform: rotate(0deg)   scale(1);   opacity: 1; }
    }
    .elements-bar-title { font-size: 18px; font-weight: 800; color: #1a3269; }

    /* ════════════════════════════════
       ELEMENTS GRID — 2-column card grid
       ════════════════════════════════ */
    .elements-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
      padding: 20px 0 28px;
    }

    /* Each element = a white card button */
    .el-btn {
      display: flex;
      align-items: center;
      gap: 18px;
      padding: 18px 20px;
      text-decoration: none;
      color: #1a3269;
      background: #fff;
      border: 1px solid #dde4f0;
      border-radius: 10px;
      box-shadow: 0 1px 4px rgba(26,50,105,0.06);
      cursor: pointer;
      position: relative;
      overflow: hidden;
      transition: background 0.22s ease,
                  box-shadow  0.22s ease,
                  transform   0.22s cubic-bezier(.22,1,.36,1),
                  border-color 0.22s ease;
    }

    /* Blue left bar slides in on hover */
    .el-btn::before {
      content: '';
      position: absolute;
      left: 0; top: 0; bottom: 0;
      width: 4px;
      background: #1a3269;
      border-radius: 0 2px 2px 0;
      transform: scaleY(0);
      transform-origin: center;
      transition: transform 0.25s cubic-bezier(.22,1,.36,1);
    }

    .el-btn:hover {
      background: #eef3fb;
      border-color: #b8cce8;
      box-shadow: 0 4px 16px rgba(26,50,105,0.12);
      transform: translateY(-2px);
    }
    .el-btn:hover::before { transform: scaleY(1); }

    /* Circular icon badge */
    .el-icon-wrap {
      flex-shrink: 0;
      width: 62px; height: 62px;
      background: #eef2fb;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      transition: background 0.22s ease;
    }
    .el-btn:hover .el-icon-wrap { background: #dce6f7; }

    .el-icon {
      width: 38px; height: 38px; object-fit: contain;
    }

    /* Text block: element number + title */
    .el-text { flex: 1; min-width: 0; }
    .el-number {
      font-size: 11px; font-weight: 600; color: #7a90b8;
      letter-spacing: 0.6px; text-transform: uppercase;
      margin-bottom: 4px;
    }
    .el-label {
      font-size: 14px; font-weight: 700; color: #1a3269;
      line-height: 1.35;
    }

    /* Chevron arrow on the right */
    .el-arrow {
      flex-shrink: 0;
      font-size: 18px; color: #7a90b8;
      transition: transform 0.22s cubic-bezier(.22,1,.36,1), color 0.22s ease;
      margin-left: 4px;
    }
    .el-btn:hover .el-arrow {
      transform: translateX(4px);
      color: #1a3269;
    }

    /* Empty placeholder cell (for odd element count) */
    .el-placeholder {
      background: transparent;
      border: none;
      box-shadow: none;
      pointer-events: none;
    }

    /* ════════════════════════════════
       DOWNLOAD BOX
       ════════════════════════════════ */
    .download-box {
      background: #fef3e2;
      border: 1px solid #f5d9a0;
      border-radius: 4px;
      padding: 18px 22px;
      margin-top: 8px;
      margin-bottom: 8px;
    }
    .download-box p {
      font-size: 13.5px;
      color: #374151;
      line-height: 1.7;
      margin-bottom: 14px;
    }
    .download-btn {
      display: inline-flex;
      align-items: center;
      gap: 7px;
      background: #fff;
      color: #1a3269;
      border: 1px solid #c0c8d8;
      border-radius: 4px;
      padding: 8px 18px;
      font-size: 13px;
      font-weight: 600;
      font-family: 'Open Sans', sans-serif;
      cursor: pointer;
      text-decoration: none;
      transition: background 0.2s ease,
                  border-color 0.2s ease,
                  box-shadow 0.2s ease,
                  transform 0.2s cubic-bezier(.22,1,.36,1);
    }
    .download-btn:hover {
      background: #eef3fb;
      border-color: #8aaad4;
      box-shadow: 0 2px 8px rgba(26,50,105,0.12);
      transform: translateY(-1px);
    }
    .download-btn svg {
      flex-shrink: 0;
    }

    /* ════════════════════════════════
       BOTTOM CARDS
       ════════════════════════════════ */
    .bottom-cards {
      display: grid; grid-template-columns: repeat(3, 1fr); gap: 16px;
    }
    .bottom-card {
      background: #fff;
      border-radius: 4px;
      padding: 20px 18px 22px;
      box-shadow: 0 1px 6px rgba(0,0,0,0.07);
      /* Card lift on hover */
      transition: transform 0.28s cubic-bezier(.22,1,.36,1),
                  box-shadow 0.28s ease;
    }
    .bottom-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 28px rgba(26,50,105,0.13);
    }
    .bottom-card-header {
      display: flex; align-items: flex-start; gap: 12px;
      margin-bottom: 14px; padding-bottom: 14px;
      border-bottom: 1px solid #e2e8f0;
    }
    .card-icon-wrap {
      flex-shrink: 0; width: 54px; height: 54px;
      background: #eef1f9; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      /* Icon pulse on card hover */
      transition: background 0.28s ease, transform 0.28s cubic-bezier(.22,1,.36,1);
    }
    .bottom-card:hover .card-icon-wrap {
      background: #dce6f7;
      transform: scale(1.1) rotate(6deg);
    }
    .card-icon-wrap img { width: 54px; height: 54px; object-fit: contain; }
    .bottom-card-title { font-size: 13.5px; font-weight: 700; color: #1a3269; line-height: 1.35; padding-top: 2px; }
    .bottom-card-body  { font-size: 12.5px; color: #4b5563; line-height: 1.75; }

    @media (max-width: 780px) {
      .elements-grid { grid-template-columns: 1fr; }
      .bottom-cards { grid-template-columns: 1fr; }
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
      Decent Work Statistics (DeWS)
    </h1>
  </div>
</div>

<!-- ════ MAIN CONTENT ════ -->
<div style="max-width:1180px;margin:0 auto;padding:36px 32px 60px;">

  <!-- White content card -->
  <div class="content-card anim">

    <h2 class="anim-left" style="font-size:26px;font-weight:800;color:#1a1a1a;margin-bottom:6px;">
      Decent Work Statistics (DeWS)
    </h2>
    <div class="section-underline"></div>

    <p class="intro-text anim" style="transition-delay:0.08s;">
      The Decent Work Statistics (DeWS) - Philippine is a comprehensive set of statistical indicators
      that measure the quality of work and the conditions under which people work.
    </p>
    <p class="intro-text anim" style="transition-delay:0.16s;">
      Organized into eleven (11) substantive elements, DeWS provides a framework for monitoring
      progress toward decent work for all.
    </p>

    <!-- Framework description paragraph (from screenshot) -->
    <p class="intro-text anim" style="transition-delay:0.24s;">
      The measurement framework on decent work covers ten substantive elements corresponding to the four strategic pillars of the Decent Work Agenda: employment opportunities; adequate earnings and productive work; decent hours; combining work, family and personal life; work that should be abolished; stability and security of work; equal opportunity and treatment in employment; safe work environment; social security; and, social dialogue, workers' and employers' representation. An additional element, economic and social context of decent work, helps determine what constitute decency in society as well as the extent to which the achievement of decent work enhances national economic, social and labor market performance.
    </p>

    <!-- Download box (from screenshot) -->
    <div class="download-box anim" style="transition-delay:0.32s;">
      <p>Download the latest Decent Work Statistics (DeWS) - summary tables, 1995-2018.</p>
      <a href="#" class="download-btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
             fill="none" stroke="currentColor" stroke-width="2.5"
             stroke-linecap="round" stroke-linejoin="round">
          <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
          <polyline points="7 10 12 15 17 10"/>
          <line x1="12" y1="15" x2="12" y2="3"/>
        </svg>
        Download
      </a>
    </div>

    <!-- Elements header bar -->
    <div class="elements-bar">
      <img src="Img/Decent-Work-Statistics/11-Elements.png" alt="11 Elements"/>
      <span class="elements-bar-title anim" style="transition-delay:0.2s;">The 11 Elements of Decent Work</span>
    </div>

    <!-- Elements grid — card-style clickable buttons -->
    <div class="elements-grid">
      <?php
        $total = count($elements);
        foreach ($elements as $idx => $el):
          $num = $idx + 1;
      ?>
          <a href="<?= htmlspecialchars($el['href']) ?>" class="el-btn anim" style="transition-delay:<?= round($idx * 0.07, 2) ?>s;">
            <div class="el-icon-wrap">
              <img class="el-icon"
                   src="Img/Decent-Work-Statistics/<?= htmlspecialchars($el['icon']) ?>"
                   alt="<?= htmlspecialchars($el['label']) ?>"/>
            </div>
            <div class="el-text">
              <div class="el-number">Element <?= $num ?></div>
              <div class="el-label"><?= htmlspecialchars($el['label']) ?></div>
            </div>
            <span class="el-arrow">&#8250;</span>
          </a>
      <?php endforeach; ?>
      <?php if ($total % 2 !== 0): ?>
          <div class="el-btn el-placeholder"></div>
      <?php endif; ?>
    </div>

  </div><!-- end content-card -->

  <!-- Three bottom cards -->
  <div class="bottom-cards stagger">
    <?php foreach ($cards as $card): ?>
    <div class="bottom-card anim-zoom">
      <div class="bottom-card-header">
        <div class="card-icon-wrap">
          <img src="Img/Decent-Work-Statistics/<?= htmlspecialchars($card['icon']) ?>"
               alt="<?= htmlspecialchars($card['title']) ?>"/>
        </div>
        <div class="bottom-card-title"><?= htmlspecialchars($card['title']) ?></div>
      </div>
      <p class="bottom-card-body"><?= htmlspecialchars($card['body']) ?></p>
    </div>
    <?php endforeach; ?>
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

<!-- ════ SCROLL + STAGGER ANIMATION SCRIPT ════ -->
<script>
  (function () {
    /* IntersectionObserver for all animated elements */
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

    /* Observe every animated element */
    document.querySelectorAll(
      '.anim, .anim-left, .anim-right, .anim-zoom, .section-underline'
    ).forEach((el) => observer.observe(el));

    /* ── Staggered grid rows: each visible .el-btn inside .elements-grid
       gets an incremental delay so rows cascade in one by one ── */
    const gridObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const btns = entry.target.querySelectorAll('.el-btn');
            btns.forEach((btn, i) => {
              /* pair-based delay: left and right of same row share same delay */
              const row = Math.floor(i / 2);
              btn.style.transitionDelay = (row * 0.09) + 's';
              btn.classList.add('visible');
            });
            gridObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.05 }
    );

    const grid = document.querySelector('.elements-grid');
    if (grid) gridObserver.observe(grid);

    /* ── Bottom cards: stagger in with zoom ── */
    const cardObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const cards = entry.target.querySelectorAll('.anim-zoom');
            cards.forEach((card, i) => {
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