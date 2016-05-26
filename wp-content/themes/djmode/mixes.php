<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php
    /*
    Template Name: Mixes
    */
?>
<?php get_header(); ?>

<div class="mixesContainer col-md-8 col-sm-8 col-xs-12">
	<!-- <a class="col-md-4 col-sm-4 col-md-offset-4 col-sm-offset-4 col-xs-12 col-xs-offset-2" target="_blank" href="http://www.mixcrate.com/djmodenyc/dj_mixes">Music</a> -->
	<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="music-title col-md-6 col-md-offset-4 col-sm-6 col-sm-offset-4 col-xs-8 col-xs-offset-2">
      <?php echo the_content(); ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>


<?php get_footer(); ?>


