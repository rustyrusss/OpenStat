/**
 * about-dews.js
 * Scroll-reveal and stagger animations for the Decent Work Statistics page.
 * All selectors are scoped inside #dews-page to avoid conflicts with other pages.
 */

(function () {
  'use strict';

  /* Only run if the DeWS page wrapper exists */
  const page = document.getElementById('dews-page');
  if (!page) return;

  const VISIBLE = 'dews-visible';

  /* ── Generic reveal observer ── */
  const revealObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add(VISIBLE);
          revealObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.08, rootMargin: '0px 0px -30px 0px' }
  );

  page.querySelectorAll(
    '.dews-anim, .dews-anim-left, .dews-anim-right, .dews-anim-zoom, .dews-underline'
  ).forEach(function (el) {
    revealObserver.observe(el);
  });

  /* ── Pillars grid stagger ── */
  const pillarsGrid = page.querySelector('.dews-pillars__grid');
  if (pillarsGrid) {
    const pillarsObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.querySelectorAll('.dews-pillar-card').forEach(function (card, i) {
              card.style.transitionDelay = (i * 0.1) + 's';
              card.classList.add(VISIBLE);
            });
            pillarsObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.05 }
    );
    pillarsObserver.observe(pillarsGrid);
  }

  /* ── Elements grid stagger (row-based delay) ── */
  const elementsGrid = page.querySelector('.dews-elements-grid');
  if (elementsGrid) {
    const gridObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.querySelectorAll('.dews-el-btn').forEach(function (btn, i) {
              var row = Math.floor(i / 2);
              btn.style.transitionDelay = (row * 0.09) + 's';
              btn.classList.add(VISIBLE);
            });
            gridObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.05 }
    );
    gridObserver.observe(elementsGrid);
  }

  /* ── Bottom cards stagger ── */
  const bottomCards = page.querySelector('.dews-bottom-cards');
  if (bottomCards) {
    const cardObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.querySelectorAll('.dews-anim-zoom').forEach(function (card, i) {
              card.style.transitionDelay = (i * 0.12) + 's';
              card.classList.add(VISIBLE);
            });
            cardObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1 }
    );
    cardObserver.observe(bottomCards);
  }

})();