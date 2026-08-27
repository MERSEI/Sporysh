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
    'header-phone': '+380 97 181 3631',

    // Hero
    'hero-badge': 'Premium B2B Supplier',
    'hero-title-1': 'Premium Herbal',
    'hero-title-2': 'Raw Materials',
    'hero-subtitle': 'SPORYSH offers a curated range of plant raw materials for B2B partners. Our products undergo careful selection and meet European quality standards.',
    'btn-explore': 'Open Catalog',
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
    'header-phone': '+380 97 181 3631',

    // Hero
    'hero-badge': 'Преміум B2B Постачальник',
    'hero-title-1': 'Преміум Рослинні',
    'hero-title-2': 'Сировини',
    'hero-subtitle': 'SPORYSH пропонує відібраний асортимент рослинних сировин для B2B партнерів. Наші продукти проходять ретельний відбір і відповідають європейським стандартам якості.',
    'btn-explore': 'Відкрити Каталог',
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


// --- Page progress bar ---
const progressBar = document.getElementById('page-progress');
if (progressBar) {
  window.addEventListener('scroll', () => {
    const total = document.documentElement.scrollHeight - window.innerHeight;
    const pct = total > 0 ? (window.scrollY / total) * 100 : 0;
    progressBar.style.width = pct + '%';
  }, { passive: true });
}

// Custom cursor disabled

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

    // Mark overlays as JS-ready and pre-hide all lines/paths
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

    // Lines: first half = white shadows, second half = orange — animate as pairs
    const halfL = Math.floor(lines.length / 2);
    for (let i = 0; i < halfL; i++) {
      const delay = 80 + i * 55;
      drawEl(lines[i], delay, 480);
      drawEl(lines[i + halfL], delay, 480);
    }

    // Paths: first half = white shadows, second half = orange
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

// --- Catalog page: photo upgrades, badge hide, PDF button ---
document.addEventListener('DOMContentLoaded', function () {
  var catCards = document.querySelectorAll('.cat-card');
  if (!catCards.length) return;

  // Better nature photos for specific plants (replacements)
  var REPLACEMENTS = {
    'Dandelion root': 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b7/Taraxacum_genus.jpg/800px-Taraxacum_genus.jpg',
    'Pine buds': 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/97/Pinus_sylvestris_en_flor.jpg/800px-Pinus_sylvestris_en_flor.jpg',
    'Buckthorn bark': 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/Frangula_alnus_flowers_leaves.jpg/800px-Frangula_alnus_flowers_leaves.jpg'
  };

  catCards.forEach(function (card, idx) {
    var name = (card.querySelector('.cat-card__name') || {}).textContent || '';
    name = name.trim();

    // 1. Upgrade all back-side Wikimedia photos: 330px → 800px
    var backImg = card.querySelector('.cat-card__img--nature');
    if (backImg) {
      var newSrc = backImg.src.replace(/\/\d+px-/, '/800px-');
      if (REPLACEMENTS[name]) newSrc = REPLACEMENTS[name];
      backImg.src = newSrc;
    }

    // 2. Valerian root front: crop SPORYSH LLC watermark via style
    if (name === 'Valerian root') {
      var frontImg = card.querySelector('.cat-card__img--product');
      if (frontImg) {
        frontImg.style.objectPosition = 'center 20%';
      }
    }
  });

  // 3. Add centered "Download Full Catalog" button after the grid
  var grid = document.querySelector('.catalog__grid');
  if (grid && !document.querySelector('.catalog__pdf-wrap')) {
    var wrap = document.createElement('div');
    wrap.className = 'catalog__pdf-wrap';
    wrap.innerHTML = '<a href="/wp-content/themes/sporysh/assets/catalog/sporysh-catalog.pdf" class="btn btn--primary" download><i data-lucide="download"></i> Download Full Catalog</a>';
    grid.parentNode.insertBefore(wrap, grid.nextSibling);
    if (typeof lucide !== 'undefined') lucide.createIcons();
  }
});

// ==========================================
// CATALOG PAGE: 6-category filter system
// ==========================================
var CATALOG_CAT_MAP = {
  'herbs':   ['HERB'],
  'leaves':  ['LEAVES'],
  'flowers': ['FLOWERS', 'FLOWERS WITH LEAVES', 'FLOWERS WITH RACEMES'],
  'roots':   ['ROOT'],
  'berries': ['FRUITS'],
  'other':   ['BARK', 'BUDS', 'CONE', 'OTHER', 'POMACE', 'RACEMES', 'SEEDS', 'SHELL']
};

var CATALOG_CATS_UI = [
  { slug: 'all',     label: 'All' },
  { slug: 'herbs',   label: 'Herbs' },
  { slug: 'leaves',  label: 'Leaves' },
  { slug: 'flowers', label: 'Flowers' },
  { slug: 'roots',   label: 'Roots' },
  { slug: 'berries', label: 'Berries' },
  { slug: 'other',   label: 'Other' }
];

function filterCatalog(slug) {
  var cats = slug === 'all' ? null : (CATALOG_CAT_MAP[slug] || null);
  var cards = document.querySelectorAll('.cat-card, .product-card');
  var visibleCount = 0;

  cards.forEach(function(card) {
    var cardCat = (card.getAttribute('data-category') || '').toUpperCase().trim();
    var show = !cats || cats.indexOf(cardCat) !== -1;
    card.classList.toggle('hidden', !show);
    if (show) visibleCount++;
  });

  document.querySelectorAll('.cat-filter-btn').forEach(function(btn) {
    btn.classList.toggle('active', btn.getAttribute('data-slug') === slug);
  });

  var emptyMsg = document.getElementById('productsEmpty');
  if (emptyMsg) emptyMsg.style.display = visibleCount === 0 ? 'block' : 'none';

  return visibleCount;
}

document.addEventListener('DOMContentLoaded', function () {
  var catGrid = document.querySelector('.catalog__grid');
  if (!catGrid) return;

  // --- Hide the Elementor filter (search input approach — safe) ---
  // The search input exists ONLY in the Elementor filter row, not inside .catalog__grid
  var searchInput = document.querySelector('input[type="search"], input[placeholder*="Search"], input[placeholder*="search"]');
  if (searchInput && !catGrid.contains(searchInput)) {
    var toHide = searchInput;
    for (var j = 0; j < 8; j++) {
      if (!toHide.parentElement) break;
      var p = toHide.parentElement;
      if (p.contains(catGrid)) break; // STOP — never hide an ancestor of our catalog grid
      toHide = p;
      var cls2 = toHide.className || '';
      if (/elementor-section|e-con\b|elementor-widget-wrap/.test(cls2)) break;
    }
    if (!toHide.contains(catGrid)) {
      toHide.style.setProperty('display', 'none', 'important');
    }
  }

  // Inject 6-button filter bar before the grid
  if (!document.querySelector('.cat-filter-bar')) {
    var filterBar = document.createElement('div');
    filterBar.className = 'cat-filter-bar';

    CATALOG_CATS_UI.forEach(function(cat) {
      var btn = document.createElement('button');
      btn.className = 'cat-filter-btn';
      btn.setAttribute('data-slug', cat.slug);
      btn.setAttribute('data-filter', cat.slug);
      btn.textContent = cat.label;
      btn.addEventListener('click', function() { filterCatalog(cat.slug); });
      filterBar.appendChild(btn);
    });

    catGrid.parentNode.insertBefore(filterBar, catGrid);
  }

  // Apply ?cat= URL param
  var params = new URLSearchParams(window.location.search);
  var cat = params.get('cat');
  var activeSlug = (cat && CATALOG_CAT_MAP[cat]) ? cat : 'all';
  filterCatalog(activeSlug);

  if (cat) {
    setTimeout(function() {
      catGrid.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }, 400);
  }
});

// --- Products page hero: field-video.mp4 bg + remove photos + center text ---
document.addEventListener('DOMContentLoaded', function () {
  var hero = document.querySelector('.page-hero');
  if (!hero) return;

  // Inject field-video.mp4 as background video
  var bgDiv = document.createElement('div');
  bgDiv.className = 'page-hero__video-bg';
  bgDiv.innerHTML =
    '<video class="page-hero__video" autoplay muted loop playsinline preload="auto">' +
    '<source src="/wp-content/themes/sporysh/assets/field-video.mp4" type="video/mp4">' +
    '</video>' +
    '<div class="page-hero__overlay"></div>';
  hero.insertBefore(bgDiv, hero.firstChild);

  // Clear any Elementor/inline background-image so our video is visible
  hero.style.backgroundImage = 'none';
  hero.style.backgroundColor = 'transparent';

  // Hide the photos column (any child of page-hero__inner that contains images)
  var inner = hero.querySelector('.page-hero__inner');
  if (inner) {
    Array.from(inner.children).forEach(function(col) {
      if (col.querySelector('img, picture, figure')) {
        col.style.display = 'none';
      }
    });
    inner.classList.add('page-hero__inner--centered');
  }
});

// ==========================================
// FLIP CARDS: nature photo mapping
// ==========================================
var PLANT_NATURE_PHOTOS = {
  // Herbs
  'peppermint':          'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Mint-leaves-2007.jpg/1280px-Mint-leaves-2007.jpg',
  'mint':                'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Mint-leaves-2007.jpg/1280px-Mint-leaves-2007.jpg',
  'mentha':              'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b4/Mint-leaves-2007.jpg/1280px-Mint-leaves-2007.jpg',
  'chamomile':           'https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Chamomile%40original_size.jpg/1280px-Chamomile%40original_size.jpg',
  'chamomilla':          'https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Chamomile%40original_size.jpg/1280px-Chamomile%40original_size.jpg',
  'matricaria':          'https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Chamomile%40original_size.jpg/1280px-Chamomile%40original_size.jpg',
  'valerian':            'https://upload.wikimedia.org/wikipedia/commons/thumb/1/17/Valeriana_officinalis_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-143.jpg/800px-Valeriana_officinalis_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-143.jpg',
  'valeriana':           'https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Valeriana_officinalis_Lam.jpg/1280px-Valeriana_officinalis_Lam.jpg',
  'thyme':               'https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Thymus_vulgaris_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-274.jpg/800px-Thymus_vulgaris_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-274.jpg',
  'thymus':              'https://upload.wikimedia.org/wikipedia/commons/thumb/3/37/Thymus_vulgaris_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-274.jpg/800px-Thymus_vulgaris_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-274.jpg',
  'oregano':             'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Origanum_vulgare_-_harilik_pune.jpg/1280px-Origanum_vulgare_-_harilik_pune.jpg',
  'origanum':            'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Origanum_vulgare_-_harilik_pune.jpg/1280px-Origanum_vulgare_-_harilik_pune.jpg',
  'sage':                'https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Salvia_officinalis_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-257.jpg/800px-Salvia_officinalis_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-257.jpg',
  'salvia':              'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Salvia_officinalis_CTD.jpg/1280px-Salvia_officinalis_CTD.jpg',
  'lavender':            'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Lavendel_kvetouci.jpg/1280px-Lavendel_kvetouci.jpg',
  'lavandula':           'https://upload.wikimedia.org/wikipedia/commons/thumb/7/7d/Lavendel_kvetouci.jpg/1280px-Lavendel_kvetouci.jpg',
  'lemon balm':          'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Melissa_officinalis_003.JPG/1280px-Melissa_officinalis_003.JPG',
  'melissa':             'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Melissa_officinalis_003.JPG/1280px-Melissa_officinalis_003.JPG',
  'st. john':            'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Hypericum_perforatum_flowers.jpg/1280px-Hypericum_perforatum_flowers.jpg',
  'hypericum':           'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4e/Hypericum_perforatum_flowers.jpg/1280px-Hypericum_perforatum_flowers.jpg',
  'yarrow':              'https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Achillea_millefolium_a1.jpg/1280px-Achillea_millefolium_a1.jpg',
  'achillea':            'https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Achillea_millefolium_a1.jpg/1280px-Achillea_millefolium_a1.jpg',
  'nettle':              'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Brennnessel_%28Urtica_dioica%29.jpg/1280px-Brennnessel_%28Urtica_dioica%29.jpg',
  'urtica':              'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5a/Brennnessel_%28Urtica_dioica%29.jpg/1280px-Brennnessel_%28Urtica_dioica%29.jpg',
  // Flowers
  'calendula':           'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Calendula_Osteospermum.jpg/1280px-Calendula_Osteospermum.jpg',
  'marigold':            'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Calendula_Osteospermum.jpg/1280px-Calendula_Osteospermum.jpg',
  'elderflower':         'https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Sambucus_nigra_-_flowers_%28aka%29.jpg/1280px-Sambucus_nigra_-_flowers_%28aka%29.jpg',
  'sambucus':            'https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Sambucus_nigra_-_flowers_%28aka%29.jpg/1280px-Sambucus_nigra_-_flowers_%28aka%29.jpg',
  'linden':              'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Tilia_cordata_flowers.jpg/1280px-Tilia_cordata_flowers.jpg',
  'tilia':               'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/Tilia_cordata_flowers.jpg/1280px-Tilia_cordata_flowers.jpg',
  // Leaves / Trees
  'birch':               'https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Betula_pendula_forest_%28Trysil%29.jpg/1280px-Betula_pendula_forest_%28Trysil%29.jpg',
  'betula':              'https://upload.wikimedia.org/wikipedia/commons/thumb/5/55/Betula_pendula_forest_%28Trysil%29.jpg/1280px-Betula_pendula_forest_%28Trysil%29.jpg',
  'plantain':            'https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/Plantago_major_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-112.jpg/800px-Plantago_major_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-112.jpg',
  'plantago':            'https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Plantago_major_mass.jpg/1280px-Plantago_major_mass.jpg',
  'blackcurrant':        'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Blackcurrant_-_geograph.org.uk_-_960588.jpg/1280px-Blackcurrant_-_geograph.org.uk_-_960588.jpg',
  'ribes':               'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Blackcurrant_-_geograph.org.uk_-_960588.jpg/1280px-Blackcurrant_-_geograph.org.uk_-_960588.jpg',
  // Roots
  'dandelion':           'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Dandelion_Flowers_ry.jpg/1280px-Dandelion_Flowers_ry.jpg',
  'taraxacum':           'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bf/Dandelion_Flowers_ry.jpg/1280px-Dandelion_Flowers_ry.jpg',
  'echinacea':           'https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Echinacea_purpurea_-_Purple_Coneflower.jpg/1280px-Echinacea_purpurea_-_Purple_Coneflower.jpg',
  'liquorice':           'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Illustration_Glycyrrhiza_glabra0.jpg/800px-Illustration_Glycyrrhiza_glabra0.jpg',
  'glycyrrhiza':         'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Illustration_Glycyrrhiza_glabra0.jpg/800px-Illustration_Glycyrrhiza_glabra0.jpg',
  // Berries / Fruits
  'rosehip':             'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Rosa_canina_fruits.jpg/1280px-Rosa_canina_fruits.jpg',
  'rosa':                'https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/Rosa_canina_fruits.jpg/1280px-Rosa_canina_fruits.jpg',
  'hawthorn':            'https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Hawthorn_Berries.jpg/1280px-Hawthorn_Berries.jpg',
  'crataegus':           'https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Hawthorn_Berries.jpg/1280px-Hawthorn_Berries.jpg',
  'bilberry':            'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Blueberry_3148.jpg/1280px-Blueberry_3148.jpg',
  'vaccinium':           'https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Blueberry_3148.jpg/1280px-Blueberry_3148.jpg',
  'elderberry':          'https://upload.wikimedia.org/wikipedia/commons/thumb/6/66/Sambucus_nigra_-_berries_2009.jpg/1280px-Sambucus_nigra_-_berries_2009.jpg'
};

document.addEventListener('DOMContentLoaded', function () {
  // Find all flip-card back images that are broken or empty
  document.querySelectorAll('.product-card__back img, .elementor-flip-box__back img, [class*="flip"] img').forEach(function(img) {
    if (img.complete && img.naturalWidth === 0 || !img.src || img.src === window.location.href) {
      tryInjectPlantPhoto(img);
    } else {
      img.addEventListener('error', function() { tryInjectPlantPhoto(img); });
    }
  });

  // Also process alt-text-based detection (e.g. "Betula pendula birch tree in nature")
  document.querySelectorAll('img[alt*=" in nature"], img[alt*="plant"], img[alt*="herb"]').forEach(function(img) {
    img.addEventListener('error', function() { tryInjectPlantPhoto(img); });
    if (img.complete && img.naturalWidth === 0) tryInjectPlantPhoto(img);
  });
});

function tryInjectPlantPhoto(img) {
  var alt = (img.getAttribute('alt') || '').toLowerCase();
  var found = null;
  Object.keys(PLANT_NATURE_PHOTOS).forEach(function(key) {
    if (!found && alt.indexOf(key) !== -1) found = PLANT_NATURE_PHOTOS[key];
  });
  if (!found) {
    // Also check the card heading text
    var card = img.closest('[class*="card"], [class*="flip"], [class*="product"]');
    if (card) {
      var heading = card.querySelector('h2, h3, h4, .product-card__name, [class*="title"]');
      if (heading) {
        var text = heading.textContent.toLowerCase();
        Object.keys(PLANT_NATURE_PHOTOS).forEach(function(key) {
          if (!found && text.indexOf(key) !== -1) found = PLANT_NATURE_PHOTOS[key];
        });
      }
    }
  }
  if (found) {
    img.src = found;
    img.style.objectFit = 'cover';
    img.style.width = '100%';
    img.style.height = '100%';
  }
}
