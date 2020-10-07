<?php get_header(); 

?>

<main class="pageS no-side">
<?php 
  
  $category=get_queried_object();
  
?>
<h1 class="h1Classes"><?php echo $category->name; ?></h1>
<?php get_template_part('template-parts/blog','loop'); ?>
  
</main>


<?php get_footer(); ?>