/**
 * DeWS.js — Decent Work Statistics
 * Scroll-triggered animations scoped entirely to .dews- prefixed classes.
 * Safe to load alongside other page scripts — no global pollution.
 */

(function () {
  'use strict';

  /* ── 1. Generic fade / slide observers ── */
  const genericObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('dews-visible');
          genericObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.08, rootMargin: '0px 0px -30px 0px' }
  );

  document
    .querySelectorAll(
      '.dews-anim, .dews-anim-left, .dews-anim-right, .dews-anim-zoom, .dews-section-underline'
    )
    .forEach(function (el) {
      genericObserver.observe(el);
    });

  /* ── 2. Elements grid — staggered row cascade ── */
  var grid = document.querySelector('.dews-elements-grid');

  if (grid) {
    var gridObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var btns = entry.target.querySelectorAll('.dews-el-btn');
            btns.forEach(function (btn, i) {
              /* left + right card on the same row share the same delay */
              var row = Math.floor(i / 2);
              btn.style.transitionDelay = row * 0.09 + 's';
              btn.classList.add('dews-visible');
            });
            gridObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.05 }
    );

    gridObserver.observe(grid);
  }

  /* ── 3. Bottom cards — staggered zoom-in ── */
  var cardsWrap = document.querySelector('.dews-bottom-cards');

  if (cardsWrap) {
    var cardObserver = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var cards = entry.target.querySelectorAll('.dews-anim-zoom');
            cards.forEach(function (card, i) {
              card.style.transitionDelay = i * 0.12 + 's';
              card.classList.add('dews-visible');
            });
            cardObserver.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1 }
    );

    cardObserver.observe(cardsWrap);
  }
})();