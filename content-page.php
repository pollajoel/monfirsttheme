<div class="container">
			
				
				
					<div class="row m-2"> 
					
					
						<div class= "col-sm-2"><!-- vignette -->
						<a href='<?php the_permalink(); ?>'>
						
						<?php 
						if($thumbnail_html =wp_get_attachment_image_src(get_post_thumbnail_id( $post->ID),'thumbnail')):
							$thumbnail_src = $thumbnail_html['0']; ?>
						
						<img class ="img-responsive img-thumbnail" src= "<?php echo $thumbnail_src ?>" alt = "">
						<?php endif; ?>
						</a>
						</div>
			
						<div class = "col-sm-10 ">
							<h1>
								<a href='<?php /*Permalien vers le post */ the_permalink(); ?>'><?php the_title();?> </a></h1>
								<p><?php echo lgmac_give_me_meta(esc_attr(get_the_date('c')),esc_html(get_the_date()),
								
								get_the_category_list(', '),get_the_tag_list('',', ')) ?></p>  
									<?php the_excerpt();?>	 
						</div>
				

		</div>
		
	</div><!-- en container -->
