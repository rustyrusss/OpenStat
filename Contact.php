<?php
/* ============================================================
   PAGE CONFIGURATION — Edit everything here
   ============================================================ */

/* ── Page meta ── */
$page_title       = 'Contact Us / Request Data';
$page_description = 'The following are the official channels through which you may contact the Philippine Statistics Authority or submit requests for statistical data, information, and related services.';
$hero_image       = 'Img/Background-Data.png';
$active_nav       = 'contact';

/* ── Breadcrumb trail ── */
$breadcrumbs = [
  ['label' => 'Dashboard >', 'href' => 'dashboard.php'],
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

/* ── Ways to contact / access data ── */
$ways_contact = [
  [
    'icon'        => 'Img/Contact/Download.png',
    'title'       => 'Datasets',
    'description' => 'Download datasets at: <a href="#" class="text-link">OpenSTAT</a>, <a href="#" class="text-link">CountrySTAT Philippines</a>, <a href="#" class="text-link">Decent Work Statistics – Philippines</a>, and <a href="#" class="text-link">Philippine Food Security Information System</a>.',
  ],
  [
    'icon'        => 'Img/Contact/Book.png',
    'title'       => 'PSA Publications',
    'description' => 'View the catalog of PSA Publications at: <a href="https://library.psa.gov.ph" class="text-link" target="_blank" rel="noopener">https://library.psa.gov.ph</a>',
  ],
  [
    'icon'        => 'Img/Contact/Microdata.png',
    'title'       => 'Microdata',
    'description' => 'View and download Microdata/Public Use Files with metadata from PSA surveys, censuses, and statistical reports through the PSA Data Archive Catalog at: <a href="https://psada.psa.gov.ph/index.php/home" class="text-link" target="_blank" rel="noopener">https://psada.psa.gov.ph/index.php/home</a>',
  ],
];

/* ── Ways to request data ── */
$ways_request = [
  [
    'icon'  => 'Img/Contact/Fill Data Request Form.png',
    'text'  => 'Fill out the online Data Request Form (<a href="https://psa.gov.ph/content/data-request-form" class="text-link" target="_blank" rel="noopener">https://psa.gov.ph/content/data-request-form</a>).',
  ],
  [
    'icon'  => 'Img/Contact/Message.png',
    'text'  => 'Contact the PSA Information Section at <a href="mailto:info@psa.gov.ph" class="text-link">info@psa.gov.ph</a>, and provide details on your data request.',
  ],
  [
    'icon'  => 'Img/Contact/Location.png',
    'text'  => 'Visit the PSA Library at 9/F PSA Headquarters PSA Complex, East Avenue Diliman, Quezon City.',
  ],
  [
    'icon'  => 'Img/Contact/Send a Letter.png',
    'text'  => 'Send a letter requesting for dataset addressed to the PSA National Statistics.',
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
  <title>PSA OpenSTAT - Contact Us</title>
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

    /* ── Text links ── */
    .text-link { color: #1a3269; text-decoration: underline; }
    .text-link:hover { color: #142a56; }

    /* ── Section heading ── */
    .section-heading {
      font-size: 18px;
      font-weight: 700;
      color: #111827;
      margin: 0 0 16px 0;
      padding-bottom: 0;
    }

    /* ── Contact method card (Ways to contact) ── */
    .contact-card {
      background: #fff;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      display: flex;
      align-items: center;
      gap: 18px;
      padding: 20px 22px;
      box-shadow: 0 1px 4px rgba(26,50,105,0.08);
      transition: box-shadow 0.2s, transform 0.2s;
      margin-bottom: 12px;
    }
    .contact-card:hover {
      box-shadow: 0 4px 16px rgba(26,50,105,0.13);
      transform: translateY(-2px);
    }
    .contact-card .icon-wrap {
      flex-shrink: 0;
      width: 56px;
      height: 56px;
      background: rgb(239, 246, 255);
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .contact-card .icon-wrap img {
      width: 56px;
      height: 56px;
      object-fit: contain;
    }
    .contact-card .card-content h3 {
      font-size: 16px;
      font-weight: 700;
      color: #1a3269;
      margin: 0 0 6px 0;
    }
    .contact-card .card-content p {
      font-size: 14px;
      color: #374151;
      line-height: 1.72;
      margin: 0;
    }

    /* ── Request method grid cards ── */
    .request-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }
    .request-card {
      background: #fff;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      display: flex;
      align-items: center;
      gap: 14px;
      padding: 16px 18px;
      box-shadow: 0 1px 4px rgba(26,50,105,0.07);
      transition: box-shadow 0.2s, transform 0.2s;
    }
    .request-card:hover {
      box-shadow: 0 4px 14px rgba(26,50,105,0.12);
      transform: translateY(-2px);
    }
    .request-card .icon-wrap {
      flex-shrink: 0;
      width: 48px;
      height: 48px;
      background: #eff6ff;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .request-card .icon-wrap img {
      width: 48px;
      height: 48px;
      object-fit: contain;
    }
    .request-card p {
      font-size: 14px;
      color: #374151;
      line-height: 1.70;
      margin: 0;
      padding-top: 2px;
    }

    /* ── Contact info sidebar ── */
    .contact-info-box {
      background: #fff;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      padding: 22px 22px 18px;
      box-shadow: 0 1px 4px rgba(26,50,105,0.07);
      font-size: 13px;
      color: #374151;
      line-height: 1.72;
    }

    /* ── Contact info heading — no border on h2 itself ── */
    .contact-info-box h2 {
      font-size: 16px;
      font-weight: 700;
      color: #111827;
      margin: 0 0 0 0;
      padding-bottom: 0;
      border-bottom: none;
      display: block;
    }

    .contact-info-underline {
      width: 65px;          /* ← change this to control underline length */
      height: 4px;           /* ← change this to control thickness */
      background: #f5a623;   /* ← change this to control color */
      border-radius: 2px;    /* ← change this to control roundness */
      margin-top: 8px;
      margin-bottom: 14px;
    }

    .contact-info-box .info-label {
      font-size: 14px;
      color: #6b7280;
      margin: 14px 0 6px;
      text-transform: uppercase;
      letter-spacing: 0.4px;
    }
    .contact-info-box strong {
      color: #1a3269;
      font-weight: 700;
      display: block;
      margin-bottom: 4px;
    }
    .contact-info-box a { color: #1a3269; text-decoration: underline; }
    .contact-info-box a:hover { color: #142a56; }
    .contact-info-divider {
      border: none;
      border-top: 1px solid #e5e7eb;
      margin: 14px 0;
    }

    /* ── Admin / official card ── */
    .official-card {
      background: #eff6ff;
      border: 1px solid #c7d9f5;
      border-radius: 10px;
      display: flex;
      align-items: center;
      gap: 16px;
      padding: 18px 20px;
      margin-top: 14px;
      box-shadow: 0 1px 4px rgba(26,50,105,0.07);
    }
    .official-card .icon-wrap {
      flex-shrink: 0;
      width: 54px;
      height: 54px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .official-card .icon-wrap img {
      width: 54px;
      height: 54px;
      object-fit: contain;
    }
    .official-card .info h3 {
      font-size: 16px;
      font-weight: 700;
      color: #1a3269;
      margin: 0 0 2px 0;
    }
    .official-card .info p {
      font-size: 14px;
      color: #374151;
      margin: 0;
      line-height: 1.6;
    }

    /* ── Response time notice ── */
    .notice-card {
      background: #fff;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      display: flex;
      align-items: center;
      gap: 16px;
      padding: 18px 20px;
      margin-top: 14px;
      box-shadow: 0 1px 4px rgba(26,50,105,0.07);
    }
    .notice-card .icon-wrap {
      flex-shrink: 0;
      width: 52px;
      height: 52px;
      background: #eff6ff;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .notice-card .icon-wrap img {
      width: 52px;
      height: 52px;
      object-fit: contain;
    }
    .notice-card p {
      font-size: 13.5px;
      color: #374151;
      line-height: 1.72;
      margin: 0;
    }

    /* ── Layout ── */
    .main-layout {
      display: flex;
      gap: 28px;
      align-items: flex-start;
    }
    .left-col { flex: 1; min-width: 0; }
    .right-col { width: 290px; flex-shrink: 0; }

    /* ── Scroll animations ── */
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      transition: opacity 0.5s cubic-bezier(.22,1,.36,1),
                  transform 0.5s cubic-bezier(.22,1,.36,1);
    }
    .fade-in.visible { opacity: 1; transform: translateY(0); }
    .stagger-1 { transition-delay: 0s; }
    .stagger-2 { transition-delay: 0.08s; }
    .stagger-3 { transition-delay: 0.16s; }
    .stagger-4 { transition-delay: 0.24s; }
    .stagger-5 { transition-delay: 0.32s; }
    .stagger-6 { transition-delay: 0.40s; }

    @media (max-width: 900px) {
      .main-layout { flex-direction: column; }
      .right-col { width: 100%; }
      .request-grid { grid-template-columns: 1fr; }
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
    <p class="hero-title text-[14px] text-white" style="opacity:0.82;max-width:600px;line-height:1.65;transition-delay:0.05s;">
      <?= htmlspecialchars($page_description) ?>
    </p>
  </div>
</div>

<!-- ════ MAIN CONTENT ════ -->
<div style="max-width:1180px;margin:0 auto;padding:36px 32px 60px;">
  <div class="main-layout">

    <!-- ── LEFT COLUMN ── -->
    <div class="left-col">

      <!-- Ways to contact -->
      <p class="section-heading">Ways on how to Contact Us</p>

      <?php foreach ($ways_contact as $i => $item): ?>
      <div class="contact-card fade-in stagger-<?= $i + 1 ?>">
        <div class="icon-wrap">
          <img src="<?= htmlspecialchars($item['icon']) ?>" alt=""/>
        </div>
        <div class="card-content">
          <h3><?= htmlspecialchars($item['title']) ?></h3>
          <p><?= $item['description'] ?></p>
        </div>
      </div>
      <?php endforeach; ?>

      <!-- Ways to request data -->
      <p class="section-heading" style="margin-top:28px;">Ways on how to request data from PSA:</p>

      <div class="request-grid fade-in stagger-4">
        <?php foreach ($ways_request as $item): ?>
        <div class="request-card">
          <div class="icon-wrap">
            <img src="<?= htmlspecialchars($item['icon']) ?>" alt=""/>
          </div>
          <p><?= $item['text'] ?></p>
        </div>
        <?php endforeach; ?>
      </div>

      <!-- Official / Admin card -->
      <div class="official-card fade-in stagger-5">
        <div class="icon-wrap">
          <img src="Img/Contact/Admin.png" alt=""/>
        </div>
        <div class="info">
          <h3>Claire Dennis S. Mapa, Ph.D.</h3>
          <p>Undersecretary<br/>
             National Statistician and Civil Registrar General<br/>
             23rd floor, PSA Headquarters, PSA Complex, East Avenue, Diliman, Quezon City, Philippines 1101
          </p>
        </div>
      </div>

      <!-- Response time notice -->
      <div class="notice-card fade-in stagger-6">
        <div class="icon-wrap">
          <img src="Img/Contact/Clock.png" alt=""/>
        </div>
        <p>
          PSA will respond to your data request within three (3) working days either clarify or address your data request.<br/>
          Please be advised however that the length of time needed to completely address your request will vary depending on the availability of data.
        </p>
      </div>

    </div><!-- /left-col -->

    <!-- ── RIGHT COLUMN — Contact Information ── -->
    <div class="right-col fade-in stagger-2">
      <div class="contact-info-box">
        <h2>Contact Information</h2>
        <!-- Underline bar — edit width/height/background/border-radius in .contact-info-underline CSS -->
        <div class="contact-info-underline"></div>

        <p class="info-label">For data inquiries, contact:</p>
           <hr class="contact-info-divider"/>

        <strong>Knowledge Management Division</strong>
        <p>
          Philippine Statistics Authority<br/>
          9/F PSA Headquarters<br/>
          PSA Complex, East Avenue<br/>
          Diliman, Quezon City
        </p>
        <p style="margin-top:6px;">
          Email: <a href="mailto:info@psa.gov.ph">info@psa.gov.ph</a>
        </p>

        <hr class="contact-info-divider"/>

        <strong>ATTY. ELIEZER P. AMBATALI</strong>
        <p style="font-size:12px;color:#6b7280;margin-bottom:6px;">
          Direct III / Data Protection Officer (DPO)
        </p>
        <p>
          22nd floor, PSA Headquarters<br/>
          PSA Complex, East Avenue<br/>
          Diliman, Quezon City<br/>
          Philippines 1101
        </p>
        <p style="margin-top:6px;">
          Telephone: (632) 8938-5273<br/>
          Email: <a href="mailto:dpo@psa.gov.ph">dpo@psa.gov.ph</a>
        </p>
      </div>
    </div><!-- /right-col -->

  </div><!-- /main-layout -->
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
      { threshold: 0.08, rootMargin: '0px 0px -20px 0px' }
    );
    document.querySelectorAll('.fade-in').forEach((el) => observer.observe(el));
  })();
</script>

</body>
</html>