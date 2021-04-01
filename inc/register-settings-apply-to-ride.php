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

  }
  add_action( 'customize_register', 'apply_to_ride_customizer' );