<?php

// Footer section
function footer_customizer($wp_customize) {
    require 'section_vars.php';
    $wp_customize->add_section($footer_section, array(
      'title' => 'Footer',
    ));
    
    $wp_customize->add_setting($contact_us_text, array(
      'default' => 
      'CARL W. WELLBORN SR. 
      EXECUTIVE DIRECTOR 
      TEL: 313-618-1578 
      TEL: 313-618-3361 
      CARL@INDEPENDENCERIDES.COM',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control($contact_us_text, array(
      'label' => 'Contact Us Text',
      'section' => $footer_section,
      'type' => 'textarea'
    ));
    $wp_customize->selective_refresh->add_partial($contact_us_text, array(
        'selector' => 'span#copy-write', // You can also select a css class
        'render_callback' => 'check_copy_right_text',
    ));
    $wp_customize->add_setting($our_mission_text, array(
      'default' => 
      'Dignified Transportation
      for Seniors and Vision
      Impaired Adults',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control($our_mission_text, array(
      'label' => 'Our Mission Text',
      'section' => $footer_section,
      'type' => 'textarea'
    ));
    $wp_customize->selective_refresh->add_partial($our_mission_text, array(
        'selector' => 'span#copy-write', // You can also select a css class
        'render_callback' => 'check_copy_right_text',
    ));
    $wp_customize->add_setting($information_text, array(
      'default' => 
      'About Us
      Receiving Rides
      Fares',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control($information_text, array(
      'label' => 'Information Text',
      'section' => $footer_section,
      'type' => 'textarea'
    ));
    $wp_customize->selective_refresh->add_partial($information_text, array(
        'selector' => 'span#copy-write', // You can also select a css class
        'render_callback' => 'check_copy_right_text',
    ));
    $wp_customize->add_setting($get_involved_text, array(
      'default' => 
      'Giving Rides
      Ride Coordinator',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control($get_involved_text, array(
      'label' => 'Get Involved Text',
      'section' => $footer_section,
      'type' => 'textarea'
    ));
    $wp_customize->selective_refresh->add_partial($get_involved_text, array(
        'selector' => 'span#copy-write', // You can also select a css class
        'render_callback' => 'check_copy_right_text',
    ));
  }
  
  add_action( 'customize_register', 'footer_customizer' );