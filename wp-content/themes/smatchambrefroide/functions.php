<?php
    

    // -------------
    // INDISPENSABLE
    // -------------

    // I1 - Constantes de theme
    define('site_name', get_bloginfo('name') );
    define('site_url', site_url() );
    define('theme_name',  get_template() );
    define('theme_url', get_template_directory_uri() );
    define('theme_path',  get_template_directory() );
    define('posts_page_id', get_option('page_for_posts') );
    define('posts_url', get_permalink(posts_page_id).'.html');


    // I2 Appel styles & scripts
	wp_enqueue_style('css', theme_url.'/style.css'); // CSS
    wp_enqueue_style('css-min', theme_url.'/style.min.css'); // CSS mim


    // I3 support post
        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );


    // -----
    // Menus
    // -----
    
    // M1 - Menu principale
    function register_my_menu(){
        register_nav_menu( 'main-menu', 'Menu principal' );
    }
    add_action( 'after_setup_theme', 'register_my_menu' );
    
    // --------------------
    // Post, CPT, Taxonomie
    // --------------------

    /*
    * On utilise une fonction pour créer notre custom post type 'Expériences'
    */

    function wpm_custom_post_type() {

        // On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
        $labels = array(
            // Le nom au pluriel
            'name'                => _x( 'Expériences', 'Post Type General Name'),
            // Le nom au singulier
            'singular_name'       => _x( 'Expérience', 'Post Type Singular Name'),
            // Le libellé affiché dans le menu
            'menu_name'           => __( 'Expériences'),
            // Les différents libellés de l'administration
            'all_items'           => __( 'Toutes les expériences'),
            'view_item'           => __( "Voir l'expérience"),
            'add_new_item'        => __( 'Ajouter une nouvelle expérience'),
            'add_new'             => __( 'Ajouter'),
            'edit_item'           => __( "Editer l'expérience"),
            'update_item'         => __( "Modifier l'expérience"),
            'search_items'        => __( 'Rechercher expérience'),
            'not_found'           => __( 'Non trouvée'),
            'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
        );
        
        // On peut définir ici d'autres options pour notre custom post type
        
        $args = array(
            'label'               => __( 'Expériences'),
            'description'         => __( 'Expériences en entreprise'),
            'labels'              => $labels,
            // On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            /* 
            * Différentes options supplémentaires
            */
            'show_in_rest'        => true,
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-universal-access-alt',
            'rewrite'			  => array( 'slug' => 'experiences'),

        );
        
        // On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
        register_post_type( 'experiences', $args );

    }

    //add_action( 'init', 'wpm_custom_post_type', 0 );

?>