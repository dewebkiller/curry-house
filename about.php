<?php 
get_header( 'inner');
/* Template Name: About */
?>

<div class="section-about section-padding-top">
  <div class="container">
    <div class="row">
    <div class="col-lg-6 no-padding">
        <div class="about-image">
          <img src="<?php echo bloginfo('template_url');?>/images/about_img2.jpg" alt="Curry House" />
        </div>
      </div>
      <div class="col-lg-6 ps-5">
        <div class="about-content">
          <h5 class="color-red">About Curry House</h5>
          <blockquote>For us meal time is more than food-it's about connection and sharing love.</blockquote>
          <p>Curry House is located at the heart of the historical Wake Forest, NC. Our main goal is to serve the best Indian and Nepalese food in town with a delightful dining experience  and an utmost hospitable environment. Our Chef brings over 20 years of experience and prides in  bringing together the exciting flavors using authentic and fresh ingredients.</p>
        </div>
        <div class="spacer-30"></div>
        <div class="about-4section">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-left">
              <div class="about-block hvr-rectangle-out">
                <h3>We are proud</h3>
                <p>Our Mission is to understand our client needs to deliver high–quality buildings on time and on budget
                  providing fairness and honesty—qualities at the foundation of every project.</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pull-right">
              <div class="about-block hvr-rectangle-out">
                <h3>Our Mission</h3>
                <p>Our focus and effort are continually driven toward constantly improving our reputation as builders
                  known for quality custom residential and upper residential.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- WHY CHOOSE AND VIDEO SECTION START -->
<div class="section-full">
    <div class="row why-choose-video-section bg-white">
        <div class="col-lg-6 col-md-6 why-choose-left-section bg-no-repeat bg-bottom-left" style="background-image:url(<?php echo bloginfo('template_url');?>/images/whybg.png); background-size: cover">
            <div class="why-choose-left-content">
                <!-- TITLE START -->
                <div class="section-head ">
                    <h2 class="m-b5 center">Why people choose us</h2>
                </div>
                <!-- TITLE END -->
                <div class="section-content">
                    <ol class="list-num-count  m-b0">
                        <li>
                            <h3>International Standards</h3>
                            <p>All are fleets are international standards and we provide the services accordingly.</p>
                        </li>
                        <li>
                            <h3>Dedicated team</h3>
                            <p>We have a highly qualified chauffers who have been in this business for a decades.</p>
                        </li>
                        <li>
                            <h3>Cost effective</h3>
                            <p>We provide best price which meets your budgets and with the quality services.</p>
                        </li>
                        <li>
                            <h3>Puntuality</h3>
                            <p>You never have to wait for a single minute as we know the value of every single seconds.</p>
                        </li>
                    </ol>                                    	
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 why-choose-right-section ">
            <div class="why-choose-right-content">
                <div class="why-choose-video-outer overlay-wraper bg-cover" style="background-image:url(<?php echo bloginfo('template_url');?>/images/video-bg.jpg); background-size: cover;">
                    <div class="overlay-main bg-black opacity-05"></div>
                    <a data-fancybox="video-gallery" href="https://www.youtube.com/watch?v=dZRqB0JLizw&t=40s" class="mfp-video play-now">
                        <i class="icon fa fa fa-play"></i>
                        <span class="ripple"></span>
                    </a>                                              
                </div>
                <div class="want-to-talk-video">
                    <h3 class="m-b5">Want to talk?</h3>
                    <h2 class="text-white">CALL: 919-263-1222 / 919-263-1972</h2>
                    <p>Our service is available for you 7 days a week. </p>
                    <strong class="color-yellow">Private room available for birthdays, anniversaries, and special occasions.</strong>
                    <div class="card">
                      <div class="card-body">
                        <blockquote class="blockquote">
                          <p>Catering, Take out available, Delivery service available through third party delivery company.</p>
                        </blockquote>
                      </div>
                    </div>

                </div>
            </div>
        </div>                            
    </div>                        
</div>
<section class="section-reversation-map">
  <div class="container-fluild no-padding">
    <div class="row">
      <div class="col-lg-6 pull-left">
        <div class="section-title text-center reservation">
          <h2 class="color-white">Reservations</h2>
          <p>2412 Hillsborough st <br> Raleigh, North Carolina</p>
          <p>+1 (919)-977-6974 / (919)-703-0107</p>
          <a href="#" class="dwk-btn hvr-rectangle-out">Reserve Online <i
              class="fa-solid fa-mobile-screen-button"></i></a>
        </div>
      </div>
      <div class="col-lg-6 pull-right no-padding">
        <div class="home-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2721.546268379856!2d-78.66964474428957!3d35.78809411206011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89acf58d91dc1a07%3A0x7b8b1d19952b99d5!2sKabab%20and%20Curry!5e0!3m2!1sen!2snp!4v1658047369997!5m2!1sen!2snp"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();