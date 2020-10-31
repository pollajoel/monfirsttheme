
    

<?php

vc_map(array(
  'name' => 'service76',
  'base' => 'service76',
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



function service76_shortcode($atts){
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
  
  
  
  
  

  
  //'<h1 class="text-center font-weight-bold">'.$title.'</h1>';
  
  
  
  
  
  
  $list ='<div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="service76Box">
                    <div class="service76-icon"><i class="fa fa-globe"></i></div>
                    <h3 class="title">Web Design</h3>
                    <p class="description">Lorem ipsum dolor sit amet, consecte adipisicing elit. A alias aspernatur autem blanditiis.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="service76Box yellow">
                    <div class="service76-icon"><i class="fa fa-rocket"></i></div>
                    <h3 class="title">Web Development</h3>
                    <p class="description">Lorem ipsum dolor sit amet, consecte adipisicing elit. A alias aspernatur autem blanditiis.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
			
			<div class="col-md-3 col-sm-6">
                <div class="service76Box yellow">
                    <div class="service76-icon"><i class="fa fa-rocket"></i></div>
                    <h3 class="title">Web Development</h3>
                    <p class="description">Lorem ipsum dolor sit amet, consecte adipisicing elit. A alias aspernatur autem blanditiis.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>
			
			<div class="col-md-3 col-sm-6">
                <div class="service76Box yellow">
                    <div class="service76-icon"><i class="fa fa-rocket"></i></div>
                    <h3 class="title">Web Development</h3>
                    <p class="description">Lorem ipsum dolor sit amet, consecte adipisicing elit. A alias aspernatur autem blanditiis.</p>
                    <a href="#" class="read-more">Read More</a>
                </div>
            </div>

        </div>
		
		
    </div>
';
  
  
  
  
  
  
  
  
  
  
  

  return $list;
 

}

add_shortcode('service76', 'service76_shortcode');

