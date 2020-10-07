<!-- Classes In Gym -->
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
     
    <?php 
    $start=get_field('class_hours');
    $end=get_field('end_hour');
    ?>

    <div class="card-content">
        <a href="<?php the_permalink(); ?>">
        <h3> <?php the_title(); ?></h3>
        </a>
     

        <p> <?php echo the_field('class_day'). " - ". $start . " to " . $end; ?></p>
        
    </div>
    </li>

    <?php endwhile; wp_reset_postdata( ); ?>
</ul>



<?php };?>


<!-- //////////// -->

<!-- Class In Gym -->

<?php function gym_class(){ ?>
    <?php while(have_posts()):the_post(); ?>
    <h1 class="title"><?php the_title(); ?></h1>
    <div class="img">
    <?php 
    if(has_post_thumbnail()){
        the_post_thumbnail('classImg' ,array('class'=>'feat-image'));
    }
    else{
        echo "<br>";
    }
    ?>
    </div>
    <?php 
    $start=get_field('class_hours');
    $end=get_field('end_hour');
    ?>
    
    
    <div class="content">
    
    <p> <?php echo the_field('class_day'). " - ". $start . " to " . $end; ?></p>
    <?php the_content(); ?>
    </div>
    <?php endwhile; wp_reset_postdata( );?>
<?php };?>


<!-- //////////// -->

<!-- Items In Gym -->

<?php function gym_items_list(){ ?>

<ul class="classes-post">
    <?php 
    $args=array(
        'post_type'=>'gym_items'
    );
    $classes=new WP_Query($args);

    while($classes-> have_posts()):$classes->the_post();
    ?>
    <li class="gym-class card gym-item">
    <?php 
    $muscles=get_field('muscles');
    $calories=get_field('calories');
    $video=get_field('exercise_video');
    ?>
    <a href="<?php echo $video; ?>" class="aItem">
        
        <div class="itemImg">
            <?php
            if(has_post_thumbnail()){
                the_post_thumbnail('mediumS'); 
            }
            else{
                echo "<p> No image to Display </p>";
            }
            ?>
        </div>
     
    

    <div class="card-content">
        
    
        <h3 class="itemTitle"> <?php the_title(); ?></h3>
        

        <p class="smallCon"> <?php echo " Working on the  ". $muscles . " <br> Burning up to: " . $calories." calories" ?></p>
      
    </div>
    </a>
    </li>

    <?php endwhile; wp_reset_postdata( ); ?>
</ul>



<?php };?>