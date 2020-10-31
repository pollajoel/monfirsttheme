<?php

vc_map(array(
  'name' => 'Timeline66',
  'base' => 'Timeline66',
  'category' => 'Maxima',
  
  
    'params' => array(
	
	
	
	 
	array(
      'type' => 'param_group',
      'param_name' => 'values',
      'params' => array(
	  
		array(
          'type' => 'textfield',
          //'name' => 'label',
          'heading' => __('service count', 'js_composer'),
          'param_name' => 'servicecount',
        ),
		
		array( 
          'type' => 'textfield',
          //'name' => 'label',
          'heading' => __('service title', 'js_composer'),
          'param_name' => 'servicetitle',
        ),
      
		array(
          'type' => 'iconpicker',
          //'name' => 'label',
          'heading' => __('service icon', 'js_composer'),
          'param_name' => 'serviceicon',
        ),
		array( 
          'type' => 'textarea',
          'heading' => __('service texte', 'js_composer'),
          'param_name' => 'servicetexte', 
		  'value' => '',
        ),
		
		
		array(
          'type' => 'vc_link',
          'heading' => __('service link', 'js_composer'),
          'param_name' => 'lien',
		  //'dependency' => array(
		  //'element' =>'link',
		  //'value' => array('custom'),
		  //'description' => __('Add Custom Link','js_composer'),
		  //),
		  'description' =>__('enter link ','js_composer'),
		  
		  
        ),
		
	)),
	
	)));


//shortcode



function Timeline66_shortcode($atts, $content = null, $tag){
  extract(shortcode_atts(array(
    'servicecount' => '',
	'serviceicon' => '',
	'servicetitle' =>'',
	 'servicetexte' =>'',
	 'lien' =>'',
  ), $atts));
  
  
        
  
  

			 
			 
		$values = vc_param_group_parse_atts($atts['values']);
  $cpt =0;

  $new_accordion_value = array();
  foreach($values as $data){
    $new_line = $data;
    $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
    $new_line['subtitle'] = isset($new_line['subtitle']) ? $new_line['subtitle'] : '';
	$new_line['content'] = isset($new_line['content']) ? $new_line['content'] : '';
	$new_line['Btext'] = isset($new_line['Btext']) ? $new_line['Btext'] : '';

    $new_accordion_value[] = $new_line;
	$cpt++;

  }
  
  
  
  
  
  
  
  
  
  
  
  $list ='<div class="container">
    <div class="row">';
	foreach($new_accordion_value as $accordion):
	
	$lien = vc_build_link($accordion['lien']);
	
	$list .= '<div class="col-md-4 col-sm-6">
            <div class="serviceBox">
                <div class="service-count">'.$accordion['servicecount'].'</div>
                <div class="service-icon">
                    <i class="'.$accordion['serviceicon'].'"></i>
                </div>
                <div class="service-content">
                    <h3 class="title">'.$accordion['servicetitle'].'</h3>
                    <p class="description">
                     '.$accordion['servicetexte'].'
					 </p>
                    <a href="'.$lien['url'].'" class="read-more">'.__('EN SAVOIR PLUS','js_composer').'</a>
                </div>
            </div>
        </div>';
	endforeach;
		
 
    $list .='</div>
</div>';
  
  
  
  
  
  
  
  
  
  
  

  return $list;
 

}

add_shortcode('Timeline66', 'Timeline66_shortcode');

