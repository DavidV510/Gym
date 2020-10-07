<?php get_header(); 
 $author=get_queried_object();
?>

<main class="pageS no-side">
<h1 class="h1Classes"><?php echo "By: ".$author->data->display_name;  ?></h1>
<p class="h1Classes"><?php echo get_the_author_meta('description', $author->data->ID); ?></p>
<ul class="classes-post">
<?php while(have_posts()):the_post(); ?>
 <li class="gym-class card gradient">

    
 <?php the_post_thumbnail('mediumS'); ?>
     
 
     <div class="card-content">
         <a href="<?php the_permalink(); ?>">
         <h3> <?php the_title(); ?></h3>
         </a>
      
 
         <p class="meta">
        <span>
        By: 
        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')) ?>">
        <?php echo get_the_author('display_name') ?>
        </a>
        
        </span>
        </p>

        <p class="date-publish">
        <?php the_time(get_option('date_format')); ?>
        </p>
         
     </div>
     </li>
    <?php endwhile; ?>
</ul>
  
</main>


<?php get_footer(); ?>