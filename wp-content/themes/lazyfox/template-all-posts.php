<?php
/*
Template Name: All Posts Template
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="post-list">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => -1, 
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
                        <header class="entry-header">
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        </header>

                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'No posts found.';
            endif;
            ?>
        </div>

    </main>
</div>

<?php
get_footer();
?>
