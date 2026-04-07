<?php
/**
 * Template part: Hero section (#home)
 */
$tdir = get_template_directory_uri();
?>
<!-- ==================== HERO ==================== -->
<section class="hero" id="home">
  <div class="hero__bg">
    <video class="hero__video" autoplay muted loop playsinline preload="auto">
      <source src="<?php echo esc_url( $tdir ); ?>/assets/images/hero-video.mp4?v=2" type="video/mp4">
    </video>
    <div class="hero__overlay"></div>
  </div>
  <div class="hero__content">
    <div class="hero__badge"><?php echo esc_html( sporysh_t( 'hero-badge', 'Premium B2B Supplier' ) ); ?></div>
    <h1 class="hero__title">
      <span class="hero__title-line"><?php echo esc_html( sporysh_t( 'hero-title-1', 'Premium Herbal' ) ); ?></span>
      <span class="hero__title-line hero__title-line--accent"><?php echo esc_html( sporysh_t( 'hero-title-2', 'Raw Materials' ) ); ?></span>
    </h1>
    <p class="hero__subtitle"><?php echo esc_html( sporysh_t( 'hero-subtitle', 'SPORYSH offers a curated range of plant raw materials for B2B partners. Our products undergo careful selection and meet European quality standards.' ) ); ?></p>
    <div class="hero__actions">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#products" class="btn btn--primary"><?php echo esc_html( sporysh_t( 'btn-explore', 'Explore Catalog' ) ); ?></a>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contacts" class="btn btn--outline"><?php echo esc_html( sporysh_t( 'btn-contact', 'Contact Us' ) ); ?></a>
    </div>
  </div>
</section>
