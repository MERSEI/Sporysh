<?php
// Front page: delegate to index.php which renders our static index.html
if (is_front_page()) {
    include(get_template_directory() . '/index.php');
    return;
}
// Other pages: standard WP loop (Elementor renders via the_content)
if (!defined('ABSPATH')) exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php wp_footer(); ?>
</body>
</html>
