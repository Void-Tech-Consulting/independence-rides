<?php

function homes_customizer($wp_customize) {
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
  // List of sections
  $wp_customize->add_section($link_boxes, array(
    'title' => 'Link Boxes',
    'panel' => $home_panel,
  ));
  // Link boxes section
  $wp_customize->add_setting($giving_box, array(
    'default' => 'Join our team of volunteers and give back to your community.',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($giving_box, array(
    'label' => 'Giving Rides Box Content',
    'section' => $link_boxes,
  ));
  $wp_customize->add_setting($receiving_box, array(
    'default' => 'Become an Independence Rides member.',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($receiving_box, array(
    'label' => 'Receiving Rides Box Content',
    'section' => $link_boxes,
  ));
  $wp_customize->add_setting($contact_box, array(
    'default' => 'We’re here to answer any questions you have.',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($contact_box, array(
    'label' => 'Contact Us Box Content',
    'section' => $link_boxes,
  ));
  $wp_customize->add_setting($donate_box, array(
    'default' => 'Help us grow to serve more of our community.',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($donate_box, array(
    'label' => 'Donate Box Content',
    'section' => $link_boxes,
  ));
  $wp_customize->add_setting($fares_box, array(
    'default' => 'Membership fee and ride fares.',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($fares_box, array(
    'label' => 'Fares Box Content',
    'section' => $link_boxes,
  ));
  $wp_customize->add_setting($volunteer_box, array(
    'default' => 'Assist us in ensuring our rides run smoothly.',
    'sanitize_callback' => 'sanitize_text_field',
  ));

  $wp_customize->add_control($volunteer_box, array(
    'label' => 'Volunteer Box Content',
    'section' => $link_boxes,
  ));
  // #### ALL OF THE LEARN MORE LINKS
  $wp_customize->add_setting($home_giving_link, array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control( new WP_Customize_Control( $wp_customize, $home_giving_link,
  array(
      'label' => __( 'Giving Rides Link' ),
      'section' => $link_boxes,
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
      'section' => $link_boxes,
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
      'section' => $link_boxes,
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
      'section' => $link_boxes,
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
      'section' => $link_boxes,
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
      'section' => $link_boxes,
      'type' => 'dropdown-pages'
  )));
  $wp_customize->selective_refresh->add_partial($home_volunteer_link, array(
      'selector' => 'span#copy-write', // You can also select a css class
      'render_callback' => 'check_copy_right_text',
  ));
  // #### End of learn more links
 
}
add_action( 'customize_register', 'homes_customizer' );

