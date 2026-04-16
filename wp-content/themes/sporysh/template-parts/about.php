<?php
/**
 * Template part: About / Export Story section (#about)
 */
$tdir = get_template_directory_uri();
?>
<!-- ==================== ABOUT + EXPORT ==================== -->
<section class="export-story" id="about">
  <div class="container">

    <!-- Top: Company info + Export countries -->
    <div class="export-story__top">
      <div class="export-story__media reveal">
        <img src="<?php echo esc_url( $tdir ); ?>/assets/images/about-hero.webp" alt="SPORYSH team at work" loading="lazy" width="600" height="400">
        <div class="about__stats">
          <div class="stat">
            <span class="stat__number" data-target="1380">0</span><span class="stat__suffix">+&nbsp;MT</span>
            <span class="stat__label"><?php echo esc_html( sporysh_t( 'stat-label-turnover', 'Annual Product Turnover' ) ); ?></span>
          </div>
          <div class="stat">
            <span class="stat__number" data-target="55">0</span><span class="stat__suffix">+</span>
            <span class="stat__label"><?php echo esc_html( sporysh_t( 'stat-label-farmers', 'Harvesters &amp; Farmers' ) ); ?></span>
          </div>
          <div class="stat">
            <span class="stat__number" data-target="250">0</span><span class="stat__suffix">+</span>
            <span class="stat__label"><?php echo esc_html( sporysh_t( 'stat-label-products', 'Product Types' ) ); ?></span>
          </div>
        </div>
      </div>

      <div class="export-story__info reveal">
        <span class="section-tag"><?php echo wp_kses_post( sporysh_t( 'section-tag-about', 'About Us' ) ); ?></span>
        <h2 class="section-title"><?php echo esc_html( sporysh_t( 'section-title-about', 'From Ukraine to the World' ) ); ?></h2>
        <p><?php echo esc_html( sporysh_t( 'about-desc-1', 'SPORYSH LLC is a Ukrainian supplier of premium herbal raw materials — dried herbs, leaves, flowers, roots and berries — collected across Ukraine\'s cleanest regions and exported to B2B partners worldwide.' ) ); ?></p>
        <p><?php echo esc_html( sporysh_t( 'about-desc-2', 'We source from 11 collection regions across western and central Ukraine, process to European quality standards, and deliver to partners in Europe, Asia and North America.' ) ); ?></p>

        <div class="export-destinations">
          <div class="export-destinations__group">
            <h4 class="export-destinations__label">
              <span class="export-destinations__icon">🌍</span> <?php echo wp_kses_post( sporysh_t( 'export-label-europe', 'Europe' ) ); ?>
            </h4>
            <div class="export-tags">
              <span>Poland</span><span>Germany</span><span>France</span>
              <span>Czech Rep.</span><span>Austria</span><span>Hungary</span>
              <span>Switzerland</span><span>Italy</span><span>Spain</span>
              <span>Portugal</span><span>UK</span><span>Lithuania</span>
              <span>Croatia</span><span>Slovenia</span><span>Serbia</span>
              <span>Bulgaria</span><span>Albania</span><span>Macedonia</span>
            </div>
          </div>
          <div class="export-destinations__group">
            <h4 class="export-destinations__label">
              <span class="export-destinations__icon">🌏</span> <?php echo wp_kses_post( sporysh_t( 'export-label-asia', 'Asia &amp; Americas' ) ); ?>
            </h4>
            <div class="export-tags export-tags--asia">
              <span>China</span><span>India</span><span>USA</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Maps -->
    <div class="export-story__maps-header reveal">
      <h3 class="export-story__maps-title"><?php echo esc_html( sporysh_t( 'maps-title', 'Our Geographic Network' ) ); ?></h3>
    </div>

    <div class="location__maps-grid">

      <!-- MAP 1: Ukraine — Collection Regions -->
      <div class="location__map-panel reveal">
        <div class="location__map-header">
          <span class="location__map-tag location__map-tag--ukraine">&#8857; Collection</span>
          <span class="location__map-route">Ukraine — Source Regions</span>
        </div>
        <div class="location__world-container">
          <img src="<?php echo esc_url( $tdir ); ?>/assets/images/map-ukr.png" alt="Ukraine map with SPORYSH collection regions" class="location__world-img">
          <svg class="location__map-overlay" viewBox="0 0 100 66.7" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
            <line x1="30.8" y1="8.8"  x2="44.5" y2="17.7" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="22.1" y1="13.6" x2="44.5" y2="17.7" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="13.4" y1="21.1" x2="44.5" y2="17.7" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="4.8"  y1="32.6" x2="44.5" y2="17.7" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="20.2" y1="32.0" x2="44.5" y2="17.7" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="25.2" y1="22.5" x2="44.5" y2="17.7" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="24.8" y1="34.8" x2="44.5" y2="17.7" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="33.2" y1="24.5" x2="44.5" y2="17.7" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="49.3" y1="29.4" x2="44.5" y2="17.7" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="65.8" y1="26.2" x2="44.5" y2="17.7" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="68.5" y1="32.0" x2="44.5" y2="17.7" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="30.8" y1="8.8"  x2="44.5" y2="17.7" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="22.1" y1="13.6" x2="44.5" y2="17.7" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="13.4" y1="21.1" x2="44.5" y2="17.7" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="4.8"  y1="32.6" x2="44.5" y2="17.7" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="20.2" y1="32.0" x2="44.5" y2="17.7" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="25.2" y1="22.5" x2="44.5" y2="17.7" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="24.8" y1="34.8" x2="44.5" y2="17.7" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="33.2" y1="24.5" x2="44.5" y2="17.7" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="49.3" y1="29.4" x2="44.5" y2="17.7" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="65.8" y1="26.2" x2="44.5" y2="17.7" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="68.5" y1="32.0" x2="44.5" y2="17.7" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <circle cx="30.8" cy="8.8"  r="0.65" fill="white"/><circle cx="30.8" cy="8.8"  r="0.42" fill="#E8924A"/>
            <circle cx="22.1" cy="13.6" r="0.65" fill="white"/><circle cx="22.1" cy="13.6" r="0.42" fill="#E8924A"/>
            <circle cx="13.4" cy="21.1" r="0.65" fill="white"/><circle cx="13.4" cy="21.1" r="0.42" fill="#E8924A"/>
            <circle cx="4.8"  cy="32.6" r="0.65" fill="white"/><circle cx="4.8"  cy="32.6" r="0.42" fill="#E8924A"/>
            <circle cx="20.2" cy="32.0" r="0.65" fill="white"/><circle cx="20.2" cy="32.0" r="0.42" fill="#E8924A"/>
            <circle cx="25.2" cy="22.5" r="0.65" fill="white"/><circle cx="25.2" cy="22.5" r="0.42" fill="#E8924A"/>
            <circle cx="24.8" cy="34.8" r="0.65" fill="white"/><circle cx="24.8" cy="34.8" r="0.42" fill="#E8924A"/>
            <circle cx="33.2" cy="24.5" r="0.65" fill="white"/><circle cx="33.2" cy="24.5" r="0.42" fill="#E8924A"/>
            <circle cx="49.3" cy="29.4" r="0.65" fill="white"/><circle cx="49.3" cy="29.4" r="0.42" fill="#E8924A"/>
            <circle cx="65.8" cy="26.2" r="0.65" fill="white"/><circle cx="65.8" cy="26.2" r="0.42" fill="#E8924A"/>
            <circle cx="68.5" cy="32.0" r="0.65" fill="white"/><circle cx="68.5" cy="32.0" r="0.42" fill="#E8924A"/>
            <circle cx="44.5" cy="17.7" r="0.9" fill="white"/>
            <circle cx="44.5" cy="17.7" r="0.58" fill="#2E5D3A"/>
            <circle cx="44.5" cy="17.7" r="2" fill="none" stroke="#2E5D3A" stroke-width="0.2">
              <animate attributeName="r" values="1.0;2.4;1.0" dur="2.5s" repeatCount="indefinite"/>
              <animate attributeName="opacity" values="0.7;0;0.7" dur="2.5s" repeatCount="indefinite"/>
            </circle>
          </svg>
        </div>
      </div>

      <!-- MAP 2: World — Export destinations (21 countries) -->
      <div class="location__map-panel reveal">
        <div class="location__map-header">
          <span class="location__map-tag location__map-tag--export">&#8593; Export</span>
          <span class="location__map-route">Ukraine → 21 countries worldwide</span>
        </div>
        <div class="location__world-container">
          <img src="<?php echo esc_url( $tdir ); ?>/assets/images/map-world.png" alt="World map: SPORYSH export destinations" class="location__world-img">
          <svg class="location__map-overlay" viewBox="0 0 100 50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
            <!-- Arc routes: Ukraine → Western Europe / UK / USA / China / India -->
            <path d="M57.97,11.03 Q54,7 52.8,11.9"  fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.03 Q53,6 49.4,10.0"  fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M23.6,14.4 Q37,2 57.97,11.03"  fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.03 Q73,5 78.9,15.3"  fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.03 Q67,12 71.7,18.9"  fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.03 Q54,7 52.8,11.9"  fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.03 Q53,6 49.4,10.0"  fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M23.6,14.4 Q37,2 57.97,11.03"  fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.03 Q73,5 78.9,15.3"  fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.03 Q67,12 71.7,18.9"  fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <!-- Country dots: Europe -->
            <circle cx="55.6" cy="10.6" r="0.55" fill="white"/><circle cx="55.6" cy="10.6" r="0.35" fill="#E8924A"/><!-- Poland -->
            <circle cx="52.8" cy="10.8" r="0.55" fill="white"/><circle cx="52.8" cy="10.8" r="0.35" fill="#E8924A"/><!-- Germany -->
            <circle cx="50.6" cy="11.9" r="0.55" fill="white"/><circle cx="50.6" cy="11.9" r="0.35" fill="#E8924A"/><!-- France -->
            <circle cx="54.3" cy="11.1" r="0.55" fill="white"/><circle cx="54.3" cy="11.1" r="0.35" fill="#E8924A"/><!-- Czech Rep. -->
            <circle cx="53.9" cy="11.9" r="0.55" fill="white"/><circle cx="53.9" cy="11.9" r="0.35" fill="#E8924A"/><!-- Austria -->
            <circle cx="55.3" cy="11.9" r="0.55" fill="white"/><circle cx="55.3" cy="11.9" r="0.35" fill="#E8924A"/><!-- Hungary -->
            <circle cx="52.2" cy="11.9" r="0.55" fill="white"/><circle cx="52.2" cy="11.9" r="0.35" fill="#E8924A"/><!-- Switzerland -->
            <circle cx="53.3" cy="13.3" r="0.55" fill="white"/><circle cx="53.3" cy="13.3" r="0.35" fill="#E8924A"/><!-- Italy -->
            <circle cx="48.9" cy="13.9" r="0.55" fill="white"/><circle cx="48.9" cy="13.9" r="0.35" fill="#E8924A"/><!-- Spain -->
            <circle cx="47.8" cy="14.2" r="0.55" fill="white"/><circle cx="47.8" cy="14.2" r="0.35" fill="#E8924A"/><!-- Portugal -->
            <circle cx="49.4" cy="10.0" r="0.55" fill="white"/><circle cx="49.4" cy="10.0" r="0.35" fill="#E8924A"/><!-- UK -->
            <circle cx="56.7" cy="9.4"  r="0.55" fill="white"/><circle cx="56.7" cy="9.4"  r="0.35" fill="#E8924A"/><!-- Lithuania -->
            <circle cx="54.4" cy="12.5" r="0.55" fill="white"/><circle cx="54.4" cy="12.5" r="0.35" fill="#E8924A"/><!-- Croatia -->
            <circle cx="54.2" cy="12.2" r="0.55" fill="white"/><circle cx="54.2" cy="12.2" r="0.35" fill="#E8924A"/><!-- Slovenia -->
            <circle cx="55.8" cy="12.8" r="0.55" fill="white"/><circle cx="55.8" cy="12.8" r="0.35" fill="#E8924A"/><!-- Serbia -->
            <circle cx="56.9" cy="13.1" r="0.55" fill="white"/><circle cx="56.9" cy="13.1" r="0.35" fill="#E8924A"/><!-- Bulgaria -->
            <circle cx="55.6" cy="13.6" r="0.55" fill="white"/><circle cx="55.6" cy="13.6" r="0.35" fill="#E8924A"/><!-- Albania -->
            <circle cx="56.1" cy="13.6" r="0.55" fill="white"/><circle cx="56.1" cy="13.6" r="0.35" fill="#E8924A"/><!-- Macedonia -->
            <!-- Country dots: Americas + Asia -->
            <circle cx="23.6" cy="14.4" r="0.85" fill="white"/><circle cx="23.6" cy="14.4" r="0.55" fill="#E8924A"/><!-- USA -->
            <circle cx="78.9" cy="15.3" r="0.55" fill="white"/><circle cx="78.9" cy="15.3" r="0.35" fill="#E8924A"/><!-- China -->
            <circle cx="71.7" cy="18.9" r="0.55" fill="white"/><circle cx="71.7" cy="18.9" r="0.35" fill="#E8924A"/><!-- India -->
            <!-- Ukraine (Zhytomyr) — source dot -->
            <circle cx="57.97" cy="11.03" r="0.9" fill="white"/>
            <circle cx="57.97" cy="11.03" r="0.58" fill="#2E5D3A"/>
            <circle cx="57.97" cy="11.03" r="1.8" fill="none" stroke="#2E5D3A" stroke-width="0.18">
              <animate attributeName="r" values="1.0;2.2;1.0" dur="2.5s" repeatCount="indefinite"/>
              <animate attributeName="opacity" values="0.7;0;0.7" dur="2.5s" repeatCount="indefinite"/>
            </circle>
          </svg>
        </div>
      </div>

    </div>

    <div class="location__address">
      <i data-lucide="map-pin"></i>
      <div>
        <strong>Ukraine, Zhytomyr region</strong>
        <span>Nezalezhnosti Avenue 106-B, Zhytomyr, 10029</span>
      </div>
    </div>

  </div>
</section>
