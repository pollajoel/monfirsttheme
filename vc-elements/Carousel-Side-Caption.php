<?php

vc_map(array(
  'name' => 'TimeLine',
  'base' => 'TimeLine',
  'category' => 'Maxima',
  'icon' =>'icon-wpb-information-white',
  'params' => array(
   
  //TimeLine Title
  
  array(
          'type' => 'textfield',
          //'name' => 'label',
          'heading' => __('Title', 'js_composer'),
          'param_name' => 'title',
        ),
		
	// Time  Line Type
	array(
			'type' => 'dropdown',
			'heading' => __( 'Layout', 'js_composer' ),
			'param_name' => 'layout',
			'value' => array(
				__( 'type1', 'js_composer' ) => 'type1',
				__( 'type2', 'js_composer' ) => 'type2',
				__( 'type3', 'js_composer' ) => 'type3',
				__( 'type4', 'js_composer' ) => 'type4',
				__( 'type5', 'js_composer' ) => 'type5',
				__( 'type6', 'js_composer' ) => 'type6',
				__( 'type7', 'js_composer' ) => 'type7',
				__( 'type8', 'js_composer' ) => 'type8',
				
			),
			'group' => __( 'Design', 'js_composer' ),
		),
		
		
	
   
	
	array(
      'type' => 'param_group',
      'param_name' => 'values',
      'params' => array(
        
        array(
          'type' => 'textfield',
          //'name' => 'Content',
          'heading' => __('Line Title', 'js_composer'),
          'param_name' => 'Ltitle',
        ),
		
		array(
          'type' => 'iconpicker',
          //'name' => 'Content',
          'heading' => __('Line Icon', 'js_composer'),
          'param_name' => 'LIcon',
		  
        ),
		
		
		array(
          'type' => 'textfield',
          //'name' => 'Content',
          'heading' => __('Line content', 'js_composer'),
          'param_name' => 'Lcontent',
		  
        ),
		
		array(
          'type' => 'textfield',
          //'name' => 'Content',
          'heading' => __('Date', 'js_composer'),
          'param_name' => 'date',
		  'description' => __( 'Leave empty if you dont use timeline with date parameter', 'js_composer' ),
		  
        ),
		
		// type3 date
		
		array(
          'type' => 'vc_link',
          //'name' => 'Content',
          'heading' => __('Link Url', 'js_composer'),
          'param_name' => 'Link',
		  
        ),
		
		
      )

    ),
  ),

));

//shortcode



function TimeLine_shortcode($atts){
  extract(shortcode_atts(array(
    'title' => '',
	'Ltitle' => '',
	'LIcon' =>'',
	'Lcontent' => '',
	'layout' => '',
	'date' => '',
  ), $atts));

  
  
  $values = vc_param_group_parse_atts($atts['values']);
  $cpt =0;

  $new_accordion_value = array();
  foreach($values as $data){
    $new_line = $data;
    $new_line['Ltitle'] = isset($new_line['Ltitle']) ? $new_line['Ltitle'] : '';
    $new_line['LIcon'] = isset($new_line['LIcon']) ? $new_line['LIcon'] : '';
	$new_line['Lcontent'] = isset($new_line['Lcontent']) ? $new_line['Lcontent'] : '';
	$new_line['date'] = isset($new_line['date']) ? $new_line['date'] : '';
	

    $new_accordion_value[] = $new_line;
	$cpt++;

  }
  
  $list ='<div class="container">
  
            <h4>'.$title.'</h4>
            <div class="row">
                <div class="col-md-12">
                   ';
					
					
	
  
switch ($layout) {
    case "type2":
	
	               $list .='<div class="main-timeline">';
					foreach($new_accordion_value as $accordion):
					
							$list .= '<a href="#" class="timeline">
								<div class="timeline-icon"><i class="'.$accordion['LIcon'].'"></i></div>
								<div class="timeline-content">
                                <h3 class="title">'.$accordion['Ltitle'].'</h3>
                                <p class="description" style="text-align:justify;">'
                                    .$accordion['Lcontent'].
                                '</p>
                            </div>
                        </a>';
						
					endforeach;
					$list .= '</div>';
        break;
    case "type3":
       $list .='<div class="main-timeline2">';
	   foreach($new_accordion_value as $accordion):
					
							$list .= '<div class="timeline">
                            <span class="icon '.$accordion['LIcon'].'"></span>
                            <a href="#" class="timeline-content">
                                <h3 class="title">'.$accordion['Ltitle'].'</h3>
                                <p class="description">'.$accordion['Lcontent'].'</p>
                            </a>
                        </div>';
						
					endforeach;
	   $list.= '</div>';
	   
	   
        break;
    case "type4":
       
	   $list .='<div class="main-timeline3">';
	   foreach($new_accordion_value as $accordion):
					
							$list .= '<div class="timeline">
                            <a href="#" class="timeline-content">
							<span class="year">2018</span>
                                <h3 class="title">'.$accordion['Ltitle'].'</h3>
                                <p class="description">'.$accordion['Lcontent'].'</p>
                            </a>
                        </div>';
						
					endforeach;
	   $list.= '</div>';
	   
	   
	   
        break;
		
		
	case "type5":
	
	$list .='<div class="main-timeline4">';
	   foreach($new_accordion_value as $accordion):
					
							$list .= '<div class="timeline">
                            <a href="#" class="timeline-content">
							<span class="year">'.$accordion['date'].'</span>
							<div class="inner-content">
                                <h3 class="title">'.$accordion['Ltitle'].'</h3>
                                <p class="description">'.$accordion['Lcontent'].'</p>
							</div>
                            </a>
                        </div>';
						
					endforeach;
	   $list.= '</div>';
	   
		break;
		
		case "type6":
	
	$list .='<div class="main-timeline6">';
	   foreach($new_accordion_value as $accordion):
					
							$list .= '<div class="timeline">
                                <div class="timeline-content">
                                    <span class="year">'.$accordion['date'].'</span>
                                    <div class="content-inner">
                                        <span class="icon"><i class="'.$accordion['LIcon'].'"></i></span>
                                        <h3 class="title">'.$accordion['Ltitle'].'</h3>
                                        <p class="description">'.$accordion['Lcontent'].'</p>
                                    </div>
                                </div>
                            </div>';
						
					endforeach;
	   $list.= '</div>';
	   
		break;
		
	case "type7":
	
	$list .='<div class="main-timeline9">';
	   foreach($new_accordion_value as $accordion):
					
							$list .= '<div class="timeline">
                            <div class="timeline-content">
                                <div class="circle"><span><i class="'.$accordion['LIcon'].'"></i></span></div>
                                <div class="content">
                                    <span class="year">'.$accordion['date'].'</span>
                                    <h4 class="title">'.$accordion['Ltitle'].'</h4>
                                    <p class="description">'.$accordion['Lcontent'].'</p>
                                    <div class="icon"><span></span></div>
                                </div>
                            </div>
                        </div>';
						
					endforeach;
	   $list.= '</div>';
	   
		break;
		
		case "type8":
	
	$list .='<div class="main-timeline10">';
	   foreach($new_accordion_value as $accordion):
					
							$list .= '<div class="col-md-3 col-sm-6 timeline">
                        <div class="timeline-inner">
                            <div class="year">'.$accordion['date'].'</div>
                            <div class="timeline-content">
                                <div class="post">'.$accordion['Ltitle'].'</div>
                                <p class="description">'.$accordion['Lcontent'].'</p>
                            </div>
                            <div class="timeline-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                        </div>
                    </div>';
						
					endforeach;
	   $list.= '</div>';
	   
		break;
                            
    default:
        
}					
					
					
                    
					
                        
					
					
					
					
					
					
					
					
					
					
						
						
                        
                    
					
					
	$list .='
                </div>
            </div>
        </div>
        ';
  return $list;
  //wp_reset_query();
  
  


}

add_shortcode('TimeLine', 'TimeLine_shortcode');

