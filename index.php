<!-- include du header.php -->
<?php get_header();?>

<?php
/*
//ajout d'un emplacement de menu
		wp_nav_menu(array('menu' =>'top-menu',
						'theme_location' =>'primary'));


*/?>




	<section>
		<div class='container'>
		
		<?php //var_dump($wp_query); 
		//pour traiter poste courant  dans la boucle
		// recupérer la valeur
		  
		?>
			<?php if(have_posts()):?>
           
				<?php while (have_posts()): the_post(); ?>
					<?php get_template_part('content','page'); ?>
				<?php endwhile;
				
				 
				else:
					echo "Aucun Articles Trouvés..";
				endif;
			?>
		
        </div>
		</section>

	</div>


<!-- include du footer.php -->
	<?php get_footer(); ?>
	
	
	