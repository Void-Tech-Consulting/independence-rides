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
        'selector' => 'span#contact_us_text', // You can also select a css class
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
        'selector' => 'span#our_mission_text', // You can also select a css class
        'render_callback' => 'check_copy_right_text',
    ));

    // Links
    $wp_customize->add_setting($foot_about_us_link, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $foot_about_us_link,
    array(
        'label' => __( 'About Us Link' ),
        'section' => $footer_section,
        'type' => 'dropdown-pages'
    )));
    $wp_customize->selective_refresh->add_partial($foot_about_us_link, array(
        'selector' => 'span#foot_about_us_link', // You can also select a css class
        'render_callback' => 'check_copy_right_text',
    ));

    $wp_customize->add_setting($foot_receiving_link, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $foot_receiving_link,
    array(
        'label' => __( 'Receiving Rides Link' ),
        'section' => $footer_section,
        'type' => 'dropdown-pages'
    )));
    $wp_customize->selective_refresh->add_partial($foot_receiving_link, array(
          'selector' => 'span#foot_receiving_link', // You can also select a css class
          'render_callback' => 'check_copy_right_text',
    ));

    $wp_customize->add_setting($foot_fares_link, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $foot_fares_link,
    array(
        'label' => __( 'Fares Link' ),
        'section' => $footer_section,
        'type' => 'dropdown-pages'
    )));
    $wp_customize->selective_refresh->add_partial($foot_fares_link, array(
          'selector' => 'span#foot_fares_link', // You can also select a css class
          'render_callback' => 'check_copy_right_text',
    ));

    $wp_customize->add_setting($foot_giving_link, array(
      'default' => '',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $foot_giving_link,
    array(
        'label' => __( 'Giving Rides Link' ),
        'section' => $footer_section,
        'type' => 'dropdown-pages'
    )));
    $wp_customize->selective_refresh->add_partial($foot_giving_link, array(
          'selector' => 'span#foot_giving_link', // You can also select a css class
          'render_callback' => 'check_copy_right_text',
    ));

    $wp_customize->add_setting($greystar_link, array(
      'default' => 'https://www.guidestar.org/profile/83-1866770',
      'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control($greystar_link, array(
      'label' => 'Grey Star Link',
      'section' => $footer_section,
      'type' => 'url'
    ));
    $wp_customize->selective_refresh->add_partial($greystar_link, array(
        'selector' => 'span#greystar_link', // You can also select a css class
        'render_callback' => 'check_copy_right_text',
    ));
  }
  
  add_action( 'customize_register', 'footer_customizer' );