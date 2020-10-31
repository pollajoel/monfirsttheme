<!DOCTYPE html>
<html <?php language_attributes();?> >
<head>

   <?php global $redux_demo;?>
   
    <meta charset = "<?php bloginfo( 'charset' ); ?>">
	<title><?php $title = wp_title('',false);if ( $title == "" ) : bloginfo( 'name' );; else : echo $title; endif; ?></title>
	<!-- signaler au teléphone et tablet de ne pas zoomer le site -->
	<meta name='viewport' content = "width=device-width, initial-scale=1">
	
	
	<!-- utile pour le reférencement du site web -->
	
	<?php if(is_home()): ?> 
	<meta name ="description" content ="lorem ipsum lorme ipsum" />
	<?php endif; ?>
	
	<?php if(is_front_page()): ?>
	<meta name ="description" content ="lorem ipsum lorme ipsum" />
	<?php endif; ?>
	
	<?php if(is_page() && !is_front_page()): ?>
	<meta name ="description" content ="lorem ipsum lorme ipsum" />
	<?php endif; ?>
	
	<?php if(is_category()): ?>
	<meta name ="description" content ="lorem ipsum lorme ipsum 
	[ <?php echo single_cat_title('',false); ?> ] " />
	<?php endif; ?>
	
	<?php if(is_tag()): ?>
	<meta name ="description" content ="lorem ipsum lorme ipsum 
	[<?php echo single_tag_title('',false); ?>]
	" />
	<?php endif; ?>
	
	
	
	
	
	
	<!--insertion du Header du template -->
	<?php wp_head(); ?> 
	
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

</head>


<body>




<?php  $theme_opts = get_option('lgmac_opts');	?>

<nav class="navbar navbar-expand-xl navbar-dark  navbar-togglable  fixed-top">



	 <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="index.html">
          <img src ="<?php global $redux_demo; echo $redux_demo['logoMedia']['url'];?>"  class ='img-responsive img-thumbnail d-inline-block align-top' id='img_preview_01' width="200" height="100" alt="">
        </a>
  
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">

          <!-- Social -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item-divider">
              <span class="nav-link">
                <span></span>
              </span>
            </li>
            <li class="nav-item">
              <a href="<?php echo $redux_demo['Github'];?>" class="nav-link">
                <i class="fab fa-github" style="font-size: 20px;"></i> 
                <span class="d-xl-none ml-2">
                  Github
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo $redux_demo['twitter'];?>" class="nav-link">
                <i class="fab fa-twitter" style="font-size: 20px;"></i> 
                <span class="d-xl-none ml-2">
                  Twitter
                </span>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo $redux_demo['Instagram'];?>" class="nav-link">
                <i class="fab fa-instagram" style="font-size: 20px;"></i> 
                <span class="d-xl-none ml-2">
                  Instagram
                </span>
              </a>
            </li>
          </ul>





    <?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 3,
			//'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'navbarCollapse',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>







	</div>
</nav>



























<!--
<div class="container">

  <div class="jumbotron">
    <h1>Latest News</h1>          
</div> -->
