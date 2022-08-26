<?php
/*
 * CPTs:
 * Tutorial
 *    - Capítulo
 * Pyldora
 * Podcast
 *
 */
add_action("init", "crear_y_registrar_cpts");

function crear_y_registrar_cpts(){
    /*
     * Tutorial
     */
    register_post_type('tutorial', array(
        'label'         => __('Tutorial'),
        'labels'        => array(
                'name'              => __('Tutoriales'),
                'singular_name'     => __('Tutorial'),
                'add_new'           => __('Nuevo tutorial'),
                'add_new_item'      => __('Nuevo tutorial'),
                'edit_item'         => __('Editar tutorial'),
                'new_item'          => __('Nuevo tutorial'),
                'view_item'         => __('Ver tutorial'),
                'view_items'        => __('Ver tutoriales'),
                'all_items'         => __('Listar tutoriales'),
                'menu_name'         => __('Tutoriales'),
                'name_admin_bar'    => __('Tutoriales')),
        'hierarchical'          => true,
        'public'                => true,
        'has_archive'           => 'tutoriales',
        'menu_icon'             => 'dashicons-book',
        'show_in_rest'          => true,
        'rest_base'             => 'tutoriales',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'              => array('editor', 'title', 'thumbnail', 'comments', 'custom-fields', 'author'),
        'taxonomies'            => array('post_tag')));
    /*
     * Capítulo
     */
    register_post_type('capitulo', array(
        'label'         => __('Capítulo'),
        'labels'        => array(
                'name'              => __('Capítulos'),
                'singular_name'     => __('Capítulo'),
                'add_new'           => __('Nuevo capítulo'),
                'add_new_item'      => __('Nuevo capítulo'),
                'edit_item'         => __('Editar capítulo'),
                'new_item'          => __('Nuevo capítulo'),
                'view_item'         => __('Ver capítulo'),
                'view_items'        => __('Ver capítulos'),
                'all_items'         => __('Listar capítulos'),
                'menu_name'         => __('Capítulos'),
                'name_admin_bar'    => __('Capítulos')),
        'hierarchical'  => false,
        'public'        => true,
        'menu_icon'     => 'dashicons-media-document',
        'show_in_rest'          => true,
        'rest_base'             => 'capitulos',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'supports'      => array('editor', 'title', 'thumbnail', 'comments', 'custom-fields', 'author'),
        'taxonomies'    => array('post_tag'),
        'show_in_menu'  =>  'edit.php?post_type=tutorial',
        'rewrite' => array('slug' => 'tutorial/%tutorial%')));
    /*
     * Podcast
     */
    register_post_type('podcast', array(
        'label'         => __('Podcast'),
        'labels'        => array(
                'name'              => __('Podcasts'),
                'singular_name'     => __('Podcast'),
                'add_new'           => __('Nuevo podcast'),
                'add_new_item'      => __('Nuevo podcast'),
                'edit_item'         => __('Editar podcast'),
                'new_item'          => __('Nuevo podcast'),
                'view_item'         => __('Ver podcast'),
                'view_items'        => __('Ver podcasts'),
                'all_items'         => __('Listar podcasts'),
                'menu_name'         => __('Podcasts'),
                'name_admin_bar'    => __('Podcasts')),
        'hierarchical'  => false,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'podcast'),
        'menu_icon'     => 'dashicons-microphone',
        'show_in_rest'  => true,
        'rest_base'     => 'podcast',
        'supports'      => array('editor', 'title', 'author', 'thumbnail', 'comments', 'custom-fields', 'author'),
        'taxonomies'    => array()));
    /*
     * Pyldoras
     */
    register_post_type('pyldora', array(
        'label'         => __('Pyldora'),
        'labels'        => array(
                'name'              => __('Pyldoras'),
                'singular_name'     => __('Pyldora'),
                'add_new'           => __('Nueva pyldora'),
                'add_new_item'      => __('Nueva pyldora'),
                'edit_item'         => __('Editar pyldora'),
                'new_item'          => __('Nueva pyldora'),
                'view_item'         => __('Ver pyldora'),
                'view_items'        => __('Ver pyldoras'),
                'all_items'         => __('Listar pyldoras'),
                'menu_name'         => __('Pyldoras'),
                'name_admin_bar'    => __('Pyldoras')),
        'hierarchical'  => false,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'pyldoras'),
        'menu_icon'     => 'dashicons-image-filter',
        'show_in_rest'  => true,
        'rest_base'     => 'pyldoras',
        'supports'      => array('editor', 'title', 'author', 'thumbnail', 'comments', 'custom-fields', 'author'),
        'taxonomies'    => array()));
    /*
     * Crates
     */
    register_post_type('crate', array(
        'label'         => __('Crate'),
        'labels'        => array(
                'name'              => __('Crates'),
                'singular_name'     => __('Crate'),
                'add_new'           => __('Nuevo crate'),
                'add_new_item'      => __('Nuevo crate'),
                'edit_item'         => __('Editar crate'),
                'new_item'          => __('Nuevo crate'),
                'view_item'         => __('Ver crate'),
                'view_items'        => __('Ver crates'),
                'all_items'         => __('Listar crates'),
                'menu_name'         => __('Crates'),
                'name_admin_bar'    => __('Crates')),
        'hierarchical'  => false,
        'public'        => true,
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'crates'),
        'menu_icon'     => 'dashicons-pets',
        'show_in_rest'  => true,
        'rest_base'     => 'crates',
        'supports'      => array('editor', 'title', 'author', 'thumbnail', 'comments', 'custom-fields', 'author'),
        'taxonomies'    => array()));
}

// Remove custom post types menus
add_action( 'admin_menu', 'adjust_the_wp_menu', 999 );
function adjust_the_wp_menu() {
    remove_submenu_page('edit.php?post_type=tutorial','edit-tags.php?taxonomy=post_tag&amp;post_type=tutorial');
}

// Permite mostrar Custom Post Types on Index Page
add_action('pre_get_posts', 'cpts_post_series_pre_posts');
function cpts_post_series_pre_posts($query){
    if (!is_admin()&&(is_home() && $query->is_main_query())||is_feed()){
        $query->set('post_type',
            array('post', 'tutorial', 'capitulo', 'podcast', 'pyldora', 'crate'));
    }
}
// Add Custom post type menu
add_action('admin_menu', 'cpts_menu');
function cpts_menu() {
    add_submenu_page('edit.php?post_type=tutorial', 'Nuevo capítulo', 'Nuevo capítulo', 'manage_options', 'post-new.php?post_type=capitulo');
}
