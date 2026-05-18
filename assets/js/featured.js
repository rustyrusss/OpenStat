/* ============================================================
   featured.js — Scroll-triggered animations for Featured page
   Uses "ft-visible" class to avoid conflicts with other pages.
   ============================================================ */

(function () {
  'use strict';

  function initAnimations() {
    var items = document.querySelectorAll('.ft-fade');

    // Fallback: if IntersectionObserver is not supported, show everything
    if (!('IntersectionObserver' in window)) {
      items.forEach(function (el) { el.classList.add('ft-visible'); });
      return;
    }

    var ftObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('ft-visible');
            ftObserver.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0,              // trigger as soon as ANY part is visible
        rootMargin: '0px 0px 0px 0px'
      }
    );

    items.forEach(function (el) { ftObserver.observe(el); });

    // Safety fallback: reveal any cards still hidden after 800ms
    // (handles cases where images cause zero-height before load)
    setTimeout(function () {
      items.forEach(function (el) {
        if (!el.classList.contains('ft-visible')) {
          el.classList.add('ft-visible');
        }
      });
    }, 800);
  }

  // Run after DOM + subresources are ready
  if (document.readyState === 'complete') {
    initAnimations();
  } else {
    window.addEventListener('load', initAnimations);
  }

})();