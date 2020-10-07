<ul class="classes-post ">
<?php while(have_posts()):the_post(); ?>
 <li class="gym-class blog card gradient">

    
 <?php the_post_thumbnail('mediumS'); ?>
     
    <?php the_category();?>
    
    <div class="card-content contBlog">
         <a href="<?php the_permalink(); ?>">
         <h3 class="itemTitle"> <?php the_title(); ?></h3>
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