<?php get_header(); ?>

      
        <section id="introduction" class="gradient-violat padding-top-90 home-slider">
      <div id="home-slider" class="owl-carousel">
        <div>
          <div class="sliding-card-with-bottom-image text-center padding-top-90">
            <h2 class="cta-heading text-white">Lazy Fox HTML5 Landing page</h2>
            <p class="text-white slider-para">Awesome Stylish Template for a Blog Powered By THEMEWAGON</p>
            <div class="cta-btn-group">
            </div>
            <div class="image-container text-center sm-display-none">
              <img class="img-responsive" src="<?php echo LAZYFOX_ASSETS_URL; ?>/images/mockuo2.png" alt="">
            </div>
          </div>
        </div>
        
        
        <div>
          <div class="container">
            <div class="row">
              <div class="image-right-slide-bg clearfix" style="background-image:url(<?php echo LAZYFOX_ASSETS_URL; ?>/images/mockuo.png)">
                <div class="col-md-12">
                  <h2 class="cta-heading text-white">Lazy Fox HTML5 Landing page</h2>
                  <p class="text-white slider-para">Smooth Scroll and Gradient style</p>
                  <div class="cta-btn-group">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   <section id="blog-card" class="padding-top-bottom-90">
  <div class="container">
    <div class="heading-wraper text-center margin-bottom-80">
      <h4>Latest Published</h4>
      <hr class="heading-devider gradient-orange">
    </div>

    <div class="row">

      <?php 
      // Define the query to get the latest posts
      $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3, // Number of posts to display
      );

      $query = new WP_Query($args);

      // Loop through the posts
      while ($query->have_posts()) : $query->the_post();
      ?>

        <div class="col-md-4">
          <div class="card">
            <?php
            // Display the post thumbnail
            if (has_post_thumbnail()) {
              the_post_thumbnail('full', array('class' => 'card-img-top img-responsive max-width-100'));
            }
            ?>
            <div class="card-block">
              <p class="card-text"><small class="text-muted blog-category"><?php the_category(', '); ?></small></p>
              <h4 class="card-title"><?php the_title(); ?></h4>
              <p class="card-text"><small class="text-muted italic"><?php echo get_the_date(); ?></small></p>
              <p class="card-text"><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-link">Read more <span><i class="ion-ios-arrow-thin-right"></i></span></a>
            </div>
          </div>
        </div>

      <?php endwhile;
      // Reset post data
      wp_reset_postdata();
      ?>

    </div>
  </div>
</section>
    <section id="feature" class="padding-top-bottom-120 bg-image-fit-50" style="background:url(<?php echo LAZYFOX_ASSETS_URL; ?>/images/1_back.png)">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="feature-wiget">
              <div class="icon-wraper">
                <i class="ion-settings"></i>
              </div>
              <div class="content">
                <h4 class="bottom-line">Easily Cutomised</h4>
                <p>Easily customise Sedna to suit your start up, portfolio or is product. Take advantage of the layered Sketch file and bring your product to life.</p>
              </div>
            </div>
            <div class="feature-wiget">
              <div class="icon-wraper">
                <i class="ion-calendar"></i>
              </div>
              <div class="content">
                <h4 class="bottom-line">MODERN DESIGN</h4>
                <p>Designed with modern trends and techniques in mind, Sedna will help your product stand out in an already saturated market.</p>
              </div>
            </div>
            <div class="feature-wiget">
              <div class="icon-wraper">
                <i class="ion-ipad"></i>
              </div>
              <div class="content">
                <h4 class="bottom-line">RESPONSIVE DEVELOPMENT</h4>
                <p>Built using the latest web technologies like html5, css3, and jQuery, rest assured Sedna will look smashing on every device under the sun.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <section id="services" class="padding-top-90">
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
    </section> -->
    <!-- <section id="cta" class="gradient-violat cta padding-top-bottom-90">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h3 class="cta-heading text-white">Lazy Fox HTML5 Landing page</h3>
            <p class="text-white">Smooth Scroll and Gradient style</p>
            <div class="cta-btn-group">
              <a class="btn btn-orange border-none btn-rounded-corner" href="#">Download <span class="icon-on-button"><i class="ion-ios-cloud-download-outline"></i></span></a>
              <a class="btn btn-white gradient-white border-none btn-rounded-corner" href="#">Live demo<span class="icon-on-button"><i class="ion-ios-arrow-thin-right"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </section> -->
 

    <section id="testimonial" class="testimonial-section padding-top-bottom-90 gradient-violat">
    <div class="container">
        <div class="heading-wraper text-center">
            <h4 class="text-white">In the Press</h4>
            <hr class="heading-devider gradient-orange">
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="testimonial-carousel" class="owl-carousel">

                    <?php
                    $args = array(
                        'post_type'      => 'post',
                        'posts_per_page' => 3,
                    );

                    $query = new WP_Query($args);

                    while ($query->have_posts()) : $query->the_post();
                    ?>

                        <div class="testimonial-container">
                            <div class="client-details text-center">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('full', array('class' => 'img-responsive mx-auto d-block'));
                                } else {
                                    $defaultImageLink = LAZYFOX_ASSETS_URL . '/images/t-1.png';
                                    echo '<img src="' . esc_url($defaultImageLink) . '" alt="Default Thumbnail" class="img-responsive mx-auto d-block">';
                                }
                                ?>
                                <h5 class="client-name"><?php the_title(); ?></h5>
                                <p class="client-designation"><?php echo get_post_meta(get_the_ID(), 'client_designation', true); ?></p>
                                <ul class="social-list">
                                    <li><a href=""><i class="ion-social-linkedin"></i></a></li>
                                    <li><a href=""><i class="ion-social-pinterest"></i></a></li>
                                    <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                                </ul>
                            </div>
                            <div class="testimonial-content">
                                <a href="<?php the_permalink(); ?>">
                                    <p><i class="ion-quote"></i></p>
                                    <p class="testimonial-speech"><?php the_excerpt(); ?></p>
                                </a>
                            </div>
                        </div>

                    <?php endwhile;
                    wp_reset_postdata();
                    ?>

                </div>
            </div>
        </div>
    </div>

</section>





   

<?php get_footer(); ?>
