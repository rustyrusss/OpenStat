<?php
/* ============================================================
   PAGE CONFIGURATION — Edit everything here
   ============================================================ */

$page_title       = 'Featured Content';
$page_description = '';
$hero_image       = 'Img/Background-Data.png';
$active_nav       = 'featured';

$breadcrumbs = [
  ['label' => 'Dashboard >', 'href' => 'dashboard.php'],
];

$nav_items = [
  ['label' => 'Home',       'href' => 'index.php',    'key' => 'home'],
  ['label' => 'About',      'href' => 'about.php',    'key' => 'about'],
  ['label' => 'Database',   'href' => 'database.php', 'key' => 'database'],
  ['label' => 'Dashboard',  'href' => 'dashboard.php','key' => 'dashboard'],
  ['label' => 'Featured',   'href' => 'featured.php', 'key' => 'featured'],
  ['label' => 'Contact Us', 'href' => 'contact.php',  'key' => 'contact'],
];

$featured_items = [
  [
    'title'       => 'National Database on Child Poverty',
    'image'       => 'Img/Featured Content/ndocp.png',
    'description' => 'The National Database on Child Poverty is the major output of the project "Updating of the National Database on Child Poverty" implemented by the Philippine Statistics Authority with support from the United Nations Children\'s Fund (UNICEF). The database serves as a one-stop shop web-based information system on child poverty indicators and other related information in the country.',
    'url'         => '#',
  ],
  [
    'title'       => 'CountrySTAT Philippines',
    'image'       => 'Img/Featured Content/countrySTAT.png',
    'description' => 'The CountrySTAT Philippines is a web-based system that integrates national food and agricultural statistical information to ensure harmonization of national data and metadata collections for analysis and policy making.',
    'url'         => '#',
  ],
  [
    'title'       => 'Decent Work Statistics – Philippines',
    'image'       => 'Img/Featured Content/dewscover.png',
    'description' => 'The DWSS Philippines (Decent Work Statistics Philippines) is a statistical activity envisioned to widen awareness on decent work among policymakers, unions, employers, and researchers, and to facilitate effective monitoring and assessment of progress toward decent work in the country.',
    'url'         => '#',
  ],
  [
    'title'       => 'Philippine Food Security Information System',
    'image'       => 'Img/Featured Content/PhilFSIS.png',
    'description' => 'The Philippine Food Security Information System (PHFSIS) is an information system containing relevant, organized, timely and accessible data related to food security.',
    'url'         => '#',
  ],
    [
    'title'       => 'Philippine Food Security Information System',
    'image'       => 'Img/Featured Content/PhilFSIS.png',
    'description' => 'The Philippine Food Security Information System (PHFSIS) is an information system containing relevant, organized, timely and accessible data related to food security.',
    'url'         => '#',
  ],
    [
    'title'       => 'Philippine Food Security Information System',
    'image'       => 'Img/Featured Content/PhilFSIS.png',
    'description' => 'The Philippine Food Security Information System (PHFSIS) is an information system containing relevant, organized, timely and accessible data related to food security.',
    'url'         => '#',
  ],
    [
    'title'       => 'Philippine Statistical Yearbook (PSY)',
    'image'       => 'Img/Featured Content/PSY.png',
    'description' => 'Contains a comprehensive compilation of major economic and social statistical information about the Philippines, its people and environment and selected countries of the world produced by various government agencies, international organizations, non-governmental organizations and some private institutions for planners, decision-makers, researchers and other users to guide them in the formulation of plans, programs and policies and analytical studies.',
    'url'         => '#',
  ],
];
/* ============================================================
   END CONFIGURATION
   ============================================================ */
$item_count = count($featured_items);
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
          colors: { primary: '#1a3269', 'primary-dark': '#142a56' },
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

    /* ══════════════════════════════════════════
       SECTION HEADER
    ══════════════════════════════════════════ */
    .section-header {
      background: #fff;
      padding: 30px 80px 0;
    }
    .section-header h2 {
      font-size: 22px; font-weight: 800; color: #1a3269;
      border-left: 4px solid #e02020; padding-left: 14px;
    }

    /* ══════════════════════════════════════════
       SLIDER OUTER WRAPPER
    ══════════════════════════════════════════ */
    .timeline-section {
      background: #fff;
      position: relative;
      padding: 32px 0 0;
    }

    /* Arrow buttons — vertically centred on the card area */
    .arrow-btn {
      position: absolute;
      top: 50%; transform: translateY(-50%);
      z-index: 30;
      width: 42px; height: 42px;
      background: #fff;
      border: 1.5px solid #d1d5db;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      cursor: pointer;
      box-shadow: 0 2px 8px rgba(0,0,0,0.10);
      transition: background 0.18s, border-color 0.18s, box-shadow 0.18s;
    }
    .arrow-btn:hover {
      background: #1a3269; border-color: #1a3269;
    }
    .arrow-btn:hover svg path { stroke: #fff; }
    .arrow-btn.left  { left: 12px; }
    .arrow-btn.right { right: 12px; }

    /* ── Slider inner wrapper adds horizontal breathing room ── */
    .slider-inner {
      margin: 0 64px;   /* keeps content away from the arrow buttons */
    }

    /* ── Viewport clips the track ── */
    .slider-viewport {
      overflow: hidden;
      width: 100%;
    }

    /* ── Track: all slides side by side ── */
    .slider-track {
      display: flex;
      will-change: transform;
    }

    /* ── Each slide ── */
    .slide-col {
      flex-shrink: 0;
      padding: 0 20px 36px;
      box-sizing: border-box;
      border-right: 1px solid #e5e7eb;
      display: flex;
      flex-direction: column;
    }
    .slide-col:last-child { border-right: none; }

    .col-title-wrap {
      min-height: unset;
      display: flex;
      align-items: flex-start;
      margin-bottom: 4px;
    }
    .col-title {
      font-size: 15px; font-weight: 800; color: #1a3269;
      line-height: 1.4;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      user-select: text;
    }

    /* Red divider */
    .col-divider {
      width: 100%; height: 3px;
      background: linear-gradient(90deg, #e02020 0%, #ff4444 60%, transparent 100%);
      border-radius: 2px;
      margin-bottom: 14px;
      flex-shrink: 0;
    }

    .col-desc {
      font-size: 12.5px; color: #374151;
      line-height: 1.75; text-align: justify;
      margin-bottom: 14px;
      flex-shrink: 0;
      user-select: text;
    }

    .col-thumb {
      width: 100%; aspect-ratio: 16/10;
      object-fit: cover; border-radius: 6px;
      border: 1px solid #e5e7eb;
      flex-shrink: 0;
    }

    .col-link {
      display: inline-flex; align-items: center; gap: 6px;
      margin-top: 13px;
      font-size: 12px; font-weight: 700; color: #1a3269;
      border: 1.5px solid #1a3269; border-radius: 5px;
      padding: 7px 14px; text-decoration: none;
      transition: background 0.15s, color 0.15s;
      align-self: flex-start;
    }
    .col-link:hover { background: #1a3269; color: #fff; }
    .col-link svg { transition: transform 0.15s; }
    .col-link:hover svg { transform: translateX(3px); }

    /* ── Dots + progress bar ── */
    .dots-row {
      background: #fff;
      display: flex; justify-content: center; align-items: center;
      gap: 8px;
      padding: 16px 0 28px;
    }
    .dot {
      width: 9px; height: 9px; border-radius: 50%;
      background: #cbd5e1; cursor: pointer;
      transition: background 0.2s, transform 0.2s;
    }
    .dot.active { background: #e02020; transform: scale(1.3); }

    .progress-bar-wrap {
      height: 3px;
      background: #e5e7eb;
      margin-top: 18px;
    }
    .progress-bar-fill {
      height: 100%; background: #1a3269;
      width: 0%;
      transition: width linear;
    }

    .fade-in { opacity: 0; transform: translateY(22px);
      transition: opacity 0.55s cubic-bezier(.22,1,.36,1), transform 0.55s cubic-bezier(.22,1,.36,1); }
    .fade-in.visible { opacity: 1; transform: translateY(0); }
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
       style="opacity:0.82;max-width:500px;line-height:1.65;transition-delay:0.05s;">
      <?= htmlspecialchars($page_description) ?>
    </p>
  </div>
</div>

<!-- ════ FEATURED SLIDER ════ -->
<div class="section-header fade-in">
  <h2>Featured Content</h2>
  <div class="progress-bar-wrap">
    <div class="progress-bar-fill" id="progressFill"></div>
  </div>
</div>

<div class="timeline-section fade-in" id="timelineSection">

  <button class="arrow-btn left" id="arrowLeft" aria-label="Previous">
    <svg width="16" height="16" viewBox="0 0 18 18" fill="none">
      <path d="M11 14L6 9L11 4" stroke="#1a3269" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </button>

  <!-- Inner wrapper provides left/right margin so cards don't touch arrow buttons -->
  <div class="slider-inner">
    <div class="slider-viewport" id="sliderViewport">
      <div class="slider-track" id="sliderTrack">
        <?php foreach ($featured_items as $item): ?>
        <div class="slide-col" data-item="true">
          <div class="col-title-wrap">
            <div class="col-title"><?= htmlspecialchars($item['title']) ?></div>
          </div>
          <div class="col-divider"></div>
          <p class="col-desc"><?= htmlspecialchars($item['description']) ?></p>
          <img src="<?= htmlspecialchars($item['image']) ?>"
               alt="<?= htmlspecialchars($item['title']) ?>"
               class="col-thumb"/>
          <a href="<?= htmlspecialchars($item['url']) ?>"
             target="_blank" rel="noopener" class="col-link">
            View webpage
            <svg width="13" height="13" viewBox="0 0 14 14" fill="none">
              <path d="M2 7H12M12 7L7.5 2.5M12 7L7.5 11.5"
                    stroke="currentColor" stroke-width="1.8"
                    stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <button class="arrow-btn right" id="arrowRight" aria-label="Next">
    <svg width="16" height="16" viewBox="0 0 18 18" fill="none">
      <path d="M7 4L12 9L7 14" stroke="#1a3269" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
  </button>
</div>

<!-- Dots -->
<div class="dots-row" id="dotsRow">
  <?php for ($i = 0; $i < $item_count; $i++): ?>
  <div class="dot <?= $i === 0 ? 'active' : '' ?>" data-dot="<?= $i ?>"></div>
  <?php endfor; ?>
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

<script>
(function () {
  const VISIBLE  = 4;       // columns visible at once
  const AUTO_MS  = 10000;   // autoplay interval — 10 seconds
  const TRANS_MS = 550;     // slide transition ms

  const viewport = document.getElementById('sliderViewport');
  const track    = document.getElementById('sliderTrack');
  const dotsAll  = Array.from(document.querySelectorAll('.dot'));
  const btnL     = document.getElementById('arrowLeft');
  const btnR     = document.getElementById('arrowRight');
  const progFill = document.getElementById('progressFill');

  // ── Clone items for infinite loop ──
  const origCols = Array.from(track.querySelectorAll('.slide-col'));
  const N        = origCols.length;

  origCols.forEach(c => track.appendChild(c.cloneNode(true)));
  origCols.slice().reverse().forEach(c =>
    track.insertBefore(c.cloneNode(true), track.firstChild)
  );

  let rawPos   = N;
  let current  = 0;
  let isMoving = false;

  function colW() { return viewport.offsetWidth / VISIBLE; }

  function setColWidths() {
    const w = colW();
    Array.from(track.querySelectorAll('.slide-col'))
      .forEach(c => { c.style.width = w + 'px'; });
  }

  function applyTranslate(animate) {
    track.style.transition = animate
      ? `transform ${TRANS_MS}ms cubic-bezier(.42,0,.18,1)`
      : 'none';
    track.style.transform = `translateX(-${rawPos * colW()}px)`;
  }

  setColWidths();
  applyTranslate(false);
  window.addEventListener('resize', () => { setColWidths(); applyTranslate(false); });

  function updateDots(idx) {
    dotsAll.forEach((d, i) => d.classList.toggle('active', i === idx));
  }

  // ── Progress bar ──
  function startProgress() {
    progFill.style.transition = 'none';
    progFill.style.width = '0%';
    void progFill.offsetWidth;
    progFill.style.transition = `width ${AUTO_MS}ms linear`;
    progFill.style.width = '100%';
  }
  function stopProgress() {
    progFill.style.transition = 'none';
    progFill.style.width = '0%';
  }

  // ── Autoplay ──
  let autoTimer = null;
  function startAuto() {
    clearTimeout(autoTimer);
    startProgress();
    autoTimer = setTimeout(() => navigate(+1), AUTO_MS);
  }
  function stopAuto() {
    clearTimeout(autoTimer);
    stopProgress();
  }

  // ── Core navigation ──
  function navigate(direction) {
    if (isMoving) return;
    isMoving = true;
    stopAuto();

    rawPos  += direction;
    current  = ((current + direction) % N + N) % N;

    updateDots(current);
    applyTranslate(true);

    setTimeout(() => {
      if (rawPos >= 2 * N) rawPos -= N;
      if (rawPos < N)      rawPos += N;
      applyTranslate(false);
      isMoving = false;
      startAuto();
    }, TRANS_MS + 30);
  }

  function navigateToDot(target) {
    if (target === current || isMoving) return;
    isMoving = true;
    stopAuto();

    const fwd = ((target - current) % N + N) % N;
    rawPos  += fwd;
    current  = target;

    updateDots(current);
    applyTranslate(true);

    setTimeout(() => {
      if (rawPos >= 2 * N) rawPos -= N;
      if (rawPos < N)      rawPos += N;
      applyTranslate(false);
      isMoving = false;
      startAuto();
    }, TRANS_MS + 30);
  }

  btnL.addEventListener('click', () => navigate(-1));
  btnR.addEventListener('click', () => navigate(+1));
  dotsAll.forEach(d => d.addEventListener('click', () => navigateToDot(+d.dataset.dot)));

  document.addEventListener('keydown', e => {
    if (e.key === 'ArrowLeft')  navigate(-1);
    if (e.key === 'ArrowRight') navigate(+1);
  });

  let touchX = null;
  viewport.addEventListener('touchstart', e => { touchX = e.touches[0].clientX; }, { passive: true });
  viewport.addEventListener('touchend', e => {
    if (touchX === null) return;
    const dx = e.changedTouches[0].clientX - touchX;
    if (Math.abs(dx) > 50) navigate(dx < 0 ? +1 : -1);
    touchX = null;
  });

  document.getElementById('timelineSection').addEventListener('mouseenter', stopAuto);
  document.getElementById('timelineSection').addEventListener('mouseleave', startAuto);

  updateDots(0);
  startAuto();

  // ── Scroll reveal ──
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) { entry.target.classList.add('visible'); observer.unobserve(entry.target); }
    });
  }, { threshold: 0.08 });
  document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
})();
</script>
</body>
</html>