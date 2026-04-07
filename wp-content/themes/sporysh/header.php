<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="SPORYSH LLC — Ukrainian supplier of premium herbal raw materials for pharmaceutical, cosmetic, and food industries. Herbs, leaves, flowers, roots, berries for the European market.">

<!-- Open Graph -->
<meta property="og:title" content="SPORYSH — Premium Herbal Raw Materials">
<meta property="og:description" content="Ukrainian supplier of premium herbal raw materials for B2B partners. European quality standards.">
<meta property="og:type" content="website">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page-progress"></div>
<div id="cursor"></div>

<!-- ==================== HEADER ==================== -->
<header class="header" id="header">
  <div class="header__inner">
    <!-- LEFT: Logo -->
    <div class="header__left">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#home" class="header__logo" aria-label="SPORYSH Home">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="SPORYSH" class="header__logo-img">
        <span class="header__logo-text">SPORYSH</span>
      </a>
    </div>

    <!-- CENTER: Navigation -->
    <nav class="header__nav" id="mainNav" aria-label="Main navigation">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#home"     class="nav-link active" data-section="home"><?php echo esc_html( sporysh_t( 'nav-home', 'Home' ) ); ?></a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#products"  class="nav-link"        data-section="products"><?php echo esc_html( sporysh_t( 'nav-products', 'Products' ) ); ?></a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#about"     class="nav-link"        data-section="about"><?php echo esc_html( sporysh_t( 'nav-about', 'About Us' ) ); ?></a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contacts"  class="nav-link"        data-section="contacts"><?php echo esc_html( sporysh_t( 'nav-contacts', 'Contacts' ) ); ?></a>
    </nav>

    <!-- RIGHT: Contacts + Language Switch + Mobile Toggle -->
    <div class="header__right">
      <div class="header__contacts">
        <a href="tel:+380974964423" class="header__contact-item">
          <i data-lucide="phone"></i>
          <span>+380 97 496 4423</span>
        </a>
        <a href="mailto:info@sporysh.com" class="header__contact-item">
          <i data-lucide="mail"></i>
          <span>info@sporysh.com</span>
        </a>
      </div>

      <!-- Polylang language switcher -->
      <?php if ( function_exists( 'pll_the_languages' ) ) : ?>
        <div class="lang-switch" id="langSwitch" aria-label="Switch language">
          <?php
          pll_the_languages( [
              'show_flags'    => false,
              'show_names'    => true,
              'display_names_as' => 'slug',
              'hide_if_empty' => false,
              'raw'           => false,
              'echo'          => true,
          ] );
          ?>
        </div>
      <?php else : ?>
        <div class="lang-switch lang-switch--static" id="langSwitch" aria-label="Language">
          <span class="lang-switch__active">EN</span>
          <span class="lang-switch__divider">/</span>
          <span class="lang-switch__inactive">UA</span>
        </div>
      <?php endif; ?>

      <button class="mobile-toggle" id="mobileToggle" aria-label="Open menu" aria-expanded="false">
        <i data-lucide="menu" class="icon-menu"></i>
        <i data-lucide="x" class="icon-close"></i>
      </button>
    </div>
  </div>

  <!-- Mobile Nav -->
  <div class="mobile-nav" id="mobileNav">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#home"     class="mobile-nav__link" data-section="home"><?php echo esc_html( sporysh_t( 'nav-home', 'Home' ) ); ?></a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#products"  class="mobile-nav__link" data-section="products"><?php echo esc_html( sporysh_t( 'nav-products', 'Products' ) ); ?></a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#about"     class="mobile-nav__link" data-section="about"><?php echo esc_html( sporysh_t( 'nav-about', 'About Us' ) ); ?></a>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contacts"  class="mobile-nav__link" data-section="contacts"><?php echo esc_html( sporysh_t( 'nav-contacts', 'Contacts' ) ); ?></a>
  </div>
</header>
