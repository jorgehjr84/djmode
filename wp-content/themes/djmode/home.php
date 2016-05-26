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

  <div class="homeContainer col-md-6 col-md-offset-1 col-sm-6 col-sm-offset-1 col-xs-10 col-xs-offset-1"></div>


<?php get_footer(); ?>
