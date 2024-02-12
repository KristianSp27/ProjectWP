<?php get_header(); ?>

<section id="not-found" class="not-found">
    <div class="container">
        <div class="heading-wraper text-center">
            <h1 class="text-white">404 - Not Found</h1>
            <hr class="heading-devider gradient-orange">
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="error-message">
                    <p>We're sorry, but the page you're looking for doesn't exist.</p>
                    <p>Return to the <a href="<?php echo home_url(); ?>">homepage</a>.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
