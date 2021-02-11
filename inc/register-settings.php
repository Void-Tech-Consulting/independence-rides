<?php

register_nav_menu( "primary", "Top Navbar" );
function home_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($home_section, array(
    'title' => 'Videos and News',
  ));

  $wp_customize->add_setting($home_top_vid, array(
    'default' => 'https://www.youtube.com/embed/A0Wyx-OOX4A',
    'sanitize_callback' => 'sanitize_text_field'
  ));

  $wp_customize->add_control($home_top_vid, array(
    'label' => 'Top Video Embed',
    'section' => $home_section,
  ));

  $wp_customize->add_setting($home_top_img, array(
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control( new WP_Customize_Image_Control( 
      $wp_customize, 
      $home_top_img, 
      array(
          'label' => 'Top Image',
          'section' => $home_section,
      )
  ));
  // Top Desc
  $wp_customize->add_setting($home_top_desc, array(
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control($home_top_desc, array(
      'label' => 'Top Description',
      'section' => $home_section,
      'type' => 'textarea'
  ));
}
add_action( 'customize_register', 'home_customizer' );


function homepage_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($homepage_section, array(
    'title' => 'Homepage Header',
  ));

  $wp_customize->add_setting($homepage_header, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => 'Independence Rides'
  ));
  $wp_customize->add_control($homepage_header, array(
    'label' => 'Header Text',
    'section' => $homepage_section
  ));

  $wp_customize->add_setting($homepage_header_p, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => 'Dignified transportation for seniors and vision impaired adults in the greater Detroit area'
  ));
  $wp_customize->add_control($homepage_header_p, array(
    'label' => 'Header Sub-Text',
    'section' => $homepage_section,
    'type' => 'textarea'
  ));

}
add_action( 'customize_register', 'homepage_customizer' );
