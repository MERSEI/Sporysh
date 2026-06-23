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

      <!-- MAP 1: Ukraine — Collection Regions (arrows from regions TO Zhytomyr) -->
      <div class="location__map-panel reveal">
        <div class="location__map-header">
          <span class="location__map-tag location__map-tag--ukraine">&#8857; Collection</span>
          <span class="location__map-route">Ukraine &#8212; Source Regions</span>
        </div>
        <div class="location__world-container">
          <img src="<?php echo esc_url( $tdir ); ?>/assets/images/map-ukr.png" alt="Ukraine map with SPORYSH collection regions" class="location__world-img">
          <svg class="location__map-overlay" viewBox="0 0 100 66.7" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
            <!-- Lines region&#8594;Zhytomyr — white shadow -->
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
            <!-- Lines — orange -->
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
            <!-- Collection region dots -->
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
            <!-- Zhytomyr — pulsing green -->
            <circle cx="44.5" cy="17.7" r="0.9" fill="white"/>
            <circle cx="44.5" cy="17.7" r="0.58" fill="#2E5D3A"/>
            <circle cx="44.5" cy="17.7" r="2" fill="none" stroke="#2E5D3A" stroke-width="0.2">
              <animate attributeName="r" values="1.0;2.4;1.0" dur="2.5s" repeatCount="indefinite"/>
              <animate attributeName="opacity" values="0.7;0;0.7" dur="2.5s" repeatCount="indefinite"/>
            </circle>
          </svg>
        </div>
      </div>

      <!-- MAP 2: World — Export destinations (Europe + USA + China + India) -->
      <div class="location__map-panel reveal">
        <div class="location__map-header">
          <span class="location__map-tag location__map-tag--export">&#8593; Export</span>
          <span class="location__map-route">Ukraine &#8594; World (21 countries)</span>
        </div>
        <div class="location__world-container">
          <img src="<?php echo esc_url( $tdir ); ?>/assets/images/map-world.png" alt="World map: SPORYSH global export destinations" class="location__world-img">
          <svg class="location__map-overlay" viewBox="0 0 100 50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
            <!-- WHITE SHADOW PATHS -->
            <path d="M57.97,11.04 Q54,8 50.64,11.42" fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.04 Q54,9 49.97,10.69" fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.04 Q40,2 23.7,14.1"   fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.04 Q72,6 83.7,16.3"   fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.04 Q66,15 70.2,19.7"  fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <!-- ORANGE PATHS -->
            <path d="M57.97,11.04 Q54,8 50.64,11.42" fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.04 Q54,9 49.97,10.69" fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.04 Q40,2 23.7,14.1"   fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.04 Q72,6 83.7,16.3"   fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.04 Q66,15 70.2,19.7"  fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <!-- European country dots (18) -->
            <circle cx="55.83" cy="10.50" r="0.5" fill="white"/><circle cx="55.83" cy="10.50" r="0.32" fill="#E8924A"/>
            <circle cx="53.72" cy="10.42" r="0.5" fill="white"/><circle cx="53.72" cy="10.42" r="0.32" fill="#E8924A"/>
            <circle cx="50.64" cy="11.42" r="0.5" fill="white"/><circle cx="50.64" cy="11.42" r="0.32" fill="#E8924A"/>
            <circle cx="54.03" cy="11.08" r="0.5" fill="white"/><circle cx="54.03" cy="11.08" r="0.32" fill="#E8924A"/>
            <circle cx="54.56" cy="11.61" r="0.5" fill="white"/><circle cx="54.56" cy="11.61" r="0.32" fill="#E8924A"/>
            <circle cx="55.28" cy="11.81" r="0.5" fill="white"/><circle cx="55.28" cy="11.81" r="0.32" fill="#E8924A"/>
            <circle cx="52.08" cy="11.97" r="0.5" fill="white"/><circle cx="52.08" cy="11.97" r="0.32" fill="#E8924A"/>
            <circle cx="53.47" cy="13.36" r="0.5" fill="white"/><circle cx="53.47" cy="13.36" r="0.32" fill="#E8924A"/>
            <circle cx="48.97" cy="13.78" r="0.5" fill="white"/><circle cx="48.97" cy="13.78" r="0.32" fill="#E8924A"/>
            <circle cx="47.47" cy="14.25" r="0.5" fill="white"/><circle cx="47.47" cy="14.25" r="0.32" fill="#E8924A"/>
            <circle cx="49.97" cy="10.69" r="0.5" fill="white"/><circle cx="49.97" cy="10.69" r="0.32" fill="#E8924A"/>
            <circle cx="57.03" cy="9.81"  r="0.5" fill="white"/><circle cx="57.03" cy="9.81"  r="0.32" fill="#E8924A"/>
            <circle cx="54.44" cy="12.28" r="0.5" fill="white"/><circle cx="54.44" cy="12.28" r="0.32" fill="#E8924A"/>
            <circle cx="54.03" cy="12.19" r="0.5" fill="white"/><circle cx="54.03" cy="12.19" r="0.32" fill="#E8924A"/>
            <circle cx="55.69" cy="12.56" r="0.5" fill="white"/><circle cx="55.69" cy="12.56" r="0.32" fill="#E8924A"/>
            <circle cx="56.47" cy="13.14" r="0.5" fill="white"/><circle cx="56.47" cy="13.14" r="0.32" fill="#E8924A"/>
            <circle cx="55.50" cy="13.53" r="0.5" fill="white"/><circle cx="55.50" cy="13.53" r="0.32" fill="#E8924A"/>
            <circle cx="55.94" cy="13.33" r="0.5" fill="white"/><circle cx="55.94" cy="13.33" r="0.32" fill="#E8924A"/>
            <!-- USA / China / India -->
            <circle cx="23.7" cy="14.1" r="0.55" fill="white"/><circle cx="23.7" cy="14.1" r="0.35" fill="#E8924A"/>
            <circle cx="83.7" cy="16.3" r="0.55" fill="white"/><circle cx="83.7" cy="16.3" r="0.35" fill="#E8924A"/>
            <circle cx="70.2" cy="19.7" r="0.55" fill="white"/><circle cx="70.2" cy="19.7" r="0.35" fill="#E8924A"/>
            <!-- Zhytomyr — pulsing green origin/hub -->
            <circle cx="57.97" cy="11.04" r="0.85" fill="white"/>
            <circle cx="57.97" cy="11.04" r="0.55" fill="#2E5D3A"/>
            <circle cx="57.97" cy="11.04" r="1.8" fill="none" stroke="#2E5D3A" stroke-width="0.18">
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
