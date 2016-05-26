<?php
    /*
    Template Name: Gallery
    */
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php 
	$images = array();
	if(have_rows('gallery_image')) {
		while( have_rows('gallery_image') ) {
			the_row();	
			$imagesTemp = get_sub_field('the_image');
			$images[] = $imagesTemp;
		}
	}
?>

  <div class="galleryContainer col-md-8 col-sm-8 col-xs-12">
  	
  	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2500">
	  <div class="carousel-inner" role="listbox">
	  	
	<?php 
	  		
	  		echo '<div class="item active gallery-first-pic"><img src="">'

	?>

	<?php  

			echo '</div>';
	?>	
	   
	  

	<?php 
		for($i=0; $i < count($images)   ; $i++) {
			echo '<div class="item"><img src="'.$images[$i].'"></div>';
		}
	?>	
  	  </div><!--End of carousel inner-->
	  	<!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>	


  	</div>
  

  
</div>





<?php get_footer(); ?>
