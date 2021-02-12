<?php

// Fares section
function fares_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_panel($fares_panel,
  array(
     'title' => ( 'Fares' ),
     'description' => esc_html__( 'Adjust fares sections.' ), // Include html tags such as 
     'priority' => 160, // Not typically needed. Default is 160
     'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
     'theme_supports' => '', // Rarely needed
     'active_callback' => '', // Rarely needed
  ));
  // List of sections
  $wp_customize->add_section($fares_top, array(
    'title' => 'Top',
    'panel' => $fares_panel,
  ));
  $wp_customize->add_section($fares_blue_box, array(
    'title' => 'Blue Box',
    'panel' => $fares_panel,
  ));
  $wp_customize->add_section($fares_middle, array(
    'title' => 'Middle Area',
    'panel' => $fares_panel,
  ));
  $wp_customize->add_section($fares_charges, array(
    'title' => 'Charges',
    'panel' => $fares_panel,
  ));
  // Top section
  $wp_customize->add_setting($fares_top_image, array(
    'default' => 'http://independencerides.local/wp-content/uploads/2021/02/fares-cover-photo.png',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $fares_top_image,
    array(
    'label' => __( 'Top Image' ),
    'description' => esc_html__( 'Main image of the fares page' ),
    'section' => $fares_top,
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
  $wp_customize->selective_refresh->add_partial($fares_top_image, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting( $fares_top_button, array(
        'default' => 'http://independencerides.local/wp-content/uploads/2021/02/MemberApp06Dec19b-3.pdf',
        'transport' => 'refresh',
        'sanitize_callback' => 'absint'
  ));
  $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, $fares_top_button,
    array(
        'label' => __( 'Fares Top Button Link' ),
        'description' => esc_html__( 'This is the description for the Media Control' ),
        'section' => $fares_top,
        'mime_type' => 'pdf',  // Required. Can be image, audio, video, application, text
        'button_labels' => array( // Optional
          'select' => __( 'Select File' ),
          'change' => __( 'Change File' ),
          'default' => __( 'Default' ),
          'remove' => __( 'Remove' ),
          'placeholder' => __( 'No file selected' ),
          'frame_title' => __( 'Select File' ),
          'frame_button' => __( 'Choose File' ),
        )
  )));
  $wp_customize->selective_refresh->add_partial($fares_top_button, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  // Blue box section
  $wp_customize->add_setting($fares_blue_left, array(
    'default' => 'Prices vary based on location, time of day, and number of stops.',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control($fares_blue_left, array(
    'label' => 'Blue Box Left',
    'section' => $fares_blue_box,
  ));
  $wp_customize->selective_refresh->add_partial($fares_blue_left, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($fares_blue_right, array(
    'default' => 'If a driver is requested to wait longer than 15 minutes, a $20 per hour wait fee is charged.',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control($fares_blue_right, array(
    'label' => 'Blue Box Right',
    'section' => $fares_blue_box,
  ));
  $wp_customize->selective_refresh->add_partial($fares_blue_right, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  // Middle section
  $wp_customize->add_setting($fares_paragraph, array(
    'default' => 'Drivers do not usually stay with the client during an appointment or activity. The same or a different driver will pick them up for their pre-scheduled return ride.',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control($fares_paragraph, array(
    'label' => 'Paragraph',
    'section' => $fares_middle,
  ));
  $wp_customize->selective_refresh->add_partial($fares_paragraph, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  // Charges section
  $wp_customize->add_setting($fares_charges_bullet1, array(
    'default' => 'Rides starting and ending within the initial service area (see map below)',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control($fares_charges_bullet1, array(
    'label' => 'First bullet title',
    'section' => $fares_charges,
  ));
  $wp_customize->selective_refresh->add_partial($fares_charges_bullet1, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($fares_charges_minibullet1, array(
    'default' => 'Flat $10 fare (one way)',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control($fares_charges_minibullet1, array(
    'label' => 'First bullet description',
    'section' => $fares_charges,
  ));
  $wp_customize->selective_refresh->add_partial($fares_charges_minibullet1, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
  $wp_customize->add_setting($fares_charges_map, array(
    'default' => 'http://independencerides.local/wp-content/uploads/2021/02/service-area.png',
    'transport' => 'refresh',
    'sanitize_callback' => 'esc_url_raw'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $fares_charges_map,
    array(
    'label' => __( 'First bullet map' ),
    'description' => esc_html__( 'Map of initial service area' ),
    'section' => $fares_charges,
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
  $wp_customize->selective_refresh->add_partial($fares_charges_map, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));
}

add_action( 'customize_register', 'fares_customizer' );