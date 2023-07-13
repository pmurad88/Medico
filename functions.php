<?php 

function learning_theme_supports(){
    add_theme_support( "title-tag" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "custom-header" );
    


    add_image_size( "postcard", 550, 365, true );
    add_image_size( "featured-img", 940, 480, true );


    register_nav_menus(array(
        'header_menu' => __('Header Menu', 'wpmedico'),
        'footer_menu' => __('Footer Menu', 'wpmedico')
    ));

}
add_action( 'after_setup_theme', 'learning_theme_supports' );





function wpmedico_custom_post(){
    register_post_type( 'program', array(
        'labels'         => array(
            'name'          => esc_html__( 'Program', 'wptheme' ),
            'singular_name' =>'Program', 
            'all_items'     =>  'All Program'
        ),
        'show_ui'       => true,
        'menu_icon'     => 'dashicons-admin-post',
        'menu_position' =>  5,
        'supports'      => array( 'title', 'editor', 'thumbnail', ),
        'publicly_queryable' => true
    ));
    register_post_type( 'testimonial', array(
        'labels'         => array(
            'name'          => esc_html__( 'Testimonial', 'wptheme' ),
            'singular_name' =>'Testimonial', 
            'all_items'     =>  'All testimonial'
        ),
        'show_ui'       => true,
        'menu_icon'     => 'dashicons-admin-post',
        'menu_position' =>  5,
        'supports'      => array( 'title', 'editor', 'thumbnail', ),
        'publicly_queryable' => true
    ));
    register_post_type( 'branch', array(
        'labels'         => array(
            'name'          => esc_html__( 'Branch', 'wptheme' ),
            'singular_name' =>'Branch', 
            'all_items'     =>  'All Branch'
        ),
        'show_ui'       => true,
        'menu_icon'     => 'dashicons-admin-post',
        'menu_position' =>  5,
        'supports'      => array( 'title', 'editor', 'thumbnail', ),
        'publicly_queryable' => true
    ));

    
    register_taxonomy( 'program-type', 'program', array(
        'label'     => 'Program Type',
        'show_ui'   => true,
        'hierarchical'=> true    
    ) );
    register_taxonomy( 'testimonial-type', 'testimonial', array(
        'label'     => 'testimonial Type',
        'show_ui'   => true,
        'hierarchical'=> true    
    ) );
}



function wpmedico_sidebers(){
    register_sidebar(array(
        'name'  => 'Footer Widget One',
        'id'   =>  'footer_widget1',
        'before_widget' => '<div class="footer-list">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name'  => 'Footer Widget Two',
        'id'   =>  'footer_widget2',
        'before_widget' => '<div class="footer-list2">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    register_sidebar(array(
        'name'  => 'Footer Widget Two',
        'id'   =>  'footer_widget3',
        'before_widget' => '<div class="footer-list3">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init' , 'wpmedico_sidebers');






add_action( 'init', 'wpmedico_custom_post' );


    if( ! defined( "CSS_DIR" ) ){
        define( "CSS_DIR", get_stylesheet_directory_uri() . '/assets/css' );
    }
    if( ! defined( "JS_DIR" ) ){
    define( "JS_DIR", get_stylesheet_directory_uri() . '/assets/js' );
    }

    function wptheme_assets(){
              
        wp_enqueue_style( 'google-font', '//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400;1,500&display=swap' );                
        wp_enqueue_style( 'owl-carousel', CSS_DIR. '/owl.carousel.min.css' );                
        wp_enqueue_style( 'fontawesome', CSS_DIR. '/all.min.css' );                
        wp_enqueue_style('main', CSS_DIR . '/main.css', null, time() );
        wp_enqueue_style('wpmedico', get_stylesheet_uri());
    
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'owl-carousel', JS_DIR . '/owl.carousel.min.js', ['jquery'] );
        wp_enqueue_script( 'fitvids', JS_DIR . '/jquery.fitvids.js', ['jquery'] );
        wp_enqueue_script( 'script', JS_DIR . '/script.js', ['jquery'] );
    
    }
    add_action( 'wp_enqueue_scripts', 'wptheme_assets' );



    function da_get_views_post($post_id){
        $key = 'post_views_count';
    
        $count = get_post_meta($post_id,$key, true);
    
        if($count == ''){
            $count = 0;
    
            delete_post_meta($post_id,$key);
    
            add_post_meta($post_id,$key,$count);
    
        }else{
            $count++;
            update_post_meta($post_id,$key, $count);
        }
    }
    function da_get_post_views($post_id){
        $key = 'post_views_count';
        $count = get_post_meta($post_id,$key, true);
    
        if($count == ''){
            $count = 0;
    
            delete_post_meta($post_id,$key);
    
            add_post_meta($post_id,$key,$count);
    
            return "0 View";
    
        }
    
        return $count. ' Views';
    }



    //include get_template_directory() . '/inc/acf_fields.php';