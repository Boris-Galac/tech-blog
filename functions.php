<?php 
// prevent appearing <p> tag
    remove_filter('the_content', 'shortcode_unautop');
// loading sources files

function setup(){
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css');
    wp_enqueue_style('main-css', get_theme_file_uri('src/styles/css/style.css'));
    wp_enqueue_script('main-js', get_theme_file_uri('src/js/main.js'), array(), false, true);
}

add_action('wp_enqueue_scripts', 'setup');

// project post type (custom post type)

// function custom_post_type(){
//     $args = array(
//         'rewrite'=> array('slug'=>'projects'),
//         'show_in_rest' => true,
//         'labels'=> array(
//             'name'=>'Projects',
//             'singular_name'=> 'Project',
//             'add_new'=> 'Add New Project',
//             'edit_item'=>'Edit Project'
//         ),
//         'menu_icon'=>'dashicons-clipboard',
//         'taxonomies'  => array( 'category'),
//         'public'=> true,
//         'has_archive'=> true,
//         'supports'=> array(
//             'title', 'thumbnail', 'editor', 'excerpt', 'comments'
//         )
//     );
//     register_post_type('project',  $args);
    
// }

// add_action('init', 'custom_post_type');

//// for title browser tab on which site we are

function blog_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('blog-thumbnail', 319, 228, true);
}

add_action('after_setup_theme', 'blog_features');

