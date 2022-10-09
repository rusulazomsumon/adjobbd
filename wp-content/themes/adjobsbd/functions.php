<?php
    // language transalation setup 
    load_theme_textdomain('adjobsbd', get_template_directory().'/languages');

    // dynamic site/page title
    function adjobsbd_setup(){
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails',array('post'));

    }
    // hocks for title and others
    add_action('after_setup_theme','adjobsbd_setup');
    

    // activing assects style and js
    function adjobsbd_assets() {

        // ############ css files ###############
        // false: no version
        // wp_enqueue_scripts('bootstrap-icons',get_template_directory_uri().'/assets/css/bootstrap-icons.css', false);
        // Libraries Stylesheet
        wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri().'/assets/css/bootstrap-icons.css', array(), '1.0.0', 'all' );
        wp_enqueue_style( 'fontawesome-all', get_template_directory_uri().'/assets/css/fontawesome-all.min.css', array(), '1.0.0', 'all' );
        
        wp_enqueue_style('animate', get_template_directory_uri().'/assets/lib/animate/animate.min.css', false);
        wp_enqueue_style('owlcarousel', get_template_directory_uri().'/assets/lib/owlcarousel/assets/owl.carousel.min.css', false);
        // Customized Bootstrap Stylesheet
        wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', false);
        // Template Design Stylesheet
        wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', false);
        // main stylesheet
        wp_enqueue_style( 'main', get_stylesheet_uri() );

        // ###########js files############### 
        // js files 
        // wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'jquery', get_template_directory_uri().'/assets/js/jquery-3.4.1.min.js', array('jquery'), '1.0.0', true);
        // wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'jquery', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.0.0', true);
       
        wp_enqueue_script( 'wow', get_template_directory_uri().'/assets/lib/wow/wow.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'easing', get_template_directory_uri().'/assets/lib/easing/easing.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'waypoints', get_template_directory_uri().'/assets/lib/waypoints/waypoints.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script( 'owlcarousel', get_template_directory_uri().'/assets/lib/owlcarousel/owl.carousel.min.js', array('jquery'), '1.0.0', true);
        // Template Javascript
        wp_enqueue_script( 'mainJs', get_template_directory_uri().'/assets/js/main.js', array('jquery'), '1.0.0', true);
    }
    add_action( 'wp_enqueue_scripts', 'adjobsbd_assets' );


