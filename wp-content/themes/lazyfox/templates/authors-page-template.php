<?php
/*
Template Name: Authors Page
*/
get_header(); ?>

<section id="authors" class="authors">
    <div class="container">
        <div class="heading-wraper text-center">
            <h1 class="text-white">Authors</h1>
            <hr class="heading-devider gradient-orange">
        </div>
        <div class="author-list">
            <?php
            $authors = get_users(['who' => 'authors']);
            foreach ($authors as $author) :
            ?>
                <div class="author-item">
                    <h2><?php echo esc_html($author->display_name); ?></h2>
                    <p><?php echo esc_html(get_the_author_meta('description', $author->ID)); ?></p>
                    <a href="<?php echo esc_url(get_author_posts_url($author->ID)); ?>">View Posts</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
