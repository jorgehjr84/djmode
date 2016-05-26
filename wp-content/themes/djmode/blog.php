<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php
    /*
    Template Name: Blog
    */
?>
<?php get_header(); ?>

  <div class="blogContainer col-md-8 col-sm-8 col-xs-12">
			  <?php  
			  $myQuery = new WP_Query(array('post_type' => 'post'));
			  	// The Loop
			if ( $myQuery->have_posts() ) {
				echo '<ul class="blog-section">';
				while ( $myQuery->have_posts() ) {
					$myQuery->the_post();
					echo '<li class="blog-header">' . get_the_title() . '</li>';
					echo '<li class="blog-content col-md-12 col-sm-12 col-xs-12">' . get_the_content() . '</li>';
					echo '<a href="' . get_the_permalink() . '"></a>';	
				}
				echo '</ul>';
			} else {
				// no posts found
			}
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
  </div>


<?php get_footer(); ?>