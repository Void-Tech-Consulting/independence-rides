<?php

function apply_to_ride_customizer($wp_customize) {
    require 'section_vars.php';

    $wp_customize->add_panel($apply_to_ride_panel,
    array(
      'title' => 'Apply To Ride'
    ));

    $wp_customize->add_section($apply_to_ride_header, array(
      'title' => 'Apply to Ride Header',
      'panel' => 'apply_to_ride_panel'
    ));

    //Header Section
    $wp_customize->add_setting($apply_to_ride_header_image, array(
      'default' => '',
      'transport' => 'refresh'
    ));    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $apply_to_ride_header_image,
    array(
    'label' => __( 'Header Image' ),
    'description' => esc_html__( 'Header image of the donate page' ),
    'section' => $apply_to_ride_header,
    'button_labels' => array( // Optional.
        'select' => __( 'Select Image' ),
        'change' => __( 'Change Image' ),
        'remove' => __( 'Remove' ),
        'default' => __( 'Default' ),
        'placeholder' => __( 'No image selected' ),
        'frame_title' => __( 'Select Image' ),
        'frame_button' => __( 'Choose Image' ),
    )
    )));

    $wp_customize->add_section($apply_to_ride_middle, array(
      'title' => 'Blue Box Section',
      'panel' => 'apply_to_ride_panel'
    ));

    $wp_customize->add_setting($apply_to_ride_blue_left, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'In order to apply to be a driver, please complete either of the following two steps:'
    ));
    $wp_customize->add_control($apply_to_ride_blue_left, array(
        'label' => 'Position',
        'type' => 'textarea',
        'section' => $apply_to_ride_middle,
    ));
    $wp_customize->selective_refresh->add_partial($apply_to_ride_blue_left, array(
        'selector' => 'span#apply_to_ride_blue_left',
        'render_callback' => 'check_copy_right_text'
    ));

    $wp_customize->add_setting($apply_to_ride_blue_right, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => '
      1) Download the following form and submit the completed version below.
      OR
      2) Fill out and submit the electronic form directly on this page. '
    ));
    $wp_customize->add_control($apply_to_ride_blue_right, array(
        'label' => 'Position',
        'type' => 'textarea',
        'section' => $apply_to_ride_middle,
    ));
    $wp_customize->selective_refresh->add_partial($apply_to_ride_blue_right, array(
        'selector' => 'span#apply_to_ride_blue_right',
        'render_callback' => 'check_copy_right_text'
    ));
    $wp_customize->selective_refresh->add_partial($apply_to_ride_download_button, array(
      'selector' => 'span#apply_to_ride_download_button',
      'render_callback' => 'check_copy_right_text'
    ));
    
    $wp_customize->add_setting($apply_to_ride_download_button, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $apply_to_ride_download_button, array(
      'label' => 'PDF',
      'section' => $apply_to_ride_middle,
      'settings' => $apply_to_ride_download_button,
      'button_labels' => array(
        'select' => 'Select PDF',
        'change' => 'Change PDF',
        'remove' => 'Remove',
        'default' => 'Default',
        'placeholder' => 'No PDF selected',
        'frame_title' => 'Select PDF',
        'frame_button' => 'Choose PDF',
     )
    )));


  }
  add_action( 'customize_register', 'apply_to_ride_customizer' );