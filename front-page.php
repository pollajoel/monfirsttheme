<!-- include du header.php -->
<?php get_header();?>

<?php
$args_blog = array(
			'post_type' => 'page',
			'posts_per_page' =>2,

			);

	$req_blog = new WP_Query($args_blog);
	
	//var_dump ($req_blog);
?>



<?php 

$theme_opts = get_option('lgmac_opts');
$home_slider = $theme_opts['slider_shortcode'];
?>

<div class ="sliderpos" >

<?php global $redux_demo; putRevSlider($redux_demo['RevScode'], 'homepage'); ?>

</div>


<?php get_template_part( 'includes/post', 'content' ); ?>

	


<!-- include du footer.php -->
	<?php get_footer(); ?>
	
	
	