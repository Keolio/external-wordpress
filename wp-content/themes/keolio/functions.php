<?php
/* ----- Filters & Actions ----- */

// Remove Gutemberg
add_filter('use_block_editor_for_post', '__return_false', 10);

// Allow SVG
add_filter('upload_mimes', 'add_file_types_to_uploads');

// Add Themes Support
add_action('after_setup_theme', 'keolio_setup_theme');

// Add Menus
add_action('init', 'keolio_menus_init');

// Add Options page
add_action('init', 'keolio_options_page_init');

// Add Styles and Scripts
add_action('wp_enqueue_scripts', 'keolio_enqueue_style');
add_action('wp_enqueue_scripts', 'keolio_enqueue_script');

// Add Custom Post Type and Taxonomy
// add_action('init', 'keolio_custom_post_type', 0);
// add_action('init', 'keolio_custom_taxonomy', 0);


/* ----- Functions ----- */

/*
 * Add Theme Support
 */
function keolio_setup_theme()
{
    // Add Post Featured Image
    add_theme_support('post-thumbnails');

    // Add Image Size
    add_image_size('wide', 1920, 1024);
}

/*
 * Add Theme Menus
 */
function keolio_menus_init()
{
    // Main
    register_nav_menu('main', __('Main Menu'));
    // Footer
    register_nav_menu('footer', __('Footer Menu'));
}

/*
 * Add Options Page
 */
function keolio_options_page_init()
{
    // Main
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => 'Configuration',
            'menu_title' => 'Configuration',
            'menu_slug' => 'configuration',
            'capability' => 'activate_plugins',
            'redirect' => true
        ));
    }
}

/*
 * Register styles
 */
function keolio_enqueue_style()
{
    wp_enqueue_style('bundle', get_template_directory_uri() . '/dist/bundle.css', false, time());
}

/*
 * Register scripts
 */
function keolio_enqueue_script()
{
    wp_enqueue_script('bundle', get_template_directory_uri() . '/dist/bundle.js', false, time());
}

/*
 * Get asset dir
 */
function get_asset_dir($path = null)
{
    if (is_null($path))
        return get_template_directory_uri() . '/assets/';
    return get_template_directory_uri() . '/assets/' . $path;
}

/*
 * Print SVG files
 */
function print_svg($path = null)
{
    if (is_null($path))
        return get_template_directory() . '/assets/';
    include get_template_directory() . '/assets/' . $path;
}

/*
 * Add file types (SVG)
 */
function add_file_types_to_uploads($file_types)
{
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg';
    $file_types = array_merge($file_types, $new_filetypes);
    return $file_types;
}

/*
 * Register Custom Post Type
 */
function keolio_custom_post_type()
{
    // Register Projects
    $labels = array(
        'name' => _x('Projects', 'Post Type General Name'),
        'singular_name' => _x('Project', 'Post Type Singular Name'),
    );

    $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-desktop',
        'supports' => array('title', 'excerpt', 'thumbnail', 'revisions'),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'projet')
    );
    register_post_type('project', $args);
}

/*
 * Register Custom Taxonomy
 */
function keolio_custom_taxonomy()
{

    // Register projects typologies
    $labels = array(
        'name' => _x('Typologies', 'Taxonomy General Name'),
        'singular_name' => _x('Typology', 'Taxonomy Singular Name'),
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true
    );

    register_taxonomy('typology', 'project', $args);

}
