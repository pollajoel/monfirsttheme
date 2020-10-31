<?php

vc_map(array(
  'name' => 'project',
  'base' => 'project',
  'category' => 'Maxima',
  
  
    'params' => array(
	
	
	array(
      'type' => 'param_group',
      'param_name' => 'values',
      'params' => array(
	  
	  array(
          'type' => 'attach_image',
          //'name' => 'Content',
          'heading' => __('Attach Image', 'js_composer'),
          'param_name' => 'image',
		  
        ),
	  
	  
	  
	  
	  
        array(
          'type' => 'textfield',
          'name' => 'label',
          'heading' => __('Service Title', 'js_composer'),
          'param_name' => 'title',
        ),
		
		
		
		
		
		
		
        array(
          'type' => 'textfield',
          //'name' => 'Content',
          'heading' => __('Service Subtitle', 'js_composer'),
          'param_name' => 'subtitle',
        ),
		
		array(
          'type' => 'vc_link', 
          //'name' => 'Content',
          'heading' => __('Service Page Link', 'js_composer'),
          'param_name' => 'lien',
		  'value' => '#',
		  
        ),
		
		
		
		
		
      )

    ),
  ),

  
   

));


//shortcode



function project_shortcode($atts){
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
    $new_line['image'] = isset($new_line['image']) ? $new_line['image'] : '';
    $new_line['title'] = isset($new_line['title']) ? $new_line['title'] : '';
	$new_line['subtitle'] = isset($new_line['subtitle']) ? $new_line['subtitle'] : '';
	$new_line['lien'] = isset($new_line['lien']) ? $new_line['lien'] : '';

    $new_accordion_value[] = $new_line;
	$cpt++;

  }
  
  
  
  
  

  
  //'<h1 class="text-center font-weight-bold">'.$title.'</h1>';
  
 
  
   
    
    
  $list ='<div class="container">   
    <div class="row">';
	   
	
	foreach($new_accordion_value as $accordion):
			$image1 =wp_get_attachment_image( (int)$accordion['image'], array('600', '200'), "", array( "class" => "card-img-top" ) );
			$lien = $accordion['lien'];
			$lien1 = vc_build_link($lien);
			
       $list.='<div class="col-md-4 col-sm-6" style="margin-bottom:20px;">
            <div class="boxpost">
                '.$image1.'
                <div class="boxpost-content">
                    <div class="content">  
                        <h3 class="title" style="text-transform:uppercase;">'.$accordion['title'].'</h3> 
                        <span class="post">'.$accordion['subtitle'].'</span>
                    </div>
                    <ul class="icon">
                        <li><a href="'.$lien1['url'].'"><i class="fa fa-search"></i></a></li>
                        <li><a href="'.$lien1['url'].'"><i class="fa fa-link"></i></a></li> 
                    </ul>
                </div>
            </div>
        </div>';
		
	endforeach;
        
		
		
		
    $list.='</div>
</div>';
  
  
  
  
  
  
  
  
  
  
  

  return $list;
 

}

add_shortcode('project', 'project_shortcode');

