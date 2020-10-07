<?php get_header('front'); ?>


<?php while(have_posts()):the_post(); ?>

    <section class="welcome text-center">
    <h1 class="h1Classes"><?php the_field('welcome_head')?></h1>
    <p><?php the_field('welcome_tag')?></p>
    </section>


    <section class="gym-areas">
        <ul class="area-container">
            <li class="area">
             <?php 
              $area1=get_field('area_1');
              $img=wp_get_attachment_image_src($area1['area_img'],'mediumSize')[0];
             ?>
             <img src="<?php echo $img; ?>">
             <p><?php echo $area1['area_name']; ?></p>
            </li>

            <li class="area">
             <?php 
              $area2=get_field('area_2');
              $img=wp_get_attachment_image_src($area2['area_img'],'mediumSize')[0];
             ?>
             <img src="<?php echo $img; ?>">
             <p><?php echo $area2['area_name']; ?></p>
            </li>

            <li class="area">
             <?php 
              $area3=get_field('area_3');
              $img=wp_get_attachment_image_src($area3['area_img'],'mediumSize')[0];
             ?>
             <img src="<?php echo $img; ?>">
             <p><?php echo $area3['area_name']; ?></p>
            </li>

            <li class="area">
             <?php 
              $area4=get_field('area_4');
              $img=wp_get_attachment_image_src($area4['area_img'],'mediumSize')[0];
             ?>
             <img src="<?php echo $img; ?>">
             <p><?php echo $area4['area_name']; ?></p>
            </li>
        </ul>
    </section>



    <section class="pageS classes-home">
    <h1 class="h1Classes">Our Classes</h1>
    <?php  gym_classes_list(2);?>

    <div class="allClasses">
        <a class="btn" href="<?php echo get_permalink(get_page_by_title( 'Classes' )); ?>">
        View All Classes
        </a>
    </div>
    </section>
    

    <section class="pageS instructors">
    <h1 class="h1Classes">Our Instructors</h1>
    <?php  gym_instructors(2);?>
    </section>


    <section class="test">
    <?php  gym_testimonials(2);?>
    </section>


<?php endwhile;?>


<?php get_footer(); ?>