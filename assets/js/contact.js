/* ============================================================
   contact.js — Scroll-triggered animations for Contact page
   Uses "ct-visible" class to avoid conflicts with other pages.
   ============================================================ */

(function () {
  'use strict';

  function ctInitAnimations() {
    var items = document.querySelectorAll('.ct-fade');

    /* Fallback: no IntersectionObserver support */
    if (!('IntersectionObserver' in window)) {
      items.forEach(function (el) { el.classList.add('ct-visible'); });
      return;
    }

    var ctObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('ct-visible');
            ctObserver.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.08,
        rootMargin: '0px 0px -20px 0px'
      }
    );

    items.forEach(function (el) { ctObserver.observe(el); });

    /* Safety fallback — reveal anything still hidden after 800ms */
    setTimeout(function () {
      items.forEach(function (el) {
        if (!el.classList.contains('ct-visible')) {
          el.classList.add('ct-visible');
        }
      });
    }, 800);
  }

  if (document.readyState === 'complete') {
    ctInitAnimations();
  } else {
    window.addEventListener('load', ctInitAnimations);
  }

})();