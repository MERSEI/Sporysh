<?php
/**
 * Template part: Products section (#products)
 * Products are managed via the 'sporysh_product' custom post type.
 */
$tdir = get_template_directory_uri();

// Map taxonomy slug → display label (for the category badge on front of card)
$category_labels = [
    'herbs'   => sporysh_t( 'filter-herbs',   'Herbs' ),
    'leaves'  => sporysh_t( 'filter-leaves',  'Leaves' ),
    'flowers' => sporysh_t( 'filter-flowers', 'Flowers' ),
    'roots'   => sporysh_t( 'filter-roots',   'Roots' ),
    'berries' => sporysh_t( 'filter-berries', 'Berries' ),
    'others'  => sporysh_t( 'filter-others',  'Others' ),
];
?>
<!-- ==================== PRODUCTS ==================== -->
<section class="products" id="products">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><?php echo esc_html( sporysh_t( 'section-tag-catalog', 'Our Products' ) ); ?></span>
      <h2 class="section-title"><?php echo esc_html( sporysh_t( 'section-title-products', 'Product Catalog' ) ); ?></h2>
      <p class="section-desc"><?php echo esc_html( sporysh_t( 'section-desc-products', 'Browse our selection of premium herbal raw materials. Hover over each card to see the product in its natural form.' ) ); ?></p>
    </div>

    <!-- Filters -->
    <div class="products__filters">
      <button class="filter-btn active" data-filter="all" onclick="filterProducts('all')"><?php echo esc_html( sporysh_t( 'filter-all', 'All' ) ); ?></button>
      <button class="filter-btn" data-filter="herbs"   onclick="filterProducts('herbs')"><?php echo esc_html( sporysh_t( 'filter-herbs',   'Herbs' ) ); ?></button>
      <button class="filter-btn" data-filter="leaves"  onclick="filterProducts('leaves')"><?php echo esc_html( sporysh_t( 'filter-leaves',  'Leaves' ) ); ?></button>
      <button class="filter-btn" data-filter="flowers" onclick="filterProducts('flowers')"><?php echo esc_html( sporysh_t( 'filter-flowers', 'Flowers' ) ); ?></button>
      <button class="filter-btn" data-filter="roots"   onclick="filterProducts('roots')"><?php echo esc_html( sporysh_t( 'filter-roots',   'Roots' ) ); ?></button>
      <button class="filter-btn" data-filter="berries" onclick="filterProducts('berries')"><?php echo esc_html( sporysh_t( 'filter-berries', 'Berries' ) ); ?></button>
      <button class="filter-btn" data-filter="others"  onclick="filterProducts('others')"><?php echo esc_html( sporysh_t( 'filter-others',  'Others' ) ); ?></button>
    </div>

    <!-- Search -->
    <div class="products__search">
      <i data-lucide="search" class="products__search-icon"></i>
      <input type="text" class="products__search-input" id="productSearch"
             placeholder="<?php echo esc_attr( sporysh_t( 'search-placeholder', 'Search by name or Latin name...' ) ); ?>"
             autocomplete="off">
    </div>

    <!-- Product Grid -->
    <div class="products__grid" id="productsGrid">
      <?php
      $products_query = new WP_Query( [
          'post_type'      => 'sporysh_product',
          'posts_per_page' => -1,
          'post_status'    => 'publish',
          'orderby'        => 'menu_order',
          'order'          => 'ASC',
      ] );

      if ( $products_query->have_posts() ) :
          while ( $products_query->have_posts() ) :
              $products_query->the_post();

              $post_id        = get_the_ID();
              $title          = get_the_title();
              $latin_name     = get_post_meta( $post_id, '_latin_name', true );
              $origin         = get_post_meta( $post_id, '_origin', true ) ?: 'Ukraine, Zhytomyr region';
              $name_ua        = get_post_meta( $post_id, '_name_ua', true );
              $front_image_id = (int) get_post_meta( $post_id, '_front_image_id', true );
              $back_image_id  = (int) get_post_meta( $post_id, '_back_image_id', true );

              // Fallback: if no custom front image, use featured image
              if ( ! $front_image_id && has_post_thumbnail() ) {
                  $front_image_id = (int) get_post_thumbnail_id();
              }

              $front_url = $front_image_id ? wp_get_attachment_image_url( $front_image_id, 'medium_large' ) : '';
              $back_url  = $back_image_id  ? wp_get_attachment_image_url( $back_image_id,  'medium_large' ) : '';

              // Taxonomy for category
              $terms    = get_the_terms( $post_id, 'herb_category' );
              $cat_slug = ( $terms && ! is_wp_error( $terms ) ) ? $terms[0]->slug : 'others';
              $cat_label = $category_labels[ $cat_slug ] ?? ucfirst( $cat_slug );

              // data-name: title + latin name + Ukrainian name — used for JS search
              $data_name = strtolower( $title . ' ' . $latin_name . ' ' . $name_ua );
              ?>
              <div class="product-card" data-category="<?php echo esc_attr( $cat_slug ); ?>" data-name="<?php echo esc_attr( $data_name ); ?>">
                <div class="product-card__flip">
                  <!-- Front: nature/plant image (_back_image_id in WP) -->
                  <div class="product-card__front">
                    <?php if ( $back_url ) : ?>
                      <img src="<?php echo esc_url( $back_url ); ?>" alt="<?php echo esc_attr( $title ); ?> — growing in nature" loading="lazy" width="400" height="400">
                    <?php elseif ( $front_url ) : ?>
                      <img src="<?php echo esc_url( $front_url ); ?>" alt="<?php echo esc_attr( $title ); ?>" loading="lazy" width="400" height="400">
                    <?php else : ?>
                      <div style="width:400px;height:400px;background:#e5e7eb;display:flex;align-items:center;justify-content:center;color:#9ca3af;">No image</div>
                    <?php endif; ?>
                    <div class="product-card__label">
                      <span class="product-card__category"><?php echo esc_html( $cat_label ); ?></span>
                    </div>
                  </div>
                  <!-- Back: cut/dried image (_front_image_id in WP) -->
                  <div class="product-card__back">
                    <?php if ( $front_url ) : ?>
                      <img src="<?php echo esc_url( $front_url ); ?>" alt="<?php echo esc_attr( $title ); ?> — dried raw material" loading="lazy" width="400" height="400">
                    <?php else : ?>
                      <div style="width:400px;height:400px;background:#d1d5db;display:flex;align-items:center;justify-content:center;color:#6b7280;">No image</div>
                    <?php endif; ?>
                    <div class="product-card__info">
                      <h3><?php echo esc_html( $title ); ?></h3>
                      <?php if ( $latin_name ) : ?>
                        <p class="product-card__latin"><?php echo esc_html( $latin_name ); ?></p>
                      <?php endif; ?>
                      <p class="product-card__origin">Origin: <?php echo esc_html( $origin ); ?></p>
                    </div>
                  </div>
                </div>
                <div class="product-card__title-bar">
                  <h3><?php echo esc_html( $title ); ?></h3>
                  <?php if ( $latin_name ) : ?>
                    <span class="product-card__latin-small"><?php echo esc_html( $latin_name ); ?></span>
                  <?php endif; ?>
                </div>
              </div>
              <?php
          endwhile;
          wp_reset_postdata();
      else :
          // No products added yet — show placeholder message in admin-visible area only
          if ( current_user_can( 'manage_options' ) ) :
              ?>
              <div style="padding:2rem;text-align:center;color:#6b7280;grid-column:1/-1;">
                <p>No products found. <a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=sporysh_product' ) ); ?>">Add your first product</a> in the WordPress admin.</p>
              </div>
              <?php
          endif;
      endif;
      ?>
    </div>

    <!-- No results message -->
    <div class="products__empty" id="productsEmpty" style="display:none;">
      <i data-lucide="search-x"></i>
      <p><?php echo esc_html( sporysh_t( 'products-empty', 'No products found matching your search.' ) ); ?></p>
    </div>

    <!-- Explore Catalog button -->
    <div class="products__cta">
      <a href="https://drive.google.com/file/d/1LRA2KES8jgnedoFHBtzUgow5BKCjHuwa/view?usp=sharing" target="_blank" rel="noopener noreferrer" class="btn btn--primary btn--lg">
        <i data-lucide="file-text"></i>
        <?php echo esc_html( sporysh_t( 'btn-catalog', 'View Full Catalog' ) ); ?>
      </a>
    </div>
  </div>
</section>
