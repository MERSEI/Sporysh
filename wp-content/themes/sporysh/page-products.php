<?php
/**
 * Template Name: Products Catalog
 *
 * Faithful port of the live static products page (products.html):
 * page hero, 12 featured flip cards, full 175-product catalog (grouped),
 * filters and search. Catalog data is baked in below (no admin entry needed).
 * Catalog-specific styles live in style.css (PRODUCTS CATALOG PAGE section).
 * Header scroll / mobile menu / back-to-top / cookies are handled globally
 * by the theme (header.php / footer.php / assets/js/app.js).
 */
$tdir = get_template_directory_uri();
$home = esc_url( home_url( '/' ) );
get_header();
?>

<section class="page-hero">
  <div class="container">
    <div class="page-hero__breadcrumb">
      <a href="<?php echo $home; ?>">Home</a>
      <span class="sep">/</span>
      <span class="current">Products</span>
    </div>
    <div class="page-hero__inner">
      <div>
        <h1>Premium<br><em>Herbal</em><br>Catalog</h1>
        <p class="page-hero__desc">Plant raw materials sourced from 11 ecologically clean regions of Ukraine. Carefully selected, processed and exported to B2B partners across 21 countries.</p>
        <div class="page-hero__stats">
          <div>
            <span class="page-hero__stat-num">175</span>
            <span class="page-hero__stat-label">Product Types</span>
          </div>
          <div>
            <span class="page-hero__stat-num">19</span>
            <span class="page-hero__stat-label">Categories</span>
          </div>
          <div>
            <span class="page-hero__stat-num">21</span>
            <span class="page-hero__stat-label">Export Countries</span>
          </div>
        </div>
      </div>

      <div class="page-hero__visual">
        <div class="page-hero__visual-img">
          <img src="<?php echo $tdir; ?>/assets/products/linden-flowers.webp" alt="Linden flowers" loading="eager">
        </div>
        <div class="page-hero__visual-img">
          <img src="<?php echo $tdir; ?>/assets/products/nettle-herb.webp" alt="Nettle herb" loading="eager">
        </div>
        <div class="page-hero__visual-img">
          <img src="<?php echo $tdir; ?>/assets/products/rosehips.webp" alt="Rosehips" loading="eager">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==================== CATALOG ==================== -->
<section class="catalog">
  <div class="container">

    <!-- Controls -->
    <div class="catalog__controls">
      <div class="catalog__filters" id="catalogFilters">
        <button class="filter-btn active" data-filter="all" onclick="filterCatalog('all')">All</button>
        <button class="filter-btn" data-filter="herbs" onclick="filterCatalog('herbs')">Herbs</button>
        <button class="filter-btn" data-filter="leaves" onclick="filterCatalog('leaves')">Leaves</button>
        <button class="filter-btn" data-filter="flowers" onclick="filterCatalog('flowers')">Flowers</button>
        <button class="filter-btn" data-filter="roots" onclick="filterCatalog('roots')">Roots</button>
        <button class="filter-btn" data-filter="berries" onclick="filterCatalog('berries')">Berries</button>
        <button class="filter-btn" data-filter="others" onclick="filterCatalog('others')">Others</button>
      </div>
      <div class="catalog__search-wrap">
        <i data-lucide="search" class="catalog__search-icon"></i>
        <input
          type="text"
          class="catalog__search-input"
          id="catalogSearch"
          placeholder="Search by name or Latin name…"
          autocomplete="off"
          oninput="searchCatalog(this.value)"
        >
      </div>
    </div>

    <!-- Grid -->
    <div class="catalog__grid" id="catalogGrid">

      <!-- 1. Nettle herb -->
      <div class="cat-card" data-category="herbs" data-name="nettle herb urtica dioica кропива трава">
        <div class="cat-card__img-wrap">
          <img class="cat-card__img cat-card__img--product" src="<?php echo $tdir; ?>/assets/products/nettle-herb.webp" alt="Nettle herb dried raw material" loading="eager" width="600" height="600">
          <img class="cat-card__img cat-card__img--nature" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Fen_nettle_%28Urtica_dioica_ssp._galeopsifolia%29_-_geograph.org.uk_-_5423125.jpg/330px-Fen_nettle_%28Urtica_dioica_ssp._galeopsifolia%29_-_geograph.org.uk_-_5423125.jpg" alt="Urtica dioica growing in nature" loading="lazy" width="600" height="600">
          <span class="cat-card__badge">Herbs</span>
          <span class="cat-card__badge--nature">In Nature</span>
          <div class="cat-card__overlay">
            <div class="cat-card__overlay-inner">
              <span class="cat-card__overlay-name">Nettle herb</span>
              <span class="cat-card__overlay-latin">Urtica dioica</span>
            </div>
          </div>
        </div>
        <div class="cat-card__info">
          <span class="cat-card__name">Nettle herb</span>
          <span class="cat-card__latin">Urtica dioica</span>
        </div>
      </div>

      <!-- 2. Purple coneflower herb -->
      <div class="cat-card" data-category="herbs" data-name="purple coneflower herb echinacea purpurea ехінацея трава">
        <div class="cat-card__img-wrap">
          <img class="cat-card__img cat-card__img--product" src="<?php echo $tdir; ?>/assets/products/purple-coneflower.webp" alt="Echinacea purpurea herb dried" loading="eager" width="600" height="600">
          <img class="cat-card__img cat-card__img--nature" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/Echinacea_purpurea_Grandview_Prairie.jpg/330px-Echinacea_purpurea_Grandview_Prairie.jpg" alt="Echinacea purpurea blooming in nature" loading="lazy" width="600" height="600">
          <span class="cat-card__badge">Herbs</span>
          <span class="cat-card__badge--nature">In Nature</span>
          <div class="cat-card__overlay">
            <div class="cat-card__overlay-inner">
              <span class="cat-card__overlay-name">Purple coneflower herb</span>
              <span class="cat-card__overlay-latin">Echinacea purpurea</span>
            </div>
          </div>
        </div>
        <div class="cat-card__info">
          <span class="cat-card__name">Purple coneflower herb</span>
          <span class="cat-card__latin">Echinacea purpurea</span>
        </div>
      </div>

      <!-- 3. Birch leaves -->
      <div class="cat-card" data-category="leaves" data-name="birch leaves betula pendula береза листя">
        <div class="cat-card__img-wrap">
          <img class="cat-card__img cat-card__img--product" src="<?php echo $tdir; ?>/assets/products/birch-leaves.webp" alt="Birch leaves dried raw material" loading="eager" width="600" height="600">
          <img class="cat-card__img cat-card__img--nature" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Betula_pendula_Finland.jpg/330px-Betula_pendula_Finland.jpg" alt="Betula pendula birch tree in nature" loading="lazy" width="600" height="600">
          <span class="cat-card__badge">Leaves</span>
          <span class="cat-card__badge--nature">In Nature</span>
          <div class="cat-card__overlay">
            <div class="cat-card__overlay-inner">
              <span class="cat-card__overlay-name">Birch leaves</span>
              <span class="cat-card__overlay-latin">Betula pendula</span>
            </div>
          </div>
        </div>
        <div class="cat-card__info">
          <span class="cat-card__name">Birch leaves</span>
          <span class="cat-card__latin">Betula pendula</span>
        </div>
      </div>

      <!-- 4. Raspberry leaves -->
      <div class="cat-card" data-category="leaves" data-name="raspberry leaves rubus idaeus малина листя">
        <div class="cat-card__img-wrap">
          <img class="cat-card__img cat-card__img--product" src="<?php echo $tdir; ?>/assets/products/raspberry-leaves.webp" alt="Raspberry leaves dried raw material" loading="eager" width="600" height="600">
          <img class="cat-card__img cat-card__img--nature" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4b/Fert%C5%91di_k%C3%A1rmin_m%C3%A1lna.JPG/330px-Fert%C5%91di_k%C3%A1rmin_m%C3%A1lna.JPG" alt="Rubus idaeus raspberry plant in nature" loading="lazy" width="600" height="600">
          <span class="cat-card__badge">Leaves</span>
          <span class="cat-card__badge--nature">In Nature</span>
          <div class="cat-card__overlay">
            <div class="cat-card__overlay-inner">
              <span class="cat-card__overlay-name">Raspberry leaves</span>
              <span class="cat-card__overlay-latin">Rubus idaeus</span>
            </div>
          </div>
        </div>
        <div class="cat-card__info">
          <span class="cat-card__name">Raspberry leaves</span>
          <span class="cat-card__latin">Rubus idaeus</span>
        </div>
      </div>

      <!-- 5. Linden flowers -->
      <div class="cat-card" data-category="flowers" data-name="linden flowers tilia cordata липа цвіт">
        <div class="cat-card__img-wrap">
          <img class="cat-card__img cat-card__img--product" src="<?php echo $tdir; ?>/assets/products/linden-flowers.webp" alt="Linden flowers dried raw material" loading="eager" width="600" height="600">
          <img class="cat-card__img cat-card__img--nature" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Tilia-cordata2.JPG/330px-Tilia-cordata2.JPG" alt="Tilia cordata linden tree in bloom" loading="lazy" width="600" height="600">
          <span class="cat-card__badge">Flowers</span>
          <span class="cat-card__badge--nature">In Nature</span>
          <div class="cat-card__overlay">
            <div class="cat-card__overlay-inner">
              <span class="cat-card__overlay-name">Linden flowers</span>
              <span class="cat-card__overlay-latin">Tilia cordata</span>
            </div>
          </div>
        </div>
        <div class="cat-card__info">
          <span class="cat-card__name">Linden flowers</span>
          <span class="cat-card__latin">Tilia cordata</span>
        </div>
      </div>

      <!-- 6. Sandy everlasting flowers -->
      <div class="cat-card" data-category="flowers" data-name="sandy everlasting flowers helichrysum arenarium цмин пісковий квіти">
        <div class="cat-card__img-wrap">
          <img class="cat-card__img cat-card__img--product" src="<?php echo $tdir; ?>/assets/products/sandy-everlasting.webp" alt="Helichrysum arenarium dried flowers" loading="eager" width="600" height="600">
          <img class="cat-card__img cat-card__img--nature" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Helichrysum_arenarium.jpg/330px-Helichrysum_arenarium.jpg" alt="Helichrysum arenarium sandy everlasting in bloom" loading="lazy" width="600" height="600">
          <span class="cat-card__badge">Flowers</span>
          <span class="cat-card__badge--nature">In Nature</span>
          <div class="cat-card__overlay">
            <div class="cat-card__overlay-inner">
              <span class="cat-card__overlay-name">Sandy everlasting flowers</span>
              <span class="cat-card__overlay-latin">Helichrysum arenarium</span>
            </div>
          </div>
        </div>
        <div class="cat-card__info">
          <span class="cat-card__name">Sandy everlasting flowers</span>
          <span class="cat-card__latin">Helichrysum arenarium</span>
        </div>
      </div>

      <!-- 7. Dandelion root -->
      <div class="cat-card" data-category="roots" data-name="dandelion root taraxacum officinale кульбаба корінь">
        <div class="cat-card__img-wrap">
          <img class="cat-card__img cat-card__img--product" src="<?php echo $tdir; ?>/assets/products/dandelion-root.webp" alt="Dandelion root dried raw material" loading="eager" width="600" height="600">
          <img class="cat-card__img cat-card__img--nature" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Taraxacum_officinale_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-135.jpg/330px-Taraxacum_officinale_-_K%C3%B6hler%E2%80%93s_Medizinal-Pflanzen-135.jpg" alt="Taraxacum officinale botanical illustration" loading="lazy" width="600" height="600">
          <span class="cat-card__badge">Roots</span>
          <span class="cat-card__badge--nature">In Nature</span>
          <div class="cat-card__overlay">
            <div class="cat-card__overlay-inner">
              <span class="cat-card__overlay-name">Dandelion root</span>
              <span class="cat-card__overlay-latin">Taraxacum officinale</span>
            </div>
          </div>
        </div>
        <div class="cat-card__info">
          <span class="cat-card__name">Dandelion root</span>
          <span class="cat-card__latin">Taraxacum officinale</span>
        </div>
      </div>

      <!-- 8. Valerian root -->
      <div class="cat-card" data-category="roots" data-name="valerian root valeriana officinalis валеріана корінь">
        <div class="cat-card__img-wrap">
          <img class="cat-card__img cat-card__img--product" src="<?php echo $tdir; ?>/assets/products/valerian-root.webp" alt="Valerian root dried raw material" loading="eager" width="600" height="600">
          <img class="cat-card__img cat-card__img--nature" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Valeriana_officinalis_inflorescence_-_Niitv%C3%A4lja.jpg/330px-Valeriana_officinalis_inflorescence_-_Niitv%C3%A4lja.jpg" alt="Valeriana officinalis flowering in nature" loading="lazy" width="600" height="600">
          <span class="cat-card__badge">Roots</span>
          <span class="cat-card__badge--nature">In Nature</span>
          <div class="cat-card__overlay">
            <div class="cat-card__overlay-inner">
              <span class="cat-card__overlay-name">Valerian root</span>
              <span class="cat-card__overlay-latin">Valeriana officinalis</span>
            </div>
          </div>
        </div>
        <div class="cat-card__info">
          <span class="cat-card__name">Valerian root</span>
          <span class="cat-card__latin">Valeriana officinalis</span>
        </div>
      </div>

      <!-- 9. Elderberries -->
      <div class="cat-card" data-category="berries" data-name="elderberries sambucus nigra бузина плоди">
        <div class="cat-card__img-wrap">
          <img class="cat-card__img cat-card__img--product" src="<?php echo $tdir; ?>/assets/products/elderberries.webp" alt="Elderberries dried fruits" loading="eager" width="600" height="600">
          <img class="cat-card__img cat-card__img--nature" src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/Sambucus_nigra_004.jpg/330px-Sambucus_nigra_004.jpg" alt="Sambucus nigra elderberry clusters in nature" loading="lazy" width="600" height="600">
          <span class="cat-card__badge">Berries</span>
          <span class="cat-card__badge--nature">In Nature</span>
          <div class="cat-card__overlay">
            <div class="cat-card__overlay-inner">
              <span class="cat-card__overlay-name">Elderberries</span>
              <span class="cat-card__overlay-latin">Sambucus nigra</span>
            </div>
          </div>
        </div>
        <div class="cat-card__info">
          <span class="cat-card__name">Elderberries</span>
          <span class="cat-card__latin">Sambucus nigra</span>
        </div>
      </div>

      <!-- 10. Rosehips -->
      <div class="cat-card" data-category="berries" data-name="rosehips rosa canina шипшина плоди">
        <div class="cat-card__img-wrap">
          <img class="cat-card__img cat-card__img--product" src="<?php echo $tdir; ?>/assets/products/rosehips.webp" alt="Rosehips dried fruits" loading="eager" width="600" height="600">
          <img class="cat-card__img cat-card__img--nature" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Divlja_ruza_cvijet_270508.jpg/330px-Divlja_ruza_cvijet_270508.jpg" alt="Rosa canina wild rose blooming in nature" loading="lazy" width="600" height="600">
          <span class="cat-card__badge">Berries</span>
          <span class="cat-card__badge--nature">In Nature</span>
          <div class="cat-card__overlay">
            <div class="cat-card__overlay-inner">
              <span class="cat-card__overlay-name">Rosehips</span>
              <span class="cat-card__overlay-latin">Rosa canina</span>
            </div>
          </div>
        </div>
        <div class="cat-card__info">
          <span class="cat-card__name">Rosehips</span>
          <span class="cat-card__latin">Rosa canina</span>
        </div>
      </div>

      <!-- 11. Buckthorn bark -->
      <div class="cat-card" data-category="others" data-name="buckthorn bark frangula alnus крушина кора">
        <div class="cat-card__img-wrap">
          <img class="cat-card__img cat-card__img--product" src="<?php echo $tdir; ?>/assets/products/buckthorn-bark.webp" alt="Buckthorn bark dried raw material" loading="eager" width="600" height="600">
          <img class="cat-card__img cat-card__img--nature" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Frangula-alnus-fruits.JPG/330px-Frangula-alnus-fruits.JPG" alt="Frangula alnus alder buckthorn with berries" loading="lazy" width="600" height="600">
          <span class="cat-card__badge">Others</span>
          <span class="cat-card__badge--nature">In Nature</span>
          <div class="cat-card__overlay">
            <div class="cat-card__overlay-inner">
              <span class="cat-card__overlay-name">Buckthorn bark</span>
              <span class="cat-card__overlay-latin">Frangula alnus</span>
            </div>
          </div>
        </div>
        <div class="cat-card__info">
          <span class="cat-card__name">Buckthorn bark</span>
          <span class="cat-card__latin">Frangula alnus</span>
        </div>
      </div>

      <!-- 12. Pine buds -->
      <div class="cat-card" data-category="others" data-name="pine buds pinus sylvestris сосна бруньки">
        <div class="cat-card__img-wrap">
          <img class="cat-card__img cat-card__img--product" src="<?php echo $tdir; ?>/assets/products/pine-buds.webp" alt="Pine buds dried raw material" loading="eager" width="600" height="600">
          <img class="cat-card__img cat-card__img--nature" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Skuleskogen_pine.jpg/330px-Skuleskogen_pine.jpg" alt="Pinus sylvestris scots pine in nature" loading="lazy" width="600" height="600">
          <span class="cat-card__badge">Others</span>
          <span class="cat-card__badge--nature">In Nature</span>
          <div class="cat-card__overlay">
            <div class="cat-card__overlay-inner">
              <span class="cat-card__overlay-name">Pine buds</span>
              <span class="cat-card__overlay-latin">Pinus sylvestris</span>
            </div>
          </div>
        </div>
        <div class="cat-card__info">
          <span class="cat-card__name">Pine buds</span>
          <span class="cat-card__latin">Pinus sylvestris</span>
        </div>
      </div>

    </div><!-- /catalog__grid -->

  </div>
</section>

<!-- ==================== FULL CATALOG TABLE ==================== -->
<section class="full-catalog" id="fullCatalog">
<div class="container">
<div class="full-catalog__intro">
<h2 class="full-catalog__title">Complete <em>Raw Materials</em> Catalog</h2>
<p class="full-catalog__subtitle">175 products available for B2B export — grouped by type, sorted alphabetically</p>
</div>
<div class="full-catalog__inner" id="fullCatalogInner">
</div><!-- /full-catalog__inner -->
</div><!-- /container -->
</section>

<section class="catalog" style="padding-top:0">
  <div class="container">

    <!-- Empty state -->
    <div class="catalog__empty" id="catalogEmpty">
      <i data-lucide="search-x"></i>
      <p>No products found matching your search.</p>
    </div>

    <!-- CTA -->
    <div class="catalog__cta">
      <div class="catalog__cta-text">
        <h3>Need the Full Specification?</h3>
        <p>Request our complete PDF catalog with detailed product specs, packaging formats, moisture content, and export pricing.</p>
      </div>
      <div class="catalog__cta-actions">
        <a href="<?php echo $home; ?>#contacts" class="btn btn--primary btn--lg">
          <i data-lucide="file-text"></i>
          Request PDF Catalog
        </a>
        <a href="<?php echo $home; ?>#contacts" class="btn btn--dark btn--lg">
          <i data-lucide="mail"></i>
          Contact Sales
        </a>
      </div>
    </div>

  </div>
</section>

<script>
// Filter
function filterCatalog(category) {
  document.querySelectorAll('.filter-btn').forEach(b =>
    b.classList.toggle('active', b.dataset.filter === category)
  );
  _applyFilters();
}

// Search
function searchCatalog(value) {
  _applyFilters();
}

function _applyFilters() {
  const category = document.querySelector('.filter-btn.active')?.dataset.filter || 'all';
  const term = (document.getElementById('catalogSearch')?.value || '').toLowerCase().trim();
  let showIndex = 0;

  // Featured cards
  document.querySelectorAll('.cat-card').forEach(card => {
    const catMatch = category === 'all' || card.dataset.category === category;
    const nameMatch = !term || card.dataset.name.includes(term);
    const show = catMatch && nameMatch;
    if (show) {
      card.style.display = '';
      card.classList.remove('sp-filter-in');
      card.style.setProperty('--filter-delay', `${showIndex * 0.045}s`);
      void card.offsetWidth;
      card.classList.add('sp-filter-in');
      showIndex++;
    } else {
      card.style.display = 'none';
      card.classList.remove('sp-filter-in');
    }
  });

  // Full catalog fc-items
  document.querySelectorAll('.full-catalog__group').forEach(group => {
    let groupVisible = 0;
    group.querySelectorAll('.fc-item:not(.fc-item--header)').forEach(item => {
      const catMatch = category === 'all' || item.dataset.category === category;
      const nameMatch = !term || (item.dataset.name || '').includes(term);
      const show = catMatch && nameMatch;
      item.style.display = show ? '' : 'none';
      if (show) groupVisible++;
    });
    group.style.display = groupVisible === 0 ? 'none' : '';
    const countEl = group.querySelector('.full-catalog__cat-count');
    if (countEl) countEl.textContent = groupVisible;
  });

  const empty = document.getElementById('catalogEmpty');
  if (empty) empty.style.display = showIndex === 0 ? 'block' : 'none';
}

// Counter animation for hero stats
function animateStat(el, target, suffix) {
  const duration = 1400;
  const start = performance.now();
  function tick(now) {
    const t = Math.min((now - start) / duration, 1);
    const eased = 1 - Math.pow(1 - t, 3);
    el.textContent = Math.round(eased * target) + (suffix || '');
    if (t < 1) requestAnimationFrame(tick);
  }
  requestAnimationFrame(tick);
}

function initHeroStats() {
  const statsMap = { '12': '', '6': '', '21': '' };
  document.querySelectorAll('.page-hero__stat-num').forEach(el => {
    const val = parseInt(el.textContent);
    if (!isNaN(val)) {
      const obs = new IntersectionObserver(entries => {
        if (entries[0].isIntersecting) {
          animateStat(el, val);
          obs.disconnect();
        }
      }, { threshold: 0.5 });
      obs.observe(el);
    }
  });
}

// URL param filter (e.g. products.html?filter=herbs)
function applyUrlFilter() {
  const params = new URLSearchParams(window.location.search);
  const f = params.get('filter');
  if (f) filterCatalog(f);
}

// Mobile tap to reveal nature photo
function initMobileNatureTap() {
  if (!('ontouchstart' in window) && navigator.maxTouchPoints === 0) return;
  document.querySelectorAll('.cat-card').forEach(card => {
    card.addEventListener('click', e => {
      if (e.target.closest('a')) return;
      card.classList.toggle('nature-visible');
    });
  });
}

// Init
document.addEventListener('DOMContentLoaded', () => {
  // Stagger delays for initial card load
  document.querySelectorAll('.cat-card').forEach((card, i) => {
    card.style.setProperty('--card-delay', `${0.55 + i * 0.055}s`);
  });

  // CTA scroll-reveal
  const cta = document.querySelector('.catalog__cta');
  if (cta) {
    cta.style.opacity = '0';
    const ctaObs = new IntersectionObserver(([e]) => {
      if (e.isIntersecting) {
        cta.style.opacity = '';
        cta.style.animation = 'sp-fadeUp 0.65s cubic-bezier(0.22,1,0.36,1) both';
        ctaObs.disconnect();
      }
    }, { threshold: 0.15 });
    ctaObs.observe(cta);
  }

  initHeroStats();
  applyUrlFilter();
  initMobileNatureTap();
  if (typeof lucide !== 'undefined') lucide.createIcons();
});
window.addEventListener('load', () => {
  if (typeof lucide !== 'undefined') lucide.createIcons();
});
</script>

<script>
(function() {
  const PRODUCTS = [{"ukr": "Крушина, кора сушена", "eng": "Alder buckthorn, bark dried", "lat": "Frangula alnus", "cat": "Bark", "filter": "others"}, {"ukr": "Ясен, кора сушена", "eng": "Ash, bark dried", "lat": "Fraxinus", "cat": "Bark", "filter": "others"}, {"ukr": "Осика, кора сушена", "eng": "Aspen, bark dried", "lat": "Populus tremula", "cat": "Bark", "filter": "others"}, {"ukr": "Береза, кора сушена", "eng": "Birch, bark dried", "lat": "Betula pendula", "cat": "Bark", "filter": "others"}, {"ukr": "Вільха, кора сушена", "eng": "Black alder, bark dried", "lat": "Alnus glutinosa", "cat": "Bark", "filter": "others"}, {"ukr": "Акація, кора сушена", "eng": "Black locust, bark dried", "lat": "Robinia pseudoacacia", "cat": "Bark", "filter": "others"}, {"ukr": "Каштан кінський, кора сушена", "eng": "Horse chestnut, bark dried", "lat": "Aesculus hippocastanum", "cat": "Bark", "filter": "others"}, {"ukr": "Дуб, кора сушена", "eng": "Oak, bark dried", "lat": "Quercus", "cat": "Bark", "filter": "others"}, {"ukr": "Верба кора сушена", "eng": "Willow, bark dried", "lat": "Salix alba", "cat": "Bark", "filter": "others"}, {"ukr": "Береза, брунька сушена", "eng": "Birch, buds dried", "lat": "Betula pendula", "cat": "Buds", "filter": "others"}, {"ukr": "Сосна звичайна, бруньки сушені", "eng": "Pine, buds dried", "lat": "Pinus sylvestris", "cat": "Buds", "filter": "others"}, {"ukr": "Вільха, шишки сушені", "eng": "Black alder, cone dried", "lat": "Alnus glutinosa", "cat": "Cone", "filter": "others"}, {"ukr": "Хміль звичайний, шишки сушені", "eng": "Hops, cone dried", "lat": "Humulus lupulus", "cat": "Cone", "filter": "others"}, {"ukr": "Арніка, квітки сушені", "eng": "Arnica, flowers dried", "lat": "Arnica montana", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Акація, квітки сушені", "eng": "Black locust, flowers dried", "lat": "Robinia pseudoacacia", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Ромашка лікарська, квітки сушені", "eng": "Chamomile, flowers dried", "lat": "Matricaria chamomilla", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Верес звичайний, квітки сушені", "eng": "Common heather, flowers dried", "lat": "Calluna vulgaris", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Волошка, квітки сушені", "eng": "Cornflower, flower dried", "lat": "Centaurea cyanus", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Бузина чорна, квітки сушені", "eng": "Elderberry, flowers dried", "lat": "Sambucus nigra", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Цмин пісковий, квітки сушені", "eng": "Everlasting, flowers dried", "lat": "Helichrysum arenarium", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Золотарник, квітки сушені", "eng": "Goldenrod, flowers dried", "lat": "Solidago canadensis", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Глід, квітки сушені", "eng": "Hawthorn, flowers dried", "lat": "Сrataegus oxyacantha", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Каштан кінський, квітки сушені", "eng": "Horse chestnut, flowers dried", "lat": "Aesculus hippocastanum", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Липа серцелиста, квітки сушені", "eng": "Linden, flower dried", "lat": "Tilia cordata", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Лабазник (гадючник), квітки сушені", "eng": "Meadowsweet, flowers dried", "lat": "Filipendula ulmaria", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Дивина звичайна (коров’як), квітки сушені", "eng": "Mullein, flowers dried", "lat": "Verbascum phlomoides", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Ехінацея пурпурова, квітки сушені", "eng": "Purple coneflower, flowers dried", "lat": "Echinacea purpurea", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Конюшини, квітки сушені", "eng": "Red clover, flowers dried", "lat": "Trifolium pratense", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Соняшник, квітки сушені", "eng": "Sunflower, flowers dried", "lat": "Helianthus annuus", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Пижмо, квітки сушені", "eng": "Tansy, flowers dried", "lat": "Tanacetum vulgare", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Глуха кропива (яснотка), квітки сушені", "eng": "White dead-nettle, flowers dried", "lat": "Lamium album", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Деревій звичайний, квітки сушені", "eng": "Yarrow, flowers dried", "lat": "Achillea millefolium", "cat": "Flowers", "filter": "flowers"}, {"ukr": "Глід, квітки з листям сушені", "eng": "Hawthorn, flowers with leaves dried", "lat": "Сrataegus oxyacantha", "cat": "Flowers with leaves", "filter": "flowers"}, {"ukr": "Липа серцелиста, квітки з листями сушені", "eng": "Linden, flowers with leaves dried", "lat": "Tilia cordata", "cat": "Flowers with leaves", "filter": "flowers"}, {"ukr": "Бузина чорна, квітки з китицями сушений", "eng": "Elderberry, flowers with racemes dried", "lat": "Sambucus nigra", "cat": "Flowers with racemes", "filter": "flowers"}, {"ukr": "Крушина, плоди сушені", "eng": "Alder buckthorn, fruits dried", "lat": "Frangula alnus", "cat": "Fruits", "filter": "berries"}, {"ukr": "Яблуко (дике), плоди сушені", "eng": "Apple, fruits dried", "lat": "Malus", "cat": "Fruits", "filter": "berries"}, {"ukr": "Чорниця, плоди сушені", "eng": "Bilberry, fruits dried", "lat": "Vaccinium myrtillus", "cat": "Fruits", "filter": "berries"}, {"ukr": "Аронія (горобина чорноплідна), плоди сушені", "eng": "Black chokeberry (aronia), fruits dried", "lat": "Aronia melanocarpa", "cat": "Fruits", "filter": "berries"}, {"ukr": "Ожина, плоди сушені", "eng": "Blackberry, fruits dried", "lat": "Rubus fruticosus", "cat": "Fruits", "filter": "berries"}, {"ukr": "Смородина чорна, плоди сушені", "eng": "Blackcurrant, fruits dried", "lat": "Ribes nigrum", "cat": "Fruits", "filter": "berries"}, {"ukr": "Терен, плоди сушені", "eng": "Blackthorn, fruits dried", "lat": "Prunus spinosa", "cat": "Fruits", "filter": "berries"}, {"ukr": "Дерен справжній, плоди сушені", "eng": "Cornel, fruits dried", "lat": "Cornus mas", "cat": "Fruits", "filter": "berries"}, {"ukr": "Журавлина, плоди сушені", "eng": "Cranberry, fruits dried", "lat": "Vaccinium oxycoccos", "cat": "Fruits", "filter": "berries"}, {"ukr": "Бузина чорна, плоди сушені", "eng": "Elderberry, fruits dried", "lat": "Sambucus nigra", "cat": "Fruits", "filter": "berries"}, {"ukr": "Глід, плоди сушені", "eng": "Hawthorn, fruits dried", "lat": "Сrataegus oxyacantha", "cat": "Fruits", "filter": "berries"}, {"ukr": "Каштан кінський, плоди сушені", "eng": "Horse chestnut, fruits dried", "lat": "Aesculus hippocastanum", "cat": "Fruits", "filter": "berries"}, {"ukr": "Ялівець, плоди сушені", "eng": "Juniper, fruits dried", "lat": "Juniperus communis", "cat": "Fruits", "filter": "berries"}, {"ukr": "Брусниця, плоди сушені", "eng": "Lingonberry, fruits dried", "lat": "Vaccinium vitis-idaea", "cat": "Fruits", "filter": "berries"}, {"ukr": "Дуб, плоди сушені", "eng": "Oak, fruits dried", "lat": "Quercus", "cat": "Fruits", "filter": "berries"}, {"ukr": "Малина, плоди сушені", "eng": "Raspberry, fruits dried", "lat": "Rubus idaeus", "cat": "Fruits", "filter": "berries"}, {"ukr": "Шипшина, плоди сушені", "eng": "Rosehip, fruits dried", "lat": "Rosa canina", "cat": "Fruits", "filter": "berries"}, {"ukr": "Горобина червона, плоди сушені", "eng": "Rowanberry, fruits dried", "lat": "Sorbus aucuparia", "cat": "Fruits", "filter": "berries"}, {"ukr": "Обліпиха, плоди сушені", "eng": "Sea buckthorn, fruits dried", "lat": "Hippophae rhamnoides", "cat": "Fruits", "filter": "berries"}, {"ukr": "Арніка, трава сушена", "eng": "Arnica, herb dried", "lat": "Arnica montana", "cat": "Herb", "filter": "herbs"}, {"ukr": "М’ята котяча (котовник), трава сушена", "eng": "Catnip, herb dried", "lat": "Nepeta cataria", "cat": "Herb", "filter": "herbs"}, {"ukr": "Ромашка лікарська, трава сушена", "eng": "Chamomile, herb dried", "lat": "Matricaria chamomilla", "cat": "Herb", "filter": "herbs"}, {"ukr": "Зірочник, трава сушена", "eng": "Chickweed, herb dried", "lat": "Stellaria media", "cat": "Herb", "filter": "herbs"}, {"ukr": "Підмареник чіпкий трава сушена", "eng": "Cleavers, herb dried", "lat": "Galium aparine", "cat": "Herb", "filter": "herbs"}, {"ukr": "Живокіст, трава сушена", "eng": "Comfrey, herb dried", "lat": "Symphytum officinale", "cat": "Herb", "filter": "herbs"}, {"ukr": "Парило звичайне, трава сушена", "eng": "Common agrimony, herb dried", "lat": "Agrimonia eupatoria", "cat": "Herb", "filter": "herbs"}, {"ukr": "Галега лікарська, трава сушена", "eng": "Common goat’s rue, herb dried", "lat": "Galega officinalis", "cat": "Herb", "filter": "herbs"}, {"ukr": "Верес звичайний, трава сушена", "eng": "Common heather, herb dried", "lat": "Calluna vulgaris", "cat": "Herb", "filter": "herbs"}, {"ukr": "Спориш, трава сушена", "eng": "Common knotgrass, herbs dried", "lat": "Polygonum aviculare", "cat": "Herb", "filter": "herbs"}, {"ukr": "Буркун, трава сушена", "eng": "Common melilot, herb dried", "lat": "Melilotus officinalis", "cat": "Herb", "filter": "herbs"}, {"ukr": "Кульбаба, трава сушена", "eng": "Dandelion, herb dried", "lat": "Taraxacum officinale", "cat": "Herb", "filter": "herbs"}, {"ukr": "Очанка, трава сушена", "eng": "Eyebright, herb dried", "lat": "Euphrasia officinalis", "cat": "Herb", "filter": "herbs"}, {"ukr": "Хвощ польовий, трава сушена", "eng": "Field horsetail, herb dried", "lat": "Equisetum arvense", "cat": "Herb", "filter": "herbs"}, {"ukr": "Золотарник, трава сушена", "eng": "Goldenrod, herb dried", "lat": "Solidago canadensis", "cat": "Herb", "filter": "herbs"}, {"ukr": "Чистотіл, трава сушена", "eng": "Greater celandine, herb dried", "lat": "Chelidonium majus", "cat": "Herb", "filter": "herbs"}, {"ukr": "Яглиця звичайна, трава сушена", "eng": "Ground elder, herb dried", "lat": "Aegopodium podagraria", "cat": "Herb", "filter": "herbs"}, {"ukr": "Вовконіг, трава сушена", "eng": "Gypsywort, herb dried", "lat": "Lycopus europaeus", "cat": "Herb", "filter": "herbs"}, {"ukr": "Гісоп, трава сушена", "eng": "Hyssop, herb dried", "lat": "Hyssopus officinalis", "cat": "Herb", "filter": "herbs"}, {"ukr": "Меліса лікарська, трава сушена", "eng": "Lemon balm, herb dried", "lat": "Melissa officinalis", "cat": "Herb", "filter": "herbs"}, {"ukr": "Конвалія звичайна, трава сушена", "eng": "Lily of the valley, herb dried", "lat": "Convallaria majalis", "cat": "Herb", "filter": "herbs"}, {"ukr": "Медунка лікарська, трава сушена", "eng": "Lungwort, herb dried", "lat": "Pulmonaria officinalis", "cat": "Herb", "filter": "herbs"}, {"ukr": "Вовче тіло болотяне, трава сушена", "eng": "Marsh cinquefoil, herb dried", "lat": "Potentilla palustris", "cat": "Herb", "filter": "herbs"}, {"ukr": "Сухоцвіт багновий, трава сушена", "eng": "Marsh cudweed, herb dried", "lat": "Gnaphalium uliginosum", "cat": "Herb", "filter": "herbs"}, {"ukr": "Алтея, трава сушена", "eng": "Marshmallow, herb dried", "lat": "Althaea officinalis", "cat": "Herb", "filter": "herbs"}, {"ukr": "Розторопша плямиста трава сушена", "eng": "Milk thistle, herb dried", "lat": "Silybum marianum", "cat": "Herb", "filter": "herbs"}, {"ukr": "Пустирник, трава сушена", "eng": "Motherwort, herb dried", "lat": "Leonurus cardiaca", "cat": "Herb", "filter": "herbs"}, {"ukr": "Полин звичайний, трава сушена", "eng": "Mugwort, herb dried", "lat": "Artemisia vulgaris", "cat": "Herb", "filter": "herbs"}, {"ukr": "Дивина звичайна (коров’як), трава сушена", "eng": "Mullein, herb dried", "lat": "Verbascum phlomoides", "cat": "Herb", "filter": "herbs"}, {"ukr": "Кропива дводомна, трава сушена", "eng": "Nettle, herb dried", "lat": "Urtica dioіca", "cat": "Herb", "filter": "herbs"}, {"ukr": "Материнка звичайна, трава сушена", "eng": "Oregano, herb dried", "lat": "Origanum vulgare", "cat": "Herb", "filter": "herbs"}, {"ukr": "М’ята, трава сушена", "eng": "Peppermint, herb dried", "lat": "Mentha piperita", "cat": "Herb", "filter": "herbs"}, {"ukr": "Ехінацея пурпурова, трава сушена", "eng": "Purple coneflower, herb dried", "lat": "Echinacea purpurea", "cat": "Herb", "filter": "herbs"}, {"ukr": "Конюшини, трава сушена", "eng": "Red clover, herb dried", "lat": "Trifolium pratense", "cat": "Herb", "filter": "herbs"}, {"ukr": "Шавлія, трава сушена", "eng": "Sage, herb dried", "lat": "Salvia officinalis", "cat": "Herb", "filter": "herbs"}, {"ukr": "Грицики, трава сушена", "eng": "Shepherd’s purse, herb dried", "lat": "Capsella bursa-pastoris", "cat": "Herb", "filter": "herbs"}, {"ukr": "Перстач гусячий, трава сушена", "eng": "Silverweed, herb dried", "lat": "Potentilla anserina", "cat": "Herb", "filter": "herbs"}, {"ukr": "Звіробій, трава сушена", "eng": "St John’s wort, herb dried", "lat": "Hypericum perforatum", "cat": "Herb", "filter": "herbs"}, {"ukr": "Підмареник запашний, трава сушена", "eng": "Sweet woodruff, herb dried", "lat": "Galium odoratum", "cat": "Herb", "filter": "herbs"}, {"ukr": "Полин однорічний, трава сушена", "eng": "Sweet wormwood, herb dried", "lat": "Artemisia annua", "cat": "Herb", "filter": "herbs"}, {"ukr": "Чаполоч пахуча, трава сушена", "eng": "Sweetgrass, herb dried", "lat": "Hierochloe odorata", "cat": "Herb", "filter": "herbs"}, {"ukr": "Пижмо, трава сушена", "eng": "Tansy, herb dried", "lat": "Tanacetum vulgare", "cat": "Herb", "filter": "herbs"}, {"ukr": "Чебрець, трава сушена", "eng": "Thyme, herb dried", "lat": "Thymus", "cat": "Herb", "filter": "herbs"}, {"ukr": "Причепа (череда), трава сушена", "eng": "Trifid bur-marigold, herb dried", "lat": "Bidens tripartita", "cat": "Herb", "filter": "herbs"}, {"ukr": "Глуха кропива (яснотка), трава сушена", "eng": "White dead-nettle, herb dried", "lat": "Lamium album", "cat": "Herb", "filter": "herbs"}, {"ukr": "Фіалка триколірна, трава сушена", "eng": "Wild pansy, herb dried", "lat": "Viola tricolor", "cat": "Herb", "filter": "herbs"}, {"ukr": "Зніт вузьколистий (іван-чай), трава сушена", "eng": "Willowherb, herb dried", "lat": "Chamaenerion angustifolium", "cat": "Herb", "filter": "herbs"}, {"ukr": "Полин гіркий, трава сушена", "eng": "Wormwood, herb dried", "lat": "Artemisia absinthium", "cat": "Herb", "filter": "herbs"}, {"ukr": "Деревій звичайний, трава сушена", "eng": "Yarrow, herb dried", "lat": "Achillea millefolium", "cat": "Herb", "filter": "herbs"}, {"ukr": "Підмареник звичайний, трава сушена", "eng": "Yellow bedstraw, herb dried", "lat": "Galium verum", "cat": "Herb", "filter": "herbs"}, {"ukr": "Астрагал шерстистоквітковий, трава сушена", "eng": "Yellow milkvetch, herb dried", "lat": "Astragalus dasyanthus", "cat": "Herb", "filter": "herbs"}, {"ukr": "Черемша, листя сушене", "eng": "Bear garlic, leaves dried", "lat": "Allium ursinum", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Чорниця, листя сушенu", "eng": "Bilberry, leaves dried", "lat": "Vaccinium myrtillus", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Береза, листя сушене", "eng": "Birch, leaves dried", "lat": "Betula pendula", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Ожина, листя сушене", "eng": "Blackberry, leaves dried", "lat": "Rubus fruticosus", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Смородина чорна, листя сушене", "eng": "Blackcurrant, leaves dried", "lat": "Ribes nigrum", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Бобівник трилистий (вахта), листя сушене", "eng": "Bogbean, leaves dried", "lat": "Menyanthes trifoliata", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Мати-й-мачуха (підбіл звичайний), листя сушене", "eng": "Coltsfoot, leaves dried", "lat": "Tussilago farfara", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Верес звичайний, листя сушене", "eng": "Common heather, leaves dried", "lat": "Calluna vulgaris", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Подорожник великий, листя сушене", "eng": "Common plantain, leaves dried", "lat": "Plantago major", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Кульбаба, листя сушене", "eng": "Dandelion, leaves dried", "lat": "Taraxacum officinale", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Бузина чорна, листя сушене", "eng": "Elderberry, leaves dried", "lat": "Sambucus nigra", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Ліщина, листя сушене", "eng": "Hazel, leaves dried", "lat": "Corylus avellana", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Каштан кінський, листя сушене", "eng": "Horse chestnut, leaves dried", "lat": "Aesculus hippocastanum", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Меліса лікарська, листя сушене", "eng": "Lemon balm, leaves dried", "lat": "Melissa officinalis", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Липа серцелиста, листя сушене", "eng": "Linden, leaves dried", "lat": "Tilia cordata", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Брусниця, листя сушене", "eng": "Lingonberry, leaves dried", "lat": "Vaccinium vitis-idaea", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Алтея, листя сушене", "eng": "Marshmallow, leaves dried", "lat": "Althaea officinalis", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Лабазник (гадючник), трава сушена", "eng": "Meadowsweet, leaves dried", "lat": "Filipendula ulmaria", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Дивина звичайна (коров’як), листя сушене", "eng": "Mullein, leaves dried", "lat": "Verbascum phlomoides", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Кропива дводомна, листя сушене", "eng": "Nettle, leaves dried", "lat": "Urtica dioіca", "cat": "Leaves", "filter": "leaves"}, {"ukr": "М’ята, листя сушене", "eng": "Peppermint, leaves dried", "lat": "Mentha piperita", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Малина, листя сушене", "eng": "Raspberry, leaves dried", "lat": "Rubus idaeus", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Подорожник ланцетолистий, листя сушене", "eng": "Ribwort plantain, leaves dried", "lat": "Plantago lanceolata", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Шавлія, листя сушене", "eng": "Sage, leaves dried", "lat": "Salvia officinalis", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Обліпиха, листя сушене", "eng": "Sea buckthorn, leaves dried", "lat": "Hippophae rhamnoides", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Суниця лісова, листя сушені", "eng": "Strawberry (wild), leaves dried", "lat": "Fragaria vesca", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Верба, листя сушене", "eng": "Willow, leaves dried", "lat": "Salix alba", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Зніт вузьколистий (іван-чай), листя сушене", "eng": "Willowherb, leaves dried", "lat": "Chamaenerion angustifolium", "cat": "Leaves", "filter": "leaves"}, {"ukr": "Чага (березовий гриб), сушений", "eng": "Chaga, dried", "lat": "Inonotus obliquus", "cat": "Other", "filter": "others"}, {"ukr": "Льон насіння", "eng": "Flax, seeds", "lat": "Linum", "cat": "Other", "filter": "others"}, {"ukr": "Бодяга, губка сушена", "eng": "Freshwater sponge, dried", "lat": "Spongilla", "cat": "Other", "filter": "others"}, {"ukr": "Мох ісландський сушений", "eng": "Iceland moss dried", "lat": "Cetraria islandica", "cat": "Other", "filter": "others"}, {"ukr": "Розторопша плямиста плоди", "eng": "Milk thistle, fruits", "lat": "Silybum marianum", "cat": "Other", "filter": "others"}, {"ukr": "Шипшина, пудра плодів", "eng": "Rosehip, powder", "lat": "Rosa canina", "cat": "Other", "filter": "others"}, {"ukr": "Виноград, жмих сушений", "eng": "Grape, pomace dried", "lat": "Vitis vinifera", "cat": "Pomace", "filter": "others"}, {"ukr": "Бузина чорна, китиці сушені", "eng": "Elderberry, racemes dried", "lat": "Sambucus nigra", "cat": "Racemes", "filter": "flowers"}, {"ukr": "Аїр (лепеха), корені сушені", "eng": "Calamus, root dried", "lat": "Acorus calamus", "cat": "Root", "filter": "roots"}, {"ukr": "Живокіст, корені сушені", "eng": "Comfrey, root dried", "lat": "Symphytum officinale", "cat": "Root", "filter": "roots"}, {"ukr": "Цикорій, корені сушені", "eng": "Common chicory, roots dried", "lat": "Cichorium", "cat": "Root", "filter": "roots"}, {"ukr": "Пирій, корені сушені", "eng": "Couch grass, roots dried", "lat": "Elymus repens", "cat": "Root", "filter": "roots"}, {"ukr": "Кульбаба, корені сушені", "eng": "Dandelion, root dried", "lat": "Taraxacum officinale", "cat": "Root", "filter": "roots"}, {"ukr": "Оман високий, корені сушені", "eng": "Elecampane, root dried", "lat": "Inula helenium", "cat": "Root", "filter": "roots"}, {"ukr": "Вовчуг корінь сушений", "eng": "Field restharrow, root dried", "lat": "Ononis arvensis", "cat": "Root", "filter": "roots"}, {"ukr": "Лопух, корені сушені", "eng": "Greater burdock, roots dried", "lat": "Arctium lаppa", "cat": "Root", "filter": "roots"}, {"ukr": "Хрін звичайний, корені сушені", "eng": "Horseradish, root dried", "lat": "Armoracia rusticana", "cat": "Root", "filter": "roots"}, {"ukr": "Солодка, корені сушені", "eng": "Licorice, root dried", "lat": "Glycyrrhiza glabra", "cat": "Root", "filter": "roots"}, {"ukr": "Вовче тіло болотяне, корінь сушений", "eng": "Marsh cinquefoil, root dried", "lat": "Potentilla palustris", "cat": "Root", "filter": "roots"}, {"ukr": "Алтея, корені сушений", "eng": "Marshmallow, root dried", "lat": "Althaea officinalis", "cat": "Root", "filter": "roots"}, {"ukr": "Лабазник (гадючник), корені сушені", "eng": "Meadowsweet, roots dried", "lat": "Filipendula ulmaria", "cat": "Root", "filter": "roots"}, {"ukr": "Кропива дводомна, корені сушені", "eng": "Nettle, root dried", "lat": "Urtica dioіca", "cat": "Root", "filter": "roots"}, {"ukr": "Ехінацея пурпурова, корені сушені", "eng": "Purple coneflower, root dried", "lat": "Echinacea purpurea", "cat": "Root", "filter": "roots"}, {"ukr": "Перстач болотний (сабельник), корені сушені", "eng": "Purple marshlocks, root dried", "lat": "Comarum palustre", "cat": "Root", "filter": "roots"}, {"ukr": "Калган (перстач прямостоячий), корінь сушений", "eng": "Tormentil, root dried", "lat": "Potentilla erecta", "cat": "Root", "filter": "roots"}, {"ukr": "Валеріана лікарська, корені сушені", "eng": "Valerian, dried root", "lat": "Valeriana officinalis", "cat": "Root", "filter": "roots"}, {"ukr": "Півники болотяні, корінь сушений", "eng": "Yellow iris, roots dried", "lat": "Iris pseudacorus", "cat": "Root", "filter": "roots"}, {"ukr": "Амарант, плоди сушені", "eng": "Amaranth, seeds dried", "lat": "Amaranthus", "cat": "Seeds", "filter": "others"}, {"ukr": "Виноград, кісточки сушені", "eng": "Grape, seeds dried", "lat": "Vitis vinifera", "cat": "Seeds", "filter": "others"}, {"ukr": "Кропива дводомна, насіння сушене", "eng": "Nettle, seeds dried", "lat": "Urtica dioіca", "cat": "Seeds", "filter": "others"}, {"ukr": "Гарбуз, насіння сушене", "eng": "Pumpkin, seeds dried", "lat": "Cucurbita pepo", "cat": "Seeds", "filter": "others"}, {"ukr": "Шипшина, кісточки плодів сушені", "eng": "Rosehip, seeds dried", "lat": "Rosa canina", "cat": "Seeds", "filter": "others"}, {"ukr": "Обліпиха крушиновидна, кісточки сушені", "eng": "Sea buckthorn, seeds dried", "lat": "Hippophae rhamnoides", "cat": "Seeds", "filter": "others"}, {"ukr": "Шипшина, шкірки плодів сушені", "eng": "Rosehip, shell dried", "lat": "Rosa canina", "cat": "Shell", "filter": "others"}, {"ukr": "Чорниця, пагони сушені", "eng": "Bilberry, shoots dried", "lat": "Vaccinium myrtillus", "cat": "Shoots", "filter": "others"}, {"ukr": "Ожина, пагони сушені", "eng": "Blackberry, shoots dried", "lat": "Rubus fruticosus", "cat": "Shoots", "filter": "others"}, {"ukr": "Бузина чорна, пагони сушені", "eng": "Elderberry, shoots dried", "lat": "Sambucus nigra", "cat": "Shoots", "filter": "others"}, {"ukr": "Брусниця, пагони сушені", "eng": "Lingonberry, shoots dried", "lat": "Vaccinium vitis-idaea", "cat": "Shoots", "filter": "others"}, {"ukr": "Малина, пагони сушені", "eng": "Raspberry, shoots dried", "lat": "Rubus idaeus", "cat": "Shoots", "filter": "others"}, {"ukr": "Кукурудза, рильця сушені", "eng": "Corn, silk dried", "lat": "Zea mays", "cat": "Silk", "filter": "others"}, {"ukr": "Кропива дводомна, стебла сушені", "eng": "Nettle, stems dried", "lat": "Urtica dioіca", "cat": "Stems", "filter": "others"}, {"ukr": "Кропива дводомна, верхівки сушені", "eng": "Nettle, top dried", "lat": "Urtica dioіca", "cat": "Top", "filter": "others"}];

  function buildFullCatalog() {
    const inner = document.getElementById('fullCatalogInner');
    if (!inner) return;
    const groups = {};
    PRODUCTS.forEach(p => {
      if (!groups[p.cat]) groups[p.cat] = { filter: p.filter, items: [] };
      groups[p.cat].items.push(p);
    });
    Object.keys(groups).sort().forEach(cat => {
      const g = groups[cat];
      const groupEl = document.createElement('div');
      groupEl.className = 'full-catalog__group';
      groupEl.innerHTML = `<div class="full-catalog__cat-head" onclick="this.nextElementSibling.classList.toggle('open')"><span>${cat}</span><span class="full-catalog__cat-count">${g.items.length}</span></div><div class="full-catalog__cat-body"><div class="fc-item fc-item--header"><span>English</span><span>Ukrainian</span><span>Latin name</span></div></div>`;
      const body = groupEl.querySelector('.full-catalog__cat-body');
      g.items.forEach(p => {
        const div = document.createElement('div');
        div.className = 'fc-item';
        div.dataset.category = p.filter;
        div.dataset.name = (p.eng + ' ' + p.ukr + ' ' + p.lat).toLowerCase();
        div.innerHTML = `<span class="fc-item__eng">${p.eng}</span><span class="fc-item__ukr">${p.ukr}</span><span class="fc-item__lat">${p.lat}</span>`;
        body.appendChild(div);
      });
      inner.appendChild(groupEl);
    });
  }
  document.addEventListener('DOMContentLoaded', buildFullCatalog);
})();
</script>

<?php get_footer(); ?>
