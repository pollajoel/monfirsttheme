<?php

vc_map(array(
  'name' => 'Card_counter',
  'base' => 'Card_counter',
  'category' => 'Maxima',
  'params' => array(
    
	
	array(
      'type' => 'param_group',
      'param_name' => 'values',
      'params' => array(
        array(
          'type' => 'textfield',
          //'name' => 'label',
          'heading' => __('card background color', 'rrf-maxima'),
          'param_name' => 'bgcolor',
        ),
        array(
          'type' => 'textfield',
          //'name' => 'Content',
          'heading' => __('Card Title', 'rrf-maxima'),
          'param_name' => 'CardTitle',
        ),
		
		array(
          'type' => 'textfield',
          //'name' => 'Content',
          'heading' => __('Card Icon', 'rrf-maxima'),
          'param_name' => 'Icon',
		  
        ),
		
		array(
          'type' => 'textfield',
          //'name' => 'Content',
          'heading' => __('Card size', 'rrf-maxima'),
          'param_name' => 'size',
		  
        ),
		
		
      )

    ),
  ),

));

//shortcode



function Card_counter_shortcode($atts){
  extract(shortcode_atts(array(
    'size' => '',
	'bgcolor' => '',
	'CardTitle' =>'',
	'Icon' => '',
  ), $atts));

  
  
  $values = vc_param_group_parse_atts($atts['values']);
  $cpt =0;

  $new_accordion_value = array();
  foreach($values as $data){
    $new_line = $data;
    $new_line['bgcolor'] = isset($new_line['bgcolor']) ? $new_line['bgcolor'] : '';
    $new_line['CardTitle'] = isset($new_line['CardTitle']) ? $new_line['CardTitle'] : '';
	$new_line['Icon'] = isset($new_line['Icon']) ? $new_line['Icon'] : '';
	$new_line['size'] = isset($new_line['size']) ? $new_line['size'] : '';

    $new_accordion_value[] = $new_line;
	$cpt++;

  }
  
  $list .='<div class="container">
    <div class="row">';
  
  
  
  $idd = 0;
  foreach($new_accordion_value as $accordion):
  $idd++;//'a'.$accordion['label'].'b'.$accordion['content'].'</span></li>';


    $list .='<div class="col-md-'."12".'">
      <div class="card-counter '.$accordion['bgcolor'].'"> 
         <i class="'.(string)$accordion['Icon'].'"></i>
		 
         <span class="count-numbers">'.$accordion['size'].'</span>
         <span class="count-name">'.$accordion['CardTitle'].'</span>
      </div>
    </div>';
	
	
	
	
	
	

  endforeach;
  
  $list .='</div></div>';
  return $list;
  wp_reset_query();
  
  


}

add_shortcode('Card_counter', 'Card_counter_shortcode');

