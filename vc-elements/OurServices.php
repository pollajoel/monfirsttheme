<?php

vc_map(array(
  'name' => 'Ourservices',
  'base' => 'Ourservices',
  'category' => 'Maxima',
  
  
    'params' => array(
	
	array(
          'type' => 'textfield',
          //'name' => 'label',
          'heading' => __('Box First', 'rrf-maxima'),
          'param_name' => 'fiirsttitle',
        ),
		
	array(
          'type' => 'textfield',
          //'name' => 'label',
          'heading' => __('Second Title', 'rrf-maxima'),
          'param_name' => 'secondtitle',
        ),
    
	
	array(
      'type' => 'param_group',
      'param_name' => 'values',
      'params' => array(
        array(
          'type' => 'textfield',
          //'name' => 'label',
          'heading' => __('service Title', 'rrf-maxima'),
          'param_name' => 'title',
        ),
        array(
          'type' => 'textfield',
          //'name' => 'Content',
          'heading' => __('Service Subtitle', 'rrf-maxima'),
          'param_name' => 'subtitle',
        ),
		
		array(
          'type' => 'textfield',
          //'name' => 'Content',
          'heading' => __('Service Content', 'rrf-maxima'),
          'param_name' => 'content',
		  
        ),
		array(
          'type' => 'textfield',
          //'name' => 'Content',
          'heading' => __('Bouton Text', 'rrf-maxima'),
          'param_name' => 'Btext',
		  
        ),
		
		
		
		
      )

    ),
  ),

  
   

));


//shortcode



function Ourservices_shortcode($atts){
  extract(shortcode_atts(array(
    'title' => '',
	'content' => '',
	'Btext' =>'',
	 'fiirsttitle' =>'',
	 'secondtitle' =>'',
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
  
  
  
  
  

  $list  = '<div class="version1" id="top">
        <section class="wexp relative" id="resume">
            <div class="container">
                <h1 class="heading text-right">
                    '.$fiirsttitle.'
                    <br>'.$secondtitle.'
                </h1>
                <div class="row wexp-angle">';
				
				    foreach($new_accordion_value as $accordion):
					$list.='
                    <div class="col-lg-4 col-md-6">
                        <div class="single-block">
                            <div class="single-block-outer">
                                <div class="single-block-inner">
                                    <img class="e-img" src="http://www.codepixar.com/html/sciome/landing/img/experience/e2.png" alt="">
                                    <h4 class="e-head">'.$accordion['title'].'</h4>
                                    <p class="e-sub-head">'.$accordion['subtitle'].'</p>
                                    <div class="e-para wow fadeIn" data-wow-duration="1s">
                                        <p>'.$accordion['content'].' 
                                        </p>
                                    </div>

                                    <a class="genric-btn2" href="#">'.$accordion['Btext'].'</a>
                                </div>
                            </div>
                        </div>
                    </div>';
					
					endforeach;
					

                    
                $list.='</div>
            </div>
        </section>
    </div>';
  
  //'<h1 class="text-center font-weight-bold">'.$title.'</h1>';

  return $list;
 

}

add_shortcode('Ourservices', 'Ourservices_shortcode');

