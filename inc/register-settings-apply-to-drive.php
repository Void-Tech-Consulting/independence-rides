<?php

function apply_to_drive_customizer($wp_customize) {
    require 'section_vars.php';

    $wp_customize->add_panel($drive_panel,
    array(
      'title' => 'Apply to Driver'
    ));

    $wp_customize->add_section($drive_header, array(
      'title' => 'Drive Header',
      'panel' => 'drive_panel'
    ));
    $wp_customize->add_section($drive_middle, array(
      'title' => 'Blue Box Section',
      'panel' => 'drive_panel'
    ));

    //Header Section
    $wp_customize->add_setting($drive_header_image, array(
      'default' => '',
      'transport' => 'refresh'
    ));    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $drive_header_image,
    array(
    'label' => __( 'Header Image' ),
    'description' => esc_html__( 'Header image of the drive page' ),
    'section' => $drive_header,
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
    $wp_customize->selective_refresh->add_partial($drive_header_image, array(
      'selector' => 'span#drive_header_image',
      'render_callback' => 'check_copy_right_text'
    ));

    //Middle Section
    $wp_customize->add_setting($drive_blue_left, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'In order to apply to be a driver, please complete either of the following two steps:'
    ));
    $wp_customize->add_control($drive_blue_left, array(
        'label' => 'Position',
        'type' => 'textarea',
        'section' => $drive_middle,
    ));
    $wp_customize->selective_refresh->add_partial($drive_blue_left, array(
        'selector' => 'span#drive_blue_left',
        'render_callback' => 'check_copy_right_text'
    ));

    $wp_customize->add_setting($drive_blue_right, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => '
      1) Download the following form and submit the completed version below.
      OR
      2) Fill out and submit the electronic form directly on this page. '
    ));
    $wp_customize->add_control($drive_blue_right, array(
        'label' => 'Position',
        'type' => 'textarea',
        'section' => $drive_middle,
    ));
    $wp_customize->selective_refresh->add_partial($drive_blue_right, array(
        'selector' => 'span#drive_blue_right',
        'render_callback' => 'check_copy_right_text'
    ));
    $wp_customize->selective_refresh->add_partial($drive_download_button, array(
      'selector' => 'span#drive_download_button',
      'render_callback' => 'check_copy_right_text'
    ));
    
    $wp_customize->add_setting($drive_download_button, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => ''
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $drive_download_button, array(
      'label' => 'PDF',
      'section' => $drive_middle,
      'settings' => $drive_download_button,
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
  add_action( 'customize_register', 'apply_to_drive_customizer' );