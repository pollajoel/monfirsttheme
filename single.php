<!-- include du header.php -->
<?php get_header();?>



<?php
/*
//ajout d'un emplacement de menu
		wp_nav_menu(array('menu' =>'top-menu',
						'theme_location' =>'primary'));


*/?>




	<section>
		<?php if(have_posts()):?>
           
		   <?php while (have_posts()): the_post(); 
		   
		   //recupérer la date de publication de l'article
		   $date = sprintf('<time class ="entry-date" datetime ="%1$s">%2$s</time>',
		   esc_attr(get_the_date('c')),esc_html(get_the_date())
		   ); ?>
		   
			<div class="container">
			
				
				
					<div class="row m-2"> 
					
					
						
			
						<div class = "col-sm-10">
							<h1>
								<?php the_title();?></h1>
								<p> <?php echo lgmac_give_me_meta(esc_attr(get_the_date('c')),esc_html(get_the_date()),
								
								get_the_category_list(', '),get_the_tag_list('',', '));?></p>
									<?php the_content();?>	 
						</div>
				

					</div>
		
			</div><!-- en container -->

		<?php endwhile;
				
				 
		else:
			echo "Aucun Articles Trouvés..";
		endif;
		?>
		
			<div class="row">
				<div class="col-12">
					<nav>
						<ul class="machin-pager">
							<li class="pull-left"><?php previous_post_link(); ?></li>
							<li class="pull-right"><?php next_post_link(); ?></li>
						</ul>
					</nav>
				
				</div>
			
			</div>
		

		</section>

	</div>


<!-- include du footer.php -->
	<?php get_footer(); ?>
	
	
	