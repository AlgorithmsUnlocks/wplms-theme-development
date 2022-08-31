<?php 
/* 
*This is my theme functions
*/

// Theme title
add_theme_support('title-tag');

//The css and js file calling includeing css file 

function wplms_css_js_file_calling(){

    //Main Style Connections
    wp_enqueue_style('wplms_style',get_stylesheet_uri());

    //Custom style connection
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css', array(),'5.0.2','all' );
    wp_register_style('style',get_template_directory_uri().'/css/style.css',array(),'5.0.1','all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('style');

    //jQuery Conections 

   // wp_enqueue_script($handle, $src, $deps, $ver, $in_footer);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.js',array(),'5.0.2','false');
    wp_enqueue_script('scritp',get_template_directory_uri().'/js/script.js',array(),'5.0.2','false');
}
add_action('wp_enqueue_scripts','wplms_css_js_file_calling' )


?>