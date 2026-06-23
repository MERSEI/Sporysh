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

      <!-- MAP 1: World — Import USA → Ukraine -->
      <div class="location__map-panel reveal">
        <div class="location__map-header">
          <span class="location__map-tag location__map-tag--import">&#8595; Import</span>
          <span class="location__map-route">USA &#8594; Ukraine</span>
        </div>
        <div class="location__world-container">
          <img src="<?php echo esc_url( $tdir ); ?>/assets/images/map-world.png" alt="World map: import route from USA to Ukraine" class="location__world-img">
          <svg class="location__map-overlay" viewBox="0 0 100 50" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
            <path d="M28.1,14.2 Q38,3.5 57.97,11.03" fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <path d="M28.1,14.2 Q38,3.5 57.97,11.03" fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.1" stroke-linecap="round"/>
            <circle cx="28.1" cy="14.2" r="0.85" fill="white"/>
            <circle cx="28.1" cy="14.2" r="0.55" fill="#E8924A"/>
            <circle cx="28.1" cy="14.2" r="1.8" fill="none" stroke="#E8924A" stroke-width="0.18">
              <animate attributeName="r" values="1.0;2.2;1.0" dur="2.5s" repeatCount="indefinite"/>
              <animate attributeName="opacity" values="0.7;0;0.7" dur="2.5s" repeatCount="indefinite"/>
            </circle>
            <circle cx="57.97" cy="11.03" r="0.85" fill="white"/>
            <circle cx="57.97" cy="11.03" r="0.55" fill="#2E5D3A"/>
            <circle cx="57.97" cy="11.03" r="1.8" fill="none" stroke="#2E5D3A" stroke-width="0.18">
              <animate attributeName="r" values="1.0;2.2;1.0" dur="2.5s" repeatCount="indefinite"/>
              <animate attributeName="opacity" values="0.7;0;0.7" dur="2.5s" repeatCount="indefinite"/>
            </circle>
          </svg>
        </div>
      </div>

      <!-- MAP 2: Europe — Export Ukraine → Europe -->
      <div class="location__map-panel reveal">
        <div class="location__map-header">
          <span class="location__map-tag location__map-tag--export">&#8593; Export</span>
          <span class="location__map-route">Ukraine &#8594; Europe</span>
        </div>
        <div class="location__world-container">
          <img src="<?php echo esc_url( $tdir ); ?>/assets/images/map-europ.png" alt="Europe map: export routes from Ukraine to European partners" class="location__world-img">
          <svg class="location__map-overlay" viewBox="0 0 100 86" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" aria-hidden="true">
            <path d="M59,41 Q55.5,37 52,33"   fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q51,35 43,31"     fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q48,29 37,28"     fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q45.5,35 32,36"   fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q41,40 23,51"     fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q52,46 45,47"     fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q54,38.5 49,37"   fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q52.5,37.5 46,34" fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q55.5,40 52,40"   fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q58.5,43.5 58,46" fill="none" stroke="rgba(255,255,255,0.6)" stroke-width="0.42" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q55.5,37 52,33"   fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q51,35 43,31"     fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q48,29 37,28"     fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q45.5,35 32,36"   fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q41,40 23,51"     fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q52,46 45,47"     fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q54,38.5 49,37"   fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q52.5,37.5 46,34" fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q55.5,40 52,40"   fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <path d="M59,41 Q58.5,43.5 58,46" fill="none" stroke="#E8924A" stroke-width="0.28" stroke-dasharray="0.001,1.3" stroke-linecap="round"/>
            <circle cx="52" cy="33" r="0.55" fill="white"/><circle cx="52" cy="33" r="0.35" fill="#E8924A"/>
            <circle cx="43" cy="31" r="0.55" fill="white"/><circle cx="43" cy="31" r="0.35" fill="#E8924A"/>
            <circle cx="37" cy="28" r="0.55" fill="white"/><circle cx="37" cy="28" r="0.35" fill="#E8924A"/>
            <circle cx="32" cy="36" r="0.55" fill="white"/><circle cx="32" cy="36" r="0.35" fill="#E8924A"/>
            <circle cx="23" cy="51" r="0.55" fill="white"/><circle cx="23" cy="51" r="0.35" fill="#E8924A"/>
            <circle cx="45" cy="47" r="0.55" fill="white"/><circle cx="45" cy="47" r="0.35" fill="#E8924A"/>
            <circle cx="49" cy="37" r="0.55" fill="white"/><circle cx="49" cy="37" r="0.35" fill="#E8924A"/>
            <circle cx="46" cy="34" r="0.55" fill="white"/><circle cx="46" cy="34" r="0.35" fill="#E8924A"/>
            <circle cx="52" cy="40" r="0.55" fill="white"/><circle cx="52" cy="40" r="0.35" fill="#E8924A"/>
            <circle cx="58" cy="46" r="0.55" fill="white"/><circle cx="58" cy="46" r="0.35" fill="#E8924A"/>
            <circle cx="59" cy="41" r="0.85" fill="white"/>
            <circle cx="59" cy="41" r="0.55" fill="#2E5D3A"/>
            <circle cx="59" cy="41" r="1.8" fill="none" stroke="#2E5D3A" stroke-width="0.18">
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
