<!-- ==================== FOOTER ==================== -->
<footer class="footer">
  <div class="container">
    <div class="footer__top">
      <div class="footer__brand">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>#home" class="footer__logo">
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="SPORYSH" class="footer__logo-img">
          <span>SPORYSH LLC</span>
        </a>
        <p class="footer__tagline"><?php echo esc_html( sporysh_t( 'footer-tagline', 'Premium herbal raw materials supplier from Ukraine for the European B2B market.' ) ); ?></p>
      </div>
      <div class="footer__links">
        <div class="footer__col">
          <h4><?php echo esc_html( sporysh_t( 'footer-nav-title', 'Navigation' ) ); ?></h4>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>#home"><?php echo esc_html( sporysh_t( 'nav-home', 'Home' ) ); ?></a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>#products"><?php echo esc_html( sporysh_t( 'nav-products', 'Products' ) ); ?></a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>#about"><?php echo esc_html( sporysh_t( 'nav-about', 'About Us' ) ); ?></a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contacts"><?php echo esc_html( sporysh_t( 'nav-contacts', 'Contacts' ) ); ?></a>
        </div>
        <div class="footer__col">
          <h4><?php echo esc_html( sporysh_t( 'footer-categories-title', 'Categories' ) ); ?></h4>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>#products" onclick="filterProducts('herbs')"><?php echo esc_html( sporysh_t( 'filter-herbs', 'Herbs' ) ); ?></a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>#products" onclick="filterProducts('leaves')"><?php echo esc_html( sporysh_t( 'filter-leaves', 'Leaves' ) ); ?></a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>#products" onclick="filterProducts('flowers')"><?php echo esc_html( sporysh_t( 'filter-flowers', 'Flowers' ) ); ?></a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>#products" onclick="filterProducts('roots')"><?php echo esc_html( sporysh_t( 'filter-roots', 'Roots' ) ); ?></a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>#products" onclick="filterProducts('berries')"><?php echo esc_html( sporysh_t( 'filter-berries', 'Berries' ) ); ?></a>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>#products" onclick="filterProducts('others')"><?php echo esc_html( sporysh_t( 'filter-others', 'Others' ) ); ?></a>
        </div>
        <div class="footer__col">
          <h4><?php echo esc_html( sporysh_t( 'footer-contacts-title', 'Contacts' ) ); ?></h4>
          <a href="tel:+380971813631">+380 97 181 3631</a>
          <a href="tel:+380974964423">+380 97 496 4423</a>
          <span>Nezalezhnosti Avenue 106-B,<br>Zhytomyr, Ukraine, 10029</span>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <span><?php echo wp_kses_post( sporysh_t( 'footer-copyright', '&copy; 2026 SPORYSH LLC — All Rights Reserved' ) ); ?></span>
      <div class="footer__social">
        <a href="https://www.linkedin.com/company/sporysh" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
          <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>
        </a>
      </div>
    </div>
  </div>
</footer>

<!-- Back to Top -->
<button class="back-to-top" id="backToTop" aria-label="Back to top">
  <i data-lucide="arrow-up"></i>
</button>

<!-- GDPR Cookie Banner -->
<div class="cookie-banner" id="cookieBanner">
  <div class="cookie-banner__inner">
    <p><?php echo esc_html( sporysh_t( 'cookie-text', 'We use cookies to improve your experience. By continuing to browse, you agree to our Privacy Policy.' ) ); ?></p>
    <div class="cookie-banner__actions">
      <button class="btn btn--sm btn--primary" onclick="acceptCookies()"><?php echo esc_html( sporysh_t( 'cookie-accept', 'Accept' ) ); ?></button>
      <button class="btn btn--sm btn--ghost" onclick="rejectCookies()"><?php echo esc_html( sporysh_t( 'cookie-reject', 'Reject' ) ); ?></button>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
