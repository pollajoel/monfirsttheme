<?php

vc_map(array(
  'name' => 'interractiveState',
  'base' => 'interractiveState',
  'category' => 'Maxima',
  //'admin_enqueue_js' => array(get_template_directory_uri().'/vc-elements/css/InteractiveSVG.js'),
  //'admin_enqueue_css' => array(get_template_directory_uri().'/vc-elements/Js/InteractiveSVG.css'),
  'params' => array(
    
	

	  
	  
        array(
          'type' => 'textfield',
          //'name' => 'label',
          'heading' => __('card Title', 'js_composer'),
          'param_name' => 'titre',
        ),
        array(
          'type' => 'textarea',
          //'name' => 'Content',
          'heading' => __('card content', 'js_composer'),
          'param_name' => 'contenttext',
        ),
		
		array(
          'type' => 'textfield',
          //'name' => 'Content',
          'heading' => __('Bouton Text', 'js_composer'),
          'param_name' => 'bouton',
		  
        ),
		
		array(
          'type' => 'attach_image',
          //'name' => 'Content',
          'heading' => __('Card Image', 'js_composer'),
          'param_name' => 'image',
		  
        ),
		
		array(
          'type' => 'vc_link',
          //'name' => 'Content',
          'heading' => __('Bouton Link', 'js_composer'),
          'param_name' => 'url',
        ),
		
		
		
      
  ),

));

//shortcode



function interractiveState_shortcode($atts){
  extract(shortcode_atts(array(
    'size' => '',
	'contenttext' => '',
	'titre' => '',
	'bouton' => '',
	'image' => '',
	'url' => '',
  ), $atts));

 
 
 
 
 
 $image1 =wp_get_attachment_image( (int)$image, array('600', '200'), "", array( "class" => "card-img-top" ) );
  
  $lien = vc_build_link($url);
  
  $list .='<div class="card" style="width: 18rem;">
  '.$image1.'
  <div class="card-body">
    <h6 class="card-title">'.$titre.'</h6>
    <p class="card-text" style="text-align:justify;">'.$contenttext.'</p>
    <a href="'.$lien['url'].'" class="btn btn-primary">'.$bouton.'</a>
  </div>
</div>';
  return $list;
  
  
  


}

add_shortcode('interractiveState', 'interractiveState_shortcode');

