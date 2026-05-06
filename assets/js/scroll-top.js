/**
 * scroll-top.js  —  PSA OpenSTAT
 * Shows / hides the scroll-to-top button based on scroll position.
 * No dependencies. Drop in before </body>.
 */
(function () {
  const btn = document.getElementById('scroll-top-btn');
const THRESHOLD = 300; // lower value = appears sooner

  window.addEventListener('scroll', function () {
    if (window.scrollY > THRESHOLD) {
      btn.classList.add('visible');
    } else {
      btn.classList.remove('visible');
    }
  }, { passive: true });

  btn.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
})();