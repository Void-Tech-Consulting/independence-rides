<?php
function about_us_customizer($wp_customize) {
  require 'section_vars.php';

  $wp_customize->add_panel( $about_us_panel,
   array(
      'title' => __( 'About Us' ),
      'description' => esc_html__( 'Adjust your cover sections.' ), // Include html tags such as 
 
      'priority' => 160, // Not typically needed. Default is 160
      'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
      'theme_supports' => '', // Rarely needed
      'active_callback' => '', // Rarely needed
   )
);

  $wp_customize->add_section($about_us_top_section, array(
    'title' => 'Top Section',
    'panel' => $about_us_panel,
  ));
  $wp_customize->add_section($about_us_middle_section, array(
    'title' => 'Middle Section',
    'panel' => $about_us_panel,
  ));
  $wp_customize->add_section($about_us_bottom_section, array(
    'title' => 'Bottom Section',
    'panel' => $about_us_panel,
  ));

  // Top Desc
  $wp_customize->selective_refresh->add_partial($about_us_top_desc, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
  $wp_customize->add_setting($about_us_top_desc, array(
      'default' => 'We all tend to take the independence that comes from driving
      for granted, until it’s gone. When that happens, our world 
      suddenly seems small. This is exactly the plight of thousands 
      of seniors and vision impaired adults in our communities across 
      metropolitan Detroit.  Independence Rides is all about dignified 
      transportation for seniors and vision impaired adults in the 
      greater Detroit area.',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control($about_us_top_desc, array(
      'label' => 'Why We Are Here',
      'section' => $about_us_middle_section,
      'type' => 'textarea'
  ));

  // Quote
  $wp_customize->selective_refresh->add_partial($about_us_quote, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
  $wp_customize->add_setting($about_us_quote, array(
    'default' => 'Just getting around from day to day need not be so difficult.',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control($about_us_quote, array(
    'label' => 'Quote',
    'section' => $about_us_middle_section,
    'type' => 'textarea'
));

  // Video
  $wp_customize->selective_refresh->add_partial($about_us_video, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
  $wp_customize->add_setting($about_us_video, array(
    'default' => 'https://www.youtube.com/embed/A0Wyx-OOX4A',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($about_us_video, array(
    'label' => 'Video',
    'section' => $about_us_middle_section,
  ));

   // Middle Paragraph
   $wp_customize->selective_refresh->add_partial($about_us_mid_paragraph, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
   $wp_customize->add_setting($about_us_mid_paragraph, array(
    'default' => 'That\'s why we\'re here. Dignified transportation freedom for seniors and vision impaired adults.',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control($about_us_mid_paragraph, array(
    'label' => 'Paragraph',
    'section' => $about_us_bottom_section,
    'type' => 'textarea'
));
// Image Text
$wp_customize->selective_refresh->add_partial($about_us_image_text, array(
  'selector' => 'span#copy-write', // You can also select a css class
  'render_callback' => 'check_copy_right_text',
));
$wp_customize->add_setting($about_us_image_text, array(
  'default' => 'The rides are available 24 hours a day, 7 days a week, and can be 
  scheduled for any reason. 
  
  
  A key feature is ‘door-through-door’ and ‘arm-through-arm’ assistance. 
    This means we provide personal walking assistance as needed from the 
    departure door to the car, and from the car through the destination door.',
    'sanitize_callback' => 'sanitize_text_field'
));
$wp_customize->add_control($about_us_image_text, array(
  'label' => 'Image Text',
  'section' => $about_us_bottom_section,
  'type' => 'textarea'
));

// Image 
$wp_customize->selective_refresh->add_partial($about_us_image, array(
  'selector' => 'span#copy-write', // You can also select a css class
  'render_callback' => 'check_copy_right_text',
));
$wp_customize->add_setting( $about_us_image,
   array(
      'default' => 'http://independencerides.local/wp-content/uploads/2021/02/about-us-info.png',
      'transport' => 'refresh',
      'section' => $about_us_bottom_section,
      'sanitize_callback' => 'sanitize_text_field'
   )
);
 
$wp_customize->add_control( new WP_Customize_Cropped_Image_Control( $wp_customize, $about_us_image,
   array(
      'label' => 'Image' ,
      'description' => esc_html__( 'Select an image to show' ),
      'section' => $about_us_bottom_section,
      'flex_width' => false, // Optional. Default: false
      'flex_height' => true, // Optional. Default: false
      'width' => 1056, // Optional. Default: 150
      'height' => 613, // Optional. Default: 150
      'button_labels' => array( // Optional.
         'select' => __( 'Select Image' ),
         'change' => __( 'Change Image' ),
         'remove' => __( 'Remove' ),
         'default' => __( 'Default' ),
         'placeholder' => __( 'No image selected' ),
         'frame_title' => __( 'Select Image' ),
         'frame_button' => __( 'Choose Image' ),
      )
   )
) );


}
add_action( 'customize_register', 'about_us_customizer' );
