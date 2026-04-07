<?php
/**
 * Front page template — main one-page layout
 */
get_header();
?>
<main>
  <?php get_template_part( 'template-parts/hero' ); ?>
  <?php get_template_part( 'template-parts/products' ); ?>
  <?php get_template_part( 'template-parts/certifications' ); ?>
  <?php get_template_part( 'template-parts/about' ); ?>
  <?php get_template_part( 'template-parts/contacts' ); ?>
</main>
<?php get_footer(); ?>
