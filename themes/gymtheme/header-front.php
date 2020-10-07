<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>David Gym- Main</title>
    <?php wp_head(); ?>
    <style>
        html{
            margin-top: 0px !important;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Staatliches&display=swap" rel="stylesheet">
</head>
<body <?php body_class(  ) ?>>
    <header class="head">
       <div class="container head-grid">
         <div class="nav">

            <div class="logo">
            <a href="<?php echo home_url(); ?>"></a>
            <img src="<?php echo get_template_directory_uri()."/img/logo.svg" ?>">
            </div>

            <?php  
             
             $menus=array(
                 'theme_location' => 'main-menu',
                 'container'=> 'nav',
                 'container_class' => 'menuHead'
             );
              wp_nav_menu( $menus )
            ?>
         </div>

         <div class="tag text-center">
             <h1><?php the_field('home_tag'); ?></h1>
             <p><?php the_field('home_content');?></p>
         </div>

       </div>
         
    </header>
