<?php
/**
 * Plugin Name: LazyFox Custom Plugin/ LazyFox Items
 * Description: Custom plugin for the LazyFox project.
 * Version: 1.0
 * Author: Kristian Spasov
 */

function lazyfox_register_custom_post_type() {
    $labels = array(
        'name'               => 'LazyFox Items',
        'singular_name'      => 'LazyFox Item',
        'menu_name'          => 'LazyFox Items',
        'all_items'          => 'All Items',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Item',
        'edit_item'          => 'Edit Item',
        'new_item'           => 'New Item',
        'view_item'          => 'View Item',
        'search_items'       => 'Search Items',
        'not_found'          => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
    );

    $args = array(
        'label'               => 'lazyfox_items',
        'description'         => 'LazyFox custom post type for items',
        'labels'              => $labels,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_icon'           => 'dashicons-smiley',
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'rewrite'             => array( 'slug' => 'lazyfox-items' ),
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
    );

    register_post_type( 'lazyfox_items', $args );

    $taxonomy_args = array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'              => 'LazyFox Categories',
            'singular_name'     => 'LazyFox Category',
            'search_items'      => 'Search Categories',
            'all_items'         => 'All Categories',
            'parent_item'       => 'Parent Category',
            'parent_item_colon' => 'Parent Category:',
            'edit_item'         => 'Edit Category',
            'update_item'       => 'Update Category',
            'add_new_item'      => 'Add New Category',
            'new_item_name'     => 'New Category Name',
            'menu_name'         => 'Categories',
        ),
        'rewrite'           => array( 'slug' => 'lazyfox-categories' ),
    );

    register_taxonomy( 'lazyfox_category', 'lazyfox_items', $taxonomy_args );
}

add_action( 'init', 'lazyfox_register_custom_post_type' );

function lazyfox_native_metabox() {
    add_meta_box(
        'lazyfox_native_metabox',
        'LazyFox Native Metabox',
        'lazyfox_native_metabox_callback',
        'lazyfox_items',
        'normal',
        'high'
    );
}

function lazyfox_native_metabox_callback( $post ) {
    $custom_option_value = get_post_meta( $post->ID, '_lazyfox_native_option', true );

    ?>
    <label for="lazyfox_native_option">Custom Option:</label>
    <input type="text" id="lazyfox_native_option" name="lazyfox_native_option" value="<?php echo esc_attr( $custom_option_value ); ?>">
    <?php
}

add_action( 'add_meta_boxes', 'lazyfox_native_metabox' );

function lazyfox_save_native_metabox( $post_id ) {
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    if ( isset( $_POST['lazyfox_native_option'] ) ) {
        update_post_meta( $post_id, '_lazyfox_native_option', sanitize_text_field( $_POST['lazyfox_native_option'] ) );
    }
}

add_action( 'save_post', 'lazyfox_save_native_metabox' );

if ( function_exists( 'acf_add_local_field_group' ) ) {
    acf_add_local_field_group( array(
        'key' => 'group_lazyfox_acf_metabox',
        'title' => 'LazyFox ACF Metabox',
        'fields' => array(
            array(
                'key' => 'field_lazyfox_acf_option',
                'label' => 'ACF Custom Option',
                'name' => 'lazyfox_acf_option',
                'type' => 'text',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'lazyfox_items',
                ),
            ),
        ),
    ) );
}

function lazyfox_ajax_function() {
    $category_id = isset( $_POST['category_id'] ) ? intval( $_POST['category_id'] ) : 0;

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 3,
        'category__in'   => array( $category_id ),
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            echo '<h2>' . get_the_title() . '</h2>';
            echo '<p>' . get_the_excerpt() . '</p>';
        }
    } else {
        echo 'No posts found.';
    }

    wp_reset_postdata();

    die();
}

add_action( 'wp_ajax_lazyfox_ajax_action', 'lazyfox_ajax_function' );
add_action( 'wp_ajax_nopriv_lazyfox_ajax_action', 'lazyfox_ajax_function' );

// Separate Functions
function lazyfox_function_one() {
    if ( is_single() && get_post_type() === 'post' ) {
        echo '<p>This is a single blog post. Check out our latest posts below:</p>';
    }
}

function lazyfox_function_two() {
    if ( is_archive() && get_post_type() === 'post' ) {
        echo '<p>Explore our blog archives for more interesting content.</p>';
    }
}

add_action( 'wp', 'lazyfox_function_one' );
add_action( 'wp', 'lazyfox_function_two' );

function lazyfox_shortcode( $atts ) {
    $atts = shortcode_atts(
        array(
            'count' => 5,
        ),
        $atts,
        'lazyfox_shortcode'
    );

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => intval( $atts['count'] ),
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $query = new WP_Query( $args );

    if ( $query->have_posts() ) {
        $output = '<ul>';
        while ( $query->have_posts() ) {
            $query->the_post();
            $output .= '<li>';
            $output .= '<h3><a href="' . get_permalink() . '">' . get_the_title() . '</a></h3>';
            $output .= '<p>' . get_the_excerpt() . '</p>';
            $output .= '</li>';
        }
        $output .= '</ul>';
    } else {
        $output = 'No recent posts found.';
    }

    wp_reset_postdata();

    return $output;
}

add_shortcode( 'lazyfox_shortcode', 'lazyfox_shortcode' );

function lazyfox_filter_post_title( $title, $id ) {
    if ( get_post_type( $id ) === 'post' ) {
        $title = '[Blog] ' . $title;
    }

    return $title;
}

add_filter( 'the_title', 'lazyfox_filter_post_title', 10, 2 );
