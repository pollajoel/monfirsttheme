<?php

function lgmac_save_options()
	{
		



    //on vérifie que celui qui veut atteindre la page est bien autorisée		
    if(!current_user_can('publish_pages'))
			{
			wp_die("pas autorise");
			}
		
		check_admin_referer("lgmac_options_verify");
	//----------------------fin de la vérification--------------------------
		
		//necessaire pour charger le contenu d'une option
		$opts = get_option('lgmac_opts');
		
		//$opts['slider_shortcode'] = sanitize_text_field($_POST['slider_shortcode']);

         $opts['slider_shortcode'] = sanitize_text_field($_POST['slider_shortcode']);

		//saugegarde image

		$opts['image_01_url'] = sanitize_text_field($_POST['lgmac_img_01_url']); 

		//récupération de la couleur du slider
		$opts['HeaderC'] = sanitize_text_field($_POST['HeaderC']);
      
        
       //footer background color


		$opts['FooterColor'] = sanitize_text_field($_POST['FooterColor']);
		$opts['FooterCopyright'] = sanitize_text_field($_POST['FooterCopyright']);

		$opts['CopyrightTextColor'] = sanitize_text_field($_POST['CopyrightTextColor']);

        //first image block
		$opts['lgmac_img_FirstBlock'] = sanitize_text_field($_POST['lgmac_img_firstblock11']);

		$opts['lgmac_img_firstblock133'] = sanitize_text_field($_POST['lgmac_img_01_url3']);




           

		//mise à jour de l'option lgmac_options crée dans fonction.php partie option
		update_option('lgmac_opts',$opts);
		
		
		
		
		//redirection vers la page d'administration
		wp_redirect(admin_url('admin.php?page=lgmac_theme_opts&status=1'));
		exit;
		 
		  
	//var_dump($opts);
	
	}