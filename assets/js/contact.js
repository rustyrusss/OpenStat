/* ============================================================
   contact.js — Scroll animations for Contact page
   Trigger class: "ct-visible"  (isolated, no global conflicts)
   Observes: ct-fade, ct-fade-left, ct-fade-right, ct-zoom,
             ct-flip, ct-section-heading, ct-request-row,
             ct-official-sub, ct-info-underline
   ============================================================ */

(function () {
  'use strict';

  var CT_SELECTORS = [
    '.ct-fade',
    '.ct-fade-left',
    '.ct-fade-right',
    '.ct-zoom',
    '.ct-flip',
    '.ct-section-heading',
    '.ct-request-row',
    '.ct-official-sub',
    '.ct-info-underline'
  ].join(', ');

  function ctInit() {
    var items = document.querySelectorAll(CT_SELECTORS);

    /* No IntersectionObserver support — reveal everything immediately */
    if (!('IntersectionObserver' in window)) {
      items.forEach(function (el) { el.classList.add('ct-visible'); });
      return;
    }

    var ctObs = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('ct-visible');
            ctObs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.08, rootMargin: '0px 0px -20px 0px' }
    );

    items.forEach(function (el) { ctObs.observe(el); });

    /* Safety net — reveal anything still hidden after 900ms
       (handles zero-height elements when images are missing) */
    setTimeout(function () {
      items.forEach(function (el) {
        if (!el.classList.contains('ct-visible')) {
          el.classList.add('ct-visible');
        }
      });
    }, 900);
  }

  /* Run after full page load so layout heights are correct */
  if (document.readyState === 'complete') {
    ctInit();
  } else {
    window.addEventListener('load', ctInit);
  }

})();