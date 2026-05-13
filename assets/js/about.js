/* ════════════════════════════════════════
   ABOUT PAGE — about.js
   Scroll-triggered fade-in animations
   ════════════════════════════════════════ */

(function () {
  const selectors = '.fade-in, .fade-in-left, .fade-in-right, .section-underline';

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.12,
      rootMargin: '0px 0px -40px 0px'
    }
  );

  document.querySelectorAll(selectors).forEach((el) => observer.observe(el));
})();