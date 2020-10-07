<?php get_header(); ?>

<main class="pageS classes">
    <h1 class="h1Classes"><?php echo get_the_title();  ?></h1>
    <?php  gym_items_list();?>
 </main>

<?php get_footer(); ?>