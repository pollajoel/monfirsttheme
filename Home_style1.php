
<?php /* Template Name: page_full_width */ ?>
<?php get_header(); ?>



<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];



?>



<div class="card bg-dark text-white">

  <img src="<?php echo $thumb_url;?>" class="card-img" alt="...">
  <div class="card-img-overlay" style="padding:180px;">
    <h1 class="card-title"><?php the_title();?></h1>
  </div> 
  </div>

        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><?php echo __('Accueil','js_composer') ?></a></li>
          <li class="breadcrumb-item active" aria-current="page">|&nbsp;<?php the_title();?></li>
        </ol>
      </nav>




<?php get_template_part( 'includes/post', 'content' ); ?>
</div>






<?php get_footer(); ?>