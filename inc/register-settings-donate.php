<?php

function donate_customizer($wp_customize) {
    require 'section_vars.php';

    $wp_customize->add_panel($donate_panel,
    array(
      'title' => 'Donate'
    ));

    $wp_customize->add_section($donate_section, array(
      'title' => 'Donate',
      'panel' => 'donate_panel'
    ));

    $wp_customize->add_setting($donate_header_image, array(
      'default' => '',
      'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $donate_header_image, array(
      'label' => 'Image',
      'section' => $donate_section,
      'settings' => $donate_header_image,
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
  }
  add_action( 'customize_register', 'donate_customizer' );