<?php 

function gym_classes_list(){ ?>

<ul class="classes-post">
    <?php 
    $args=array(
        'post_type'=>'gymfitness_classes'
    );
    $classes=new WP_Query($args);

    while($classes-> have_posts()):$classes->the_post();
    ?>
    <li class="gym-class card gradient">
        
        <?php the_post_thumbnail('mediumS'); ?>
     
    

    <div class="card-content">
        <a href="<?php the_permalink(); ?>">
        <h3> <?php the_title(); ?></h3>
        </a>
     

        <p><?php the_field('class_day');  echo " ".the_field('class_hours')." - ".the_field('end_hour')." </p>"?></p>
        
    </div>
    </li>

    <?php endwhile; wp_reset_postdata( ); ?>
</ul>



<?php };?>