<<<<<<< HEAD
<section class="section-padding section-menu">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h2 class="color-red">Our Special Menus</h2>
          <h4 class="color-white">We Offer the best taste experience</h4>
        </div>
      </div>
    </div>
    <div class="row">
      <ul class="tabs">
        <?php
          // Get the taxonomy's terms
            
            $terms = get_terms(
            array(
                'taxonomy'   => 'kh_menu_cat',
                'hide_empty' => false,
                'meta_query' => array(
                    array(
                        'key'   => 'mainmenu_featured',
                        'value' => 'Yes',
                    )
                )
            ),
            
            );
            
            // Check if any term exists
            if ( ! empty( $terms ) && is_array( $terms ) ) {
                
            $j=1;
            
            // Run a loop and print them all
            foreach ( $terms as $term ) {
                
                ?>
        <li rel="tab-<?php echo $term->slug; ?>"> <?php echo $term->name; ?></li><?php
            }
            } 
          ?>
      </ul>
      <div class="tab_container">
        <?php
            // Get list of all taxonomy terms  -- In simple categories title
            $args = array(
                        'taxonomy' => 'kh_menu_cat',
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    );
            $cats = get_categories($args);
            $m=1;
            $i=1;

            // For every Terms of custom taxonomy get their posts by term_id
            foreach($cats as $cat) {
        ?>
        <h3 class="d_active tab_drawer_heading" rel="tab-<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></h3>
        <div id="tab-<?php echo $cat->slug; ?>" class="tab_content">
          <?php
                // Query Arguments
                $args = array(
                    'post_type' => 'kh_menu', // the post type
                    'posts_per_page' => 6,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'kh_menu_cat', // the custom vocabulary
                            'field'    => 'term_id',          // term_id, slug or name  (Define by what you want to search the below term)    
                            'terms'    => $cat->term_id,      // provide the term slugs
                        ),
                    ),
                );

                // The query
                $the_query = new WP_Query( $args );

                // The Loop
                if ( $the_query->have_posts() ) {
                    ?>
          <ul class="menuul">
          <?php
            
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                ?>
            <li>
              <?php
            // Must be inside a loop.
            $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
            if ( has_post_thumbnail() ) {
            ?>
              <div class="menu-image-thumbnail me-2">
                <a data-fancybox="gallery" href="<?php echo $attachment_image;?>">
                  <?php
                the_post_thumbnail();
                ?>
                </a>
              </div>
              <?php
            }
            else {
            ?>
              <div class="menu-image-thumbnail">
                <a data-fancybox="gallery" href="<?php echo $attachment_image;?>"><img
                    src="<?php echo bloginfo('template_url');?>/images/logo.png" alt="" width="100" height="100"></a>
              </div>
              <?php
            }
            ?>
              <div class="menu-content">
                <h2><?php echo get_the_title();?></h2>
                <?php the_content();?>
              </div>
              <div class="menu-price">
                <?php echo get_field('menu_price');?>
              </div>
            </li>
            <?php };?>
          </ul>
          <?php
                } else
                {
                    // no posts found
                }

                wp_reset_postdata(); // reset global $post;

                ?>
        </div>
        <?php
            } 
            ?>
      </div>
      <!-- .tab_container -->
    </div>
    <div class="spacer-40"></div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="menu-btn-ul">
          <li>
            <a href="<?php echo home_url();?>/?page_id=33" class="hvr-rectangle-out">Full Menu</a>
          </li>
          <li>
            <a href="#" class="hvr-rectangle-out"> Download <i class="fa-solid fa-file-pdf"></i></a>
          </li>
        </ul>
      </div>
    </div>

  </div>
  </div>
=======
<section class="section-padding section-menu">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title text-center">
          <h2 class="color-red">Our Special Menus</h2>
          <h4 class="color-white">We Offer the best taste experience</h4>
        </div>
      </div>
    </div>
    <div class="row">
      <ul class="tabs">
        <?php
          // Get the taxonomy's terms
            
            $terms = get_terms(
            array(
                'taxonomy'   => 'kh_menu_cat',
                'hide_empty' => false,
                'meta_query' => array(
                    array(
                        'key'   => 'mainmenu_featured',
                        'value' => 'Yes',
                    )
                )
            ),
            
            );
            
            // Check if any term exists
            if ( ! empty( $terms ) && is_array( $terms ) ) {
                
            $j=1;
            
            // Run a loop and print them all
            foreach ( $terms as $term ) {
                
                ?>
        <li rel="tab-<?php echo $term->slug; ?>"> <?php echo $term->name; ?></li><?php
            }
            } 
          ?>
      </ul>
      <div class="tab_container">
        <?php
            // Get list of all taxonomy terms  -- In simple categories title
            $args = array(
                        'taxonomy' => 'kh_menu_cat',
                        'orderby' => 'name',
                        'order'   => 'ASC'
                    );
            $cats = get_categories($args);
            $m=1;
            $i=1;

            // For every Terms of custom taxonomy get their posts by term_id
            foreach($cats as $cat) {
        ?>
        <h3 class="d_active tab_drawer_heading" rel="tab-<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></h3>
        <div id="tab-<?php echo $cat->slug; ?>" class="tab_content">
          <?php
                // Query Arguments
                $args = array(
                    'post_type' => 'kh_menu', // the post type
                    'posts_per_page' => 6,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'kh_menu_cat', // the custom vocabulary
                            'field'    => 'term_id',          // term_id, slug or name  (Define by what you want to search the below term)    
                            'terms'    => $cat->term_id,      // provide the term slugs
                        ),
                    ),
                );

                // The query
                $the_query = new WP_Query( $args );

                // The Loop
                if ( $the_query->have_posts() ) {
                    ?>
          <ul class="menuul">
          <?php
            
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                ?>
            <li>
              <?php
            // Must be inside a loop.
            $attachment_image = wp_get_attachment_url( get_post_thumbnail_id() );
            if ( has_post_thumbnail() ) {
            ?>
              <div class="menu-image-thumbnail me-2">
                <a data-fancybox="gallery" href="<?php echo $attachment_image;?>">
                  <?php
                the_post_thumbnail();
                ?>
                </a>
              </div>
              <?php
            }
            else {
            ?>
              <div class="menu-image-thumbnail">
                <a data-fancybox="gallery" href="<?php echo $attachment_image;?>"><img
                    src="<?php echo bloginfo('template_url');?>/images/logo.png" alt="" width="100" height="100"></a>
              </div>
              <?php
            }
            ?>
              <div class="menu-content">
                <h2><?php echo get_the_title();?></h2>
                <?php the_content();?>
              </div>
              <div class="menu-price">
                <?php echo get_field('menu_price');?>
              </div>
            </li>
            <?php };?>
          </ul>
          <?php
                } else
                {
                    // no posts found
                }

                wp_reset_postdata(); // reset global $post;

                ?>
        </div>
        <?php
            } 
            ?>
      </div>
      <!-- .tab_container -->
    </div>
    <div class="spacer-40"></div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="menu-btn-ul">
          <li>
            <a href="<?php echo home_url();?>/?page_id=33" class="hvr-rectangle-out">Full Menu</a>
          </li>
          <li>
            <a href="#" class="hvr-rectangle-out"> Download <i class="fa-solid fa-file-pdf"></i></a>
          </li>
        </ul>
      </div>
    </div>

  </div>
  </div>
>>>>>>> 060e0ba73a2bf4e112031edd20f3621ac016847c
</section>