<!DOCTYPE html>
<html>

<head>
  <title>Curry House</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Standard Html">
  <meta name="keywords" content="Standard Html">
  <meta name="author" content="dewebkiller">
  <!-- Bootstrap -->
  <?php wp_head();?>
</head>

<body <?php body_class();?>>
  <div id="loader-wrapper">
    <div id="loader"></div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

  </div>
  <header>

    <section class="banner-wrapper">
      <section class="btm-header">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-6 col-6">
              <div class="logo"><a href="<?php home_url( );?>"><img src="<?php echo bloginfo('template_url');?>/images/logo.png" alt="Curry House"></a></div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-6 col-6">
              <div class="top-phone">
                <i class="fa-solid fa-mobile-screen-button"></i>
                <p>919-263-1222 <br> 919-263-1927</p>
              </div>
              <div class="clearfix"></div>
              <div class="main-menu">
                <nav class="navbar navbar-expand-lg no-padding">
                  <a class="navbar-brand" href="#">Navigation</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <?php
                                $defaults = array(
                                    'theme_location' => 'primary',
                                    'menu' => '',
                                    'container' => 'ul',
                                    'container_class' => '',
                                    'container_id' => 'navbarSupportedContent',
                                    'menu_class' => 'nav navbar-nav',
                                    'menu_id' => '',
                                    'echo' => true,
                                    'fallback_cb' => 'wp_page_menu',
                                    'before' => '',
                                    'after' => '',
                                    'link_before' => '',
                                    'link_after' => '',
                                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                    'depth' => 0,
                                    'walker' => ''
                                );

                                wp_nav_menu($defaults);
                                ?>
                </nav>

              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="breadcrumb-banner">
        <div class="item">
          <div class="banneroverlay"></div>
          <img src="<?php echo bloginfo('template_url');?>/images/breadcrumb.jpg">
        </div>
      </div>
      <div class="banner-caption breadcrumb-caption">
        <h2 class="color-white"><?php the_title();?></h2>
        <h3>Healthy food at your door step</h3>
      </div>
    </section>
  </header>