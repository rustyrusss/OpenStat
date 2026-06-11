/**
 * phiifsis.js
 * Scroll-driven reveal animations for the PhilFSIS page.
 * Wrapped in an IIFE so no variables leak into the global scope.
 */
(function () {
  'use strict';

  /* ── Helpers ─────────────────────────────────────────────── */

  /**
   * Create an IntersectionObserver that adds `phf-visible` once an
   * element scrolls into view, then stops watching it.
   *
   * @param {IntersectionObserverInit} [options]
   * @returns {IntersectionObserver}
   */
  function makeRevealObserver(options) {
    return new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('phf-visible');
          obs.unobserve(entry.target);
        }
      });
    }, options || { threshold: 0.08, rootMargin: '0px 0px -30px 0px' });
  }

  /* ── Init ────────────────────────────────────────────────── */

  function init() {

    /* 1. Generic fade / slide / zoom elements */
    var genericObserver = makeRevealObserver();

    document.querySelectorAll(
      '.phf-anim, .phf-anim-left, .phf-anim-zoom, .phf-underline'
    ).forEach(function (el) {
      genericObserver.observe(el);
    });

    /* 2. Staggered pillar cards */
    var pillarsGrid = document.getElementById('phf-pillars-grid');
    if (pillarsGrid) {
      var pillarsObserver = new IntersectionObserver(function (entries, obs) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var cards = entry.target.querySelectorAll('.phf-pillar-card');
            cards.forEach(function (card, i) {
              card.style.setProperty('--phf-delay', (i * 0.1) + 's');
              card.classList.add('phf-visible');
            });
            obs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.05 });

      pillarsObserver.observe(pillarsGrid);
    }

    /* 3. Staggered commodity grids */
    var gridObserver = new IntersectionObserver(function (entries, obs) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          var cards = entry.target.querySelectorAll('.phf-commodity-card');
          cards.forEach(function (card, i) {
            card.style.setProperty('--phf-delay', (i * 0.09) + 's');
            card.classList.add('phf-visible');
          });
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.05 });

    document.querySelectorAll('.phf-commodity-grid').forEach(function (grid) {
      gridObserver.observe(grid);
    });

  }

  /* Run after DOM is ready */
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }

})();