<?php

register_nav_menu( "primary", "Top Navbar" );
function home_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($home_section, array(
    'title' => 'Videos and News',
  ));

  $wp_customize->add_setting($home_top_vid, array(
    'default' => 'https://www.youtube.com/embed/A0Wyx-OOX4A',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($home_top_vid, array(
    'label' => 'Top Video Embed',
    'section' => $home_section,
  ));

  $wp_customize->add_setting($home_top_img);
  $wp_customize->add_control( new WP_Customize_Image_Control( 
      $wp_customize, 
      $home_top_img, 
      array(
          'label' => 'Top Image',
          'section' => $home_section
      )
  ));
  // Top Desc
  $wp_customize->add_setting($home_top_desc);
  $wp_customize->add_control($home_top_desc, array(
      'label' => 'Top Description',
      'section' => $home_section,
      'type' => 'textarea'
  ));
}
add_action( 'customize_register', 'home_customizer' );


function receiving_rides_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($receiving_rides_section, array(
    'title' => 'Receiving Rides'
  ));

  $wp_customize->add_setting($blue_box_left_text, array(
    'default' => 'We want to make your ride simple and pleasant.'
  ));

  $wp_customize->add_control($blue_box_left_text, array(
    'label' => 'Text',
    'section' => $receiving_rides_section,
    'settings' => $blue_box_left_text
  ));

  $wp_customize->add_setting($blue_box_right_text, array(
    'default' => 'We are designed for seniors and vision impaired adults. We offer rides for any reason that include arm-through-arm, door-through-door assistance. 
    Any time of the day and for any reason we are here for you or your loved one.'
  ));
  $wp_customize->add_control($blue_box_right_text, array(
    'label' => 'Text',
    'section' => $receiving_rides_section,
    'settings' => $blue_box_right_text
  ));
}
add_action( 'customize_register', 'receiving_rides_customizer' );
