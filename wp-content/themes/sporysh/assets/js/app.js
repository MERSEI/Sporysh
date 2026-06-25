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

  // --- Interactive map tooltips (country / oblast names) ---
  initMapTooltips();

  // --- Map zoom / pan ---
  initMapZoom();

  function initMapTooltips() {
    const regions = document.querySelectorAll('.location__map-base path[data-name]');
    if (!regions.length) return;
    let tip = document.querySelector('.map-tooltip');
    if (!tip) {
      tip = document.createElement('div');
      tip.className = 'map-tooltip';
      document.body.appendChild(tip);
    }
    regions.forEach(region => {
      region.addEventListener('mouseenter', () => {
        tip.textContent = region.getAttribute('data-name');
        tip.classList.add('is-visible');
      });
      region.addEventListener('mousemove', e => {
        tip.style.left = e.clientX + 'px';
        tip.style.top = e.clientY + 'px';
      });
      region.addEventListener('mouseleave', () => {
        tip.classList.remove('is-visible');
      });
    });
  }

  function initMapZoom() {
    document.querySelectorAll('.location__map-base').forEach(svg => {
      const b = svg.viewBox.baseVal;
      const VX = b.x, VY = b.y, VW = b.width, VH = b.height;
      const MAX = 6;
      let s = { x: VX, y: VY, w: VW, h: VH, z: 1 };

      const overlay = svg.parentElement.querySelector('.location__map-overlay');
      const R = overlay ? 100 / VW : 0;

      function clamp(v, lo, hi) { return Math.max(lo, Math.min(hi, v)); }

      function scaleOverlay() {
        if (!overlay) return;
        const inv = 1 / s.z;
        overlay.setAttribute('viewBox', `${s.x * R} ${s.y * R} ${s.w * R} ${s.h * R}`);
        overlay.querySelectorAll('line, path').forEach(el => {
          // Cache original stroke-width (HTML attribute, constant)
          if (!el.hasAttribute('data-sw')) {
            const sw = el.getAttribute('stroke-width');
            if (sw) el.setAttribute('data-sw', sw);
          }
          const origSW = el.getAttribute('data-sw');
          if (origSW) el.setAttribute('stroke-width', parseFloat(origSW) * inv);
          // Cache original dasharray (set by initMapDrawAnimation, retry until available)
          if (!el.getAttribute('data-da')) {
            const da = el.style.strokeDasharray || el.getAttribute('stroke-dasharray') || '';
            if (da.trim()) el.setAttribute('data-da', da.trim());
          }
          const origDA = el.getAttribute('data-da');
          if (origDA) el.style.strokeDasharray = origDA.replace(/[\d.]+/g, v => (parseFloat(v) * inv).toFixed(4));
        });
        overlay.querySelectorAll('circle').forEach(el => {
          if (!el.hasAttribute('data-r')) el.setAttribute('data-r', el.getAttribute('r') || '0');
          const origR = parseFloat(el.getAttribute('data-r'));
          if (origR) el.setAttribute('r', origR * inv);
        });
        // Update march keyframes so dash cycle = 1 period at current zoom
        let st = document.getElementById('map-march-dyn');
        if (!st) { st = document.createElement('style'); st.id = 'map-march-dyn'; document.head.appendChild(st); }
        st.textContent = `@keyframes map-march{to{stroke-dashoffset:${(-3 * inv).toFixed(4)}}}@keyframes map-march-path{to{stroke-dashoffset:${(-4 * inv).toFixed(4)}}}`;
      }

      function apply() {
        svg.setAttribute('viewBox', `${s.x} ${s.y} ${s.w} ${s.h}`);
        scaleOverlay();
      }

      function zoomAt(cx, cy, factor) {
        const nw = clamp(s.w / factor, VW / MAX, VW);
        const f = nw / s.w;
        s.x = cx - f * (cx - s.x);
        s.y = cy - f * (cy - s.y);
        s.w = nw; s.h = VH * (nw / VW); s.z = VW / nw;
        apply(); syncButtons();
      }

      function svgPt(clientX, clientY) {
        const pt = svg.createSVGPoint();
        pt.x = clientX; pt.y = clientY;
        return pt.matrixTransform(svg.getScreenCTM().inverse());
      }

      function syncButtons() {
        const wrap = svg.closest('.location__world-container');
        if (!wrap) return;
        wrap.querySelector('.map-zoom-in')?.toggleAttribute('disabled', s.z >= MAX);
        wrap.querySelector('.map-zoom-out')?.toggleAttribute('disabled', s.z <= 1);
        wrap.querySelector('.map-zoom-reset')?.toggleAttribute('disabled', s.z <= 1);
      }

      svg.addEventListener('wheel', e => {
        e.preventDefault();
        const p = svgPt(e.clientX, e.clientY);
        zoomAt(p.x, p.y, e.deltaY < 0 ? 1.25 : 0.8);
      }, { passive: false });

      let pd = null, pm = null;
      svg.addEventListener('touchstart', e => {
        if (e.touches.length === 2) {
          pd = Math.hypot(e.touches[0].clientX - e.touches[1].clientX, e.touches[0].clientY - e.touches[1].clientY);
          pm = svgPt((e.touches[0].clientX + e.touches[1].clientX) / 2, (e.touches[0].clientY + e.touches[1].clientY) / 2);
        }
      }, { passive: true });
      svg.addEventListener('touchmove', e => {
        if (e.touches.length === 2 && pd) {
          e.preventDefault();
          const d = Math.hypot(e.touches[0].clientX - e.touches[1].clientX, e.touches[0].clientY - e.touches[1].clientY);
          zoomAt(pm.x, pm.y, d / pd); pd = d;
        }
      }, { passive: false });
      svg.addEventListener('touchend', () => { pd = null; });

      let drag = false, ds = null, vs = null;
      svg.addEventListener('pointerdown', e => {
        if (s.z <= 1) return;
        drag = true; svg.setPointerCapture(e.pointerId);
        ds = svgPt(e.clientX, e.clientY); vs = { x: s.x, y: s.y };
        svg.style.cursor = 'grabbing';
      });
      svg.addEventListener('pointermove', e => {
        if (!drag) return;
        const p = svgPt(e.clientX, e.clientY);
        s.x = clamp(vs.x - (p.x - ds.x), VX - (VW - s.w), VX + (VW - s.w));
        s.y = clamp(vs.y - (p.y - ds.y), VY - (VH - s.h), VY + (VH - s.h));
        apply();
      });
      svg.addEventListener('pointerup', () => { drag = false; svg.style.cursor = ''; });

      const wrap = svg.closest('.location__world-container');
      if (wrap && !wrap.querySelector('.map-zoom-controls')) {
        const ctrl = document.createElement('div');
        ctrl.className = 'map-zoom-controls';
        ctrl.innerHTML = '<button class="map-zoom-in" title="Zoom in">+</button><button class="map-zoom-reset" title="Reset" disabled>⊙</button><button class="map-zoom-out" title="Zoom out" disabled>−</button>';
        wrap.appendChild(ctrl);
        ctrl.querySelector('.map-zoom-in').addEventListener('click', () => zoomAt(s.x + s.w / 2, s.y + s.h / 2, 1.5));
        ctrl.querySelector('.map-zoom-out').addEventListener('click', () => zoomAt(s.x + s.w / 2, s.y + s.h / 2, 1 / 1.5));
        ctrl.querySelector('.map-zoom-reset').addEventListener('click', () => {
          s = { x: VX, y: VY, w: VW, h: VH, z: 1 }; apply(); syncButtons();
        });
      }
    });
  }

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
