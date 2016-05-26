<html>
<head>
	<title>DJ Mode</title>
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
	<link href="<?php bloginfo('template_url'); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/jquery/dist/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/bootstrap/js/bootstrap.min.js"></script>


</head>
<body>



<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <a class="navbar-brand side-bar-logo-mobile" href="<?php echo get_permalink(get_page_by_path('home-page')->ID); ?>"></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo get_permalink(get_page_by_path('home-page')->ID); ?>">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('bio')->ID); ?>">Bio</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('gallery-2')->ID); ?>">Gallery</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('press-kit')->ID); ?>">Press Kit</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('videos')->ID); ?>">Videos</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('mixes')->ID); ?>">Mixes</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('blog')->ID); ?>">Blog</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('shop')->ID); ?>">Shop</a></li>
        <li><a href="<?php echo get_permalink(get_page_by_path('contact')->ID); ?>">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- <nav>
	<ul class="social-icons">
		<li><a href=""><img class="twitter-icon" src=""></a></li>
		<li><a href=""><img class="instagram-icon" src=""></a></li>
		<li><a href=""><img class="facebook-icon" src=""></a></li>
	</ul>
</nav>
 -->

