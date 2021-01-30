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


// Fares section
function fares_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($fares_section, array(
    'title' => 'Fares',
  ));

  $wp_customize->add_setting($fares_blue_left, array(
    'default' => 'Prices vary based on location, time of day, and number of stops.',
  ));
  $wp_customize->add_control($fares_blue_left, array(
    'label' => 'Blue Box Left',
    'section' => $fares_section,
  ));
  $wp_customize->add_setting($fares_blue_right, array(
    'default' => 'If a driver is requested to wait longer than 15 minutes, a $20 per hour wait fee is charged.',
  ));
  $wp_customize->add_control($fares_blue_right, array(
    'label' => 'Blue Box Right',
    'section' => $fares_section,
  ));

  $wp_customize->add_setting($fares_paragraph, array(
    'default' => 'Drivers do not usually stay with the client during an appointment or activity. The same or a different driver will pick them up for their pre-scheduled return ride.',
    // 'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control($fares_paragraph, array(
    'label' => 'Paragraph',
    'section' => $fares_section,
  ));
}

add_action( 'customize_register', 'fares_customizer' );


// Footer section
function footer_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($footer_section, array(
    'title' => 'Footer',
  ));

  $wp_customize->add_setting($contact_us_text, array(
    'default' => 'CARL W. WELLBORN SR. <br>
    EXECUTIVE DIRECTOR <br>
    TEL: 313-618-1578 <br>
    TEL: 313-618-3361 <br>
    CARL@INDEPENDENCERIDES.COM',
  ));
  $wp_customize->add_control($contact_us_text, array(
    'label' => 'Contact Us Text',
    'section' => $footer_section,
    'type' => 'textarea'
  ));

  $wp_customize->add_setting($our_mission_text, array(
    'default' => 'Dignified Transportation <br>
    for Seniors and Vision <br>
    Impaired Adults',
  ));
  $wp_customize->add_control($our_mission_text, array(
    'label' => 'Our Mission Text',
    'section' => $footer_section,
    'type' => 'textarea'
  ));

  $wp_customize->add_setting($information_text, array(
    'default' => 'About Us <br>
    Receiving Rides <br>
    Fares',
  ));
  $wp_customize->add_control($information_text, array(
    'label' => 'Information Text',
    'section' => $footer_section,
    'type' => 'textarea'
  ));

  $wp_customize->add_setting($get_involved_text, array(
    'default' => 'Giving Rides <br>
    Ride Coordinator',
  ));
  $wp_customize->add_control($get_involved_text, array(
    'label' => 'Get Involved Text',
    'section' => $footer_section,
    'type' => 'textarea'
  ));
}

add_action( 'customize_register', 'footer_customizer' );