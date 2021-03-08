<?php

function donate_customizer($wp_customize) {
    require 'section_vars.php';

    $wp_customize->add_panel($donate_panel,
    array(
      'title' => 'Donate'
    ));

    $wp_customize->add_section($donate_header, array(
      'title' => 'Donate Header',
      'panel' => 'donate_panel'
    ));
    $wp_customize->add_section($donate_middle_section, array(
      'title' => 'Middle Section',
      'panel' => 'donate_panel'
    ));

    //Header Section
    $wp_customize->add_setting($donate_header_image, array(
      'default' => '',
      'transport' => 'refresh'
    ));    
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $donate_header_image,
    array(
    'label' => __( 'Header Image' ),
    'description' => esc_html__( 'Header image of the donate page' ),
    'section' => $donate_header,
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

    //Middle Section
    $wp_customize->add_setting($donate_blue_box_text, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'Help make a difference in the Detroit community.'
    ));
    $wp_customize->add_control($donate_blue_box_text, array(
        'label' => 'Position',
        'type' => 'textarea',
        'section' => $donate_middle_section,
    ));
    $wp_customize->selective_refresh->add_partial($donate_blue_box_text, array(
        'selector' => 'span#donate_blue_box_text',
        'render_callback' => 'check_copy_right_text'
    ));
  }
  add_action( 'customize_register', 'donate_customizer' );