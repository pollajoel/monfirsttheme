<?php

vc_map(array(
  'name' => 'piechartbox',
  'base' => 'piechartbox',
  'category' => 'Maxima',
  //'admin_enqueue_js' => array(get_template_directory_uri().'/vc-elements/css/InteractiveSVG.js'),
  //'admin_enqueue_css' => array(get_template_directory_uri().'/vc-elements/Js/InteractiveSVG.css'),
  'params' => array(
        array(
          'type' => 'textfield',
          //'name' => 'label',
          'heading' => __('data-chart-value', 'js_composer'),
          'param_name' => 'data_value',
        ),
        array(
          'type' => 'colorpicker',
          //'name' => 'Content',
          'heading' => __('data-chart-primary-color', 'js_composer'),
          'param_name' => 'dataprimarycolor',
        ),
		
		array(
          'type' => 'colorpicker',
          //'name' => 'Content',
          'heading' => __('data-chart-background', 'js_composer'),
          'param_name' => 'datachartback',
		  
        ),
		
		array(
          'type' => 'textfield',
          //'name' => 'Content',
          'heading' => __('data-chart-text', 'js_composer'),
          'param_name' => 'datachartext',
		  
        ),
		//data-chart-caption
		array(
          'type' => 'textfield',
          //'name' => 'Content',
          'heading' => __('data-chart-caption', 'js_composer'),
          'param_name' => 'datacaption',
		  
        ),
		
     
  ),

));

//shortcode



function piechartbox_shortcode($atts){
  extract(shortcode_atts(array(
    'data_value' => '',
	'dataprimarycolor' => '',
	'datachartback' =>'',
	'datachartext' => '',
	'datacaption' =>'',
  ), $atts));

  
  
 
  
  $list .='<div class="donut-widget" data-chart-size="jumbo size" data-chart-max="100" data-chart-value="'.$data_value.'" data-chart-primary="'.$dataprimarycolor.'" data-chart-background="'.$datachartback.'" data-chart-text="'.$datachartext.'%" data-chart-caption="'.$datacaption.'"></div> 
'; 
  return $list;
  
  
  


}

add_shortcode('piechartbox', 'piechartbox_shortcode');

