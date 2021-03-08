<?php

function contact_customizer($wp_customize) {
    require 'section_vars.php';
    $wp_customize->add_panel($contact_panel,
    array(
        'title' => ( 'Contact' ),
        'description' => esc_html__( 'Adjust Contact Page.' ), // Include html tags such as 
        'priority' => 160, // Not typically needed. Default is 160
        'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
        'theme_supports' => '', // Rarely needed
        'active_callback' => '', // Rarely needed
    ));

    //List of sections
    $wp_customize->add_section($contact_header, array(
      'title' => 'Contact Header',
      'panel' => $contact_panel,
    ));

    $wp_customize->add_section($contact_middle_section, array(
        'title' => 'Middle Section',
        'panel' => $contact_panel,
    ));

    //Header Section
    $wp_customize->add_setting($contact_header_image, array(
      'default' => '',
      'transport' => 'refresh',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $contact_header_image,
    array(
    'label' => __( 'Header Image' ),
    'description' => esc_html__( 'Main image of the Contact page' ),
    'section' => $contact_header,
    'button_labels' => array(
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
    $wp_customize->add_setting($contact_name, array(
        'sanitize_callback' => 'sanitize_text_field',
        'default' => 'Carl W. Wellborn Sr.'
    ));
    $wp_customize->add_control($contact_name, array(
        'label' => 'Contact Name',
        'type' => 'textarea',
        'section' => $contact_middle_section,
    ));
    $wp_customize->selective_refresh->add_partial($contact_name, array(
        'selector' => 'span#contact_name',
        'render_callback' => 'check_copy_right_text'
    ));

    $wp_customize->add_setting($contact_position, array(
        'sanitize_callback' => 'sanitize_text_field',
        'default' => 'Executive Director'
    ));
    $wp_customize->add_control($contact_position, array(
        'label' => 'Position',
        'type' => 'textarea',
        'section' => $contact_middle_section,
    ));
  
    $wp_customize->selective_refresh->add_partial($contact_position, array(
        'selector' => 'span#contact_position',
        'render_callback' => 'check_copy_right_text'
    ));

    $wp_customize->add_setting($contact_phone, array(
        'sanitize_callback' => 'sanitize_text_field',
        'default' => 'Tel: 313-618-1578'
    ));
    $wp_customize->add_control($contact_phone, array(
        'label' => 'Phone Number #1',
        'type' => 'textarea',
        'section' => $contact_middle_section,
    ));
  
    $wp_customize->selective_refresh->add_partial($contact_phone, array(
        'selector' => 'span#contact_phone',
        'render_callback' => 'check_copy_right_text'
    ));

    $wp_customize->add_setting($contact_phone2, array(
        'sanitize_callback' => 'sanitize_text_field',
        'default' => 'Tel: 313-618-3361'
    ));
    $wp_customize->add_control($contact_phone2, array(
        'label' => 'Phone Number #2',
        'type' => 'textarea',
        'section' => $contact_middle_section,
    ));
  
    $wp_customize->selective_refresh->add_partial($contact_phone2, array(
        'selector' => 'span#contact_phone2',
        'render_callback' => 'check_copy_right_text'
    ));

    $wp_customize->add_setting($contact_email, array(
        'sanitize_callback' => 'sanitize_text_field',
        'default' => 'carl@independencerides.com'
    ));
    $wp_customize->add_control($contact_email, array(
        'label' => 'Email',
        'type' => 'textarea',
        'section' => $contact_middle_section,
    ));
  
    $wp_customize->selective_refresh->add_partial($contact_email, array(
        'selector' => 'span#contact_email',
        'render_callback' => 'check_copy_right_text'
    ));
  }
  add_action( 'customize_register', 'contact_customizer' );