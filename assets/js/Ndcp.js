/**
 * ndcp.js — Child Poverty Statistics page interactions
 * All logic is wrapped in an IIFE so nothing leaks to global scope.
 * Works alongside any other JS on the page without conflict.
 */
(function () {
  'use strict';

  /* ── Utility: add visible class to element ── */
  function show(el) {
    el.classList.add('ndcp-visible');
  }

  /* ════ INTERSECTION OBSERVER — generic animations ════ */
  var genericObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          show(entry.target);
          genericObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.08, rootMargin: '0px 0px -30px 0px' }
  );

  document.querySelectorAll(
    '.ndcp-anim, .ndcp-anim-left, .ndcp-anim-zoom, .ndcp-underline'
  ).forEach(function (el) {
    genericObserver.observe(el);
  });

  /* ════ PROFILES GRID — staggered entrance ════ */
  var profilesGrid = document.querySelector('.ndcp-profiles-grid');
  if (profilesGrid) {
    var profilesObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.querySelectorAll('.ndcp-profile-card').forEach(function (card, i) {
              card.style.transitionDelay = (i * 0.1) + 's';
              show(card);
            });
            profilesObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.05 }
    );
    profilesObserver.observe(profilesGrid);
  }

  /* ════ SECTORS GRID — staggered entrance (row by row) ════ */
  var sectorsGrid = document.querySelector('.ndcp-sectors-grid');
  if (sectorsGrid) {
    var sectorsObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.querySelectorAll('.ndcp-sec-btn').forEach(function (btn, i) {
              btn.style.transitionDelay = (Math.floor(i / 2) * 0.09) + 's';
              show(btn);
            });
            sectorsObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.05 }
    );
    sectorsObserver.observe(sectorsGrid);
  }

  /* ════ INFOGRAPHICS GRID — staggered entrance ════ */
  var igGrid = document.querySelector('.ndcp-infographics-grid');
  if (igGrid) {
    var igObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.querySelectorAll('.ndcp-anim-zoom').forEach(function (item, i) {
              item.style.transitionDelay = (i * 0.1) + 's';
              show(item);
            });
            igObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.05 }
    );
    igObserver.observe(igGrid);
  }

  /* ════ LIGHTBOX ════ */
  var lightbox      = document.getElementById('ndcp-lightbox');
  var lightboxImg   = document.getElementById('ndcp-lightbox-img');
  var lightboxLabel = document.getElementById('ndcp-lightbox-label');
  var lightboxClose = document.getElementById('ndcp-lightbox-close');

  function openLightbox(src, label) {
    if (!lightbox) return;
    lightboxImg.src          = src;
    lightboxImg.alt          = label;
    lightboxLabel.textContent = label;
    lightbox.classList.add('ndcp-lb-open');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    if (!lightbox) return;
    lightbox.classList.remove('ndcp-lb-open');
    document.body.style.overflow = '';
    /* Clear src after transition so old image doesn't flash on next open */
    setTimeout(function () {
      lightboxImg.src = '';
    }, 300);
  }

  /* Attach click to every infographic thumbnail */
  document.querySelectorAll('.ndcp-ig-thumb').forEach(function (thumb) {
    thumb.addEventListener('click', function () {
      var src   = thumb.getAttribute('data-src');
      var label = thumb.getAttribute('data-label');
      openLightbox(src, label);
    });
    /* Keyboard accessibility */
    thumb.setAttribute('tabindex', '0');
    thumb.setAttribute('role', 'button');
    thumb.setAttribute('aria-label', 'View ' + thumb.getAttribute('data-label'));
    thumb.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        var src   = thumb.getAttribute('data-src');
        var label = thumb.getAttribute('data-label');
        openLightbox(src, label);
      }
    });
  });

  /* Close on button click */
  if (lightboxClose) {
    lightboxClose.addEventListener('click', closeLightbox);
  }

  /* Close on backdrop click */
  if (lightbox) {
    lightbox.addEventListener('click', function (e) {
      if (e.target === lightbox) closeLightbox();
    });
  }

  /* Close on Escape key */
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && lightbox && lightbox.classList.contains('ndcp-lb-open')) {
      closeLightbox();
    }
  });

})();