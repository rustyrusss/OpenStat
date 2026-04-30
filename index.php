<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>PSA OpenSTAT - Home</title>
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
            'hero-base': '#06124a',
            'footer-bg': '#1f2937',
          },
          fontFamily: {
            sans: ['Open Sans', 'sans-serif'],
          },
          boxShadow: {
            card: '0 2px 12px rgba(0,0,0,0.08)',
            'card-hover': '0 16px 40px rgba(0,0,0,0.16)',
            'search-bar': '0 4px 24px rgba(0,0,0,0.35)',
          },
          keyframes: {
            slideDown: {
              from: { transform: 'translateY(-100%)', opacity: '0' },
              to:   { transform: 'translateY(0)',     opacity: '1' },
            },
            heroFadeIn: {
              from: { opacity: '0', transform: 'translateY(-14px)' },
              to:   { opacity: '1', transform: 'translateY(0)' },
            },
            fadeUp: {
              from: { opacity: '0', transform: 'translateY(30px)' },
              to:   { opacity: '1', transform: 'translateY(0)' },
            },
            fadeIn: {
              from: { opacity: '0' },
              to:   { opacity: '1' },
            },
          },
          animation: {
            slideDown:   'slideDown 0.5s cubic-bezier(.22,1,.36,1) both',
            heroFadeIn1: 'heroFadeIn 0.8s 0.2s cubic-bezier(.22,1,.36,1) both',
            heroFadeIn2: 'heroFadeIn 0.8s 0.35s cubic-bezier(.22,1,.36,1) both',
            heroFadeIn3: 'heroFadeIn 0.8s 0.50s cubic-bezier(.22,1,.36,1) both',
            fadeUp:      'fadeUp 0.65s cubic-bezier(.22,1,.36,1) both',
          },
        }
      }
    }
  </script>
  <style>
    *, *::before, *::after { box-sizing: border-box; }
    body { font-family: 'Open Sans', sans-serif; background: #e8e8e8; overflow-x: hidden; }
    html { scroll-behavior: smooth; }

    /* ── Navbar ── */
    .navbar { animation: slideDown 0.5s cubic-bezier(.22,1,.36,1) both; }
    @keyframes slideDown {
      from { transform: translateY(-100%); opacity: 0; }
      to   { transform: translateY(0);     opacity: 1; }
    }

    /* ── Hero animations ── */
    .hero-title  { animation: heroFadeIn 0.8s 0.20s cubic-bezier(.22,1,.36,1) both; }
    .hero-desc   { animation: heroFadeIn 0.8s 0.35s cubic-bezier(.22,1,.36,1) both; }
    @keyframes heroFadeIn {
      from { opacity: 0; transform: translateY(-14px); }
      to   { opacity: 1; transform: translateY(0); }
    }

    /* ── Card + item animations ── */
    .animate-card  { opacity: 0; animation: fadeUp 0.65s cubic-bezier(.22,1,.36,1) forwards; animation-play-state: paused; }
    .stat-item     { opacity: 0; animation: fadeIn 0.4s cubic-bezier(.22,1,.36,1) forwards;  animation-play-state: paused; }
    .featured-card { opacity: 0; animation: fadeUp 0.55s cubic-bezier(.22,1,.36,1) forwards; animation-play-state: paused; }
    @keyframes fadeUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
    @keyframes fadeIn { from { opacity: 0; }                              to { opacity: 1; } }

    /* ── Nav links ── */
    .nav-blue-link {
      display: inline-block;
      color: #ffffff;
      font-size: 15px;
      font-weight: 600;
      text-decoration: none;
      padding: 13px 30px;
      transition: background 0.15s;
      white-space: nowrap;
      letter-spacing: 0.3px;
    }
    .nav-blue-link:hover      { background: rgba(255,255,255,0.12); }
    .nav-blue-link.active-nav { background: rgba(255,255,255,0.18); font-weight: 700; }

    /* ── Mobile hamburger — hidden on desktop ── */
    #hamburgerBtn { display: none; }
    #mobileMenu   { display: none; flex-direction: column; background: #142a56; }
    #mobileMenu.open { display: flex; }
    #mobileMenu a {
      padding: 14px 20px;
      border-bottom: 1px solid rgba(255,255,255,0.08);
      font-size: 14px; font-weight: 600;
      color: #fff; text-decoration: none;
    }
    #mobileMenu a:hover, #mobileMenu a.active-nav { background: rgba(255,255,255,0.15); }

    /* ── Stat item hover ── */
    .stat-item {
      position: relative;
      transition: transform 0.2s cubic-bezier(.4,0,.2,1), background 0.2s;
      border-radius: 10px;
      text-decoration: none;
    }
    .stat-item:hover { background: #eff6ff; transform: translateX(4px); }
    .stat-item:hover .stat-label { color: #1a3269; }
    .stat-item:hover .row-icon img { transform: scale(1.08); }
    .row-icon img { transition: transform 0.2s cubic-bezier(.4,0,.2,1); }

    .cat-header-icon {
      width: 64px; height: 64px;
      border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      flex-shrink: 0;
      box-shadow: 0 4px 14px rgba(26,50,105,0.28);
      background-color: #142a56;
      overflow: hidden;
    }
    .cat-header-icon img { width: 74px; height: 74px; object-fit: contain; }

    /* ── Featured card ── */
    .featured-card { transition: box-shadow 0.28s cubic-bezier(.22,1,.36,1), transform 0.28s cubic-bezier(.22,1,.36,1); }
    .featured-card:hover { box-shadow: 0 16px 40px rgba(0,0,0,0.16); transform: translateY(-5px); }
    .featured-card-img   { transition: transform 0.50s cubic-bezier(.22,1,.36,1); }
    .featured-card:hover .featured-card-img { transform: scale(1.06); }

    /* ── Search bar focus ── */
    .search-bar { transition: box-shadow 0.28s, transform 0.28s; }
    .search-bar:focus-within { box-shadow: 0 10px 40px rgba(0,0,0,0.28); transform: translateY(-2px); }

    /* ── Stat card (category panels) ── */
    .stat-card { transition: box-shadow 0.28s cubic-bezier(.22,1,.36,1), transform 0.28s cubic-bezier(.22,1,.36,1); }
    .stat-card:hover { box-shadow: 0 16px 40px rgba(0,0,0,0.16); transform: translateY(-4px); }

    /* ══ SLIDER BUTTONS ══ */
    .slider-btn {
      background: #ffffff;
      border: none;
      cursor: pointer;
      border-radius: 6px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.18);
      transition: background 0.18s, box-shadow 0.18s;
    }
    .slider-btn:hover { background: #1a3269; box-shadow: 0 4px 14px rgba(26,50,105,0.35); }
    .slider-btn svg   { display: block; transition: stroke 0.18s; }
    .slider-btn:hover svg { stroke: #ffffff !important; }

    /* ══ DATASET CARDS ══ */
    .dataset-slide {
      cursor: pointer;
      transition: box-shadow 0.25s cubic-bezier(.22,1,.36,1), background 0.25s;
      will-change: transform;
    }
    .dataset-slide-inner { transition: transform 0.25s cubic-bezier(.22,1,.36,1); }
    .dataset-slide:hover .dataset-slide-inner { transform: translateY(-6px); }
    .dataset-slide:hover {
      box-shadow: 0 14px 36px rgba(26,50,105,0.20);
      background: #eff6ff !important;
    }

    /* Drag cursor */
    #sliderViewport             { cursor: grab; user-select: none; }
    #sliderViewport.is-dragging { cursor: grabbing; }
    #sliderViewport.is-dragging .dataset-slide:hover { box-shadow: 0 2px 12px rgba(0,0,0,0.08); background: inherit !important; }
    #sliderViewport.is-dragging .dataset-slide:hover .dataset-slide-inner { transform: none; }

    /* ══ BACKDROP ══ */
    .backdrop-white-bg { position: relative; }
    .backdrop-white-bg::before {
      content: '';
      position: absolute; inset: 0;
      background-image: url('Img/Backdrop-White.png');
      background-repeat: repeat;
      background-size: auto;
      background-position: center top;
      opacity: 0.18;
      pointer-events: none;
      z-index: 0;
    }
    .backdrop-white-bg > * { position: relative; z-index: 1; }

    /* ── Dropdown ── */
    .dropdown-menu { overflow: hidden; transition: max-height 0.35s cubic-bezier(.22,1,.36,1); }

    /* ═══════════════════════════════════════════════════
       RESPONSIVE OVERRIDES
       Desktop (> 1024px) = original, unchanged
       ═══════════════════════════════════════════════════ */

    /* Tablet: ≤ 1024px */
    @media (max-width: 1024px) {
      .nav-blue-link { padding: 12px 16px; font-size: 14px; }
      .cat-grid { grid-template-columns: repeat(2, 1fr) !important; }
      .cat-header-icon { width: 54px; height: 54px; }
      .cat-header-icon img { width: 62px; height: 62px; }
      .sec-wrap { padding-left: 20px !important; padding-right: 20px !important; }
    }

    /* Mobile: ≤ 768px — hamburger replaces nav, single col */
    @media (max-width: 768px) {
      /* Nav */
      #desktopNav   { display: none !important; }
      #hamburgerBtn { display: flex !important; }
      /* Header bar */
      .header-bar   { min-height: 64px !important; padding-left: 16px !important; padding-right: 16px !important; }
      .logo-psa     { height: 54px !important; }
      .logo-openstat-wrap { margin-right: 8px !important; }
      .logo-openstat { height: 54px !important; }
      /* Hero */
      .hero-title   { font-size: 22px !important; }
      .hero-desc    { font-size: 13px !important; }
      /* Sections */
      .sec-wrap     { padding-left: 14px !important; padding-right: 14px !important; }
      /* Grid → single col */
      .cat-grid     { grid-template-columns: 1fr !important; }
      .feat-grid    { grid-template-columns: 1fr !important; }
      /* Slider arrows stay, just tighter */
      .slider-outer { padding-left: 24px !important; padding-right: 24px !important; }
      /* Search full width */
      .search-bar   { max-width: 100% !important; }
      /* Footer stack */
      footer        { flex-direction: column; text-align: center; }
    }

    /* Small phones: ≤ 480px */
    @media (max-width: 480px) {
      .hero-title { font-size: 18px !important; }
      .hero-desc  { font-size: 12px !important; line-height: 1.75 !important; }
      .cat-header-icon { width: 48px; height: 48px; }
      .cat-header-icon img { width: 56px; height: 56px; }
    }
  </style>
</head>
<body>

<!-- ══════════════════ NAVBAR ══════════════════ -->
<header class="navbar sticky top-0 z-50" style="box-shadow: 0 2px 8px rgba(0,0,0,0.35);">

  <!-- Top bar — identical to original on desktop -->
  <div class="header-bar bg-primary flex items-center justify-between px-12" style="min-height: 88px; padding-top: 8px; padding-bottom: 8px;">
    <div class="flex items-center gap-4">
      <img class="logo-psa" src="Img/Logos/PSAHeader.png" alt="Philippine Statistics Authority"
           style="height: 88px; width: auto; object-fit: contain;"/>
    </div>
    <div class="flex items-center gap-3">
      <div class="logo-openstat-wrap flex flex-col items-center justify-center gap-1" style="margin-right: 60px;">
        <img class="logo-openstat" src="Img/Logos/OpenStat-White.png" alt="OpenSTAT"
             style="height: 90px; width: auto; object-fit: contain;"/>
      </div>
      <!-- Hamburger — CSS hides this on desktop -->
      <button id="hamburgerBtn"
              class="items-center justify-center w-10 h-10 rounded-lg text-white hover:bg-white/20 transition-colors"
              onclick="document.getElementById('mobileMenu').classList.toggle('open')"
              aria-label="Toggle navigation">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" stroke-width="2.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
      </button>
    </div>
  </div>

  <!-- Desktop nav — unchanged from original -->
  <nav id="desktopNav" class="flex items-center justify-center" style="background: #142a56; gap: 0;">
    <a href="index.php"     class="nav-blue-link active-nav">Home</a>
    <a href="about.php"     class="nav-blue-link">About</a>
    <a href="database.php"  class="nav-blue-link">Database</a>
    <a href="dashboard.php" class="nav-blue-link">Dashboard</a>
    <a href="featured.php"  class="nav-blue-link">Featured</a>
    <a href="contact.php"   class="nav-blue-link">Contact Us</a>
  </nav>

  <!-- Mobile nav drawer (CSS hidden by default) -->
  <div id="mobileMenu">
    <a href="index.php"     class="active-nav">Home</a>
    <a href="about.php">About</a>
    <a href="database.php">Database</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="featured.php">Featured</a>
    <a href="contact.php">Contact Us</a>
  </div>

</header>

<!-- ══════════════════ HERO ══════════════════ -->
<div class="relative" style="min-height: 320px;">
  <img src="Img/Backdrop.png" alt=""
       style="position:absolute; inset:0; width:100%; height:100%; object-fit:cover; object-position:center top; z-index:0;"/>
  <div style="position:absolute; inset:0; background: rgba(4,17,61,0.62); z-index:1;"></div>
  <div class="relative z-10 flex items-center justify-center text-center text-white px-6 py-16">
    <div>
      <h1 class="hero-title text-[32px] font-bold mb-5 tracking-tight" style="text-shadow: 0 2px 18px rgba(0,0,0,0.55);">
        Welcome to PSA OpenSTAT Website
      </h1>
      <p class="hero-desc text-[15px] leading-loose text-white max-w-[760px] mx-auto" style="text-shadow: 0 1px 8px rgba(0,0,0,0.40);">
        OpenSTAT is an open data platform powered by PC-Axis, a user-friendly application<br class="hidden md:block"/>
        for presenting statistical data and metadata coupled with API and visualization features.<br class="hidden md:block"/>
        This system allows the PSA to share data under an open data license where data can be freely used,
        re-used and redistributed by anyone without any restrictions other than proper source attribution.
      </p>
    </div>
  </div>
</div>

<!-- ══════════════════ LATEST DATASETS (Slider) ══════════════════ -->
<div class="backdrop-white-bg">
  <div class="sec-wrap max-w-[1200px] mx-auto px-10 pt-10 pb-4">

    <h2 class="text-[22px] font-bold text-gray-800 mb-6">Latest Datasets and Updates</h2>

    <div class="slider-outer relative" style="padding: 0 28px;">

      <button id="sliderPrev"
              class="slider-btn absolute left-[-20px] top-1/2 -translate-y-1/2 z-10 w-10 h-10 flex items-center justify-center"
              style="left: 0;">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24"
             stroke="#1a3269" stroke-width="2.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
        </svg>
      </button>

      <div class="overflow-hidden" id="sliderViewport">
        <div class="flex transition-transform duration-500 ease-[cubic-bezier(.22,1,.36,1)]"
             id="sliderTrack" style="gap: 20px;">

          <!-- Population -->
          <div class="dataset-slide flex-shrink-0 rounded-2xl" style="background:#ffffff; box-shadow: 0 2px 12px rgba(0,0,0,0.08);">
            <div class="dataset-slide-inner p-5 flex flex-col h-full rounded-2xl">
              <div class="text-[12px] text-gray-500 font-semibold mb-3">Population</div>
              <div class="flex items-center justify-center mb-4" style="height:110px;">
                <img src="Img/Datasets Img/Population.png" alt="Population" style="max-height:110px; width:auto; object-fit:contain;"/>
              </div>
              <div class="text-[28px] font-bold text-gray-900 leading-tight">338.7M</div>
              <div class="text-[13px] text-gray-700 font-semibold mt-1">Population</div>
              <div class="text-[12px] text-gray-400 mt-0.5">in April 2026</div>
            </div>
          </div>

          <!-- Education -->
          <div class="dataset-slide flex-shrink-0 rounded-2xl" style="background:#ffffff; box-shadow: 0 2px 12px rgba(0,0,0,0.08);">
            <div class="dataset-slide-inner p-5 flex flex-col h-full rounded-2xl">
              <div class="text-[12px] text-gray-500 font-semibold mb-3">Education</div>
              <div class="flex items-center justify-center mb-4" style="height:110px;">
                <img src="Img/Datasets Img/Education.png" alt="Education" style="max-height:110px; width:auto; object-fit:contain;"/>
              </div>
              <div class="text-[28px] font-bold text-gray-900 leading-tight">92.4%</div>
              <div class="text-[13px] text-gray-700 font-semibold mt-1">High School Graduation Rate</div>
              <div class="text-[12px] text-gray-400 mt-0.5">In 2025</div>
            </div>
          </div>

          <!-- Energy (highlighted) -->
          <div class="dataset-slide flex-shrink-0 rounded-2xl" style="background:#dbeafe; box-shadow: 0 2px 12px rgba(0,0,0,0.08);">
            <div class="dataset-slide-inner p-5 flex flex-col h-full rounded-2xl">
              <div class="text-[12px] text-gray-500 font-semibold mb-3">Energy</div>
              <div class="flex items-center justify-center mb-4" style="height:110px;">
                <img src="Img/Datasets Img/Renewable Energy.png" alt="Energy" style="max-height:110px; width:auto; object-fit:contain;"/>
              </div>
              <div class="text-[28px] font-bold text-gray-900 leading-tight">18.7%</div>
              <div class="text-[13px] text-gray-700 font-semibold mt-1">Renewable Energy Share</div>
              <div class="text-[12px] text-gray-400 mt-0.5">in February 2024</div>
            </div>
          </div>

          <!-- Labor -->
          <div class="dataset-slide flex-shrink-0 rounded-2xl" style="background:#ffffff; box-shadow: 0 2px 12px rgba(0,0,0,0.08);">
            <div class="dataset-slide-inner p-5 flex flex-col h-full rounded-2xl">
              <div class="text-[12px] text-gray-500 font-semibold mb-3">Labor</div>
              <div class="flex items-center justify-center mb-4" style="height:110px;">
                <img src="Img/Datasets Img/Labor.png" alt="Labor" style="max-height:110px; width:auto; object-fit:contain;"/>
              </div>
              <div class="text-[28px] font-bold text-gray-900 leading-tight">94.9%</div>
              <div class="text-[13px] text-gray-700 font-semibold mt-1">Employment Rate</div>
              <div class="text-[12px] text-gray-400 mt-0.5">in February 2026</div>
            </div>
          </div>

          <!-- Trade -->
          <div class="dataset-slide flex-shrink-0 rounded-2xl" style="background:#ffffff; box-shadow: 0 2px 12px rgba(0,0,0,0.08);">
            <div class="dataset-slide-inner p-5 flex flex-col h-full rounded-2xl">
              <div class="text-[12px] text-gray-500 font-semibold mb-3">Trade</div>
              <div class="flex items-center justify-center mb-4" style="height:110px;">
                <img src="Img/Datasets Img/Trade.png" alt="Trade" style="max-height:110px; width:auto; object-fit:contain;"/>
              </div>
              <div class="flex flex-col gap-2 mt-1">
                <div class="flex items-center justify-between">
                  <span class="text-[13px] text-gray-700 font-semibold">Exports</span>
                  <span class="text-[13px] font-bold text-gray-900">$7.33B</span>
                </div>
                <div class="flex items-center justify-between">
                  <span class="text-[13px] text-gray-700 font-semibold">Imports</span>
                  <span class="text-[13px] font-bold text-gray-900">$11.01B</span>
                </div>
                <div class="flex items-center justify-between">
                  <span class="text-[13px] text-gray-700 font-semibold">Balance of Trade</span>
                  <span class="text-[13px] font-bold" style="color:#dc2626;">-$3.68B</span>
                </div>
              </div>
              <div class="text-[11px] text-gray-400 mt-2">FOB Value (in billions) in February 2026</div>
            </div>
          </div>

        </div>
      </div>

      <button id="sliderNext"
              class="slider-btn absolute right-[-20px] top-1/2 -translate-y-1/2 z-10 w-10 h-10 flex items-center justify-center"
              style="right: 0;">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24"
             stroke="#1a3269" stroke-width="2.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
        </svg>
      </button>

    </div>

    <div class="flex items-center justify-center gap-2 mt-5" id="sliderDots"></div>

    <!-- SEARCH BAR — original unchanged -->
    <div class="mt-8 mb-8 flex justify-center">
      <div class="search-bar flex w-full max-w-[680px] rounded-[6px] overflow-hidden"
           style="box-shadow: 0 4px 24px rgba(0,0,0,0.18);">
        <div class="bg-white flex items-center px-4">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24"
               stroke="#9ca3af" stroke-width="2.5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35M17 11A6 6 0 1 1 5 11a6 6 0 0 1 12 0z"/>
          </svg>
        </div>
        <input type="text" placeholder="Search for statistics"
               class="flex-1 px-2 py-4 text-[15px] text-gray-700 bg-white border-none outline-none min-w-0"/>
        <button class="bg-primary hover:bg-primary-dark text-white px-10 py-4 text-[15px] font-semibold transition-colors duration-150 whitespace-nowrap">
          Search
        </button>
      </div>
    </div>

  </div>
</div>


<!-- ══════════════════ CONTENT ══════════════════ -->
<div class="backdrop-white-bg bg-[#e8e8e8]">
  <div class="sec-wrap max-w-[1100px] mx-auto px-10 pb-16 pt-6">

    <!-- Three-column category grid — original on desktop -->
    <div class="cat-grid grid mb-6" style="grid-template-columns: repeat(3, 1fr); gap: 24px;">

      <!-- SOCIAL STATISTICS -->
      <div class="stat-card animate-card bg-white rounded-2xl" style="box-shadow: 0 2px 16px rgba(0,0,0,0.09); border: 1px solid #e5e7eb; animation-delay:0.12s;">
        <div class="p-7">
          <div class="flex items-center gap-4 mb-7">
            <div class="cat-header-icon">
              <img src="Img/Icons/Social Statistics/Population-Icon.png" alt=""/>
            </div>
            <h2 class="text-[19px] font-bold text-primary leading-tight">Social Statistics</h2>
          </div>
          <div class="flex flex-col gap-1">

            <a href="pop-sub.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.08s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Social Statistics/Pop-Vit.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Population and Vital Statistics</span>
            </a>

            <div class="stat-dropdown" style="animation-delay:0.11s;">
              <button onclick="toggleDropdown('education-dropdown', this)"
                      class="stat-item w-full flex items-center gap-4 px-3 py-3 no-underline text-left bg-transparent border-none cursor-pointer"
                      style="border-radius:10px;">
                <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                  <img src="Img/Icons/Social Statistics/Education.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
                </div>
                <span class="stat-label text-[14px] font-bold text-gray-800 flex items-center gap-2">
                  Education
                  <svg class="dropdown-chevron transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="none" viewBox="0 0 24 24" stroke="#6b7280" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                  </svg>
                </span>
              </button>
              <div id="education-dropdown" class="dropdown-menu" style="max-height:0;">
                <div class="flex flex-col gap-0 pl-[68px] pb-1">
                  <a href="education-facilities.php" class="text-[13px] font-semibold text-gray-600 hover:text-primary px-3 py-2.5 rounded-lg hover:bg-primary-light transition-colors duration-150 no-underline flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#1a3269" viewBox="0 0 6 6"><circle cx="3" cy="3" r="3"/></svg>
                    Education Facilities
                  </a>
                  <a href="education-outcomes.php" class="text-[13px] font-semibold text-gray-600 hover:text-primary px-3 py-2.5 rounded-lg hover:bg-primary-light transition-colors duration-150 no-underline flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#1a3269" viewBox="0 0 6 6"><circle cx="3" cy="3" r="3"/></svg>
                    Education Outcomes
                  </a>
                </div>
              </div>
            </div>

            <div class="stat-dropdown" style="animation-delay:0.14s;">
              <button onclick="toggleDropdown('health-dropdown', this)"
                      class="stat-item w-full flex items-center gap-4 px-3 py-3 no-underline text-left bg-transparent border-none cursor-pointer"
                      style="border-radius:10px;">
                <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                  <img src="Img/Icons/Social Statistics/Health.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
                </div>
                <span class="stat-label text-[14px] font-bold text-gray-800 flex items-center gap-2">
                  Health
                  <svg class="dropdown-chevron transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="none" viewBox="0 0 24 24" stroke="#6b7280" stroke-width="2.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                  </svg>
                </span>
              </button>
              <div id="health-dropdown" class="dropdown-menu" style="max-height:0;">
                <div class="flex flex-col gap-0 pl-[68px] pb-1">
                  <a href="health-facilities.php" class="text-[13px] font-semibold text-gray-600 hover:text-primary px-3 py-2.5 rounded-lg hover:bg-primary-light transition-colors duration-150 no-underline flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#1a3269" viewBox="0 0 6 6"><circle cx="3" cy="3" r="3"/></svg>
                    Health Facilities
                  </a>
                  <a href="health-outcomes.php" class="text-[13px] font-semibold text-gray-600 hover:text-primary px-3 py-2.5 rounded-lg hover:bg-primary-light transition-colors duration-150 no-underline flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="6" height="6" fill="#1a3269" viewBox="0 0 6 6"><circle cx="3" cy="3" r="3"/></svg>
                    Health Outcomes
                  </a>
                </div>
              </div>
            </div>

            <a href="migration.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.17s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Social Statistics/Gender Statistics.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Migration</span>
            </a>

            <a href="reproductive-health.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.20s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Social Statistics/Reproductive Health.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Reproductive Health</span>
            </a>

            <a href="food-security.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.23s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Social Statistics/Food Security and Nutritions.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Food Security and Nutrition</span>
            </a>

            <a href="gender-statistics.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.26s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Social Statistics/Gender Statistics.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Gender Statistics</span>
            </a>

            <a href="crime-justice.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.29s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Social Statistics/Crime and Justice Statistics.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Crime and Justice Statistics</span>
            </a>

            <a href="poverty-income.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.32s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Social Statistics/Poverty and Income Statistics.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Poverty and Income Statistics</span>
            </a>

          </div>
        </div>
      </div>

      <!-- ECONOMIC AND FINANCIAL STATISTICS -->
      <div class="stat-card animate-card bg-white rounded-2xl" style="box-shadow: 0 2px 16px rgba(0,0,0,0.09); border: 1px solid #e5e7eb; animation-delay:0.16s;">
        <div class="p-7">
          <div class="flex items-center gap-4 mb-7">
            <div class="cat-header-icon">
              <img src="Img/Icons/Economic and Financial Statistics/Economic-Statistics.png" alt=""/>
            </div>
            <h2 class="text-[19px] font-bold text-primary leading-tight">Economic and Financial Statistics</h2>
          </div>
          <div class="flex flex-col gap-1">
            <a href="national-accounts.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.10s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Economic and Financial Statistics/National Accounts.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">National Accounts</span>
            </a>
            <a href="labor-statistics.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.13s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Economic and Financial Statistics/Labor Statistics.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Labor Statistics</span>
            </a>
            <a href="price-indexes.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.16s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Economic and Financial Statistics/Price Indexes.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Price Indexes</span>
            </a>
            <a href="government-finance.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.19s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Economic and Financial Statistics/Government Finance.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Government Finance</span>
            </a>
            <a href="money-banking.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.22s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Economic and Financial Statistics/Money and Banking.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Money and Banking</span>
            </a>
            <a href="international-trade.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.25s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Economic and Financial Statistics/International Trade.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">International Trade</span>
            </a>
            <a href="balance-payments.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.28s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Economic and Financial Statistics/Balance of Payments.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Balance of Payments</span>
            </a>
          </div>
        </div>
      </div>

      <!-- ENVIRONMENTAL STATISTICS -->
      <div class="stat-card animate-card bg-white rounded-2xl" style="box-shadow: 0 2px 16px rgba(0,0,0,0.09); border: 1px solid #e5e7eb; animation-delay:0.20s;">
        <div class="p-7">
          <div class="flex items-center gap-4 mb-7">
            <div class="cat-header-icon">
              <img src="Img/Icons/Environmental Statistics/Environment-Statistics.png" alt=""/>
            </div>
            <h2 class="text-[19px] font-bold text-primary leading-tight">Environmental Statistics</h2>
          </div>
          <div class="flex flex-col gap-1">
            <a href="agriculture-land.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.10s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Environmental Statistics/Agriculture and Land Use.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Agriculture and Land Use</span>
            </a>
            <a href="resource-use.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.13s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Environmental Statistics/Resource Use.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Resource Use</span>
            </a>
            <a href="energy.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.16s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Environmental Statistics/Energy.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Energy</span>
            </a>
            <a href="pollution.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.19s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Environmental Statistics/Pollution.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Pollution</span>
            </a>
            <a href="built-environment.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.22s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Environmental Statistics/Built Environment.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Built Environment</span>
            </a>
            <a href="digital-connectivity.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.25s;">
              <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
                <img src="Img/Icons/Environmental Statistics/Digital Connectivity.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
              </div>
              <span class="stat-label text-[14px] font-bold text-gray-800">Digital Connectivity</span>
            </a>
          </div>
        </div>
      </div>

    </div><!-- end cat-grid -->

    <!-- Featured Section — original 2-col unchanged on desktop -->
    <div class="text-center mb-6">
      <h2 class="text-[20px] font-bold text-gray-800">Featured</h2>
    </div>

    <div class="feat-grid grid gap-4" id="featuredGrid" style="grid-template-columns: repeat(2, 1fr);">

      <a href="#" class="featured-card bg-white rounded-xl no-underline flex items-center gap-4 px-5 py-4"
         style="box-shadow: 0 2px 12px rgba(0,0,0,0.08); animation-delay:0.10s;">
        <div class="flex-shrink-0 w-[56px] h-[56px] flex items-center justify-center">
          <img src="Img/Featured/countrystat.png" alt="CountrySTAT Philippines" class="featured-card-img" style="width:56px; height:56px; object-fit:contain;"/>
        </div>
        <div>
          <div class="text-[14px] font-bold text-primary mb-0.5">CountrySTAT Philippines</div>
          <div class="text-[13px] text-gray-400">See more</div>
        </div>
      </a>

      <a href="#" class="featured-card bg-white rounded-xl no-underline flex items-center gap-4 px-5 py-4"
         style="box-shadow: 0 2px 12px rgba(0,0,0,0.08); animation-delay:0.20s;">
        <div class="flex-shrink-0 w-[56px] h-[56px] flex items-center justify-center">
          <img src="Img/Featured/decent-work.png" alt="Decent Work Statistics" class="featured-card-img" style="width:56px; height:56px; object-fit:contain;"/>
        </div>
        <div>
          <div class="text-[14px] font-bold text-primary mb-0.5">Decent Work Statistics</div>
          <div class="text-[13px] text-gray-400">See more</div>
        </div>
      </a>

      <a href="#" class="featured-card bg-white rounded-xl no-underline flex items-center gap-4 px-5 py-4"
         style="box-shadow: 0 2px 12px rgba(0,0,0,0.08); animation-delay:0.30s;">
        <div class="flex-shrink-0 w-[56px] h-[56px] flex items-center justify-center">
          <img src="Img/Featured/food-security.png" alt="Food Security Indicators" class="featured-card-img" style="width:56px; height:56px; object-fit:contain;"/>
        </div>
        <div>
          <div class="text-[14px] font-bold text-primary mb-0.5">Food Security Indicators</div>
          <div class="text-[13px] text-gray-400">See more</div>
        </div>
      </a>

      <a href="#" class="featured-card bg-white rounded-xl no-underline flex items-center gap-4 px-5 py-4"
         style="box-shadow: 0 2px 12px rgba(0,0,0,0.08); animation-delay:0.40s;">
        <div class="flex-shrink-0 w-[56px] h-[56px] flex items-center justify-center">
          <img src="Img/Featured/child-poverty.png" alt="National Database on Child Poverty" class="featured-card-img" style="width:56px; height:56px; object-fit:contain;"/>
        </div>
        <div>
          <div class="text-[14px] font-bold text-primary mb-0.5">National Database on Child Poverty</div>
          <div class="text-[13px] text-gray-400">See more</div>
        </div>
      </a>

    </div>

  </div>
</div>

<!-- ══════════════════ FOOTER ══════════════════ -->
<footer class="bg-[#1f2937] text-[#9ca3af] text-[12px] px-9 py-4 flex items-center justify-between flex-wrap gap-2">
  <span>2026 Philippine Statistics Authority. All content is public domain unless otherwise stated.</span>
  <div class="flex items-center gap-3">
    <a href="#" class="text-[#9ca3af] no-underline hover:text-white hover:underline transition-colors duration-150">Terms Of Use</a>
    <span class="text-[#6b7280]">|</span>
    <a href="#" class="text-[#9ca3af] no-underline hover:text-white hover:underline transition-colors duration-150">Privacy Statement</a>
  </div>
</footer>

<script>
  /* ── Intersection Observer for scroll animations ── */
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (!entry.isIntersecting) return;
      const el = entry.target;
      el.style.animationPlayState = 'running';
      el.querySelectorAll('.stat-item, .featured-card').forEach(child => {
        child.style.animationPlayState = 'running';
      });
      observer.unobserve(el);
    });
  }, { threshold: 0.08 });
  document.querySelectorAll('.animate-card, #featuredGrid').forEach(el => observer.observe(el));

  /* ══ RESPONSIVE SLIDER ══ */
  (function () {
    const track    = document.getElementById('sliderTrack');
    const viewport = document.getElementById('sliderViewport');
    const dotsWrap = document.getElementById('sliderDots');
    const slides   = Array.from(document.querySelectorAll('.dataset-slide'));
    const GAP      = 20;
    const total    = slides.length;
    let current    = 0;

    function visibleCount() {
      const vw = viewport.offsetWidth;
      if (vw < 380) return 1;
      if (vw < 600) return 2;
      if (vw < 860) return 3;
      return 4; /* original desktop */
    }

    function cardWidth() {
      const vis = visibleCount();
      return (viewport.offsetWidth - GAP * (vis - 1)) / vis;
    }

    function applyWidths() {
      const w = cardWidth();
      slides.forEach(s => { s.style.width = w + 'px'; s.style.minWidth = w + 'px'; });
    }

    function totalPages() { return Math.ceil(total / visibleCount()); }

    function buildDots() {
      dotsWrap.innerHTML = '';
      for (let i = 0; i < totalPages(); i++) {
        const d = document.createElement('button');
        d.style.cssText = `width:10px;height:10px;border-radius:50%;border:none;cursor:pointer;padding:0;` +
          `background:${i === 0 ? '#1a3269' : '#cbd5e1'};transition:background 0.2s;`;
        d.addEventListener('click', () => goTo(i));
        dotsWrap.appendChild(d);
      }
    }

    function pageOffset(page) {
      return page * visibleCount() * (cardWidth() + GAP);
    }

    function goTo(page, animate = true) {
      current = Math.max(0, Math.min(page, totalPages() - 1));
      track.style.transition = animate ? 'transform 0.45s cubic-bezier(.22,1,.36,1)' : 'none';
      track.style.transform  = `translateX(-${pageOffset(current)}px)`;
      dotsWrap.querySelectorAll('button').forEach((d, i) => {
        d.style.background = i === current ? '#1a3269' : '#cbd5e1';
      });
    }

    function init() { applyWidths(); buildDots(); goTo(0, false); }

    document.getElementById('sliderPrev').addEventListener('click', () => goTo(current - 1));
    document.getElementById('sliderNext').addEventListener('click', () => goTo(current + 1));

    /* Drag / swipe */
    let dragStartX = 0, dragStartOff = 0, isDragging = false, dragMoved = false;

    function onDragStart(x) {
      isDragging = true; dragMoved = false; dragStartX = x;
      dragStartOff = pageOffset(current);
      track.style.transition = 'none';
      viewport.classList.add('is-dragging');
    }
    function onDragMove(x) {
      if (!isDragging) return;
      const delta = x - dragStartX;
      if (!dragMoved && Math.abs(delta) > 6) dragMoved = true;
      if (!dragMoved) return;
      const maxOff = pageOffset(totalPages() - 1);
      track.style.transform = `translateX(-${Math.max(-60, Math.min(dragStartOff - delta, maxOff + 60))}px)`;
    }
    function onDragEnd(x) {
      if (!isDragging) return;
      isDragging = false;
      viewport.classList.remove('is-dragging');
      if (!dragMoved) return;
      const delta  = x - dragStartX;
      const stride = visibleCount() * (cardWidth() + GAP);
      if      (delta < -stride * 0.20) goTo(current + 1);
      else if (delta >  stride * 0.20) goTo(current - 1);
      else goTo(current);
    }

    viewport.addEventListener('mousedown',  e => onDragStart(e.clientX));
    window.addEventListener('mousemove',    e => onDragMove(e.clientX));
    window.addEventListener('mouseup',      e => onDragEnd(e.clientX));
    viewport.addEventListener('touchstart', e => onDragStart(e.touches[0].clientX), { passive: true });
    viewport.addEventListener('touchmove',  e => onDragMove(e.touches[0].clientX),  { passive: true });
    viewport.addEventListener('touchend',   e => onDragEnd(e.changedTouches[0].clientX));
    viewport.addEventListener('dragstart',  e => e.preventDefault());

    let resizeTimer;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(() => { current = 0; init(); }, 120);
    });

    init();
  })();

  /* ── Dropdown toggle ── */
  function toggleDropdown(id, btn) {
    const menu    = document.getElementById(id);
    const chevron = btn.querySelector('.dropdown-chevron');
    const isOpen  = menu.style.maxHeight !== '0px' && menu.style.maxHeight !== '';
    document.querySelectorAll('.dropdown-menu').forEach(m => { m.style.maxHeight = '0px'; });
    document.querySelectorAll('.dropdown-chevron').forEach(c => { c.style.transform = 'rotate(0deg)'; });
    if (!isOpen) {
      menu.style.maxHeight = menu.scrollHeight + 'px';
      chevron.style.transform = 'rotate(180deg)';
    }
  }
</script>
</body>
</html>