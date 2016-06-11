<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php
    /*
    Template Name: Home
    */
?>

<?php get_header(); ?>

  <?php if(have_posts()): ?>
    <?php while(have_posts()) : the_post(); ?>
    <?php endwhile; ?>
  <?php endif ?>

  <div class="homeContainer col-md-8 col-sm-8 col-xs-12"></div>


<?php get_footer(); ?>
