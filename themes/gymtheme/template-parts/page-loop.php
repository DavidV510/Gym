<?php while(have_posts()):the_post(); ?>
        <h1 class="title"><?php the_title(); ?></h1>
        
        <div class="img">
        <?php 
        
        if(has_post_thumbnail()){
            the_post_thumbnail('square' ,array('class'=>'feat-image')); 
        }
        else{
            echo "<br>";
        }
        
        ?>
        </div>

        <div class="content">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>