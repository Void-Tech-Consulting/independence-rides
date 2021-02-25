<?php
function index_customizer($wp_customize) {
  require 'section_vars.php';

  $wp_customize->add_panel( $main_page_panel,
   array(
      'title' => __( 'Main Page' ),
      'description' => esc_html__( 'Adjust your cover sections.' ), // Include html tags such as 
 
      'priority' => 160, // Not typically needed. Default is 160
      'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
      'theme_supports' => '', // Rarely needed
      'active_callback' => '', // Rarely needed
   )
);

  $wp_customize->add_section($main_page_middle_section, array(
    'title' => 'Middle Section',
    'panel' => $main_page_panel,
  ));

  // Info Card 1 Title
  $wp_customize->selective_refresh->add_partial($info_card_1_title, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
  $wp_customize->add_setting($info_card_1_title, array(
      'default' => 'Assistance Provided',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control($info_card_1_title, array(
      'label' => 'Info Card 1 Title',
      'section' => $main_page_middle_section,
      'type' => 'text'
  ));

  // Info Card 1 Description
  $wp_customize->selective_refresh->add_partial($info_card_1_desc, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
  $wp_customize->add_setting($info_card_1_desc, array(
      'default' => 'Arm-through-arm and door-through-door assistance, help with canes, 
      walkers, folding wheelchairs, grocery bags, and packages',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control($info_card_1_desc, array(
      'label' => 'Info Card 1 Description',
      'section' => $main_page_middle_section,
      'type' => 'textarea'
  ));

  // Info Card 2 Title
  $wp_customize->selective_refresh->add_partial($info_card_2_title, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
  $wp_customize->add_setting($info_card_2_title, array(
    'default' => 'Payment',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control($info_card_2_title, array(
    'label' => 'Info Card 2 Title',
    'section' => $main_page_middle_section,
    'type' => 'text'
));


   // Info Card 2 Description
   $wp_customize->selective_refresh->add_partial($info_card_2_desc, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
   $wp_customize->add_setting($info_card_2_desc, array(
    'default' => 'Fares paid through our internal account system (no cash or cards needed), trading your 
    unwanted car can help pay for rides, our nonprofit status keeps fares low',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control($info_card_2_desc, array(
    'label' => 'Info Card 2 Description',
    'section' => $main_page_middle_section,
    'type' => 'textarea'
));


  // Info Card 3 Title
  $wp_customize->selective_refresh->add_partial($info_card_3_title, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
  $wp_customize->add_setting($info_card_3_title, array(
    'default' => 'Availability',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control($info_card_3_title, array(
    'label' => 'Info Card 3 Title',
    'section' => $main_page_middle_section,
    'type' => 'text'
));


   // Info Card 3 Description
   $wp_customize->selective_refresh->add_partial($info_card_3_desc, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
   $wp_customize->add_setting($info_card_3_desc, array(
    'default' => 'Rides available 24/7 for any reason. The current COVID-19 pandemic may drive some restrictions.',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control($info_card_3_desc, array(
    'label' => 'Info Card 3 Description',
    'section' => $main_page_middle_section,
    'type' => 'textarea'
));

 // Info Card 4 Title
 $wp_customize->selective_refresh->add_partial($info_card_4_title, array(
  'selector' => 'span#copy-write', // You can also select a css class
  'render_callback' => 'check_copy_right_text',
));
$wp_customize->add_setting($info_card_4_title, array(
  'default' => 'Drivers',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control($info_card_4_title, array(
  'label' => 'Info Card 4 Title',
  'section' => $main_page_middle_section,
  'type' => 'text'
));


 // Info Card 4 Description
 $wp_customize->selective_refresh->add_partial($info_card_4_desc, array(
  'selector' => 'span#copy-write', // You can also select a css class
  'render_callback' => 'check_copy_right_text',
));
 $wp_customize->add_setting($info_card_4_desc, array(
  'default' => 'Drivers are trained community volunteers who have passed criminal background and driving record checks.',
  'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control($info_card_4_desc, array(
  'label' => 'Info Card 4 Description',
  'section' => $main_page_middle_section,
  'type' => 'textarea'
));


}
add_action( 'customize_register', 'index_customizer' );
