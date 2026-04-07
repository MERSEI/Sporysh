<?php
/**
 * SPORYSH Theme — functions.php
 */

// ─── Theme Setup ─────────────────────────────────────────────────────────────
function sporysh_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style' ] );

    register_nav_menus( [
        'primary' => __( 'Primary Navigation', 'sporysh' ),
    ] );
}
add_action( 'after_setup_theme', 'sporysh_setup' );


// ─── Enqueue Scripts & Styles ─────────────────────────────────────────────────
function sporysh_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'sporysh-fonts',
        'https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Inter:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Raleway:wght@300;400;500;600;700&subset=latin,cyrillic&display=swap',
        [],
        null
    );

    // Main stylesheet
    wp_enqueue_style( 'sporysh-style', get_stylesheet_uri(), [ 'sporysh-fonts' ], '1.0.0' );

    // Lucide Icons (CDN)
    wp_enqueue_script( 'lucide', 'https://unpkg.com/lucide@0.344.0/dist/umd/lucide.min.js', [], '0.344.0', true );

    // Theme JS
    wp_enqueue_script(
        'sporysh-app',
        get_template_directory_uri() . '/assets/js/app.js',
        [ 'lucide' ],
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'sporysh_scripts' );


// ─── Translation Helper ───────────────────────────────────────────────────────
/**
 * Wrapper for Polylang pll__() with English fallback.
 */
function sporysh_t( string $key, string $default = '' ): string {
    if ( function_exists( 'pll__' ) ) {
        return pll__( $key );
    }
    return $default !== '' ? $default : $key;
}


// ─── Polylang String Registration ────────────────────────────────────────────
function sporysh_register_pll_strings() {
    if ( ! function_exists( 'pll_register_string' ) ) {
        return;
    }
    $group = 'Sporysh';
    $strings = [
        // Navigation
        'nav-home'                => 'Home',
        'nav-products'            => 'Products',
        'nav-about'               => 'About Us',
        'nav-contacts'            => 'Contacts',
        // Hero
        'hero-badge'              => 'Premium B2B Supplier',
        'hero-title-1'            => 'Premium Herbal',
        'hero-title-2'            => 'Raw Materials',
        'hero-subtitle'           => 'SPORYSH offers a curated range of plant raw materials for B2B partners. Our products undergo careful selection and meet European quality standards.',
        'btn-explore'             => 'Explore Catalog',
        'btn-contact'             => 'Contact Us',
        // Products section
        'section-tag-catalog'     => 'Our Catalog',
        'section-title-products'  => 'Products',
        'section-desc-products'   => 'Browse our selection of premium herbal raw materials. Hover over each card to see the product in its natural form.',
        'filter-all'              => 'All',
        'filter-herbs'            => 'Herbs',
        'filter-leaves'           => 'Leaves',
        'filter-flowers'          => 'Flowers',
        'filter-berries'          => 'Berries',
        'filter-others'           => 'Others',
        'search-placeholder'      => 'Search by name or Latin name...',
        'btn-catalog'             => 'Request Full PDF Catalog',
        'products-empty'          => 'No products found matching your search.',
        // Certifications
        'section-tag-quality'     => 'Quality Assurance',
        'section-title-certs'     => 'Our Certifications',
        'section-desc-certs'      => 'We comply with international standards to ensure the highest quality of our products for the European market.',
        // About / Export Story
        'section-tag-about'       => 'About &amp; Export',
        'section-title-about'     => 'From Ukraine to the World',
        'about-desc-1'            => 'SPORYSH LLC is a Ukrainian supplier of premium herbal raw materials — dried herbs, leaves, flowers, roots and berries — collected across Ukraine\'s cleanest regions and exported to B2B partners worldwide.',
        'about-desc-2'            => 'We source from 11 collection regions across western and central Ukraine, process to European quality standards, and deliver to partners in Europe, Asia and North America.',
        'stat-label-acres'        => 'Acres Managed',
        'stat-label-years'        => 'Years of Innovation',
        'stat-label-satisfaction' => 'Client Satisfaction',
        'export-label-europe'     => 'Europe',
        'export-label-asia'       => 'Asia &amp; Americas',
        'maps-title'              => 'Our Geographic Network',
        // Contacts
        'section-tag-contact'     => 'Get in Touch',
        'section-title-contacts'  => 'Contacts',
        'section-desc-contacts'   => 'Reach out to our export department for inquiries, pricing, and partnership opportunities.',
        'contact-export-dept'     => 'Export Department',
        'contact-address-label'   => 'Address',
        'contact-follow'          => 'Follow Us',
        'contact-address-text'    => 'Prospekt Nezalezhnosti 106-b, Zhytomyr, Ukraine, 10029',
        // Footer
        'footer-tagline'          => 'Premium herbal raw materials supplier from Ukraine for the European B2B market.',
        'footer-nav-title'        => 'Navigation',
        'footer-categories-title' => 'Categories',
        'footer-contacts-title'   => 'Contacts',
        'footer-copyright'        => '&copy; 2026 SPORYSH LLC — All Rights Reserved',
        // Cookie
        'cookie-text'             => 'We use cookies to improve your experience. By continuing to browse, you agree to our Privacy Policy.',
        'cookie-accept'           => 'Accept',
        'cookie-reject'           => 'Reject',
    ];

    foreach ( $strings as $key => $default ) {
        pll_register_string( $key, $default, $group );
    }
}
add_action( 'init', 'sporysh_register_pll_strings' );


// ─── Custom Post Type: Products ───────────────────────────────────────────────
function sporysh_register_cpt() {
    register_post_type( 'sporysh_product', [
        'labels' => [
            'name'               => 'Products',
            'singular_name'      => 'Product',
            'add_new'            => 'Add New Product',
            'add_new_item'       => 'Add New Product',
            'edit_item'          => 'Edit Product',
            'new_item'           => 'New Product',
            'view_item'          => 'View Product',
            'search_items'       => 'Search Products',
            'not_found'          => 'No products found',
            'not_found_in_trash' => 'No products found in trash',
            'menu_name'          => 'Products',
        ],
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => [ 'title', 'thumbnail' ],
        'menu_icon'    => 'dashicons-buddicons-topics',
        'rewrite'      => false,
    ] );

    register_taxonomy( 'herb_category', 'sporysh_product', [
        'labels' => [
            'name'          => 'Herb Categories',
            'singular_name' => 'Herb Category',
            'add_new_item'  => 'Add New Category',
            'edit_item'     => 'Edit Category',
        ],
        'hierarchical' => false,
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'rewrite'      => false,
    ] );
}
add_action( 'init', 'sporysh_register_cpt' );


// ─── Product Meta Box ─────────────────────────────────────────────────────────
function sporysh_add_product_metabox() {
    add_meta_box(
        'sporysh_product_details',
        'Product Details',
        'sporysh_product_metabox_html',
        'sporysh_product',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'sporysh_add_product_metabox' );

function sporysh_product_metabox_html( WP_Post $post ): void {
    $latin_name     = get_post_meta( $post->ID, '_latin_name', true );
    $origin         = get_post_meta( $post->ID, '_origin', true );
    $name_ua        = get_post_meta( $post->ID, '_name_ua', true );
    $front_image_id = get_post_meta( $post->ID, '_front_image_id', true );
    $back_image_id  = get_post_meta( $post->ID, '_back_image_id', true );

    wp_nonce_field( 'sporysh_product_save', 'sporysh_product_nonce' );
    ?>
    <table class="form-table">
      <tr>
        <th><label for="sporysh_latin_name">Latin Name</label></th>
        <td><input type="text" id="sporysh_latin_name" name="sporysh_latin_name" value="<?php echo esc_attr( $latin_name ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="sporysh_origin">Origin</label></th>
        <td><input type="text" id="sporysh_origin" name="sporysh_origin" value="<?php echo esc_attr( $origin ?: 'Ukraine, Zhytomyr region' ); ?>" class="regular-text" /></td>
      </tr>
      <tr>
        <th><label for="sporysh_name_ua">Name (Ukrainian)</label></th>
        <td><input type="text" id="sporysh_name_ua" name="sporysh_name_ua" value="<?php echo esc_attr( $name_ua ); ?>" class="regular-text" placeholder="e.g. М'ята перцева" /></td>
      </tr>
      <tr>
        <th><label>Front Image</label></th>
        <td>
          <input type="hidden" id="sporysh_front_image_id" name="sporysh_front_image_id" value="<?php echo esc_attr( $front_image_id ); ?>" />
          <div id="sporysh_front_preview">
            <?php if ( $front_image_id ) : ?>
              <?php echo wp_get_attachment_image( (int) $front_image_id, [ 80, 80 ] ); ?>
            <?php endif; ?>
          </div>
          <button type="button" class="button" id="sporysh_front_upload">Select Front Image</button>
          <?php if ( $front_image_id ) : ?>
            <button type="button" class="button" id="sporysh_front_remove">Remove</button>
          <?php endif; ?>
        </td>
      </tr>
      <tr>
        <th><label>Back Image</label></th>
        <td>
          <input type="hidden" id="sporysh_back_image_id" name="sporysh_back_image_id" value="<?php echo esc_attr( $back_image_id ); ?>" />
          <div id="sporysh_back_preview">
            <?php if ( $back_image_id ) : ?>
              <?php echo wp_get_attachment_image( (int) $back_image_id, [ 80, 80 ] ); ?>
            <?php endif; ?>
          </div>
          <button type="button" class="button" id="sporysh_back_upload">Select Back Image</button>
          <?php if ( $back_image_id ) : ?>
            <button type="button" class="button" id="sporysh_back_remove">Remove</button>
          <?php endif; ?>
        </td>
      </tr>
    </table>
    <script>
    (function($){
        function makeUploader(btnId, inputId, previewId) {
            var frame;
            $('#' + btnId).on('click', function(e){
                e.preventDefault();
                if (frame) { frame.open(); return; }
                frame = wp.media({ title: 'Select Image', button: { text: 'Use This Image' }, multiple: false });
                frame.on('select', function(){
                    var att = frame.state().get('selection').first().toJSON();
                    $('#' + inputId).val(att.id);
                    $('#' + previewId).html('<img src="' + att.url + '" style="max-width:80px;max-height:80px;">');
                });
                frame.open();
            });
        }
        makeUploader('sporysh_front_upload', 'sporysh_front_image_id', 'sporysh_front_preview');
        makeUploader('sporysh_back_upload',  'sporysh_back_image_id',  'sporysh_back_preview');
    })(jQuery);
    </script>
    <?php
}

function sporysh_save_product_meta( int $post_id ): void {
    if ( ! isset( $_POST['sporysh_product_nonce'] ) ) {
        return;
    }
    if ( ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['sporysh_product_nonce'] ) ), 'sporysh_product_save' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $fields = [
        '_latin_name'     => 'sporysh_latin_name',
        '_origin'         => 'sporysh_origin',
        '_name_ua'        => 'sporysh_name_ua',
        '_front_image_id' => 'sporysh_front_image_id',
        '_back_image_id'  => 'sporysh_back_image_id',
    ];

    foreach ( $fields as $meta_key => $post_key ) {
        if ( isset( $_POST[ $post_key ] ) ) {
            update_post_meta( $post_id, $meta_key, sanitize_text_field( wp_unslash( $_POST[ $post_key ] ) ) );
        }
    }
}
add_action( 'save_post_sporysh_product', 'sporysh_save_product_meta' );


// ─── Enqueue Media Uploader for Product Meta Box ──────────────────────────────
function sporysh_admin_scripts( string $hook ): void {
    global $post;
    if ( ( $hook === 'post.php' || $hook === 'post-new.php' ) && isset( $post ) && $post->post_type === 'sporysh_product' ) {
        wp_enqueue_media();
    }
}
add_action( 'admin_enqueue_scripts', 'sporysh_admin_scripts' );
