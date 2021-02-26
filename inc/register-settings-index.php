<?php
function index_customizer($wp_customize) {
  require 'section_vars.php';

  $wp_customize->add_panel($home_panel,
  array(
    'title' => ( 'Home' ),
    'description' => esc_html__( 'Adjust home sections.' ), // Include html tags such as 
    'priority' => 160, // Not typically needed. Default is 160
    'capability' => 'edit_theme_options', // Not typically needed. Default is edit_theme_options
    'theme_supports' => '', // Rarely needed
    'active_callback' => '', // Rarely needed
  ));

  $wp_customize->add_section($home_header, array(
    'title' => 'Header',
    'panel' => $home_panel,
  ));

  $wp_customize->add_setting($home_header_title, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => 'Independence Rides'
  ));
  $wp_customize->add_control($home_header_title, array(
    'label' => 'Header Text',
    'section' => $home_header
  ));

  $wp_customize->add_setting($home_header_p, array(
    'sanitize_callback' => 'sanitize_text_field',
    'default' => 'Dignified transportation for seniors and vision impaired adults in the greater Detroit area'
  ));
  $wp_customize->add_control($home_header_p, array(
    'label' => 'Header Sub-Text',
    'section' => $home_header,
    'type' => 'textarea'
  ));


  $wp_customize->add_section($home_cards, array(
    'title' => 'Cards with Icons',
    'panel' => $home_panel,
  ));

  // Info Card 1 Title
  $wp_customize->selective_refresh->add_partial($home_info_card_1_title, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
  $wp_customize->add_setting($home_info_card_1_title, array(
      'default' => 'Assistance Provided',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control($home_info_card_1_title, array(
      'label' => 'Info Card 1 Title',
      'section' => $home_cards,
      'type' => 'text'
  ));

  // Info Card 1 Description
  $wp_customize->selective_refresh->add_partial($home_info_card_1_desc, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
  $wp_customize->add_setting($home_info_card_1_desc, array(
      'default' => 'Arm-through-arm and door-through-door assistance, help with canes, 
      walkers, folding wheelchairs, grocery bags, and packages',
      'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control($home_info_card_1_desc, array(
      'label' => 'Info Card 1 Description',
      'section' => $home_cards,
      'type' => 'textarea'
  ));

  // Info Card 2 Title
  $wp_customize->selective_refresh->add_partial($home_info_card_2_title, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
  $wp_customize->add_setting($home_info_card_2_title, array(
    'default' => 'Payment',
    'sanitize_callback' => 'sanitize_text_field'
));
  $wp_customize->add_control($home_info_card_2_title, array(
      'label' => 'Info Card 2 Title',
      'section' => $home_cards,
      'type' => 'text'
  ));


   // Info Card 2 Description
   $wp_customize->selective_refresh->add_partial($home_info_card_2_desc, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
   $wp_customize->add_setting($home_info_card_2_desc, array(
    'default' => 'Fares paid through our internal account system (no cash or cards needed), trading your 
    unwanted car can help pay for rides, our nonprofit status keeps fares low',
    'sanitize_callback' => 'sanitize_text_field'
));
  $wp_customize->add_control($home_info_card_2_desc, array(
      'label' => 'Info Card 2 Description',
      'section' => $home_cards,
      'type' => 'textarea'
  ));


  // Info Card 3 Title
  $wp_customize->selective_refresh->add_partial($home_info_card_3_title, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
  $wp_customize->add_setting($home_info_card_3_title, array(
    'default' => 'Availability',
    'sanitize_callback' => 'sanitize_text_field'
));
  $wp_customize->add_control($home_info_card_3_title, array(
      'label' => 'Info Card 3 Title',
      'section' => $home_cards,
      'type' => 'text'
  ));


   // Info Card 3 Description
   $wp_customize->selective_refresh->add_partial($home_info_card_3_desc, array(
    'selector' => 'span#copy-write', // You can also select a css class
    'render_callback' => 'check_copy_right_text',
));
   $wp_customize->add_setting($home_info_card_3_desc, array(
    'default' => 'Rides available 24/7 for any reason. The current COVID-19 pandemic may drive some restrictions.',
    'sanitize_callback' => 'sanitize_text_field'
));
  $wp_customize->add_control($home_info_card_3_desc, array(
      'label' => 'Info Card 3 Description',
      'section' => $home_cards,
      'type' => 'textarea'
  ));

 // Info Card 4 Title
 $wp_customize->selective_refresh->add_partial($home_info_card_4_title, array(
  'selector' => 'span#copy-write', // You can also select a css class
  'render_callback' => 'check_copy_right_text',
));
  $wp_customize->add_setting($home_info_card_4_title, array(
    'default' => 'Drivers',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control($home_info_card_4_title, array(
    'label' => 'Info Card 4 Title',
    'section' => $home_cards,
    'type' => 'text'
  ));


 // Info Card 4 Description
 $wp_customize->selective_refresh->add_partial($home_info_card_4_desc, array(
  'selector' => 'span#copy-write', // You can also select a css class
  'render_callback' => 'check_copy_right_text',
));
 $wp_customize->add_setting($home_info_card_4_desc, array(
  'default' => 'Drivers are trained community volunteers who have passed criminal background and driving record checks.',
  'sanitize_callback' => 'sanitize_text_field'
));
  $wp_customize->add_control($home_info_card_4_desc, array(
    'label' => 'Info Card 4 Description',
    'section' => $home_cards,
    'type' => 'textarea'
  ));

  // List of sections
  $wp_customize->add_section($home_link_boxes, array(
    'title' => 'Link Boxes',
    'panel' => $home_panel,
  ));
  // Link boxes section
  $wp_customize->add_setting($home_giving_box, array(
    'default' => 'Join our team of volunteers and give back to your community.',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($home_giving_box, array(
    'label' => 'Giving Rides Box Content',
    'section' => $home_link_boxes,
  ));
  $wp_customize->add_setting($home_receiving_box, array(
    'default' => 'Become an Independence Rides member.',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($home_receiving_box, array(
    'label' => 'Receiving Rides Box Content',
    'section' => $home_link_boxes,
  ));
  $wp_customize->add_setting($home_contact_box, array(
    'default' => 'We’re here to answer any questions you have.',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($home_contact_box, array(
    'label' => 'Contact Us Box Content',
    'section' => $home_link_boxes,
  ));
  $wp_customize->add_setting($home_donate_box, array(
    'default' => 'Help us grow to serve more of our community.',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($home_donate_box, array(
    'label' => 'Donate Box Content',
    'section' => $home_link_boxes,
  ));
  $wp_customize->add_setting($home_fares_box, array(
    'default' => 'Membership fee and ride fares.',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($home_fares_box, array(
    'label' => 'Fares Box Content',
    'section' => $home_link_boxes,
  ));
  $wp_customize->add_setting($home_volunteer_box, array(
    'default' => 'Assist us in ensuring our rides run smoothly.',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($home_volunteer_box, array(
    'label' => 'Volunteer Box Content',
    'section' => $home_link_boxes,
  ));

  // #### ALL OF THE LEARN MORE LINKS
  $wp_customize->add_setting($home_giving_link, array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $home_giving_link,
  array(
      'label' => __( 'Giving Rides Link' ),
      'section' => $home_link_boxes,
      'type' => 'dropdown-pages'
  )));
  $wp_customize->selective_refresh->add_partial($home_giving_link, array(
      'selector' => 'span#copy-write', // You can also select a css class
      'render_callback' => 'check_copy_right_text',
  ));

  $wp_customize->add_setting($home_receiving_link, array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $home_receiving_link,
  array(
      'label' => __( 'Receiving Rides Link' ),
      'section' => $home_link_boxes,
      'type' => 'dropdown-pages'
  )));
  $wp_customize->selective_refresh->add_partial($home_receiving_link, array(
      'selector' => 'span#copy-write', // You can also select a css class
      'render_callback' => 'check_copy_right_text',
  ));

  $wp_customize->add_setting($home_contact_link, array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $home_contact_link,
  array(
      'label' => __( 'Contact Us Link' ),
      'section' => $home_link_boxes,
      'type' => 'dropdown-pages'
  )));
  $wp_customize->selective_refresh->add_partial($home_contact_link, array(
      'selector' => 'span#copy-write', // You can also select a css class
      'render_callback' => 'check_copy_right_text',
  ));

  $wp_customize->add_setting($home_donate_link, array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $home_donate_link,
  array(
      'label' => __( 'Donate Link' ),
      'section' => $home_link_boxes,
      'type' => 'dropdown-pages'
  )));
  $wp_customize->selective_refresh->add_partial($home_donate_link, array(
      'selector' => 'span#copy-write', // You can also select a css class
      'render_callback' => 'check_copy_right_text',
  ));

  $wp_customize->add_setting($home_fares_link, array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $home_fares_link,
  array(
      'label' => __( 'Fares Link' ),
      'section' => $home_link_boxes,
      'type' => 'dropdown-pages'
  )));
  $wp_customize->selective_refresh->add_partial($home_fares_link, array(
      'selector' => 'span#copy-write', // You can also select a css class
      'render_callback' => 'check_copy_right_text',
  ));

  $wp_customize->add_setting($home_volunteer_link, array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $home_volunteer_link,
  array(
      'label' => __( 'Volunteer Link' ),
      'section' => $home_link_boxes,
      'type' => 'dropdown-pages'
  )));
  $wp_customize->selective_refresh->add_partial($home_volunteer_link, array(
      'selector' => 'span#copy-write', // You can also select a css class
      'render_callback' => 'check_copy_right_text',
  ));
  // #### End of learn more links

}
add_action( 'customize_register', 'index_customizer' );
