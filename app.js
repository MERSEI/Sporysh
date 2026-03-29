// ============================================
// SPORYSH — App Logic
// ============================================

/**
 * TRANSLATIONS CONFIG
 * Structure for easy WordPress migration: extract to theme options
 */
const translations = {
  en: {
    // Navigation
    'nav-home': 'Home',
    'nav-products': 'Products',
    'nav-about': 'About Us',
    'nav-contacts': 'Contacts',

    // Header
    'header-phone': '+380 97 496 4423',
    'header-email': 'info@sporysh.com',

    // Hero
    'hero-badge': 'Premium B2B Supplier',
    'hero-title-1': 'Premium Herbal',
    'hero-title-2': 'Raw Materials',
    'hero-subtitle': 'SPORYSH offers a curated range of plant raw materials for B2B partners. Our products undergo careful selection and meet European quality standards.',
    'btn-explore': 'Explore Catalog',
    'btn-contact': 'Contact Us',

    // Categories section
    'section-tag-range': 'Our Range',
    'section-title-categories': 'Product Categories',
    'section-desc-categories': 'Six directions of premium herbal raw materials, carefully sourced from ecologically clean regions of Ukraine.',
  },
  ua: {
    // Navigation
    'nav-home': 'Головна',
    'nav-products': 'Продукти',
    'nav-about': 'Про нас',
    'nav-contacts': 'Контакти',

    // Header
    'header-phone': '+380 97 496 4423',
    'header-email': 'info@sporysh.com',

    // Hero
    'hero-badge': 'Преміум B2B Постачальник',
    'hero-title-1': 'Преміум Рослинні',
    'hero-title-2': 'Сировини',
    'hero-subtitle': 'SPORYSH пропонує відібраний асортимент рослинних сировин для B2B партнерів. Наші продукти проходять ретельний відбір і відповідають європейським стандартам якості.',
    'btn-explore': 'Переглянути Каталог',
    'btn-contact': 'Зв\'язатися',

    // Categories section
    'section-tag-range': 'Наш асортимент',
    'section-title-categories': 'Категорії продуктів',
    'section-desc-categories': 'Шість напрямків преміум рослинних сировин, ретельно відібраних з екологічно чистих регіонів України.',
  }
};

/**
 * LANGUAGE MANAGER
 */
class LanguageManager {
  constructor() {
    this.currentLang = this.getSavedLanguage() || 'en';
    this.init();
  }

  getSavedLanguage() {
    return localStorage.getItem('sporysh-lang');
  }

  saveLang(lang) {
    localStorage.setItem('sporysh-lang', lang);
  }

  init() {
    this.applyLanguage(this.currentLang);
    this.updateLangButton();
  }

  applyLanguage(lang) {
    this.currentLang = lang;
    document.documentElement.lang = lang;

    document.querySelectorAll('[data-i18n]').forEach(el => {
      const key = el.getAttribute('data-i18n');
      if (translations[lang] && translations[lang][key]) {
        el.textContent = translations[lang][key];
      }
    });
  }

  updateLangButton() {
    const langSwitch = document.getElementById('langSwitch');
    if (!langSwitch) return;

    const active = langSwitch.querySelector('.lang-switch__active');
    const inactive = langSwitch.querySelector('.lang-switch__inactive');

    if (this.currentLang === 'en') {
      active.textContent = 'EN';
      inactive.textContent = 'UA';
    } else {
      active.textContent = 'UA';
      inactive.textContent = 'EN';
    }
  }

  toggle() {
    const newLang = this.currentLang === 'en' ? 'ua' : 'en';
    this.applyLanguage(newLang);
    this.saveLang(newLang);
    this.updateLangButton();
  }
}

// Initialize language manager
const langManager = new LanguageManager();


document.addEventListener('DOMContentLoaded', () => {
  // Initialize Lucide icons
  if (typeof lucide !== 'undefined') {
    lucide.createIcons();
  }

  // --- Hero video: force load + play ---
  const heroVideo = document.querySelector('.hero__video');
  if (heroVideo) {
    // Ensure correct attributes
    heroVideo.muted = true;
    heroVideo.loop = true;
    heroVideo.playsInline = true;

    // If src not set yet (some browsers skip <source> parsing), set it manually
    if (!heroVideo.currentSrc || heroVideo.readyState === 0) {
      const source = heroVideo.querySelector('source');
      if (source) {
        heroVideo.src = source.src;
      }
    }

    // Force load, then play
    heroVideo.load();
    heroVideo.play().catch(() => {
      // Autoplay blocked — play on first user interaction
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

  // --- Scroll reveal (без hero__scroll) ---
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

  // --- Language switch ---
  const langSwitch = document.getElementById('langSwitch');
  if (langSwitch) {
    langSwitch.addEventListener('click', () => {
      langManager.toggle();
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

// --- Contact form ---
function handleContactForm(e) {
  e.preventDefault();
  const form = e.target;
  const btn = form.querySelector('.contact-form__submit');
  const success = document.getElementById('contactSuccess');

  btn.disabled = true;
  btn.style.opacity = '0.7';

  // Simulate send (replace with real endpoint if needed)
  setTimeout(() => {
    form.reset();
    btn.disabled = false;
    btn.style.opacity = '';
    success.style.display = 'flex';
    if (typeof lucide !== 'undefined') lucide.createIcons();
    setTimeout(() => { success.style.display = 'none'; }, 5000);
  }, 800);
}
