<?php

/***************************************************************************************/
/*																					  */
/*					Chargement des scripts											 */
/*																					*/
/***********************************************************************************/

//contrôlle du numéro de version_compare
define('LMAC_VERSION','1.0.3');


function lgmac_script(){
	
	//chargement de fichier css
	wp_enqueue_style('lgmac_bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'4.3.1','all'); 	
	wp_enqueue_style('lgmac_custom',get_template_directory_uri().'/style.css',array('lgmac_bootstrap'),LMAC_VERSION,'all');
   //chargement des Css du header1
  		wp_enqueue_style('lgmac_Flat_hedear',get_template_directory_uri().'/css/fontawesome.css',array(),LMAC_VERSION,'all');
		wp_enqueue_style('lgmac_Fawsmin',get_template_directory_uri().'/css/font-awesome.min.css',array(),LMAC_VERSION,'all');
		wp_enqueue_style('lgmac_matedeign',get_template_directory_uri().'/css/materieldesign.css',array(),LMAC_VERSION,'all');
		//wp_enqueue_style('lgmac_matekitign',get_template_directory_uri().'/assets/css/material-kit.css',array(),LMAC_VERSION,'all');
		wp_enqueue_style('lgmac_Card_counter_card',get_template_directory_uri().'/css/card-counter-card.css',array(),LMAC_VERSION,'all');
		wp_enqueue_style('lgmac_services',get_template_directory_uri().'/vc-elements/css/services.css',array(),LMAC_VERSION,'all');
        wp_enqueue_style('lgmac_carrouselside',get_template_directory_uri().'/vc-elements/css/Carousel_Side_Caption.css',array(),LMAC_VERSION,'all');
        wp_enqueue_style('lgmac-social',get_template_directory_uri().'/vc-elements/css/social.css',array(),LMAC_VERSION,'all');
        
		
		//interractive
		wp_enqueue_style('lgmac_interractive',get_template_directory_uri().'/vc-elements/css/InteractiveSVG.css',array(),LMAC_VERSION,'all');
        //donut min jquery.DonutWidget
		wp_enqueue_style('lgmac_jqueruDounutcss',get_template_directory_uri().'/vc-elements/css/jquery.DonutWidget.css',array(),LMAC_VERSION,'all');
        //Ourservices.css
		wp_enqueue_style('lgmac_Ourservicescss',get_template_directory_uri().'/vc-elements/css/Ourservices.css',array(),LMAC_VERSION,'all');
        //timeline66.css
		wp_enqueue_style('lgmac_timeline66',get_template_directory_uri().'/vc-elements/css/timeline66.css',array(),LMAC_VERSION,'all');
		//ServiceBox76.css
		wp_enqueue_style('lgmac_service76',get_template_directory_uri().'/vc-elements/css/ServiceBox76.css',array(),LMAC_VERSION,'all');
		//project.css
		wp_enqueue_style('lgmac-project',get_template_directory_uri().'/vc-elements/css/project.css',array(),LMAC_VERSION,'all');
        //carrouselmin.css
	    wp_enqueue_style('lgmac-project2',get_template_directory_uri().'/vc-elements/css/project1.css',array(),LMAC_VERSION,'all');
        
      


	 wp_enqueue_style('lgmac_menu1-css',get_template_directory_uri().'/Menu1/styles.css',array('jquery'),LMAC_VERSION,'all');
      //InteractiveSVG.js
     wp_enqueue_script('lg-services-jscript',get_template_directory_uri().'/vc-elements/Js/Services.js',array('jquery'),'4.1.4',false);
     wp_enqueue_script('lg-carousselside-jscript',get_template_directory_uri().'/vc-elements/Js/Carousel_Side_Caption.js',array('jquery'),'4.1.4',false);
 
    wp_enqueue_script('lg-jquerydonut',get_template_directory_uri().'/vc-elements/Js/jquery.DonutWidget.js',array('jquery'),'4.1.4',false);
    wp_enqueue_script('lg-Interactive',get_template_directory_uri().'/vc-elements/Js/InteractiveSVG.js',array('jquery','lg-jquerydonut'),'4.1.4',false);
     
	 
	 ///Carrousselmin.js
	 //wp_enqueue_script('lg-carrousselmin',get_template_directory_uri().'/vc-elements/Js/Carrousselmin.js',array('jquery'),'1.3.3',false);
    

	  //chargement des fichiers JS
	  wp_enqueue_script('lg-bootstrapmin-jscript',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),LMAC_VERSION,false);
	  //wp_enqueue_script('lgmac_menu1-js',get_template_directory_uri().'/Menu1/script.js',array(),LMAC_VERSION,false);
	  wp_enqueue_script('lgmac_jscript',get_template_directory_uri().'/js/Monfirst_template.js',array('jquery','lg-bootstrapmin-jscript'),LMAC_VERSION,false);
	//false : charger le script au debut du headder
	//true charger en fin de page : footer 
	
	  wp_enqueue_script('lg-bootstrapmin-momentjs-jscript',get_template_directory_uri().'/assets/js/plugins/moment.min.js',array('jquery'),LMAC_VERSION,false);
	 wp_enqueue_script('lg-poperpmin-jscript',get_template_directory_uri().'/assets/js/core/popper.min.js',array('jquery'),LMAC_VERSION,false);
	 wp_enqueue_script('lg-bootstrapmin-design-jscript',get_template_directory_uri().'/assets/js/core/bootstrap-material-design.min.js',array('jquery'),LMAC_VERSION,false);
	 wp_enqueue_script('lg-bootstrapmin-datepicker-jscript',get_template_directory_uri().'/assets/js/plugins/bootstrap-datetimepicker.js',array('jquery'),LMAC_VERSION,false);
	 wp_enqueue_script('lg-nouislider-jscript',get_template_directory_uri().'/assets/js/plugins/nouislider.min.js',LMAC_VERSION,false);
	 wp_enqueue_script('lg-button-jscript',get_template_directory_uri().'/js/button.js',array('jquery'),LMAC_VERSION,false);
	 wp_enqueue_script('lg-materielkit-jscript',get_template_directory_uri().'/assets/js/material-kit.js',array('jquery'),'2.0.5',false);
	
	
	///règles générale d'utilisations
	
	wp_enqueue_style('lgmac_CookiesCss',get_template_directory_uri().'/css/CookieConscent.css',array(),'LMAC_VERSION','all'); 	
    wp_enqueue_script('lgmac_cookiesJs',get_template_directory_uri().'/js/CookieConsent.js',array('jquery'),'1.12.0',false);		
    wp_enqueue_script('lgmac_popupGrpd',get_template_directory_uri().'/js/popup.js',array('jquery'),'1.12.0',false);		


 
}  
 
add_action('wp_enqueue_scripts','lgmac_script');



//inclure les librairie au niveau de la partie Admin du thème
//
/*
	function lgmac_admin_init()
		{
			//----------------- action1
			//fonction necessaire pour les fichier CSS et JS de la partie Admin
			function lgmac_admin_script(){
				
				
			//pour que bootstrap s'applique uniquement au theme options
			if(!isset($_GET['page']) || $_GET['page'] != 'lgmac_theme_opts')
				return;
			//chargement des styles admin
			 wp_enqueue_style('bootstrap-adm-core',get_template_directory_uri().'/css/bootstrap.min.css',array(),LMAC_VERSION,'all'); 
			 wp_enqueue_script('lg-admin-init',get_template_directory_uri().'/js/admin-option.js',array(),LMAC_VERSION,true);
			
				//chargement des styles admin
			 wp_enqueue_script('lg-bootstrapmin-jscript',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),LMAC_VERSION,false);
             //chargement de color piker for jquery

             wp_enqueue_script('lg-color_picker',get_template_directory_uri().'/js/colorpickerJquery.js',array('jquery','iris'),LMAC_VERSION,false);

             //chargement des scripts admin 
             wp_enqueue_media();//necessaire pour le chargement des images  et média sur wordpress


			}//fin lgmac_script
			
			

	         wp_enqueue_script('lgmac_jscript',get_template_directory_uri().'/js/Monfirst_template.js',array('jquery','lg-bootstrapmin-jscript'),LMAC_VERSION,false);


	
			add_action('admin_enqueue_scripts','lgmac_admin_script');
			
			//------------------------action2
			include("includes/save_options_pages.php");
			add_action('admin_post_lgmac_save_options','lgmac_save_options');//contient la fonction lg_mac_option
			
			
			
		}//fin de la fonction lgmac_admin_init
		
		add_action('admin_init','lgmac_admin_init');

 


/***************************************************************************************/
/*																					  */
/*					CHARGEMENT DES UTILITAIRES									     */
/*																					*/
/***********************************************************************************/

/* après la création du template wordpress va exécuter les commandes suivantes */

function lgmac_setup(){
	
//Hook pour permettre l'ajout des images à la une sur les articles
add_theme_support('post-thumbnails');

//retirer le numéro de version de wordpress
remove_action('wp_head','wp_generator'); 

//enlever les guillemets à la française
remove_filter('the_content','wptexturize');

//chargement de visual composer



// register  custom Navigation Walker
//librairie nécessaire pour la gestion des menus 
//require_once('includes/wp-bootstrap-navwalker.php')
//require_once get_template_directory().'/includes/nav_menu/qode-menu.php';
require_once get_template_directory().'/includes/wp-bootstrap-navwalker.php';


	

//wp support de titre directement par wordpress
add_theme_support('title-tag');
//Activer La gestion des menus 
register_nav_menus(array('primary' =>'principal'));

	
} //fin fonction lgmac_setup

add_action('after_setup_theme','lgmac_setup');







//ajout de la taille medium


	function my_images_sizes($size)
		{

			$add_size = array(

				"medium_large" => "Medium Large",
				);

			$newsize = array_merge($size,$add_size);

			return $newsize;

		}

  
		add_filter('image_size_names_choose','my_images_sizes');
 








// Model de fonction affichage de la Date + la catégorie //
function lgmac_give_me_meta($date1,$date2,$cat,$tags)
	{
		$chaine  ='publié le <time class="entry-date" date-time="';
		$chaine .= $date1;
		$chaine .= '">"';
		$chaine .= $date2;
		$chaine .='</time> dans la catégorie ';
		$chaine .= $cat;
		$chaine .= ' avec les etiquettes : '.$tags;
		return $chaine; 
		
	}//fin fonction afichage Date + Catégorie





//======================================================================================
//=
//=					Afficher La suite de L'excerpt dans l'article de blog
//=
//======================================================================================

function lgmac_excerpt_more($more)
	{
		return '<a class ="more-link" href ="' .get_permalink() .'">'.' [lire la suite] '.'</a>';
	}
	
	add_filter('excerpt_more','lgmac_excerpt_more');

  //-----------------------------------------------------------------------------------------//
 //--------------------------------------Ajout des options au template----------------------//
//-----------------------------------------------------------------------------------------//

function lg_mac_activ_options()
	{
		$theme_opts =get_option('lgmac_opts');
		if(!$theme_opts) //si le theme est désactivé et réactivé plus tard il ne sera pas nécessaire de reactiver le theme
			{			//afin de créer l'option
				
				//
				$opts =array(
				'image_01_url' => '',
				'slider_shortcode' =>'',
				'HeaderC' =>'',
				'FooterColor'=>'',
				'FooterCopyright'=>'',
				'lgmac_img_FirstBlock'=>'',
				'lgmac_img_firstblock133'=>'',


				);
				add_option('lgmac_opts',$opts);
			}
	}
		
		add_action('after_switch_theme','lg_mac_activ_options');

// ajouter un page d'option au template
/*
function lgmac_admin_menus()
	{
		add_menu_page(
		'Theme Options',//titre sur le navigateur
		'Option du Theme',//titre du menu
		'publish_pages',//restreindre les accès
		'lgmac_theme_opts',//slug
		'lgmac_build_options_page' //fonction du template options contenu dans le fichier build_options_page.php
			);
		
		include("includes/build_options_page.php");// contient la fonction build_options_page.php
		
	}//fin de la fonction lgmac_admin_menus
	add_action('admin_menu','lgmac_admin_menus');

*/

//Ajout des widgets


  //===============================================================================================================/
 //=
//=                           SIDEBAR ET WIDGET                                                                   


function lg_mac_widget_init(){



	//register footer SideBar1

	register_sidebar(
		array(

			'name' => 'Footer Col-1',
			'description' => 'widgets affichés dans le footer quatre au maximum',
			'id' => 'widgetized-footer',
			//'before_widget'=>'<div id="%1$s" col ="col-3 %2s"><div class="inside-widget">',
			//'after_widget' =>'</div></div>',

			'before_widget'=>'<div class="col-lg-3 text-light-700">',
			'after_widget' =>'</div>',

			'before_title' => '<h2 class ="h3 text-left">', 
			'after_title' =>'</h2>',

		));
    
    //register Footer sidebar2

    register_sidebar(
		array(

			'name' => 'Footer col-2',
			'description' => 'widgets affichés dans le footer quatre au maximum',
			'id' => 'widgetized-footer2',
			//'before_widget'=>'<div id="%1$s" col ="col-3 %2s"><div class="inside-widget">',
			//'after_widget' =>'</div></div>',

			'before_widget'=>'<div class="col-lg-3">',
			'after_widget' =>'</div>',

			'before_title' => '<h2 class ="h3 text-left">', 
			'after_title' =>'</h2>',

		));
    
//footer sidebar3
 register_sidebar(
		array(

			'name' => 'Footer col-3',
			'description' => 'widgets affichés dans le footer quatre au maximum',
			'id' => 'widgetized-footer3',
			//'before_widget'=>'<div id="%1$s" col ="col-3 %2s"><div class="inside-widget">',
			//'after_widget' =>'</div></div>',

			'before_widget'=>'<div class="col-lg-3">',
			'after_widget' =>'</div>',

			'before_title' => '<h2 class ="h3 text-left">', 
			'after_title' =>'</h2>',

		));


//footer sidebar4
 register_sidebar(
		array(

			'name' => 'Footer col-4',
			'description' => 'widgets affichés dans le footer quatre au maximum',
			'id' => 'widgetized-footer4',
			//'before_widget'=>'<div id="%1$s" col ="col-3 %2s"><div class="inside-widget">',
			//'after_widget' =>'</div></div>',

			'before_widget'=>'<div class="col-lg-3">',
			'after_widget' =>'</div>',

			'before_title' => '<h2 class ="h3 text-left">', 
			'after_title' =>'</h2>',

		));

}


add_action('widgets_init','lg_mac_widget_init');

//image mise en avant dans les single post







// Create Shortcode new_shortcode
// Use the shortcode: [new_shortcode =""]




// Before VC Init
add_action( 'vc_before_init', 'vc_before_init_actions' );
 
function vc_before_init_actions() {
  
    // Require new custom Element
   	 require_once( get_template_directory().'/vc-elements/my-first-custom-element.php' );
     require_once( get_template_directory().'/vc-elements/progressbar0.php' );
	 require_once( get_template_directory().'/vc-elements/card-counter-card.php' );	 
	 require_once( get_template_directory().'/vc-elements/Services.php' );	
     require_once( get_template_directory().'/vc-elements/Carousel-Side-Caption.php' );
	 require_once( get_template_directory().'/vc-elements/InteractiveSVG.php' );
	 require_once( get_template_directory().'/vc-elements/piechart.php' );
	 require_once( get_template_directory().'/vc-elements/OurServices.php' );
	 require_once( get_template_directory().'/vc-elements/Timeline66.php' );
	 require_once( get_template_directory().'/vc-elements/ServiceBox76.php' );
	 require_once( get_template_directory().'/vc-elements/project.php' );
	 require_once( get_template_directory().'/vc-elements/project1.php' );
	 }































