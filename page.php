<<<<<<< HEAD
<?php
get_header();
?>
<section class="content-wrapper section-welcome">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                        //
                    } // end while
                } // end if
                ?>
            </div>
</section>
<?php get_footer();
=======
<?php
get_header();
?>
<section class="content-wrapper section-welcome">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                        //
                    } // end while
                } // end if
                ?>
            </div>
</section>
<?php get_footer();
>>>>>>> 060e0ba73a2bf4e112031edd20f3621ac016847c
