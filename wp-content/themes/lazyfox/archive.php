<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

    <?php while( have_posts() ) : the_post(); ?>

    <section id="testimonial" class= <?php post_class('testimonial')?>>
      <div class="container">
        <div class="heading-wraper text-center">
          <h1 class="text-white"><?php the_archive_title(); ?></h1>
          <hr class="heading-devider gradient-orange">
        </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <div id="testimonial-carousel" class="owl-carousel">
              <div>
                <div class="testimonial-container">
                  <div class="client-details text-center">
                    <img src="<?php echo LAZYFOX_ASSETS_URL; ?>/images/t-1.png" alt="">
                    <h5 class="client-name">Arix Wonder</h5>
                    <p class="client-designation">CEO Of LVATO</p>
                    <ul class="social-list">
                      <li><a href=""><i class="ion-social-linkedin"></i></a></li>
                      <li><a href=""><i class="ion-social-pinterest"></i></a></li>
                      <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                  </div>
                  <div class="testimonial-content">
                    <p><i class="ion-quote"></i></p>
                    <p class="testimonial-speech">
                        <?php the_content(); ?>
                    </p>
                  </div>
                </div>
              </div>
              <div>
                <div class="testimonial-container">
                  <div class="client-details text-center">
                    <img src="<?php echo LAZYFOX_ASSETS_URL; ?>/images/t-1.png" alt="">
                    <h5 class="client-name">Arix Wonder</h5>
                    <p class="client-designation">CEO Of LVATO</p>
                    <ul class="social-list">
                      <li><a href=""><i class="ion-social-linkedin"></i></a></li>
                      <li><a href=""><i class="ion-social-pinterest"></i></a></li>
                      <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                    </ul>
                  </div>
                  <div class="testimonial-content">
                    <p><i class="ion-quote"></i></p>
                    <p class="testimonial-speech">Built using the latest web technologies like html5, css3, and jQuery, rest assured Sedna will look smashing on every device under the sun.Built using the latest web technologies like html5, css3, and jQuery.</p>
                  </div>
                </div>
              </div>
              <div>
                <div class="testimonial-container">
                  <div class="client-details text-center">
                    <img src="<?php echo LAZYFOX_ASSETS_URL; ?>/images/t-1.png" alt="">
                   
                    </ul>
                  </div>
                  <div class="testimonial-content">
                    <p><i class="ion-quote"></i></p>
                    <p class="testimonial-speech">Built using the latest web technologies like html5, css3, and jQuery, rest assured Sedna will look smashing on every device under the sun.Built using the latest web technologies like html5, css3, and jQuery.</p>
                  </div>
                </div>
              </div>
            </div>              
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="padding-top-90">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img class="img-responsive sm-display-none" src="<?php echo LAZYFOX_ASSETS_URL; ?>/images/hand_phone.png" alt="">
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-6">
                <div class="heading-wraper text-center margin-bottom-80">
                  <h4>best services</h4>
                  <hr class="heading-devider gradient-orange">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <h5 class="service-title">RESPONSIVE DEVELOPMENT</h5>
                <p class="services-content margin-bottom-25">Built using the latest web technologies like html5, css3, and jQuery, rest assured Sedna will look smashing on every device under the sun.</p>
              </div>
              <div class="col-md-6 col-sm-6">
                <h5 class="service-title">RESPONSIVE DEVELOPMENT</h5>
                <p class="services-content margin-bottom-25">Built using the latest web technologies like html5, css3, and jQuery, rest assured Sedna will look smashing on every device under the sun.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <h5 class="service-title">RESPONSIVE DEVELOPMENT</h5>
                <p class="services-content margin-bottom-25">Built using the latest web technologies like html5, css3, and jQuery, rest assured Sedna will look smashing on every device under the sun.</p>
              </div>
              <div class="col-md-6 col-sm-6">
                <h5 class="service-title">RESPONSIVE DEVELOPMENT</h5>
                <p class="services-content margin-bottom-25">Built using the latest web technologies like html5, css3, and jQuery, rest assured Sedna will look smashing on every device under the sun.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>