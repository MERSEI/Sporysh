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
            <span class="stat__number" data-target="30">0</span><span class="stat__suffix">K+</span>
            <span class="stat__label"><?php echo esc_html( sporysh_t( 'stat-label-acres', 'Acres Managed' ) ); ?></span>
          </div>
          <div class="stat">
            <span class="stat__number" data-target="3">0</span><span class="stat__suffix">+</span>
            <span class="stat__label"><?php echo esc_html( sporysh_t( 'stat-label-years', 'Years of Innovation' ) ); ?></span>
          </div>
          <div class="stat">
            <span class="stat__number" data-target="98">0</span><span class="stat__suffix">%</span>
            <span class="stat__label"><?php echo esc_html( sporysh_t( 'stat-label-satisfaction', 'Client Satisfaction' ) ); ?></span>
          </div>
        </div>
      </div>

      <div class="export-story__info reveal">
        <span class="section-tag"><?php echo wp_kses_post( sporysh_t( 'section-tag-about', 'About &amp; Export' ) ); ?></span>
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
            <line x1="44.5" y1="17.7" x2="30.8" y2="8.8"  stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="22.1" y2="13.6" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="13.4" y2="21.1" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="4.8"  y2="32.6" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="20.2" y2="32.0" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="25.2" y2="22.5" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="24.8" y2="34.8" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="33.2" y2="24.5" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="49.3" y2="29.4" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="65.8" y2="26.2" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="68.5" y2="32.0" stroke="rgba(255,255,255,0.7)" stroke-width="0.45" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="30.8" y2="8.8"  stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="22.1" y2="13.6" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="13.4" y2="21.1" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="4.8"  y2="32.6" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="20.2" y2="32.0" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="25.2" y2="22.5" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="24.8" y2="34.8" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="33.2" y2="24.5" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="49.3" y2="29.4" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="65.8" y2="26.2" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
            <line x1="44.5" y1="17.7" x2="68.5" y2="32.0" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="1,1"/>
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

      <!-- MAP 2: Europe — Export destinations -->
      <div class="location__map-panel reveal">
        <div class="location__map-header">
          <span class="location__map-tag location__map-tag--export">&#8593; Export</span>
          <span class="location__map-route">Ukraine → Europe (18 countries)</span>
        </div>
        <div class="location__world-container">
          <img src="<?php echo esc_url( $tdir ); ?>/assets/images/map-europ.png" alt="Europe map: SPORYSH export destinations" class="location__world-img">
          <svg class="location__map-overlay" viewBox="0 0 100 84.1" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
            <line x1="62.4" y1="43.7" x2="51.4" y2="39.6" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="57.5" y2="34.6" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="42.0" y2="44.1" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="40.6" y2="38.9" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="24.8" y2="46.5" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="21.3" y2="40.7" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="16.1" y2="63.5" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="44.3" y2="52.8" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="38.5" y2="60.7" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="54.7" y2="58.8" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="44.8" y2="48.1" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="49.7" y2="61.8" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="8.4"  y2="66.7" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="32.1" y2="50.6" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="50.7" y2="54.3" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="52.0" y2="60.2" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="48.6" y2="51.5" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="42.2" y2="52.8" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="51.4" y2="39.6" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="57.5" y2="34.6" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="42.0" y2="44.1" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="40.6" y2="38.9" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="24.8" y2="46.5" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="21.3" y2="40.7" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="16.1" y2="63.5" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="44.3" y2="52.8" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="38.5" y2="60.7" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="54.7" y2="58.8" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="44.8" y2="48.1" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="49.7" y2="61.8" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="8.4"  y2="66.7" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="32.1" y2="50.6" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="50.7" y2="54.3" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="52.0" y2="60.2" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="48.6" y2="51.5" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <line x1="62.4" y1="43.7" x2="42.2" y2="52.8" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.2" stroke-linecap="round"/>
            <circle cx="51.4" cy="39.6" r="0.55" fill="white"/><circle cx="51.4" cy="39.6" r="0.35" fill="#E8924A"/>
            <circle cx="57.5" cy="34.6" r="0.55" fill="white"/><circle cx="57.5" cy="34.6" r="0.35" fill="#E8924A"/>
            <circle cx="42.0" cy="44.1" r="0.55" fill="white"/><circle cx="42.0" cy="44.1" r="0.35" fill="#E8924A"/>
            <circle cx="40.6" cy="38.9" r="0.55" fill="white"/><circle cx="40.6" cy="38.9" r="0.35" fill="#E8924A"/>
            <circle cx="24.8" cy="46.5" r="0.55" fill="white"/><circle cx="24.8" cy="46.5" r="0.35" fill="#E8924A"/>
            <circle cx="21.3" cy="40.7" r="0.55" fill="white"/><circle cx="21.3" cy="40.7" r="0.35" fill="#E8924A"/>
            <circle cx="16.1" cy="63.5" r="0.55" fill="white"/><circle cx="16.1" cy="63.5" r="0.35" fill="#E8924A"/>
            <circle cx="44.3" cy="52.8" r="0.55" fill="white"/><circle cx="44.3" cy="52.8" r="0.35" fill="#E8924A"/>
            <circle cx="38.5" cy="60.7" r="0.55" fill="white"/><circle cx="38.5" cy="60.7" r="0.35" fill="#E8924A"/>
            <circle cx="54.7" cy="58.8" r="0.55" fill="white"/><circle cx="54.7" cy="58.8" r="0.35" fill="#E8924A"/>
            <circle cx="44.8" cy="48.1" r="0.55" fill="white"/><circle cx="44.8" cy="48.1" r="0.35" fill="#E8924A"/>
            <circle cx="49.7" cy="61.8" r="0.55" fill="white"/><circle cx="49.7" cy="61.8" r="0.35" fill="#E8924A"/>
            <circle cx="8.4"  cy="66.7" r="0.55" fill="white"/><circle cx="8.4"  cy="66.7" r="0.35" fill="#E8924A"/>
            <circle cx="32.1" cy="50.6" r="0.55" fill="white"/><circle cx="32.1" cy="50.6" r="0.35" fill="#E8924A"/>
            <circle cx="50.7" cy="54.3" r="0.55" fill="white"/><circle cx="50.7" cy="54.3" r="0.35" fill="#E8924A"/>
            <circle cx="52.0" cy="60.2" r="0.55" fill="white"/><circle cx="52.0" cy="60.2" r="0.35" fill="#E8924A"/>
            <circle cx="48.6" cy="51.5" r="0.55" fill="white"/><circle cx="48.6" cy="51.5" r="0.35" fill="#E8924A"/>
            <circle cx="42.2" cy="52.8" r="0.55" fill="white"/><circle cx="42.2" cy="52.8" r="0.35" fill="#E8924A"/>
            <circle cx="62.4" cy="43.7" r="0.85" fill="white"/>
            <circle cx="62.4" cy="43.7" r="0.55" fill="#2E5D3A"/>
            <circle cx="62.4" cy="43.7" r="1.8" fill="none" stroke="#2E5D3A" stroke-width="0.18">
              <animate attributeName="r" values="1.0;2.2;1.0" dur="2.5s" repeatCount="indefinite"/>
              <animate attributeName="opacity" values="0.7;0;0.7" dur="2.5s" repeatCount="indefinite"/>
            </circle>
          </svg>
        </div>
      </div>

      <!-- MAP 3: World — Global routes -->
      <div class="location__map-panel reveal">
        <div class="location__map-header">
          <span class="location__map-tag location__map-tag--import">&#8644; Global</span>
          <span class="location__map-route">USA · China · India</span>
        </div>
        <div class="location__world-container">
          <img src="<?php echo esc_url( $tdir ); ?>/assets/images/map-world.png" alt="World map: SPORYSH global import and export routes" class="location__world-img">
          <svg class="location__map-overlay" viewBox="0 0 100 50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
            <path d="M23.7,14.1 Q37,2 57.97,11.03" fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.03 Q72,6 83.7,16.3" fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.03 Q66,15 70.2,19.7" fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M23.7,14.1 Q37,2 57.97,11.03" fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.03 Q72,6 83.7,16.3" fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M57.97,11.03 Q66,15 70.2,19.7" fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <circle cx="23.7" cy="14.1" r="0.85" fill="white"/>
            <circle cx="23.7" cy="14.1" r="0.55" fill="#E8924A"/>
            <circle cx="23.7" cy="14.1" r="1.8" fill="none" stroke="#E8924A" stroke-width="0.18">
              <animate attributeName="r" values="1.0;2.2;1.0" dur="2.5s" repeatCount="indefinite"/>
              <animate attributeName="opacity" values="0.7;0;0.7" dur="2.5s" repeatCount="indefinite"/>
            </circle>
            <circle cx="83.7" cy="16.3" r="0.55" fill="white"/><circle cx="83.7" cy="16.3" r="0.35" fill="#E8924A"/>
            <circle cx="70.2" cy="19.7" r="0.55" fill="white"/><circle cx="70.2" cy="19.7" r="0.35" fill="#E8924A"/>
            <circle cx="57.97" cy="11.03" r="0.85" fill="white"/>
            <circle cx="57.97" cy="11.03" r="0.55" fill="#2E5D3A"/>
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
        <span>Prospekt Nezalezhnosti 106-b, 10029</span>
      </div>
    </div>

  </div>
</section>
