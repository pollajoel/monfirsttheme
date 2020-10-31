<?php

vc_map(array(
  'name' => 'Services',
  'base' => 'Services',
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



function Services_shortcode($atts){
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
  
  $list .='<section class="iq-features">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-lg-3 col-md-12"></div>
                  <div class="col-lg-6 col-md-12">
                     <div class="holderCircle">
                        <div class="round"></div>
                        <div class="dotCircle">
                           <span class="itemDot active itemDot1" data-tab="1">
                           <i class="fa fa-clock-o"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot2" data-tab="2">
                           <i class="fa fa-comments"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot3" data-tab="3">
                           <i class="fa fa-user"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot4" data-tab="4">
                           <i class="fa fa-tags"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot5" data-tab="5">
                           <i class="fa fa-upload"></i>
                           <span class="forActive"></span>
                           </span>
                           <span class="itemDot itemDot6" data-tab="6">
                           <i class="fa fa-briefcase"></i>
                           <span class="forActive"></span>
                           </span>
                        </div>
                        <div class="contentCircle">
                           <div class="CirItem title-box active CirItem1">
                              <h2 class="title"><span>Automate</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-clock-o"></i>
                           </div>
                           <div class="CirItem title-box CirItem2">
                              <h2 class="title"><span>Chat </span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-comments"></i>
                           </div>
                           <div class="CirItem title-box CirItem3">
                              <h2 class="title"><span>Responses</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-user"></i>
                           </div>
                           <div class="CirItem title-box CirItem4">
                              <h2 class="title"><span>Tags</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-tags"></i>
                           </div>
                           <div class="CirItem title-box CirItem5">
                              <h2 class="title"><span>Sharing</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-upload"></i>
                           </div>
                           <div class="CirItem title-box CirItem6">
                              <h2 class="title"><span>Support</span></h2>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                              <i class="fa fa-briefcase"></i>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12"></div>
               </div>
            </div>
        </section>';
  return $list;
  wp_reset_query();
  
  


}

add_shortcode('Services', 'Services_shortcode');

