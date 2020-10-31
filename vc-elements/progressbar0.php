<?php

vc_map(array(
  'name' => 'Progressbar',
  'base' => 'progressbar',
  'category' => 'Maxima',
  'params' => array(
    array(
      'type' => 'textfield',
      //'name' => __('First Title', 'rrf-maxima'),
      'holder' => 'div',
      'heading' => __('Size', 'rrf-maxima'),
      'param_name' => 'size',
    ),
	
	array(
      'type' => 'textfield',
      //'name' => __('First Title', 'rrf-maxima'),
      'holder' => 'div',
      'heading' => __('Height', 'rrf-maxima'),
      'param_name' => 'height',
    ),
	
	array(
      'type' => 'colorpicker',
      //'name' => __('First Title', 'rrf-maxima'),
      'holder' => 'div',
      'heading' => __('Progress Background Color', 'rrf-maxima'),
      'param_name' => 'color',
    ),


  ),

));


//shortcode



function progressbar_shortcode($atts){
  extract(shortcode_atts(array(
    'size' => '',
	'height' => '',
	'color' =>'',
  ), $atts));

  $list  = '<div class="progress" style="height:'.$height.'px;">
  <div class="progress-bar  w-'.$size.'" role="progressbar" style="background:'.$color.'; width:'. $size.'%" aria-valuenow="'.$size.'" aria-valuemin="0" aria-valuemax="100">'.$size.'%</div>
</div>';
  
  //'<h1 class="text-center font-weight-bold">'.$title.'</h1>';

  return $list;
 

}

add_shortcode('progressbar', 'progressbar_shortcode');

