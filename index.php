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
    .nav-blue-link:hover     { background: rgba(255,255,255,0.12); }
    .nav-blue-link.active-nav { background: rgba(255,255,255,0.18); font-weight: 700; }

    /* ── Stat item hover (category lists) ── */
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

    /* ══ SLIDER BUTTONS — white base, blue on hover ══ */
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

    /* ══ DATASET CARDS — hover lift + blue tint ══ */
    .dataset-slide {
      cursor: pointer;
      transition: box-shadow 0.25s cubic-bezier(.22,1,.36,1), background 0.25s;
      will-change: transform;
    }
    .dataset-slide-inner {
      transition: transform 0.25s cubic-bezier(.22,1,.36,1);
    }
    .dataset-slide:hover .dataset-slide-inner {
      transform: translateY(-6px);
    }
    .dataset-slide:hover {
      box-shadow: 0 14px 36px rgba(26,50,105,0.20);
      background: #eff6ff !important;
    }

    /* Drag cursor states */
    #sliderViewport               { cursor: grab; user-select: none; }
    #sliderViewport.is-dragging   { cursor: grabbing; }
    #sliderViewport.is-dragging .dataset-slide:hover { box-shadow: 0 2px 12px rgba(0,0,0,0.08); background: inherit !important; }
    #sliderViewport.is-dragging .dataset-slide:hover .dataset-slide-inner { transform: none; }

    /* ══ BACKDROP WHITE — subtle background for content sections ══ */
    .backdrop-white-bg {
      position: relative;
    }
    .backdrop-white-bg::before {
      content: '';
      position: absolute;
      inset: 0;
      background-image: url('Img/Backdrop White.png');
      background-repeat: repeat;
      background-size: auto;
      background-position: center top;
      opacity: 0.18;
      pointer-events: none;
      z-index: 0;
    }
    .backdrop-white-bg > * {
      position: relative;
      z-index: 1;
    }
  </style>
</head>
<body>

<!-- ══════════════════ NAVBAR ══════════════════ -->
<header class="navbar sticky top-0 z-50" style="box-shadow: 0 2px 8px rgba(0,0,0,0.35);">

  <div class="bg-primary flex items-center justify-between px-12" style="min-height: 88px; padding-top: 8px; padding-bottom: 8px;">
    <div class="flex items-center gap-4">
      <img src="Img/Logos/PSAHeader.png" alt="Philippine Statistics Authority"
           style="height: 88px; width: auto; object-fit: contain;"/>
    </div>
    <div class="flex flex-col items-center justify-center gap-1" style="margin-right: 60px;">
      <img src="Img/Logos/OpenStat-White.png" alt="OpenSTAT"
           style="height: 90px; width: auto; object-fit: contain;"/>
    </div>
  </div>

  <nav class="flex items-center justify-center" style="background: #142a56; gap: 0;">
    <a href="index.php"     class="nav-blue-link active-nav">Home</a>
    <a href="about.php"     class="nav-blue-link">About</a>
    <a href="database.php"  class="nav-blue-link">Database</a>
    <a href="dashboard.php" class="nav-blue-link">Dashboard</a>
    <a href="featured.php"  class="nav-blue-link">Featured</a>
    <a href="contact.php"   class="nav-blue-link">Contact Us</a>
  </nav>

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
        OpenSTAT is an open data platform powered by PC-Axis, a user-friendly application<br/>
        for presenting statistical data and metadata coupled with API and visualization features.<br/>
        This system allows the PSA to share data under an open data license where data can be freely used,
        re-used and redistributed by anyone without any restrictions other than proper source attribution.
      </p>
    </div>
  </div>
</div>

<!-- ══════════════════ LATEST DATASETS (Slider) ══════════════════ -->
<div class="backdrop-white-bg" >
  <div class="max-w-[1200px] mx-auto px-10 pt-10 pb-4">

    <h2 class="text-[22px] font-bold text-gray-800 mb-6">Latest Datasets and Updates</h2>

    <!-- Slider wrapper -->
    <div class="relative">

      <!-- LEFT Arrow -->
      <button id="sliderPrev"
              class="slider-btn absolute left-[-20px] top-1/2 -translate-y-1/2 z-10 w-10 h-10 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24"
             stroke="#1a3269" stroke-width="2.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/>
        </svg>
      </button>

      <!-- Slide track viewport -->
      <div class="overflow-hidden" id="sliderViewport">
        <div class="flex gap-5 transition-transform duration-500 ease-[cubic-bezier(.22,1,.36,1)]" id="sliderTrack">

          <?php
          $datasets = [
            [
              'label'     => 'Population',
              'img'       => 'Population.png',
              'highlight' => false,
              'type'      => 'stat',
              'value'     => '338.7M',
              'sublabel'  => 'Population',
              'date'      => 'in April 2026',
            ],
            [
              'label'     => 'Education',
              'img'       => 'Education.png',
              'highlight' => false,
              'type'      => 'stat',
              'value'     => '92.4%',
              'sublabel'  => 'High School Graduation Rate',
              'date'      => 'In 2025',
            ],
            [
              'label'     => 'Energy',
              'img'       => 'Renewable Energy.png',
              'highlight' => true,
              'type'      => 'stat',
              'value'     => '18.7%',
              'sublabel'  => 'Renewable Energy Share',
              'date'      => 'in February 2024',
            ],
            [
              'label'     => 'Labor',
              'img'       => 'Labor.png',
              'highlight' => false,
              'type'      => 'stat',
              'value'     => '94.9%',
              'sublabel'  => 'Employment Rate',
              'date'      => 'in February 2026',
            ],
            [
              'label'     => 'Trade',
              'img'       => 'Trade.png',
              'highlight' => false,
              'type'      => 'multi',
              'rows'      => [
                ['Exports',          '$7.33B',  ''],
                ['Imports',          '$11.01B', ''],
                ['Balance of Trade', '-$3.68B', 'red'],
              ],
              'footnote'  => 'FOB Value (in billions) in February 2026',
            ],
            /* ── ADD MORE DATASETS BELOW THIS LINE ── */
          ];

          foreach ($datasets as $d):
            $bg = $d['highlight'] ? 'background:#dbeafe;' : 'background:#ffffff;';
          ?>
          <div class="dataset-slide flex-shrink-0 rounded-2xl relative"
               style="width: calc(25% - 15px); min-width: 200px; <?= $bg ?> box-shadow: 0 2px 12px rgba(0,0,0,0.08);">
            <div class="dataset-slide-inner p-5 flex flex-col h-full rounded-2xl">

            <div class="text-[12px] text-gray-500 font-semibold mb-3"><?= htmlspecialchars($d['label']) ?></div>

            <div class="flex items-center justify-center mb-4" style="height:110px;">
              <img src="Img/Datasets Img/<?= htmlspecialchars($d['img']) ?>"
                   alt="<?= htmlspecialchars($d['label']) ?>"
                   style="max-height:110px; width:auto; object-fit:contain;"/>
            </div>

            <?php if ($d['type'] === 'stat'): ?>
              <div class="text-[28px] font-bold text-gray-900 leading-tight"><?= htmlspecialchars($d['value']) ?></div>
              <div class="text-[13px] text-gray-700 font-semibold mt-1"><?= htmlspecialchars($d['sublabel']) ?></div>
              <div class="text-[12px] text-gray-400 mt-0.5"><?= htmlspecialchars($d['date']) ?></div>

            <?php elseif ($d['type'] === 'multi'): ?>
              <div class="flex flex-col gap-2 mt-1">
                <?php foreach ($d['rows'] as [$rlabel, $rval, $rcolor]): ?>
                  <?php
                    $valColor = match($rcolor) {
                      'red'   => 'color:#dc2626;',
                      'green' => 'color:#16a34a;',
                      default => 'color:#111827;',
                    };
                  ?>
                  <div class="flex items-center justify-between">
                    <span class="text-[13px] text-gray-700 font-semibold"><?= htmlspecialchars($rlabel) ?></span>
                    <span class="text-[13px] font-bold" style="<?= $valColor ?>"><?= htmlspecialchars($rval) ?></span>
                  </div>
                <?php endforeach; ?>
              </div>
              <?php if (!empty($d['footnote'])): ?>
                <div class="text-[11px] text-gray-400 mt-2"><?= htmlspecialchars($d['footnote']) ?></div>
              <?php endif; ?>
            <?php endif; ?>

            </div>
          </div>
          <?php endforeach; ?>

        </div>
      </div>

      <!-- RIGHT Arrow -->
      <button id="sliderNext"
              class="slider-btn absolute right-[-20px] top-1/2 -translate-y-1/2 z-10 w-10 h-10 flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24"
             stroke="#1a3269" stroke-width="2.5">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
        </svg>
      </button>

    </div>

    <!-- Dot indicators -->
    <div class="flex items-center justify-center gap-2 mt-5" id="sliderDots"></div>

    <!-- ══ SEARCH BAR ══ -->
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
               class="flex-1 px-2 py-4 text-[15px] text-gray-700 bg-white border-none outline-none"/>
        <button class="bg-primary hover:bg-primary-dark text-white px-10 py-4 text-[15px] font-semibold transition-colors duration-150">
          Search
        </button>
      </div>
    </div>

  </div>
</div>


<!-- ══════════════════ CONTENT ══════════════════ -->
<div class="backdrop-white-bg bg-[#e8e8e8]">
  <div class="max-w-[1100px] mx-auto px-10 pb-16 pt-6">

    <!-- ── Three-column category grid ── -->
    <div class="grid grid-cols-3 gap-6 mb-6">

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

      <!-- Population and Vital Statistics -->
      <a href="pop-migration.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.08s;">
        <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
          <img src="Img/Icons/Social Statistics//Pop-Vit.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
        </div>
        <span class="stat-label text-[14px] font-bold text-gray-800">Population and Vital Statistics</span>
      </a>

      <!-- Education (with dropdown) -->
      <div class="stat-dropdown" style="animation-delay:0.11s;">
        <button onclick="toggleDropdown('education-dropdown', this)"
                class="stat-item w-full flex items-center gap-4 px-3 py-3 no-underline text-left bg-transparent border-none cursor-pointer"
                style="border-radius:10px;">
          <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
            <img src="Img/Icons/Social Statistics//Education.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
          </div>
          <span class="stat-label text-[14px] font-bold text-gray-800 flex items-center gap-2">
            Education
            <svg class="dropdown-chevron transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" width="13" height="13" fill="none" viewBox="0 0 24 24" stroke="#6b7280" stroke-width="2.5">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
          </span>
        </button>
        <div id="education-dropdown" class="dropdown-menu overflow-hidden" style="max-height:0; transition: max-height 0.35s cubic-bezier(.22,1,.36,1);">
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

      <!-- Health (with dropdown) -->
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
        <div id="health-dropdown" class="dropdown-menu overflow-hidden" style="max-height:0; transition: max-height 0.35s cubic-bezier(.22,1,.36,1);">
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

      <!-- Migration -->
      <a href="migration.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.17s;">
        <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
          <img src="Img/Icons/Social Statistics//Gender Statistics.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
        </div>
        <span class="stat-label text-[14px] font-bold text-gray-800">Migration</span>
      </a>

      <!-- Reproductive Health -->
      <a href="reproductive-health.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.20s;">
        <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
          <img src="Img/Icons/Social Statistics//Reproductive Health.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
        </div>
        <span class="stat-label text-[14px] font-bold text-gray-800">Reproductive Health</span>
      </a>

      <!-- Food Security and Nutrition -->
      <a href="food-security.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.23s;">
        <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
          <img src="Img/Icons/Social Statistics//Food Security and Nutritions.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
        </div>
        <span class="stat-label text-[14px] font-bold text-gray-800">Food Security and Nutrition</span>
      </a>

      <!-- Gender Statistics -->
      <a href="gender-statistics.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.26s;">
        <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
          <img src="Img/Icons/Social Statistics//Gender Statistics.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
        </div>
        <span class="stat-label text-[14px] font-bold text-gray-800">Gender Statistics</span>
      </a>

      <!-- Crime and Justice Statistics -->
      <a href="crime-justice.php" class="stat-item flex items-center gap-4 px-3 py-3 no-underline" style="animation-delay:0.29s;">
        <div class="row-icon w-[52px] h-[52px] flex items-center justify-center flex-shrink-0">
          <img src="Img/Icons/Social Statistics/Crime and Justice Statistics.png" alt="" style="width:48px;height:48px;object-fit:contain;"/>
        </div>
        <span class="stat-label text-[14px] font-bold text-gray-800">Crime and Justice Statistics</span>
      </a>

      <!-- Poverty and Income Statistics -->
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
      <div class="stat-card animate-card bg-white rounded-2xl" style="box-shadow: 0 2px 16px rgba(0,0,0,0.09); border: 1px solid #e5e7eb; animation-delay:0.12s;">
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

    </div><!-- end 3-col grid -->

    <!-- ── Featured Section ── -->
<?php
$featured_items = [
  [
    'title'  => 'CountrySTAT Philippines',
    'img'    => 'Img/Featured/countrystat.png',   // ← put your path here
    'href'   => '#',
  ],
  [
    'title'  => 'Decent Work Statistics',
    'img'    => 'Img/Featured/decent-work.png',
    'href'   => '#',
  ],
  [
    'title'  => 'Food Security Indicators',
    'img'    => 'Img/Featured/food-security.png',
    'href'   => '#',
  ],
  [
    'title'  => 'National Database on Child Poverty',
    'img'    => 'Img/Featured/child-poverty.png',
    'href'   => '#',
  ],
  /* ── ADD MORE FEATURED ITEMS BELOW THIS LINE ── */
];
?>

<div class="text-center mb-6">
  <h2 class="text-[20px] font-bold text-gray-800">Featured</h2>
</div>

<div class="grid grid-cols-2 gap-4" id="featuredGrid">
  <?php foreach ($featured_items as $index => $item):
    $delay = 0.10 + ($index * 0.10);
  ?>
  <a href="<?= htmlspecialchars($item['href']) ?>"
     class="featured-card bg-white rounded-xl no-underline flex items-center gap-4 px-5 py-4"
     style="box-shadow: 0 2px 12px rgba(0,0,0,0.08); animation-delay:<?= $delay ?>s;">
    <div class="flex-shrink-0 w-[56px] h-[56px] flex items-center justify-center">
      <img src="<?= htmlspecialchars($item['img']) ?>"
           alt="<?= htmlspecialchars($item['title']) ?>"
           style="width:56px; height:56px; object-fit:contain;"/>
    </div>
    <div>
      <div class="text-[14px] font-bold text-primary mb-0.5"><?= htmlspecialchars($item['title']) ?></div>
      <div class="text-[13px] text-gray-400">See more</div>
    </div>
  </a>
  <?php endforeach; ?>
</div><!-- end featured-grid -->

  </div><!-- end main-content -->
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

  /* ══════════════════════════════════════════════
     SLIDER — click arrows + dot nav + drag/swipe
     ══════════════════════════════════════════════ */
  (function () {
    const track      = document.getElementById('sliderTrack');
    const viewport   = document.getElementById('sliderViewport');
    const dotsWrap   = document.getElementById('sliderDots');
    const slides     = document.querySelectorAll('.dataset-slide');
    const VISIBLE    = 4;
    const GAP        = 20;
    const total      = slides.length;
    const pages      = Math.ceil(total / VISIBLE);
    let   current    = 0;

    function slideStride() {
      return slides[0].offsetWidth + GAP;
    }

    function pageOffset(page) {
      return page * VISIBLE * slideStride();
    }

    for (let i = 0; i < pages; i++) {
      const d = document.createElement('button');
      d.style.cssText = `width:10px;height:10px;border-radius:50%;border:none;cursor:pointer;padding:0;
        background:${i === 0 ? '#1a3269' : '#cbd5e1'};transition:background 0.2s;`;
      d.addEventListener('click', () => goTo(i));
      dotsWrap.appendChild(d);
    }

    function goTo(page, animate = true) {
      current = Math.max(0, Math.min(page, pages - 1));
      track.style.transition = animate
        ? 'transform 0.45s cubic-bezier(.22,1,.36,1)'
        : 'none';
      track.style.transform = `translateX(-${pageOffset(current)}px)`;
      dotsWrap.querySelectorAll('button').forEach((d, i) => {
        d.style.background = i === current ? '#1a3269' : '#cbd5e1';
      });
    }

    document.getElementById('sliderPrev').addEventListener('click', () => goTo(current - 1));
    document.getElementById('sliderNext').addEventListener('click', () => goTo(current + 1));

    let dragStartX  = 0;
    let dragStartOffset = 0;
    let isDragging  = false;
    let dragMoved   = false;
    const DRAG_THRESHOLD = 6;

    function onDragStart(clientX) {
      isDragging      = true;
      dragMoved       = false;
      dragStartX      = clientX;
      dragStartOffset = pageOffset(current);
      track.style.transition = 'none';
      viewport.classList.add('is-dragging');
    }

    function onDragMove(clientX) {
      if (!isDragging) return;
      const delta = clientX - dragStartX;
      if (!dragMoved && Math.abs(delta) > DRAG_THRESHOLD) dragMoved = true;
      if (!dragMoved) return;
      const maxOffset = pageOffset(pages - 1);
      const raw = dragStartOffset - delta;
      const clamped = Math.max(-60, Math.min(raw, maxOffset + 60));
      track.style.transform = `translateX(-${clamped}px)`;
    }

    function onDragEnd(clientX) {
      if (!isDragging) return;
      isDragging = false;
      viewport.classList.remove('is-dragging');

      if (!dragMoved) return;

      const delta = clientX - dragStartX;
      const stride = VISIBLE * slideStride();
      if (delta < -stride * 0.20) {
        goTo(current + 1);
      } else if (delta > stride * 0.20) {
        goTo(current - 1);
      } else {
        goTo(current);
      }
    }

    viewport.addEventListener('mousedown',  e => { onDragStart(e.clientX); });
    window.addEventListener('mousemove',    e => { onDragMove(e.clientX); });
    window.addEventListener('mouseup',      e => { onDragEnd(e.clientX); });

    viewport.addEventListener('touchstart', e => { onDragStart(e.touches[0].clientX); }, { passive: true });
    viewport.addEventListener('touchmove',  e => { onDragMove(e.touches[0].clientX); },  { passive: true });
    viewport.addEventListener('touchend',   e => { onDragEnd(e.changedTouches[0].clientX); });

    viewport.addEventListener('dragstart', e => e.preventDefault());
  })();

  /* ── Dropdown toggle for Education / Health ── */
function toggleDropdown(id, btn) {
  const menu    = document.getElementById(id);
  const chevron = btn.querySelector('.dropdown-chevron');
  const isOpen  = menu.style.maxHeight !== '0px' && menu.style.maxHeight !== '';

  // Close all other open dropdowns first
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