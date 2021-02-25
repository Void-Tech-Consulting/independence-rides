<?php

function giving_rides_customizer($wp_customize) {
    require 'section_vars.php';

    $wp_customize->add_panel($giving_rides_panel,
    array(
      'title' => 'Giving Rides'
    ));

    $wp_customize->add_section($giving_rides_section, array(
      'title' => 'Giving Rides',
      'panel' => 'giving_rides_panel'
    ));

    $wp_customize->add_setting($giving_rides_header_image, array(
      'default' => '',
      'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $giving_rides_header_image, array(
      'label' => 'Image',
      'section' => $giving_rides_section,
      'settings' => $giving_rides_header_image,
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

    $wp_customize->selective_refresh->add_partial($giving_rides_header_image, array(
      'selector' => 'span#copy-write',
      'render_callback' => 'check_copy_right_text'
    ));
  
    $wp_customize->add_setting($giving_rides_blue_box_left, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'Independence Rides is entirely volunteer-driven.',
      'transport' => 'postMessage'
    ));
  
    $wp_customize->add_control($giving_rides_blue_box_left, array(
      'label' => 'Text',
      'type' => 'textarea',
      'section' => $giving_rides_section,
      'settings' => $giving_rides_blue_box_left
    ));

    $wp_customize->selective_refresh->add_partial($giving_rides_blue_box_left, array(
      'selector' => 'span#copy-write',
      'render_callback' => 'check_copy_right_text'
    ));
  
    $wp_customize->add_setting($giving_rides_blue_box_right, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'All drivers are courteous and trained volunteers who have passed criminal background and driving record checks.'
    ));
    $wp_customize->add_control($giving_rides_blue_box_right, array(
      'label' => 'Text',
      'type' => 'textarea',
      'section' => $giving_rides_section,
      'settings' => $giving_rides_blue_box_right
    ));

    $wp_customize->selective_refresh->add_partial($giving_rides_blue_box_right, array(
      'selector' => 'span#copy-write',
      'render_callback' => 'check_copy_right_text'
    ));
  }
  add_action( 'customize_register', 'giving_rides_customizer' );