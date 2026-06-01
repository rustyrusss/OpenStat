<?php
/* ============================================================
   PAGE CONFIGURATION
   ============================================================ */

$page_title       = 'Philippine Statistical Yearbook (PSY)';
$page_description = 'The Philippine Statistical Yearbook (PSY) is an annual publication of the Philippine Statistics Authority (PSA) that presents the major statistical indicators and data series covering the social, economic, and geographic dimensions of Philippine society.';
$hero_image       = 'Img/Background-Data.png';
$active_nav       = 'about';

$breadcrumbs = [
  ['label' => 'About', 'href' => 'about.php'],
];

$nav_items = [
  ['label' => 'Home',       'href' => 'index.php',    'key' => 'home'],
  ['label' => 'About',      'href' => 'about.php',    'key' => 'about'],
  ['label' => 'Database',   'href' => 'database.php', 'key' => 'database'],
  ['label' => 'Dashboard',  'href' => 'dashboard.php','key' => 'dashboard'],
  ['label' => 'Featured',   'href' => 'featured.php', 'key' => 'featured'],
  ['label' => 'Contact Us', 'href' => 'contact.php',  'key' => 'contact'],
];

$chapters = [
  [
    'number'      => 1,
    'title'       => 'Population and Housing',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Population-And-Housing.png',
    'href'        => '#',
  ],
  [
    'number'      => 2,
    'title'       => 'Income and Prices',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Income-And-Prices.png',
    'href'        => '#',
  ],
  [
    'number'      => 3,
    'title'       => 'Economic Accounts',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Economic-Accounts.png',
    'icon_alt'    => 'Img/PSY/Chapter 1 to 19 Logo/Economic-Acounts.png',
    'href'        => '#',
  ],
  [
    'number'      => 4,
    'title'       => 'Environment and Natural Resources',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Environment-And-Natural-Resources.png',
    'href'        => '#',
  ],
  [
    'number'      => 5,
    'title'       => 'Agriculture and Agrarian Reform',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Agriculture-And-Agrarian-Reform.png',
    'href'        => '#',
  ],
  [
    'number'      => 6,
    'title'       => 'Industry',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Industry.png',
    'href'        => '#',
  ],
  [
    'number'      => 7,
    'title'       => 'Trade',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Trade.png',
    'href'        => '#',
  ],
  [
    'number'      => 8,
    'title'       => 'Tourism',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Tourism.png',
    'href'        => '#',
  ],
  [
    'number'      => 9,
    'title'       => 'Vital Health and Nutrition Statistics',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Vital-Health-And-Nutriorion-Stiatiscs.png',
    'href'        => '#',
  ],
  [
    'number'      => 10,
    'title'       => 'Education and Manpower Development',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Education-And-Manpower-Development.png',
    'href'        => '#',
  ],
  [
    'number'      => 11,
    'title'       => 'Labor and Employment',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Labor-And-Employment.png',
    'href'        => '#',
  ],
  [
    'number'      => 12,
    'title'       => 'Social Services',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Social-Services.png',
    'href'        => '#',
  ],
  [
    'number'      => 13,
    'title'       => 'Transportation and Communication',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Transportation-And-Communication.png',
    'href'        => '#',
  ],
  [
    'number'      => 14,
    'title'       => 'Energy and Water Resources',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Energy-And-Water-Resources.png',
    'href'        => '#',
  ],
  [
    'number'      => 15,
    'title'       => 'Public Administration',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Public-Administration.png',
    'href'        => '#',
  ],
  [
    'number'      => 16,
    'title'       => 'Banking and Finances',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Banking-And-Finances.png',
    'href'        => '#',
  ],
  [
    'number'      => 17,
    'title'       => 'Public Order, Safety and Justice',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Public-Order.png',
    'href'        => '#',
  ],
  [
    'number'      => 18,
    'title'       => 'Science and Technology',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/Science-And-Technology.png',
    'href'        => '#',
  ],
  [
    'number'      => 19,
    'title'       => 'International Statistics',
    'icon'        => 'Img/PSY/Chapter 1 to 19 Logo/International-Statistics.png',
    'href'        => '#',
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
  <title>PSA OpenSTAT - Philippine Statistical Yearbook</title>
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

    /* ── PSY Banner ── */
    .psy-banner-section {
      background: #fff;
      padding: 28px 32px 28px;
      text-align: center;
      overflow: hidden;
    }
    .psy-banner-img {
      width: auto;
      max-width: 700px;
      height: auto;
      display: block;
      margin: 0 auto;
    }

    /* ── Section heading ── */
    .section-heading {
      font-size: 20px;
      font-weight: 700;
      color: #111827;
      margin: 0 0 20px 0;
    }

    /* ── Chapter grid ── */
    .chapters-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 14px;
    }

    /* ── Chapter card ── */
    .chapter-card {
      background: #fff;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 16px 18px;
      text-decoration: none;
      box-shadow: 0 1px 4px rgba(26,50,105,0.07);
      transition: box-shadow 0.2s, transform 0.2s, border-color 0.2s;
      cursor: pointer;
    }
    .chapter-card:hover {
      box-shadow: 0 4px 18px rgba(26,50,105,0.14);
      transform: translateY(-2px);
      border-color: #bfdbfe;
    }
    .chapter-card .icon-wrap {
      flex-shrink: 0;
      width: 56px; height: 56px;
      background: #dbeafe;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
    }
    .chapter-card .icon-wrap img {
      width: 56px; height: 56px; object-fit: contain;
    }
    .chapter-card .card-text {
      flex: 1;
      min-width: 0;
    }
    .chapter-card .chapter-label {
      font-size: 11px;
      font-weight: 600;
      color: #9ca3af;
      text-transform: uppercase;
      letter-spacing: 0.5px;
      margin: 0 0 3px 0;
    }
    .chapter-card .chapter-title {
      font-size: 13.5px;
      font-weight: 700;
      color: #1a3269;
      line-height: 1.35;
      margin: 0;
    }
    .chapter-card .arrow-icon {
      flex-shrink: 0;
      color: #9ca3af;
      transition: color 0.2s, transform 0.2s;
    }
    .chapter-card:hover .arrow-icon {
      color: #1a3269;
      transform: translateX(3px);
    }

    /* ── Scroll animations ── */
    .fade-in {
      opacity: 0; transform: translateY(20px);
      transition: opacity 0.5s cubic-bezier(.22,1,.36,1),
                  transform 0.5s cubic-bezier(.22,1,.36,1);
    }
    .fade-in.visible { opacity: 1; transform: translateY(0); }

    @media (max-width: 900px) {
      .chapters-grid { grid-template-columns: repeat(2, 1fr); }
    }
    @media (max-width: 560px) {
      .chapters-grid { grid-template-columns: 1fr; }
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
    <h1 class="hero-title text-[30px] font-bold text-white mb-2"
        style="text-shadow:0 2px 14px rgba(0,0,0,0.5);">
      <?= htmlspecialchars($page_title) ?>
    </h1>
    <p class="hero-title text-[14px] text-white"
       style="opacity:0.82;max-width:660px;line-height:1.65;transition-delay:0.05s;">
      <?= htmlspecialchars($page_description) ?>
    </p>
  </div>
</div>

<!-- ════ PSY BANNER ════ -->
<div class="psy-banner-section">
  <img src="Img/PSY/PSY Banner.png" alt="Philippine Statistical Yearbook Banner" class="psy-banner-img"/>
</div>

<!-- ════ MAIN CONTENT ════ -->
<div style="max-width:1180px;margin:0 auto;padding:36px 32px 60px;">

  <p class="section-heading fade-in">Chapters</p>

  <div class="chapters-grid">
    <?php foreach ($chapters as $i => $chapter): ?>
    <a href="<?= htmlspecialchars($chapter['href']) ?>" class="chapter-card fade-in"
       style="transition-delay: <?= ($i % 6) * 0.06 ?>s;">
      <div class="icon-wrap">
        <img src="<?= htmlspecialchars($chapter['icon']) ?>"
             alt="<?= htmlspecialchars($chapter['title']) ?>"
             onerror="this.onerror=null; this.src='<?= htmlspecialchars($chapter['icon_alt'] ?? $chapter['icon']) ?>'; this.onerror=function(){this.style.display='none';};"
        />
      </div>
      <div class="card-text">
        <p class="chapter-label">Chapter <?= $chapter['number'] ?></p>
        <p class="chapter-title"><?= htmlspecialchars(strtoupper($chapter['title'])) ?></p>
      </div>
      <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
           viewBox="0 0 24 24" fill="none" stroke="currentColor"
           stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"/>
      </svg>
    </a>
    <?php endforeach; ?>
  </div>

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
      { threshold: 0.06, rootMargin: '0px 0px -20px 0px' }
    );
    document.querySelectorAll('.fade-in').forEach((el) => observer.observe(el));
  })();

  // Fallback chain for icons that may have slightly different filenames
  (function () {
    const base = 'Img/PSY/Chapter 1 to 19 Logo/';
    const fallbacks = {
      'Economic-Accounts.png': [
        'Economic-Acounts.png',
        'Economic-Account.png',
        'Economic-Acou nts.png',
        'EconomicAccounts.png',
      ],
    };

    document.querySelectorAll('.chapter-card .icon-wrap img').forEach(function (img) {
      const filename = img.src.split('/').pop();
      if (!fallbacks[filename]) return;

      let attempts = fallbacks[filename].slice();
      img.onerror = function () {
        if (attempts.length === 0) { this.style.display = 'none'; return; }
        this.onerror = null;
        const next = attempts.shift();
        this.src = base + next;
        const remaining = attempts;
        this.onerror = function () {
          if (remaining.length === 0) { this.style.display = 'none'; return; }
          this.onerror = null;
          this.src = base + remaining.shift();
        };
      };
    });
  })();
</script>

</body>
</html>