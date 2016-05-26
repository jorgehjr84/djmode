<?php
/**
 * The Sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>


<div class="sidebar_nav col-md-4 col-sm-4">
		
		<div class="side-bar-logo"></div>
			<ul class="sidebar">
				<li class="sidebarLinks"><a href="<?php echo get_permalink(get_page_by_path('home-page')->ID); ?>">Home</a></li>
				<li class="sidebarLinks"><a href="<?php echo get_permalink(get_page_by_path('bio')->ID); ?>">Bio</a></li>
				<li class="sidebarLinks"><a href="<?php echo get_permalink(get_page_by_path('gallery-2')->ID); ?>">Gallery</a></li>
				<!-- <li class="sidebarLinks"><a href="<?php echo get_permalink(get_page_by_path('press-kit')->ID); ?>">Press Kit</a></li> -->
				<li class="sidebarLinks"><a href="<?php echo get_permalink(get_page_by_path('videos')->ID); ?>">Videos</a></li>
				<li class="sidebarLinks"><a href="<?php echo get_permalink(get_page_by_path('mixes')->ID); ?>">Music</a></li>
				<li class="sidebarLinks"><a href="<?php echo get_permalink(get_page_by_path('blog')->ID); ?>">Blog</a></li>
				<li class="sidebarLinks"><a href="<?php echo get_permalink(get_page_by_path('shop')->ID); ?>">Shop</a></li>
				<li class="sidebarLinks"><a href="<?php echo get_permalink(get_page_by_path('contact')->ID); ?>">Contact</a></li>
			</ul>
</div>
