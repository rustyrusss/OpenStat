<?php
/* ============================================================
   PAGE CONFIGURATION — Edit everything here
   ============================================================ */

/* ── Page meta ── */
$page_title       = 'Population & Vital Statistics';
$page_description = 'Explore official statistics on population, births, deaths, marriage and other vital events in the Philippines.';
$hero_image       = 'Img/Background-Data.png';
$active_nav       = 'about';

/* ── Breadcrumb trail ── */
$breadcrumbs = [
  ['label' => 'About >', 'href' =>  'about.php'],
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
   END CONFIGURATION
   ============================================================ */
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PSA OpenSTAT - About</title>
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

    /* ── Section underline — YELLOW ── */
    .section-underline {
      width: 48px; height: 4px;
      background: #f5a623; border-radius: 2px;
      margin-top: 8px; margin-bottom: 24px;
    }

    /* ── Intro blocks ── */
    .intro-block {
      display: flex; align-items: flex-start; gap: 18px; margin-bottom: 22px;
    }
    .intro-icon {
      flex-shrink: 0; width: 72px; height: 72px;
      display: flex; align-items: center; justify-content: center;
    }
    .intro-icon img { width: 72px; height: 72px; object-fit: contain; }
    .intro-text { font-size: 15.5px; color: #374151; line-height: 1.85; text-align: justify; }

    /* ── Objectives wrapper — single large white rounded card ── */
    .objectives-wrapper {
      background: #fff;
      border-radius: 16px;
      padding: 28px 28px 24px;
      box-shadow: 0 3px 16px rgba(26,50,105,0.09);
      margin-bottom: 24px;
    }

    /* ── Objective row divider ── */
    .obj-row {
      display: grid;
      gap: 0;
    }
    .obj-row-top    { grid-template-columns: repeat(3, 1fr); border-bottom: 1.5px solid #e8eef7; padding-bottom: 20px; margin-bottom: 20px; }
    .obj-row-bottom { grid-template-columns: repeat(4, 1fr); }

    /* ── Individual objective item — icon top-left, text right ── */
    .obj-item {
      display: flex;
      flex-direction: row;
      align-items: flex-start;
      gap: 14px;
      padding: 8px 20px 8px 8px;
      border-right: 1.5px solid #e8eef7;
      transition: background 0.2s, transform 0.2s;
      border-radius: 8px;
    }
    .obj-item:last-child { border-right: none; }

    .obj-icon {
      flex-shrink: 0;
      width: 52px; height: 52px;
      display: flex; align-items: flex-start; justify-content: center;
      padding-top: 2px;
    }
    .obj-icon img { width: 48px; height: 48px; object-fit: contain; }
    .obj-item p { font-size: 13.5px; color: #374151; line-height: 1.6; margin: 0; }

    /* ── CTA banner ── */
    .cta-banner {
      position: relative;
      border-radius: 16px;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
      padding-left: 120px;
      box-shadow: 0 4px 18px rgba(26,50,105,0.10);
      min-height: 220px;
    }
    .cta-banner .cta-bg {
      position: absolute;
      inset: 8px;
      width: calc(100% - 16px);
      height: calc(100% - 16px);
      object-fit: cover;
      object-position: center left;
      z-index: 0;
      border-radius: 10px;
    }
    .cta-text {
      position: relative;
      display: flex;
      align-items: center;
      align-self: stretch;
      z-index: 2;
      font-size: 20px;
      font-weight: 1000;
      color: #1a1a1a;
      line-height: 1.75;
      max-width: 480px;
    }

    /* ════════════════════════════════════════
       SCROLL-TRIGGERED FADE-IN ANIMATIONS
       ════════════════════════════════════════ */

    /* Base hidden state for all animated elements */
    .fade-in {
      opacity: 0;
      transform: translateY(28px);
      transition: opacity 0.6s cubic-bezier(.22,1,.36,1),
                  transform 0.6s cubic-bezier(.22,1,.36,1);
    }

    /* Fade from left */
    .fade-in-left {
      opacity: 0;
      transform: translateX(-32px);
      transition: opacity 0.65s cubic-bezier(.22,1,.36,1),
                  transform 0.65s cubic-bezier(.22,1,.36,1);
    }

    /* Fade from right */
    .fade-in-right {
      opacity: 0;
      transform: translateX(32px);
      transition: opacity 0.65s cubic-bezier(.22,1,.36,1),
                  transform 0.65s cubic-bezier(.22,1,.36,1);
    }

    /* Visible state — added by IntersectionObserver */
    .fade-in.visible,
    .fade-in-left.visible,
    .fade-in-right.visible {
      opacity: 1;
      transform: translate(0, 0);
    }

    /* Staggered delays for children (used on .stagger-children > *) */
    .stagger-children > *:nth-child(1) { transition-delay: 0s;    }
    .stagger-children > *:nth-child(2) { transition-delay: 0.1s;  }
    .stagger-children > *:nth-child(3) { transition-delay: 0.2s;  }
    .stagger-children > *:nth-child(4) { transition-delay: 0.3s;  }
    .stagger-children > *:nth-child(5) { transition-delay: 0.4s;  }
    .stagger-children > *:nth-child(6) { transition-delay: 0.5s;  }
    .stagger-children > *:nth-child(7) { transition-delay: 0.6s;  }

    /* The underline grows in from left */
    .section-underline {
      width: 48px; height: 4px;
      background: #f5a623; border-radius: 2px;
      margin-top: 8px; margin-bottom: 24px;
      transform-origin: left center;
      transform: scaleX(0);
      opacity: 0;
      transition: transform 0.5s 0.15s cubic-bezier(.22,1,.36,1),
                  opacity   0.4s 0.15s ease;
    }
    .section-underline.visible {
      transform: scaleX(1);
      opacity: 1;
    }

    @media (max-width: 900px) {
      .obj-row-top    { grid-template-columns: 1fr; }
      .obj-row-bottom { grid-template-columns: repeat(2,1fr); }
      .obj-item { border-right: none; border-bottom: 1.5px solid #e8eef7; padding-bottom: 14px; }
      .cta-banner { flex-direction: column; justify-content: center; }
      .cta-text { max-width: 100%; text-align: center; }
      .intro-block { flex-direction: column; align-items: center; text-align: center; }
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
      About OpenSTAT
    </h1>
  </div>
</div>

<!-- ════ MAIN CONTENT ════ -->
<div style="max-width:1180px;margin:0 auto;padding:36px 32px 60px;">

  <!-- Heading -->
  <h2 class="fade-in" style="font-size:24px;font-weight:800;color:#1a3269;">About OpenSTAT</h2>
  <div class="section-underline"></div>

  <!-- Two-column: paragraphs left | side image right -->
  <div style="display:flex;gap:40px;align-items:flex-start;margin-bottom:36px;flex-wrap:wrap;">

    <div style="flex:1;min-width:280px;">

      <!-- Icon 1: Building -->
      <div class="intro-block fade-in-left">
        <div class="intro-icon">
          <img src="Img/About/Image 1.png" alt="Building"/>
        </div>
        <p class="intro-text">
          The Philippine Statistics Authority (PSA) is the primary statistical arm of the government.
          It is responsible in the conduct and content of all national censuses and surveys, gathering of
          sectoral statistics, consolidation of selected administrative recording systems, and compilation
          of national accounts.
        </p>
      </div>

      <!-- Icon 2: Platform -->
      <div class="intro-block fade-in-left" style="transition-delay:0.12s;">
        <div class="intro-icon">
          <img src="Img/About/Image 2.png" alt="Platform"/>
        </div>
        <p class="intro-text">
          OpenSTAT is an open data platform powered by PC-Axis, a user-friendly application with versatile
          possibilities for presenting statistical tables with visualization features. This system allows the
          PSA to share data under an open data license where data can be freely used, re-used and redistributed
          by anyone without any restrictions other than proper source attribution.
        </p>
      </div>

      <!-- Icon 3: Objectives intro -->
      <div class="intro-block fade-in-left" style="transition-delay:0.24s;">
        <div class="intro-icon">
          <img src="Img/About/Image 3.png" alt="Objectives"/>
        </div>
        <p class="intro-text">
          The OpenSTAT aims to make the statistical data collected and compiled by the PSA to be available
          to its various clients and stakeholders. Moreover, it sets the following objectives:
        </p>
      </div>

    </div>

    <!-- Side image -->
    <div class="fade-in-right"
         style="flex-shrink:0;width:320px;border-radius:16px;overflow:hidden;
                box-shadow:0 6px 24px rgba(26,50,105,0.14);align-self:stretch;">
      <img src="Img/About/About-Side-Image.png" alt="About OpenSTAT"
           style="width:100%;height:100%;object-fit:cover;display:block;min-height:340px;"/>
    </div>

  </div>

  <!-- ── Objectives: single large white card with two rows ── -->
  <div class="objectives-wrapper fade-in">

    <!-- Row 1: 3 items -->
    <div class="obj-row obj-row-top stagger-children">

      <div class="obj-item fade-in">
        <div class="obj-icon"><img src="Img/About/OpenData.png" alt="Open Data"/></div>
        <p>Adherence to the </br> Open Data Initiative.</p>
      </div>

      <div class="obj-item fade-in">
        <div class="obj-icon"><img src="Img/About/sustainable.png" alt="SDG"/></div>
        <p>Contribute towards achievement of Sustainable Development Goals</p>
      </div>

      <div class="obj-item fade-in">
        <div class="obj-icon"><img src="Img/About/Facilitate.png" alt="Inclusive"/></div>
        <p>Facilitate an inclusive, sustainable and resilient development</p>
      </div>

    </div>

    <!-- Row 2: 4 items -->
    <div class="obj-row obj-row-bottom stagger-children">

      <div class="obj-item fade-in">
        <div class="obj-icon"><img src="Img/About/National-Data.png" alt="National Data"/></div>
        <p>Promote a National Data Sharing, Accessibility Policy and Standards</p>
      </div>

      <div class="obj-item fade-in">
        <div class="obj-icon"><img src="Img/About/API.png" alt="API"/></div>
        <p>Promote innovation through provision of Open Application Program Interfaces</p>
      </div>

      <div class="obj-item fade-in">
        <div class="obj-icon"><img src="Img/About/Increase.png" alt="Utilization"/></div>
        <p>Increase and improve the utilization of data for decision-making, citizen empowerment, innovation and entrepreneurship</p>
      </div>

      <div class="obj-item fade-in">
        <div class="obj-icon"><img src="Img/About/Building.png" alt="Capacity"/></div>
        <p>Support capacity building and innovation for the generation, sharing and utilization of data at national, regional and local level</p>
      </div>

    </div>

  </div><!-- end objectives-wrapper -->

  <!-- CTA Banner -->
  <div class="cta-banner fade-in" style="background:#fff;">
    <img class="cta-bg" src="img/About/About-BG1.png" alt=""/>
    <div class="cta-text">
      PSA invites all agencies to join the open data initiative
      to create a conducive environment for an open and transparent governance.
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
    // Selectors for all animated elements
    const selectors = '.fade-in, .fade-in-left, .fade-in-right, .section-underline';

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            // Stop observing once revealed — no re-animation on scroll back up
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.12,      // trigger when 12% of element is visible
        rootMargin: '0px 0px -40px 0px'  // slight offset from bottom edge
      }
    );

    // Observe every animated element
    document.querySelectorAll(selectors).forEach((el) => observer.observe(el));
  })();
</script>

</body>
</html>