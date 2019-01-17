<?php

    // fix nav
    require_once get_template_directory() . "/Assets/class-wp-bootstrap-navwalker.php";

    function load_scripts(){
        $home = get_template_directory_uri();
        $random = rand(1,10);

        wp_enqueue_style('bootstrap', $home . "/Assets/css/bootstrap/bootstrap.css" , array(), $random, 'all');
        wp_enqueue_style('header', $home . "/Assets/css/header.css" , array(), $random, 'all');
        wp_enqueue_style('slider', $home . "/Assets/css/slider.css" , array(), $random, 'all');
        wp_enqueue_style('sobre', $home . "/Assets/css/section-sobre.css" , array(), $random, 'all');
        wp_enqueue_style('bar_info', $home . "/Assets/css/info-bar.css" , array(), $random, 'all');
        wp_enqueue_style('responsive', $home . "/Assets/css/responsive.css" , array(), $random, 'all');
        
        wp_enqueue_script('bootstrapjs', $home . '/Assets/js/bootstrap/bootstrap.js', array('jquery'), $random, true);
    }

    add_action('wp_enqueue_scripts', 'load_scripts');

    // register menus
    register_nav_menus( 
        array(
            'main_menu' => __( 'Menu principal', 'ekoala' ),
        )
    );

