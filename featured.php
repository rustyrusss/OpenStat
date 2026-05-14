<?php
/* ============================================================
   PAGE CONFIGURATION — Edit everything here
   ============================================================ */

/* ── Page meta ── */
$page_title       = 'Featured Content';
$page_description = '';
$hero_image       = 'Img/Background-Data.png';
$active_nav       = 'featured';

/* ── Breadcrumb trail ── */
$breadcrumbs = [
  ['label' => 'Dashboard >' ,  'href' => 'dashboard.php'],
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

/* ── Featured items ── */
$featured_items = [
  [
    'title'       => 'National Database on Child Poverty',
    'image'       => 'Img/Featured Content/ndcp.png',
    'description' => 'The National Database on Child Poverty is the major output of the project "Updating of the National Database on Child Poverty" implemented by the Philippine Statistics Authority with support from the United Nations Children\'s Fund (UNICEF). The database will serve as a one-stop shop web-based information system on child poverty indicators and other related information in the country.',
    'url'         => '#',
  ],
  [
    'title'       => 'CountrySTAT Philippines',
    'image'       => 'Img/Featured Content/countrystatcover.png',
    'description' => 'The CountrySTAT Philippines is a web-based system that integrates national food and agricultural statistical information to ensure harmonization of national data and metadata collections for analysis and policy making.',
    'url'         => '#',
  ],
  [
    'title'       => 'Decent Work Statistics – Philippines',
    'image'       => 'Img/Featured Content/dewscover.png',
    'description' => 'The DWSS Philippines (Decent Work Statistics Philippines) is a statistical activity envisioned to widen awareness on decent work among policymakers (including those in outside the labor sphere), unions and employers, and researchers, and more importantly to facilitate effective monitoring and assessment of progress toward decent work in the country.',
    'url'         => '#',
  ],
  [
    'title'       => 'Philippine Food Security Information System',
    'image'       => 'Img/Featured Content/philfsiscover.png',
    'description' => 'The Philippine Food Security Information System (PHFSIS) is an information system containing relevant, organized, timely and accessible data related to food security.',
    'url'         => '#',
  ],
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
  <title>PSA OpenSTAT - Featured Content</title>
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

    /* ── Featured card ── */
    .featured-card {
      background: #fff;
      border-radius: 10px;
      display: flex;
      align-items: stretch;
      box-shadow: 0 1px 6px rgba(26,50,105,0.10);
      margin-bottom: 18px;
      border: 1px solid #e2e8f0;
      transition: box-shadow 0.2s, transform 0.2s;
    }
    .featured-card:hover {
      box-shadow: 0 4px 20px rgba(26,50,105,0.13);
      transform: translateY(-2px);
    }

    /* ── Card thumbnail — with padding ── */
    .card-thumb {
      flex-shrink: 0;
      width: 255px;
      padding: 12px 0 12px 12px;
      background: #fff;
      display: flex;
      align-items: stretch;
    }
    .card-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
      display: block;
      border-radius: 7px;
      min-height: 160px;
    }

    /* ── Card body ── */
    .card-body {
      flex: 1;
      padding: 20px 26px 20px 24px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      border-left: none;
    }
    .card-body h3 {
      font-size: 16.5px;
      font-weight: 700;
      color: #1a3269;
      margin: 0 0 10px 0;
    }
    .card-body p {
      font-size: 13px;
      color: #374151;
      line-height: 1.78;
      margin: 0;
      text-align: justify;
    }

    /* ── View webpage button ── */
    .view-btn {
      flex-shrink: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 0 24px;
      border-left: 1px solid #e2e8f0;
    }
    .view-btn a {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 9px 16px;
      border: 1.5px solid #1a3269;
      border-radius: 6px;
      color: #1a3269;
      font-size: 13px;
      font-weight: 600;
      text-decoration: none;
      white-space: nowrap;
      transition: background 0.15s, color 0.15s;
    }
    .view-btn a:hover {
      background: #1a3269;
      color: #fff;
    }
    .view-btn a svg {
      transition: transform 0.15s;
    }
    .view-btn a:hover svg {
      transform: translateX(3px);
    }

    /* ── Scroll animations ── */
    .fade-in {
      opacity: 0;
      transform: translateY(22px);
      transition: opacity 0.55s cubic-bezier(.22,1,.36,1),
                  transform 0.55s cubic-bezier(.22,1,.36,1);
    }
    .fade-in.visible {
      opacity: 1;
      transform: translateY(0);
    }

    /* Staggered delays */
    .stagger-1 { transition-delay: 0s;    }
    .stagger-2 { transition-delay: 0.10s; }
    .stagger-3 { transition-delay: 0.20s; }
    .stagger-4 { transition-delay: 0.30s; }

    @media (max-width: 768px) {
      .featured-card { flex-direction: column; }
      .card-thumb { width: 100%; height: 200px; }
      .view-btn { padding: 16px 24px 20px; justify-content: flex-start; }
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
  <div class="relative z-10 py-8" style="max-width:1180px;margin:0 auto;padding-left:32px;">
    <!-- Breadcrumb -->
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
    <!-- Hero title & subtitle -->
    <h1 class="hero-title text-[30px] font-bold text-white mb-2"
        style="text-shadow:0 2px 14px rgba(0,0,0,0.5);">
      <?= htmlspecialchars($page_title) ?>
    </h1>
    <p class="hero-title text-[14px] text-white" style="opacity:0.82;max-width:500px;line-height:1.65;transition-delay:0.05s;">
      <?= htmlspecialchars($page_description) ?>
    </p>
  </div>
</div>

<!-- ════ MAIN CONTENT ════ -->
<div style="max-width:1180px;margin:0 auto;padding:36px 32px 60px;">

  <?php foreach ($featured_items as $i => $item): ?>
  <div class="featured-card fade-in stagger-<?= $i + 1 ?>">

    <!-- Thumbnail -->
    <div class="card-thumb">
      <img src="<?= htmlspecialchars($item['image']) ?>"
           alt="<?= htmlspecialchars($item['title']) ?>"/>
    </div>

    <!-- Text body -->
    <div class="card-body">
      <h3><?= htmlspecialchars($item['title']) ?></h3>
      <p><?= htmlspecialchars($item['description']) ?></p>
    </div>

    <!-- CTA button -->
    <div class="view-btn">
      <a href="<?= htmlspecialchars($item['url']) ?>" target="_blank" rel="noopener">
        View webpage
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 7H12M12 7L7.5 2.5M12 7L7.5 11.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
    </div>

  </div>
  <?php endforeach; ?>

</div>

<!-- ════ FOOTER ════ -->
<footer style="background:#1f2937;color:#9ca3af;font-size:12px;padding:14px 36px;
               display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:8px;">
  <span>2025 Philippine Statistics Authority. All content is public domain unless otherwise stated.</span>
  <div style="display:flex;align-items:center;gap:12px;">
    <a href="#" style="color:#9ca3af;text-decoration:none;"
       onmouseover="this.style.color='#fff'" onmouseout="this.style.color='#9ca3af'">Terms of Use</a>
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
      { threshold: 0.10, rootMargin: '0px 0px -30px 0px' }
    );
    document.querySelectorAll('.fade-in').forEach((el) => observer.observe(el));
  })();
</script>

</body>
</html>