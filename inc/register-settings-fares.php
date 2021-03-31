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
    'title' => 'Paragraph',
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
    'selector' => 'span#fares_top_image', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));

  $wp_customize->selective_refresh->add_partial($fares_apply_button, array(
    'selector' => 'span#fares_apply_button',
    'render_callback' => 'check_copy_right_text'
  ));
  
  $wp_customize->add_setting($fares_apply_button, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => ''
  ));
  
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $fares_apply_button, array(
    'label' => 'PDF',
    'section' => $fares_top,
    'settings' => $fares_apply_button,
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

  // Blue box section
  $wp_customize->add_setting($fares_blue_left, array(
    'default' => 'Prices vary based on location, time of day, and number of stops.',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control($fares_blue_left, array(
    'label' => 'Blue Box Left',
    'section' => $fares_blue_box,
    'type' => 'textarea',
  ));
  $wp_customize->selective_refresh->add_partial($fares_blue_left, array(
    'selector' => 'span#fares_blue_left', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));

  $wp_customize->add_setting($fares_blue_right, array(
    'default' => 'If a driver is requested to wait longer than 15 minutes, a $20 per hour wait fee is charged.',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control($fares_blue_right, array(
    'label' => 'Blue Box Right',
    'section' => $fares_blue_box,
    'type' => 'textarea',
  ));
  $wp_customize->selective_refresh->add_partial($fares_blue_right, array(
    'selector' => 'span#fares_blue_right', // You can also select a css class
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
    'type' => 'textarea',
  ));
  $wp_customize->selective_refresh->add_partial($fares_paragraph, array(
    'selector' => 'span#fares_paragraph', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
  ));

  // // Charges section
  // $wp_customize->add_setting($fares_charges_bullet1, array(
  //   'default' => 'Rides starting and ending within the initial service area (see map below)',
  //   'sanitize_callback' => 'sanitize_text_field',
  //   'transport' => 'postMessage'
  // ));
  // $wp_customize->add_control($fares_charges_bullet1, array(
  //   'label' => 'First bullet title',
  //   'section' => $fares_charges,
  // ));
  // $wp_customize->selective_refresh->add_partial($fares_charges_bullet1, array(
  //   'selector' => 'span#fares_charges_bullet1', // You can also select a css class
  //   'render_callback' => 'check_copy_right_text',
  // ));

  // $wp_customize->add_setting($fares_charges_minibullet1, array(
  //   'default' => 'Flat $10 fare (one way)',
  //   'sanitize_callback' => 'sanitize_text_field',
  // ));
  // $wp_customize->add_control($fares_charges_minibullet1, array(
  //   'label' => 'First bullet description',
  //   'section' => $fares_charges,
  // ));
  // $wp_customize->selective_refresh->add_partial($fares_charges_minibullet1, array(
  //   'selector' => 'span#fares_charges_minibullet1', // You can also select a css class
  //   'render_callback' => 'check_copy_right_text',
  // ));

  // $wp_customize->add_setting($fares_charges_map, array(
  //   'default' => 'http://independencerides.local/wp-content/uploads/2021/02/service-area.png',
  //   'transport' => 'refresh',
  //   'sanitize_callback' => 'esc_url_raw'
  // ));
  // $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $fares_charges_map,
  //   array(
  //   'label' => __( 'First bullet map' ),
  //   'description' => esc_html__( 'Map of initial service area' ),
  //   'section' => $fares_charges,
  //   'button_labels' => array( // Optional.
  //       'select' => __( 'Select Image' ),
  //       'change' => __( 'Change Image' ),
  //       'remove' => __( 'Remove' ),
  //       'default' => __( 'Default' ),
  //       'placeholder' => __( 'No image selected' ),
  //       'frame_title' => __( 'Select Image' ),
  //       'frame_button' => __( 'Choose Image' ),
  //   )
  // )));
  // $wp_customize->selective_refresh->add_partial($fares_charges_map, array(
  //   'selector' => 'span#fares_charges_map', // You can also select a css class
  //   'render_callback' => 'check_copy_right_text',
  // ));




# REPEATABLE STEP SECTION 


$wp_customize->add_setting(
  $fares_step,
  array(
      'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
      'transport' => 'refresh',
  ) );


$wp_customize->add_control(
  new Onepress_Customize_Repeatable_Control(
      $wp_customize,
      $fares_step,
      array(
          'label' 		=> esc_html__('Step'),
          'description'   => '',
          'section'       => $fares_charges,
          'live_title_id' => '',
          'title_format'  => esc_html__('[live_title]'), // [live_title]
          'max_item'      => 10, // Maximum item can add
          'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
          'fields'    => array(
            'step'  => array(
              'title' => esc_html__('Step'),
              'type'  =>'text',
            ),
            'bullet-one'  => array(
                'title' => esc_html__('Bullet One'),
                'type'  =>'textarea',
            ),
            'bullet-two'  => array(
              'title' => esc_html__('Bullet Two'),
              'type'  =>'textarea',
            ),
            'bullet-three'  => array(
              'title' => esc_html__('Bullet Three'),
              'type'  =>'textarea',
            ),
            'bullet-four'  => array(
              'title' => esc_html__('Bullet Four'),
              'type'  =>'textarea',
            ),
            'img'  => array(
              'title' => esc_html__('Image'),
              'type'  =>'media',
            ),
          ),
      )
  )
);

$wp_customize->selective_refresh->add_partial($fares_step, array(
  'selector' => 'span#fares-step',
  'render_callback' => 'check_copy_right_text'
));

# END OF REPEATABLE STEP SECTION

}

add_action( 'customize_register', 'fares_customizer' );