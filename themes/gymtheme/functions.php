<?php 

require get_template_directory().'/inc/queries.php';

function gym_menus(){
    register_nav_menus( array(
        'main-menu'=>'Main Menu',
        'footer-menu'=>'Footer Menu'
    ) );
};

function gym_scripts(){
    wp_enqueue_style( 'normalize', get_template_directory_uri().'/css/normalize.css', array(), '8.0.1');


    
    wp_enqueue_style('head', get_template_directory_uri().'/css/header.css' ,NULL , '1.1.3');
    wp_enqueue_style('foot', get_template_directory_uri().'/css/footer.css' ,NULL , '1.1.3');
    wp_enqueue_style('slick', get_template_directory_uri().'/css/slick.min.css' ,NULL , '1.1.3');
    wp_enqueue_style('page', get_template_directory_uri().'/css/page.css' ,NULL , '1.1.3');
    wp_enqueue_style('classes', get_template_directory_uri().'/css/classes.css' ,NULL , '1.1.3');
    wp_enqueue_style('class-widget', get_template_directory_uri().'/css/class-widget.css' ,NULL , '1.1.3');
    wp_enqueue_style('blog', get_template_directory_uri().'/css/blog.css' ,NULL , '1.1.3');
    wp_enqueue_style('contact', get_template_directory_uri().'/css/contact.css' ,NULL , '1.1.3');
    wp_enqueue_style('style',get_stylesheet_uri() , array('normalize','head','foot','slick','page','classes','class-widget','blog','contact'), '1.1.3');
    

    wp_enqueue_script('jquery');

    wp_enqueue_script('slicknavjs',get_template_directory_uri().'/js/jquery.slicknav.min.js',array('jquery'),'1.0.10',true);
    wp_enqueue_script('script',get_template_directory_uri().'/js/script.js',array('jquery'),'1.0.10',true);

};

function gymFitness_setup(){
     

     add_image_size( 'square', 350, 350, true );
     add_image_size('mediumS',500,325,true);
     add_image_size('classImg',500,500,true);
     add_image_size('sWidget',100,250,true);
     //Add Image
     add_theme_support('post-thumbnails');
};

function gym_widgets(){
    register_sidebar( array(
        'name'=>'Our Classes',
        'id'=>'sidebar',
        'before_widget'=>'<div class="widget">',
        'after_widget'=>'</div>',
        'before_title'=>'<h3>',
        'after_title'=>'</h3>'
    ) );

    
};


// HOOks
add_action('init', 'gym_menus');
add_action('wp_enqueue_scripts', 'gym_scripts');
add_action('widgets_init','gym_widgets');
add_action('after_setup_theme', 'gymFitness_setup');

?>