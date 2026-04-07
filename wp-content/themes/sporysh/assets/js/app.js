// ============================================
// SPORYSH — App Logic (WordPress theme version)
// Translations handled server-side via Polylang
// ============================================

// --- Page progress bar ---
const progressBar = document.getElementById('page-progress');
if (progressBar) {
  window.addEventListener('scroll', () => {
    const total = document.documentElement.scrollHeight - window.innerHeight;
    const pct = total > 0 ? (window.scrollY / total) * 100 : 0;
    progressBar.style.width = pct + '%';
  }, { passive: true });
}

// --- Custom cursor ---
const cursor = document.getElementById('cursor');
if (cursor && window.matchMedia('(pointer: fine)').matches) {
  let cx = -100, cy = -100;
  document.addEventListener('mousemove', e => {
    cx = e.clientX; cy = e.clientY;
    cursor.style.left = cx + 'px';
    cursor.style.top  = cy + 'px';
  });
  document.querySelectorAll('a, button, .filter-btn, .product-card, .category-card, .cert-card').forEach(el => {
    el.addEventListener('mouseenter', () => cursor.classList.add('cursor--hover'));
    el.addEventListener('mouseleave', () => cursor.classList.remove('cursor--hover'));
  });
}

document.addEventListener('DOMContentLoaded', () => {
  // Initialize Lucide icons
  if (typeof lucide !== 'undefined') {
    lucide.createIcons();
  }

  // --- Hero video: force load + play ---
  const heroVideo = document.querySelector('.hero__video');
  if (heroVideo) {
    heroVideo.muted = true;
    heroVideo.loop = true;
    heroVideo.playsInline = true;

    if (!heroVideo.currentSrc || heroVideo.readyState === 0) {
      const source = heroVideo.querySelector('source');
      if (source) {
        heroVideo.src = source.src;
      }
    }

    heroVideo.load();
    heroVideo.play().catch(() => {
      const playOnInteract = () => {
        heroVideo.play();
      };
      document.addEventListener('click', playOnInteract, { once: true });
      document.addEventListener('touchstart', playOnInteract, { once: true });
    });
  }

  // --- Header scroll effect ---
  const header = document.getElementById('header');
  const backToTop = document.getElementById('backToTop');

  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      header.classList.add('header--scrolled');
    } else {
      header.classList.remove('header--scrolled');
    }

    if (window.scrollY > 400) {
      backToTop.classList.add('visible');
    } else {
      backToTop.classList.remove('visible');
    }
  });

  // --- Back to top ---
  if (backToTop) {
    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // --- Mobile menu ---
  const mobileToggle = document.getElementById('mobileToggle');
  const mobileNav = document.getElementById('mobileNav');

  if (mobileToggle && mobileNav) {
    mobileToggle.addEventListener('click', () => {
      const isOpen = mobileToggle.getAttribute('aria-expanded') === 'true';
      mobileToggle.setAttribute('aria-expanded', !isOpen);
      mobileNav.classList.toggle('open');
    });

    document.querySelectorAll('.mobile-nav__link').forEach(link => {
      link.addEventListener('click', () => {
        mobileToggle.setAttribute('aria-expanded', 'false');
        mobileNav.classList.remove('open');
      });
    });
  }

  // --- Active nav link tracking ---
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-link, .mobile-nav__link');

  const observerOptions = {
    root: null,
    rootMargin: '-80px 0px -50% 0px',
    threshold: 0
  };

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const id = entry.target.id;
        navLinks.forEach(link => {
          link.classList.toggle('active', link.getAttribute('data-section') === id);
        });
      }
    });
  }, observerOptions);

  sections.forEach(section => observer.observe(section));

  // --- Product search ---
  const searchInput = document.getElementById('productSearch');
  if (searchInput) {
    searchInput.addEventListener('input', (e) => {
      const query = e.target.value.toLowerCase().trim();
      const cards = document.querySelectorAll('.product-card');
      let visibleCount = 0;

      cards.forEach(card => {
        const name = card.getAttribute('data-name') || '';
        const category = card.getAttribute('data-category') || '';
        const activeFilter = document.querySelector('.filter-btn.active')?.getAttribute('data-filter') || 'all';

        const matchesSearch = !query || name.includes(query);
        const matchesFilter = activeFilter === 'all' || category === activeFilter;

        if (matchesSearch && matchesFilter) {
          card.classList.remove('hidden');
          visibleCount++;
        } else {
          card.classList.add('hidden');
        }
      });

      const emptyMsg = document.getElementById('productsEmpty');
      if (emptyMsg) {
        emptyMsg.style.display = visibleCount === 0 ? 'block' : 'none';
      }
    });
  }

  // --- Scroll reveal ---
  const revealElements = document.querySelectorAll('.section-header, .category-card, .product-card, .cert-card, .about__image, .about__content, .contact-block, .faq__item, .location__map, .location__map-panel, .export-story__media, .export-story__info, .export-story__maps-header, .manager-card');

  revealElements.forEach(el => el.classList.add('reveal'));

  const revealObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

  revealElements.forEach(el => revealObserver.observe(el));

  // --- Animate counters ---
  const stats = document.querySelectorAll('.stat__number[data-target]');

  const counterObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = parseInt(el.getAttribute('data-target'));
        animateCounter(el, target);
        counterObserver.unobserve(el);
      }
    });
  }, { threshold: 0.5 });

  stats.forEach(stat => counterObserver.observe(stat));

  // --- Map draw-in animation ---
  initMapDrawAnimation();

  function initMapDrawAnimation() {
    const panels = document.querySelectorAll('.location__map-panel');
    if (!panels.length) return;

    panels.forEach(panel => {
      const overlay = panel.querySelector('.location__map-overlay');
      if (!overlay) return;
      overlay.classList.add('js-ready');
      overlay.querySelectorAll('line, path').forEach(el => {
        const len = el.getTotalLength();
        const isPath = el.tagName.toLowerCase() === 'path';
        el.style.strokeDasharray = `${isPath ? 2 : 1.5} ${isPath ? 2 : 1.5}`;
        el.style.strokeDashoffset = String(len + (isPath ? 2 : 1.5));
        el.style.transition = 'none';
      });
    });

    const mapObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        drawMapPanel(entry.target);
        mapObserver.unobserve(entry.target);
      });
    }, { threshold: 0.15 });

    panels.forEach(p => mapObserver.observe(p));
  }

  function drawMapPanel(panel) {
    const overlay = panel.querySelector('.location__map-overlay');
    if (!overlay) return;

    const lines = Array.from(overlay.querySelectorAll('line'));
    const paths = Array.from(overlay.querySelectorAll('path'));

    function drawEl(el, delay, duration) {
      const isPath = el.tagName.toLowerCase() === 'path';
      const marchAnim = isPath ? 'map-march-path 2.5s linear infinite' : 'map-march 1.8s linear infinite';
      setTimeout(() => {
        el.style.transition = `stroke-dashoffset ${duration}ms cubic-bezier(0.25, 1, 0.5, 1)`;
        el.style.strokeDashoffset = '0';
        setTimeout(() => {
          el.style.transition = '';
          el.style.strokeDashoffset = '';
          el.style.animation = marchAnim;
        }, duration + 60);
      }, delay);
    }

    const halfL = Math.floor(lines.length / 2);
    for (let i = 0; i < halfL; i++) {
      const delay = 80 + i * 55;
      drawEl(lines[i], delay, 480);
      drawEl(lines[i + halfL], delay, 480);
    }

    const halfP = Math.floor(paths.length / 2);
    for (let i = 0; i < halfP; i++) {
      const delay = 120 + i * 160;
      drawEl(paths[i], delay, 650);
      drawEl(paths[i + halfP], delay, 650);
    }
  }

  function animateCounter(el, target) {
    const duration = 1500;
    const start = performance.now();

    function update(currentTime) {
      const elapsed = currentTime - start;
      const progress = Math.min(elapsed / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      const current = Math.round(eased * target);
      el.textContent = current;

      if (progress < 1) {
        requestAnimationFrame(update);
      }
    }

    requestAnimationFrame(update);
  }

  // --- Mobile tap-to-flip product cards ---
  if ('ontouchstart' in window || navigator.maxTouchPoints > 0) {
    document.querySelectorAll('.product-card').forEach(card => {
      card.addEventListener('click', (e) => {
        if (e.target.closest('a')) return;
        card.classList.toggle('flipped');
      });
    });
  }

  // --- Cookie banner ---
  const cookieBanner = document.getElementById('cookieBanner');
  if (cookieBanner) {
    setTimeout(() => {
      cookieBanner.classList.add('show');
    }, 2000);
  }
});

// --- Global filter function ---
function filterProducts(category) {
  const cards = document.querySelectorAll('.product-card');
  const buttons = document.querySelectorAll('.filter-btn');
  const searchInput = document.getElementById('productSearch');
  const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
  let visibleCount = 0;

  buttons.forEach(btn => {
    btn.classList.toggle('active', btn.getAttribute('data-filter') === category);
  });

  cards.forEach(card => {
    const cardCategory = card.getAttribute('data-category');
    const name = card.getAttribute('data-name') || '';
    const matchesFilter = category === 'all' || cardCategory === category;
    const matchesSearch = !query || name.includes(query);

    if (matchesFilter && matchesSearch) {
      card.classList.remove('hidden');
      visibleCount++;
    } else {
      card.classList.add('hidden');
    }
  });

  const emptyMsg = document.getElementById('productsEmpty');
  if (emptyMsg) {
    emptyMsg.style.display = visibleCount === 0 ? 'block' : 'none';
  }
}

// --- Cookie actions ---
function acceptCookies() {
  const banner = document.getElementById('cookieBanner');
  if (banner) banner.classList.remove('show');
}

function rejectCookies() {
  const banner = document.getElementById('cookieBanner');
  if (banner) banner.classList.remove('show');
}

// --- Contact form ---
function handleContactForm(e) {
  e.preventDefault();
  const form = e.target;
  const btn = form.querySelector('.contact-form__submit');
  const success = document.getElementById('contactSuccess');

  btn.disabled = true;
  btn.style.opacity = '0.7';

  setTimeout(() => {
    form.reset();
    btn.disabled = false;
    btn.style.opacity = '';
    if (success) {
      success.style.display = 'flex';
      if (typeof lucide !== 'undefined') lucide.createIcons();
      setTimeout(() => { success.style.display = 'none'; }, 5000);
    }
  }, 800);
}
