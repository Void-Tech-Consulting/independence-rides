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
      'type' => 'textarea',
  ));
}
add_action( 'customize_register', 'home_customizer' );

function about_us_customizer($wp_customize) {
  require 'section_vars.php';
  $wp_customize->add_section($about_us_section, array(
    'title' => 'About Us',
  ));

  // Top Desc
  $wp_customize->add_setting($about_us_top_desc, array(
      'default' => 'We all tend to take the independence that comes from driving
      for granted, until it’s gone. When that happens, our world 
      suddenly seems small. This is exactly the plight of thousands 
      of seniors and vision impaired adults in our communities across 
      metropolitan Detroit.  Independence Rides is all about dignified 
      transportation for seniors and vision impaired adults in the 
      greater Detroit area.'
  ));
  $wp_customize->add_control($about_us_top_desc, array(
      'label' => 'Top Description',
      'section' => $about_us_section,
      'type' => 'textarea'
  ));

  // Quote
  $wp_customize->add_setting($about_us_quote, array(
    'default' => 'Just getting around from day to day need not be so difficult.'
));
$wp_customize->add_control($about_us_quote, array(
    'label' => 'Quote',
    'section' => $about_us_section,
    'type' => 'textarea'
));

  // Video
  $wp_customize->add_setting($about_us_video, array(
    'default' => 'https://www.youtube.com/embed/A0Wyx-OOX4A',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($about_us_video, array(
    'label' => 'Video',
    'section' => $about_us_section,
  ));

   // Middle Paragraph
   $wp_customize->add_setting($about_us_mid_paragraph, array(
    'default' => 'That\'s why we\'re here. Dignified transportation freedom for seniors and vision impaired adults.'
));
$wp_customize->add_control($about_us_mid_paragraph, array(
    'label' => 'Middle Paragraph',
    'section' => $about_us_section,
    'type' => 'textarea'
));
// Image Text
$wp_customize->add_setting($about_us_image_text, array(
  'default' => 'The rides are available 24 hours a day, 7 days a week, and can be 
  scheduled for any reason. 
  
  
  A key feature is ‘door-through-door’ and ‘arm-through-arm’ assistance. 
    This means we provide personal walking assistance as needed from the 
    departure door to the car, and from the car through the destination door.'
));
$wp_customize->add_control($about_us_image_text, array(
  'label' => 'Image Text',
  'section' => $about_us_section,
  'type' => 'textarea'
));
}
add_action( 'customize_register', 'about_us_customizer' );
