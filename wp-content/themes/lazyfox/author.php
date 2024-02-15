<?php get_header(); ?>
<section id="testimonial" class="testimonial">
    <div class="container">
        <div class="heading-wraper text-center">
            <h1 class="text-white"><?php the_archive_title(); ?></h1>
            <hr class="heading-devider gradient-orange">
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div id="testimonial-carousel" class="owl-carousel">

                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            ?>
                            <div class="testimonial-container">
                                <div class="client-details text-center">
                                    <img src="<?php echo LAZYFOX_ASSETS_URL; ?>/images/t-1.png" alt="">
                                    <ul class="social-list">
                                        <li><a href=""><i class="ion-social-linkedin"></i></a></li>
                                        <li><a href=""><i class="ion-social-pinterest"></i></a></li>
                                        <li><a href=""><i class="ion-social-googleplus"></i></a></li>
                                    </ul>
                                </div>
                                <div class="testimonial-content">
                                    <p><i class="ion-quote"></i></p>
                                    <?php the_content(); ?>
                                </div>
                                <div class="author-biography">
                                    <p><?php echo 'Author: ' . get_the_author_meta('description'); ?></p>
                                </div>
                            </div>
                        <?php
                        endwhile;
                    else :
                        echo '<p>No posts found for this year.</p>';
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
