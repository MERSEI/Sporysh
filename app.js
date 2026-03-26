// ============================================
// SPORYSH — App Logic
// ============================================

document.addEventListener('DOMContentLoaded', () => {
  // Initialize Lucide icons
  if (typeof lucide !== 'undefined') {
    lucide.createIcons();
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
  backToTop.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });

  // --- Mobile menu ---
  const mobileToggle = document.getElementById('mobileToggle');
  const mobileNav = document.getElementById('mobileNav');

  mobileToggle.addEventListener('click', () => {
    const isOpen = mobileToggle.getAttribute('aria-expanded') === 'true';
    mobileToggle.setAttribute('aria-expanded', !isOpen);
    mobileNav.classList.toggle('open');
  });

  // Close mobile nav on link click
  document.querySelectorAll('.mobile-nav__link').forEach(link => {
    link.addEventListener('click', () => {
      mobileToggle.setAttribute('aria-expanded', 'false');
      mobileNav.classList.remove('open');
    });
  });

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
  const revealElements = document.querySelectorAll('.section-header, .category-card, .product-card, .cert-card, .about__image, .about__content, .contact-block, .faq__item, .location__map');

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

  function animateCounter(el, target) {
    const duration = 1500;
    const start = performance.now();

    function update(currentTime) {
      const elapsed = currentTime - start;
      const progress = Math.min(elapsed / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3); // ease out cubic
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
        // Don't flip if clicking a link inside the card
        if (e.target.closest('a')) return;
        card.classList.toggle('flipped');
      });
    });
  }

  // --- Cookie banner ---
  const cookieBanner = document.getElementById('cookieBanner');
  // Show after 2 seconds
  setTimeout(() => {
    cookieBanner.classList.add('show');
  }, 2000);

  // --- Language switch placeholder ---
  const langSwitch = document.getElementById('langSwitch');
  if (langSwitch) {
    langSwitch.addEventListener('click', () => {
      const active = langSwitch.querySelector('.lang-switch__active');
      const inactive = langSwitch.querySelector('.lang-switch__inactive');
      const tempText = active.textContent;
      active.textContent = inactive.textContent;
      inactive.textContent = tempText;
      // In production, this would switch site language
    });
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
  document.getElementById('cookieBanner').classList.remove('show');
}

function rejectCookies() {
  document.getElementById('cookieBanner').classList.remove('show');
}
