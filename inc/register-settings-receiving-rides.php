<?php

function receiving_rides_customizer($wp_customize) {
  require 'section_vars.php';

  $wp_customize->add_panel($receiving_rides_panel,
    array(
      'title' => 'Receiving Rides'
    ));

  $wp_customize->add_section($receiving_rides_cover_section, array(
    'title' => 'Cover',
    'panel' => 'receiving_rides_panel'
  ));
  $wp_customize->add_section($receiving_rides_middle_section, array(
    'title' => 'Middle',
    'panel' => 'receiving_rides_panel'
  ));
  $wp_customize->add_section($receiving_rides_steps_section, array(
    'title' => 'Steps',
    'panel' => 'receiving_rides_panel'
  ));

  $wp_customize->add_setting($receiving_rides_header_image, array(
    'default' => '',
    'transport' => 'refresh'
  ));

  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $receiving_rides_header_image, array(
    'label' => 'Image',
    'section' => $receiving_rides_cover_section,
    'settings' => $receiving_rides_header_image,
    'button_labels' => array(
      'select' => 'Select Image',
      'change' => 'Change Image',
      'remove' => 'Remove',
      'default' => 'Default',
      'placeholder' => 'No image selected',
      'frame_title' => 'Select Image',
      'frame_button' => 'Choose Image',
   )
  )));

  $wp_customize->selective_refresh->add_partial($receiving_rides_header_image, array(
    'selector' => 'span#receiving-rides-cover-img',
    'render_callback' => 'check_copy_right_text'
  ));

  $wp_customize->selective_refresh->add_partial($receiving_rides_apply_button, array(
    'selector' => 'span#receiving_rides_apply_button',
    'render_callback' => 'check_copy_right_text'
  ));
  
  $wp_customize->add_setting($receiving_rides_apply_button, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => ''
  ));

  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $receiving_rides_apply_button,
  array(
      'label' => __( 'Link' ),
      'section' => $receiving_rides_middle_section,
      'type' => 'dropdown-pages'
  )));


  $wp_customize->add_setting($receiving_rides_blue_box_left_text, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => 'We want to make your ride simple and pleasant.'
  ));

  $wp_customize->add_control($receiving_rides_blue_box_left_text, array(
    'label' => 'Blue Box Left Text',
    'type' => 'textarea',
    'section' => $receiving_rides_middle_section,
    'settings' => $receiving_rides_blue_box_left_text
  ));

  $wp_customize->selective_refresh->add_partial($receiving_rides_blue_box_left_text, array(
    'selector' => 'span#receiving-rides-blue-box-left',
    'render_callback' => 'check_copy_right_text'
  ));

  $wp_customize->add_setting($receiving_rides_blue_box_right_text, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => 'We are designed for seniors and vision impaired adults. We offer rides for any reason that include arm-through-arm, door-through-door assistance. 
    Any time of the day and for any reason we are here for you or your loved one.'
  ));
  $wp_customize->add_control($receiving_rides_blue_box_right_text, array(
    'label' => 'Blue Box Right Text',
    'type' => 'textarea',
    'section' => $receiving_rides_middle_section,
    'settings' => $receiving_rides_blue_box_right_text
  ));

  $wp_customize->selective_refresh->add_partial($receiving_rides_blue_box_right_text, array(
    'selector' => 'span#receiving-rides-blue-box-right',
    'render_callback' => 'check_copy_right_text'
  ));

  $wp_customize->add_setting($receiving_rides_middle_paragraph, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => 'Our service Is specifically designed for people age 60 & over, 
    and vision impaired adults, age 18 & over.'
  ));
  $wp_customize->add_control($receiving_rides_middle_paragraph, array(
    'label' => 'Paragraph',
    'type' => 'textarea',
    'section' => $receiving_rides_middle_section,
    'settings' => $receiving_rides_middle_paragraph
  ));

  $wp_customize->selective_refresh->add_partial($receiving_rides_middle_paragraph, array(
    'selector' => 'span#middle-paragraph',
    'render_callback' => 'check_copy_right_text'
  ));

  $wp_customize->add_setting($receiving_rides_steps_img, array(
    'default' => '',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, $receiving_rides_steps_img, array(
    'label' => 'Image',
    'section' => $receiving_rides_steps_section,
    'settings' => $receiving_rides_steps_img,
    // 'flex_height' => true,
    // 'flex_width' => true,
    'width' => 400,
    'height' => 673,
    'button_labels' => array(
      'select' => 'Select Image',
      'change' => 'Change Image',
      'remove' => 'Remove',
      'default' => 'Default',
      'placeholder' => 'No image selected',
      'frame_title' => 'Select Image',
      'frame_button' => 'Choose Image',
   )
  )));

  $wp_customize->selective_refresh->add_partial($receiving_rides_steps_img, array(
    'selector' => 'span#receiving-rides-steps-img',
    'render_callback' => 'check_copy_right_text'
  ));


# REPEATABLE STEP SECTION 

$wp_customize->selective_refresh->add_partial($receiving_rides_step, array(
  'selector' => 'span#receiving-rides-step',
  'render_callback' => 'check_copy_right_text'
));

$wp_customize->add_setting(
  $receiving_rides_step,
  array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
  ) );


$wp_customize->add_control(
  new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $receiving_rides_step,
      array(
          'label' 		=> esc_html__('Step'),
          'description'   => '',
          'section'       => $receiving_rides_steps_section,
          'live_title_id' => '',
          'title_format'  => esc_html__('[live_title]'), // [live_title]
          'max_item'      => 10, // Maximum item can add
          'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
          'fields'    => array(
            'step'  => array(
              'title' => esc_html__('Step'),
              'type'  =>'text',
            ),
            'descript'  => array(
                'title' => esc_html__('Description'),
                'type'  =>'textarea',
            ),
            'link'  => array(
              'title' => esc_html__('Link'),
              'type'  =>'url',
          ),
          'button'  => array(
            'title' => esc_html__('Button Label'),
            'type'  =>'text',
        ),
          ),
      )
  )
);

# END OF REPEATABLE STEP SECTION


}

add_action( 'customize_register', 'receiving_rides_customizer' );