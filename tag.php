<!-- include du header.php -->
<?php get_header();?>



<?php
/*
//ajout d'un emplacement de menu
		wp_nav_menu(array('menu' =>'top-menu',
						'theme_location' =>'primary'));


*/?>

	<div class ='container'>
		<div class ='row'>
			<div class = 'col-12'>
			<!-- affichage d'une archive de catégorie
			

			-->
			<p class ='lead'>Liste des articles avec l' étiquette <?php single_tag_title(); 
			// true pas besoin d'utiliser echo pour afficher le titre de la catégorie
			// le premier paramètre represente un prefixe qu'on peut ajouter au nom de la catégorie
			
			?></p>
			
			</div>
		</div>

	</div>





	<section>
		<?php if(have_posts()):?>
           
		   <?php while (have_posts()): the_post(); ?>
			<?php get_template_part('content','page'); ?>
		<?php endwhile; 
		else:
			echo "Aucun Articles Trouvés..";
		endif;
		?>
		

		</section>

	</div>


<!-- include du footer.php -->
	<?php get_footer(); ?>
	
	
	