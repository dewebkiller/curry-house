<<<<<<< HEAD
<section class="section-padding section-menu-inner">
  <div class="container">

    <div class="row">

      <div class="tab_container tab_container_verticle">
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
        <h3 class="d_active tab_drawer_heading" rel="tab<?php echo $i++;?>"><?php echo $cat->name; ?></h3>
          <div id="tab<?php echo $m++;?>" class="tab_content <?php echo $cat->slug; ?>">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-title">
                  <h2 class="color-red"><?php echo $cat->name; ?></h2>
                  
                  <h4 class="color-offblack"><?php echo $cat->category_description; ?></h4>
                </div>
              </div>
            </div>
          <?php
                // Query Arguments
                $args = array(
                    'post_type' => 'kh_menu', // the post type
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
            <a data-fancybox="gallery" href="<?php echo $attachment_image;?>"><img src="<?php echo bloginfo('template_url');?>/images/logo.png" alt="" width="100" height="100"></a>
            </div>
                    <?php
            }
            ?>
            <?php 
            $menu_items = get_field('menu_items');
            ?>
              <div class="menu-content <?php if( $menu_items == 'true') { echo "haschildren";}?>">
                <h2><?php the_title();?></h2>
                <ul class="menuitem-types">
                    <?php 
                    $menu_type = get_field('menu_type');
                    $gluten_free = get_field('gluten_free');
                    $dairy_free = get_field('dairy_free');
                    //var_dump ($dairy_free);
                    if($dairy_free == 'Yes') { ?>
                        <li><img src="<?php echo bloginfo('template_url');?>/images/dairy.png""></li>
                   <?php } ?>
                    <?php
                    if($gluten_free == 'Yes') { ?>
                        <li><img src="<?php echo bloginfo('template_url');?>/images/gluten.png""></li>
                   <?php } ?>
                   <?php
                    if($menu_type == 'Veg') { ?>
                    <li><img src="<?php echo bloginfo('template_url');?>/images/veg.png""></li>
                    <?php } ?>
                </ul>
                <?php the_content();?>
                <?php 
                $rows = get_field('add_items');
                if( $rows ) {
                    echo '<div class="menu-content">';
                    foreach( $rows as $row ) {
                        $veg = $row['menuitem_vegan'];
                        $gluten = $row['menuitem_gluten_free'];
                        $dairy = $row['menuitem_dairy_free'];
                        $menuitem_description = $row['menuitem_description'];
                        $menuitem_price = $row['menuitem_price'];
                        ?>
                        <div class="submenu-items">
                        <h3><?php echo $row['menuitem_title'];?></h3>
                       <ul class="menuitem-types">
                       <?php
                        if($veg == 'Yes') { ?>
                        <li><img src="<?php echo bloginfo('template_url');?>/images/veg.png""></li>
                        <?php } ?>
                        <?php
                        if($gluten == 'Yes') { ?>
                        <li><img src="<?php echo bloginfo('template_url');?>/images/gluten.png""></li>
                        <?php } ?>
                        <?php
                        if($dairy == 'Yes') { ?>
                        <li><img src="<?php echo bloginfo('template_url');?>/images/dairy.png""></li>
                        <?php } ?>
                        </ul> 
                        <p><?php echo $menuitem_description;?></p>   
                        </div>
                        <div class="menu-price">
                            <?php echo $menuitem_price;?>
                        </div>
                        
                        <?php
                    }
                    echo '</div>';
                    
                }
                ?>
                
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

        <?php } ?>
      </div>

      <ul class="tabs tabs_verticle">
        <?php
          // Get the taxonomy's terms
            $terms = get_terms(
            array(
                'taxonomy'   => 'kh_menu_cat',
                'hide_empty' => false,
            )
            );
            // Check if any term exists
            if ( ! empty( $terms ) && is_array( $terms ) ) {
            $j=1;
            // Run a loop and print them all
            foreach ( $terms as $term ) { ?>
                    <li rel="tab<?php echo $j++;?>"> <?php echo $term->name; ?></li><?php
            }
            } 
          ?>

          </ul>
    </div>
    <!-- .tab_container -->
  </div>

  </div>
  </div>
=======
<section class="section-padding section-menu-inner">
  <div class="container">

    <div class="row">

      <div class="tab_container tab_container_verticle">
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
        <h3 class="d_active tab_drawer_heading" rel="tab<?php echo $i++;?>"><?php echo $cat->name; ?></h3>
          <div id="tab<?php echo $m++;?>" class="tab_content <?php echo $cat->slug; ?>">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-title">
                  <h2 class="color-red"><?php echo $cat->name; ?></h2>
                  
                  <h4 class="color-offblack"><?php echo $cat->category_description; ?></h4>
                </div>
              </div>
            </div>
          <?php
                // Query Arguments
                $args = array(
                    'post_type' => 'kh_menu', // the post type
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
            <a data-fancybox="gallery" href="<?php echo $attachment_image;?>"><img src="<?php echo bloginfo('template_url');?>/images/logo.png" alt="" width="100" height="100"></a>
            </div>
                    <?php
            }
            ?>
            <?php 
            $menu_items = get_field('menu_items');
            ?>
              <div class="menu-content <?php if( $menu_items == 'true') { echo "haschildren";}?>">
                <h2><?php the_title();?></h2>
                <ul class="menuitem-types">
                    <?php 
                    $menu_type = get_field('menu_type');
                    $gluten_free = get_field('gluten_free');
                    $dairy_free = get_field('dairy_free');
                    //var_dump ($dairy_free);
                    if($dairy_free == 'Yes') { ?>
                        <li><img src="<?php echo bloginfo('template_url');?>/images/dairy.png""></li>
                   <?php } ?>
                    <?php
                    if($gluten_free == 'Yes') { ?>
                        <li><img src="<?php echo bloginfo('template_url');?>/images/gluten.png""></li>
                   <?php } ?>
                   <?php
                    if($menu_type == 'Veg') { ?>
                    <li><img src="<?php echo bloginfo('template_url');?>/images/veg.png""></li>
                    <?php } ?>
                </ul>
                <?php the_content();?>
                <?php 
                $rows = get_field('add_items');
                if( $rows ) {
                    echo '<div class="menu-content">';
                    foreach( $rows as $row ) {
                        $veg = $row['menuitem_vegan'];
                        $gluten = $row['menuitem_gluten_free'];
                        $dairy = $row['menuitem_dairy_free'];
                        $menuitem_description = $row['menuitem_description'];
                        $menuitem_price = $row['menuitem_price'];
                        ?>
                        <div class="submenu-items">
                        <h3><?php echo $row['menuitem_title'];?></h3>
                       <ul class="menuitem-types">
                       <?php
                        if($veg == 'Yes') { ?>
                        <li><img src="<?php echo bloginfo('template_url');?>/images/veg.png""></li>
                        <?php } ?>
                        <?php
                        if($gluten == 'Yes') { ?>
                        <li><img src="<?php echo bloginfo('template_url');?>/images/gluten.png""></li>
                        <?php } ?>
                        <?php
                        if($dairy == 'Yes') { ?>
                        <li><img src="<?php echo bloginfo('template_url');?>/images/dairy.png""></li>
                        <?php } ?>
                        </ul> 
                        <p><?php echo $menuitem_description;?></p>   
                        </div>
                        <div class="menu-price">
                            <?php echo $menuitem_price;?>
                        </div>
                        
                        <?php
                    }
                    echo '</div>';
                    
                }
                ?>
                
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

        <?php } ?>
      </div>

      <ul class="tabs tabs_verticle">
        <?php
          // Get the taxonomy's terms
            $terms = get_terms(
            array(
                'taxonomy'   => 'kh_menu_cat',
                'hide_empty' => false,
            )
            );
            // Check if any term exists
            if ( ! empty( $terms ) && is_array( $terms ) ) {
            $j=1;
            // Run a loop and print them all
            foreach ( $terms as $term ) { ?>
                    <li rel="tab<?php echo $j++;?>"> <?php echo $term->name; ?></li><?php
            }
            } 
          ?>

          </ul>
    </div>
    <!-- .tab_container -->
  </div>

  </div>
  </div>
>>>>>>> 060e0ba73a2bf4e112031edd20f3621ac016847c
</section>