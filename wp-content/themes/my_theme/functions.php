<?php 
    //Style and JS
    function carrega_scripts() {
        wp_enqueue_style('style.min', get_template_directory_uri() . '/css/style.min.css', array(), '1.0', 'all');
        wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true);
    }

    add_action('wp_enqueue_scripts', 'carrega_scripts');

    //Menus
    register_nav_menus(
        array(
            'main_menu' => 'Menu Principal'
        )
    );

    //Webp
    function add_webp(  $mimes ) {
        $mimes['webp'] = 'image/webp';
        
        return $mimes;
    }

    add_filter( 'mime_types', 'add_webp' );

    //Custom Post
    // function create_posttype() {
    //     register_post_type('movies',
    //         array(
    //             'labels' => array(
    //                 'name' => __('Movies'),
    //                 'singular_name' => __('Movie'),
    //             ),
    //             'public' => true,
    //             'has_archive' => true,
    //             'rewrite' => array('slug' => 'movies'),
    //             'show_in_rest' => true
    //         )
    //     );
    // }

    // add_action('init', 'create_posttype');

?>