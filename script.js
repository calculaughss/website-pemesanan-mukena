/**
 * RAPASHA SHOP – script.js
 * Elegant Muslimah Landing Page Interactions
 */

document.addEventListener('DOMContentLoaded', () => {

  /* ===========================
     1. NAVBAR – Sticky & Scroll
  =========================== */
  const navbar = document.getElementById('navbar');
  const hamburger = document.getElementById('hamburger');
  const navLinks = document.getElementById('navLinks');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 60) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  }, { passive: true });

  // Hamburger toggle
  hamburger.addEventListener('click', () => {
    hamburger.classList.toggle('open');
    navLinks.classList.toggle('open');
    document.body.style.overflow = navLinks.classList.contains('open') ? 'hidden' : '';
  });

  // Close mobile nav on link click
  navLinks.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      hamburger.classList.remove('open');
      navLinks.classList.remove('open');
      document.body.style.overflow = '';
    });
  });

  // Close on outside click
  document.addEventListener('click', (e) => {
    if (navLinks.classList.contains('open') &&
        !navLinks.contains(e.target) &&
        !hamburger.contains(e.target)) {
      hamburger.classList.remove('open');
      navLinks.classList.remove('open');
      document.body.style.overflow = '';
    }
  });


  /* ===========================
     2. FADE-UP ON SCROLL
  =========================== */
  const fadeElements = document.querySelectorAll('.fade-up');

  const fadeObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const delay = entry.target.style.getPropertyValue('--delay') || '0s';
        entry.target.style.transitionDelay = delay;
        entry.target.classList.add('visible');
        fadeObserver.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.12,
    rootMargin: '0px 0px -40px 0px'
  });

  fadeElements.forEach(el => {
    // Check if element is already in viewport on load
    const rect = el.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom > 0) {
      const delay = el.style.getPropertyValue('--delay') || '0s';
      el.style.transitionDelay = delay;
      setTimeout(() => el.classList.add('visible'), 100);
    } else {
      fadeObserver.observe(el);
    }
  });


  /* ===========================
     3. TESTIMONIAL SLIDER
  =========================== */
  const cards = document.querySelectorAll('.testi-card');
  const dots = document.querySelectorAll('.testi-dot');
  const prevBtn = document.getElementById('testiPrev');
  const nextBtn = document.getElementById('testiNext');
  const slider = document.getElementById('testiSlider');

  let current = 0;
  let autoplayTimer = null;
  let isTransitioning = false;
  const AUTO_INTERVAL = 4500;

  function getCardHeight() {
    let maxH = 0;
    cards.forEach(c => {
      c.style.opacity = '1';
      c.style.position = 'relative';
      c.style.transform = 'none';
      maxH = Math.max(maxH, c.offsetHeight);
      c.style.opacity = '';
      c.style.position = '';
      c.style.transform = '';
    });
    return maxH;
  }

  function setSliderHeight() {
    // Temporarily show all to measure
    cards.forEach(c => {
      c.style.position = 'relative';
      c.style.opacity = '1';
      c.style.pointerEvents = 'all';
    });
    const h = slider.offsetHeight;
    cards.forEach((c, i) => {
      c.style.position = '';
      c.style.opacity = '';
      c.style.pointerEvents = '';
    });
    slider.style.minHeight = h + 'px';
  }

  function goTo(index, direction = 1) {
    if (isTransitioning || index === current) return;
    isTransitioning = true;

    const prev = current;
    current = index;

    // Remove active from old card
    cards[prev].classList.remove('active');
    cards[prev].classList.add('exit');

    // Reset direction
    cards[current].style.transform = direction > 0 ? 'translateX(30px)' : 'translateX(-30px)';
    cards[current].style.opacity = '0';

    requestAnimationFrame(() => {
      cards[current].style.transition = 'all 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
      cards[current].classList.add('active');

      setTimeout(() => {
        cards[prev].classList.remove('exit');
        cards[current].style.transform = '';
        cards[current].style.opacity = '';
        isTransitioning = false;
      }, 520);
    });

    // Update dots
    dots.forEach((dot, i) => {
      dot.classList.toggle('active', i === current);
    });
  }

  function next() {
    const n = (current + 1) % cards.length;
    goTo(n, 1);
  }

  function prev() {
    const n = (current - 1 + cards.length) % cards.length;
    goTo(n, -1);
  }

  function startAutoplay() {
    stopAutoplay();
    autoplayTimer = setInterval(next, AUTO_INTERVAL);
  }

  function stopAutoplay() {
    if (autoplayTimer) {
      clearInterval(autoplayTimer);
      autoplayTimer = null;
    }
  }

  if (nextBtn) nextBtn.addEventListener('click', () => { stopAutoplay(); next(); startAutoplay(); });
  if (prevBtn) prevBtn.addEventListener('click', () => { stopAutoplay(); prev(); startAutoplay(); });

  dots.forEach((dot, i) => {
    dot.addEventListener('click', () => {
      stopAutoplay();
      const dir = i > current ? 1 : -1;
      goTo(i, dir);
      startAutoplay();
    });
  });

  // Touch swipe support
  if (slider) {
    let touchStartX = 0;
    let touchEndX = 0;

    slider.addEventListener('touchstart', e => {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    slider.addEventListener('touchend', e => {
      touchEndX = e.changedTouches[0].screenX;
      const diff = touchStartX - touchEndX;
      if (Math.abs(diff) > 40) {
        stopAutoplay();
        diff > 0 ? next() : prev();
        startAutoplay();
      }
    }, { passive: true });
  }

  startAutoplay();

  // Pause on hover
  const testiWrapper = document.querySelector('.testi-slider-wrapper');
  if (testiWrapper) {
    testiWrapper.addEventListener('mouseenter', stopAutoplay);
    testiWrapper.addEventListener('mouseleave', startAutoplay);
  }


  /* ===========================
     4. SMOOTH SCROLL
  =========================== */
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const offset = 80;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });


  /* ===========================
     5. BENEFIT CARD STAGGER
  =========================== */
  const benefitCards = document.querySelectorAll('.benefit-card');
  const productCards = document.querySelectorAll('.product-card');
  const bonusCards = document.querySelectorAll('.bonus-card');
  const guaranteeCards = document.querySelectorAll('.guarantee-card');

  function staggerObserve(elements) {
    const obs = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const delay = entry.target.style.getPropertyValue('--delay') || '0s';
          entry.target.style.transitionDelay = delay;
          entry.target.classList.add('visible');
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });
    elements.forEach(el => obs.observe(el));
  }

  staggerObserve(benefitCards);
  staggerObserve(productCards);
  staggerObserve(bonusCards);
  staggerObserve(guaranteeCards);


  /* ===========================
     6. FLOATING BADGE ANIMATION
  =========================== */
  const badges = document.querySelectorAll('.floating-badge');
  badges.forEach((badge, i) => {
    badge.style.animation = `floatBadge ${2.5 + i * 0.5}s ease-in-out infinite`;
    badge.style.animationDelay = `${i * 0.8}s`;
  });

  // Inject keyframes
  const styleEl = document.createElement('style');
  styleEl.textContent = `
    @keyframes floatBadge {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-8px); }
    }
  `;
  document.head.appendChild(styleEl);


  /* ===========================
     7. SCROLL PROGRESS HINT
  =========================== */
  // Fade scroll indicator when page is scrolled
  const scrollIndicator = document.querySelector('.scroll-indicator');
  if (scrollIndicator) {
    window.addEventListener('scroll', () => {
      const opacity = Math.max(0, 1 - window.scrollY / 200);
      scrollIndicator.style.opacity = String(opacity * 0.5);
    }, { passive: true });
  }


  /* ===========================
     8. ACTIVE NAV LINKS
  =========================== */
  const sections = document.querySelectorAll('section[id]');
  const navAnchors = document.querySelectorAll('.nav-links a[href^="#"]');

  function updateActiveNav() {
    let current = '';
    sections.forEach(section => {
      const top = section.offsetTop - 120;
      if (window.scrollY >= top) current = section.id;
    });
    navAnchors.forEach(a => {
      a.style.color = '';
      if (a.getAttribute('href') === `#${current}`) {
        a.style.color = 'var(--gold-dark)';
      }
    });
  }

  window.addEventListener('scroll', updateActiveNav, { passive: true });


  /* ===========================
     9. PRODUCT CARD PARALLAX TILT
  =========================== */
  const allCards = document.querySelectorAll('.product-card, .benefit-card');
  allCards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = (e.clientX - rect.left) / rect.width - 0.5;
      const y = (e.clientY - rect.top) / rect.height - 0.5;
      card.style.transform = `translateY(-6px) rotateX(${-y * 4}deg) rotateY(${x * 4}deg)`;
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
      card.style.transition = 'all 0.4s ease';
    });
    card.addEventListener('mouseenter', () => {
      card.style.transition = 'transform 0.1s ease, box-shadow 0.35s ease, border-color 0.35s ease';
    });
  });


  /* ===========================
     10. COUNTER ANIMATION
  =========================== */
  function animateCounter(el, target, suffix = '') {
    let start = 0;
    const duration = 1500;
    const step = (timestamp) => {
      if (!start) start = timestamp;
      const progress = Math.min((timestamp - start) / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.floor(eased * target) + suffix;
      if (progress < 1) requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  }

  // Observe trust numbers
  const trustNums = document.querySelectorAll('.trust-num');
  const counterObs = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const text = el.textContent.trim();
        if (text.includes('2.000')) animateCounter(el, 2000, '+');
        else if (text.includes('100')) animateCounter(el, 100, '%');
        counterObs.unobserve(el);
      }
    });
  }, { threshold: 0.5 });

  trustNums.forEach(el => counterObs.observe(el));


  /* ===========================
     11. INIT VISIBILITY
  =========================== */
  // Trigger visibility check on load for elements already in view
  setTimeout(() => {
    window.dispatchEvent(new Event('scroll'));
  }, 100);

});