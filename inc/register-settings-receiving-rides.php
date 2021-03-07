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


  $wp_customize->add_setting($receiving_rides_blue_box_left_text, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => 'We want to make your ride simple and pleasant.'
  ));

  $wp_customize->add_control($receiving_rides_blue_box_left_text, array(
    'label' => 'Blue Box Left Text',
    'type' => 'textarea',
    'section' => $receiving_rides_middle_section,
    'settings' => $blue_box_left_text
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
    'settings' => $blue_box_right_text
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
    'selector' => 'span#receiving-rides-middle-paragraph',
    'render_callback' => 'check_copy_right_text'
  ));

  $wp_customize->add_setting($receiving_rides_steps_img, array(
    'default' => '',
    'transport' => 'refresh'
  ));
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $receiving_rides_steps_img, array(
    'label' => 'Image',
    'section' => $receiving_rides_steps_section,
    'settings' => $receiving_rides_steps_img,
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

  $wp_customize->add_setting($receiving_rides_timeline_step_one, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => 'Step One'
  ));
  $wp_customize->add_control($receiving_rides_timeline_step_one, array(
    'label' => 'Header',
    'section' => $receiving_rides_steps_section,
    'settings' => $receiving_rides_timeline_step_one
  ));

  $wp_customize->selective_refresh->add_partial($receiving_rides_timeline_step_one, array(
    'selector' => 'span#receiving-rides-step-one-header',
    'render_callback' => 'check_copy_right_text'
  ));

  $wp_customize->add_setting($receiving_rides_step_one_description, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => 'Complete an application to ensure we have complete contact information.'
  ));
  $wp_customize->add_control($receiving_rides_step_one_description, array(
    'label' => 'Description',
    'type' => 'textarea',
    'section' => $receiving_rides_steps_section,
    'settings' => $receiving_rides_step_one_description
  ));

  $wp_customize->selective_refresh->add_partial($receiving_rides_step_one_description, array(
    'selector' => 'span#receiving-rides-step-one-text',
    'render_callback' => 'check_copy_right_text'
  ));

  $wp_customize->add_setting($receiving_rides_timeline_step_two, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => 'Step Two'
  ));
  $wp_customize->add_control($receiving_rides_timeline_step_two, array(
    'label' => 'Header',
    'section' => $receiving_rides_steps_section,
    'settings' => $receiving_rides_timeline_step_two
  ));

  $wp_customize->selective_refresh->add_partial($receiving_rides_timeline_step_two, array(
    'selector' => 'span#receiving-rides-step-two-header',
    'render_callback' => 'check_copy_right_text'
  ));

  $wp_customize->add_setting($receiving_rides_step_two_description, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => 'Set up a membership for payment options.'
  ));
  $wp_customize->add_control($receiving_rides_step_two_description, array(
    'label' => 'Description',
    'type' => 'textarea',
    'section' => $receiving_rides_steps_section,
    'settings' => $receiving_rides_step_two_description
  ));

  $wp_customize->selective_refresh->add_partial($receiving_rides_step_two_description, array(
    'selector' => 'span#receiving-rides-step-two-text',
    'render_callback' => 'check_copy_right_text'
  ));

  $wp_customize->add_setting($receiving_rides_timeline_step_three, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => 'Step Three'
  ));
  $wp_customize->add_control($receiving_rides_timeline_step_three, array(
    'label' => 'Header',
    'section' => $receiving_rides_steps_section,
    'settings' => $receiving_rides_timeline_step_three
  ));

  $wp_customize->selective_refresh->add_partial($receiving_rides_timeline_step_three, array(
    'selector' => 'span#receiving-rides-step-three-header',
    'render_callback' => 'check_copy_right_text'
  ));

  $wp_customize->add_setting($receiving_rides_step_three_description, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => 'Schedule a ride at least 24 hours in advance. 
    Rides are normally available for any reason, but are limited to medical 
    appointments and grocery shopping during the Coronavirus pandemic for 
    your safety.'
  ));
  $wp_customize->add_control($receiving_rides_step_three_description, array(
    'label' => 'Description',
    'type' => 'textarea',
    'section' => $receiving_rides_steps_section,
    'settings' => $receiving_rides_step_three_description
  ));

  $wp_customize->selective_refresh->add_partial($receiving_rides_step_three_description, array(
    'selector' => 'span#receiving-rides-step-three-text',
    'render_callback' => 'check_copy_right_text'
  ));
}
add_action( 'customize_register', 'receiving_rides_customizer' );