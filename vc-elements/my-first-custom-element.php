<?php


//Backend visual composer add-on code 

vc_map(array(
  'name' => 'Accordions',
  'base' => 'maxima_accordion',
  'category' => 'Maxima',
  'params' => array(
    array(
      'type' => 'textfield',
      //'name' => __('First Title', 'rrf-maxima'),
      'holder' => 'div',
      'heading' => __('Title', 'rrf-maxima'),
      'param_name' => 'title',
    ),


    


    array(
      'type' => 'param_group',
      'param_name' => 'values',
      'params' => array(
        array(
          'type' => 'colorpicker',
          //'name' => 'label',
          'heading' => __('Heading', 'rrf-maxima'),
          'param_name' => 'label',
        ),
        array(
          'type' => 'textarea',
          //'name' => 'Content',
          'heading' => __('Content', 'rrf-maxima'),
          'param_name' => 'content',
        )
      )

    ),
  ),

));


//shortcode



function maxima_accordion_shortcode($atts){
  extract(shortcode_atts(array(
    'title' => '',
    'title2' => '',
    'values' => '',
  ), $atts));

  $list  = '<h1 class="text-center font-weight-bold">'.$title.'</h1>';



  $values = vc_param_group_parse_atts($atts['values']);

  $new_accordion_value = array();
  foreach($values as $data){
    $new_line = $data;
    $new_line['label'] = isset($new_line['label']) ? $new_line['label'] : '';
    $new_line['content'] = isset($new_line['content']) ? $new_line['content'] : '';

    $new_accordion_value[] = $new_line;

  }


    $list .='<ol class="big-counter rounded-counter">';
  $idd = 0;
  foreach($new_accordion_value as $accordion):
  $idd++;//'a'.$accordion['label'].'b'.$accordion['content'].'</span></li>';


    $list .='<li><span>'.
      $accordion['content'].'</span></li>';

  endforeach;
  $list .='</ol>';
  return $list;
  wp_reset_query();

}

add_shortcode('maxima_accordion', 'maxima_accordion_shortcode');

