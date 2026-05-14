(function () {
  const selectors = '.about-fade-in, .about-fade-in-left, .about-fade-in-right, .about-section-underline';

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('about-visible');
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
  );

  document.querySelectorAll(selectors).forEach((el) => observer.observe(el));

  /* ── CTA banner: observe the wrapper, animate children on entry ── */
  const ctaBanner = document.querySelector('.cta-banner');
  if (ctaBanner) {
    const ctaObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            ctaBanner.classList.add('about-visible');
            ctaObserver.unobserve(ctaBanner);
          }
        });
      },
      { threshold: 0.15, rootMargin: '0px 0px -30px 0px' }
    );
    ctaObserver.observe(ctaBanner);
  }
})();