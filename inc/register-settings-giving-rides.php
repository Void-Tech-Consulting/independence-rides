<?php

function giving_rides_customizer($wp_customize) {
    require 'section_vars.php';
    

    $wp_customize->add_panel($giving_rides_panel,
    array(
      'title' => 'Giving Rides'
    ));

    $wp_customize->add_section($giving_rides_cover_section, array(
      'title' => 'Cover',
      'panel' => 'giving_rides_panel'
    ));
    $wp_customize->add_section($giving_rides_middle_section, array(
      'title' => 'Middle',
      'panel' => 'giving_rides_panel'
    ));
    $wp_customize->add_section($giving_rides_steps_section, array(
      'title' => 'Steps',
      'panel' => 'giving_rides_panel'
    ));

    $wp_customize->add_section($giving_rides_important_info_section, array(
      'title' => 'Important Information',
      'panel' => 'giving_rides_panel'
    ));

    $wp_customize->add_setting($giving_rides_header_image, array(
      'default' => '',
      'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $giving_rides_header_image, array(
      'label' => 'Image',
      'section' => $giving_rides_cover_section,
      'settings' => $giving_rides_header_image,
      'button_labels' => array(
        'select' => 'Select Image',
        'change' => 'Change Image',
        'remove' => 'Remove',
        'default' => 'Default',
        'placeholder' => 'No image selected',
        'frame_title' => 'Select Image',
        'frame_button' => 'Choose Image',
     )
    )));

    $wp_customize->selective_refresh->add_partial($giving_rides_header_image, array(
      'selector' => 'span#giving-rides-cover-img',
      'render_callback' => 'check_copy_right_text'
    ));
  
    $wp_customize->add_setting($giving_rides_blue_box_left, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'Independence Rides is entirely volunteer-driven.',
      'transport' => 'postMessage'
    ));
  
    $wp_customize->add_control($giving_rides_blue_box_left, array(
      'label' => 'Blue Box Left Text',
      'type' => 'textarea',
      'section' => $giving_rides_middle_section,
      'settings' => $giving_rides_blue_box_left
    ));

    $wp_customize->selective_refresh->add_partial($giving_rides_blue_box_left, array(
      'selector' => 'span#giving-rides-blue-box-left',
      'render_callback' => 'check_copy_right_text'
    ));
  
    $wp_customize->add_setting($giving_rides_blue_box_right, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'All drivers are courteous and trained volunteers who have passed criminal background and driving record checks.'
    ));
    $wp_customize->add_control($giving_rides_blue_box_right, array(
      'label' => 'Blue Box Right Text',
      'type' => 'textarea',
      'section' => $giving_rides_middle_section,
      'settings' => $giving_rides_blue_box_right
    ));

    $wp_customize->selective_refresh->add_partial($giving_rides_blue_box_right, array(
      'selector' => 'span#giving-rides-blue-box-right',
      'render_callback' => 'check_copy_right_text'
    ));

    $wp_customize->add_setting($giving_rides_middle_paragraph, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'Volunteer drivers earn mileage credits which can be kept for their own use, 
      donated back to Independence Rides, donated to low income riders, or donated to family/ 
      friends who are also members.'
    ));
    $wp_customize->add_control($giving_rides_middle_paragraph, array(
      'label' => 'Paragraph',
      'type' => 'textarea',
      'section' => $giving_rides_middle_section,
      'settings' => $giving_rides_middle_paragraph
    ));
  
    $wp_customize->selective_refresh->add_partial($giving_rides_middle_paragraph, array(
      'selector' => 'span#giving-rides-middle-paragraph',
      'render_callback' => 'check_copy_right_text'
    ));

    $wp_customize->add_setting($giving_rides_steps_img, array(
      'default' => '',
      'transport' => 'refresh'
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, $giving_rides_steps_img, array(
      'label' => 'Image',
      'section' => $giving_rides_steps_section,
      'settings' => $giving_rides_steps_img,
      'button_labels' => array(
        'select' => 'Select Image',
        'change' => 'Change Image',
        'remove' => 'Remove',
        'default' => 'Default',
        'placeholder' => 'No image selected',
        'frame_title' => 'Select Image',
        'frame_button' => 'Choose Image',
     )
    )));
  
    $wp_customize->selective_refresh->add_partial($giving_rides_steps_img, array(
      'selector' => 'span#giving-rides-steps-img',
      'render_callback' => 'check_copy_right_text'
    ));

    $wp_customize->add_setting($giving_rides_timeline_step_one, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'Step One'
    ));
    $wp_customize->add_control($giving_rides_timeline_step_one, array(
      'label' => 'Header',
      'section' => $giving_rides_steps_section,
      'settings' => $giving_rides_timeline_step_one
    ));
  
    $wp_customize->selective_refresh->add_partial($giving_rides_timeline_step_one, array(
      'selector' => 'span#giving-rides-step-one-header',
      'render_callback' => 'check_copy_right_text'
    ));
  
    $wp_customize->add_setting($giving_rides_step_one_description, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'Complete an application to ensure we have complete contact information.'
    ));
    $wp_customize->add_control($giving_rides_step_one_description, array(
      'label' => 'Description',
      'type' => 'textarea',
      'section' => $giving_rides_steps_section,
      'settings' => $giving_rides_step_one_description
    ));
  
    $wp_customize->selective_refresh->add_partial($giving_rides_step_one_description, array(
      'selector' => 'span#giving-rides-step-one-text',
      'render_callback' => 'check_copy_right_text'
    ));
  
    $wp_customize->add_setting($giving_rides_timeline_step_two, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'Step Two'
    ));
    $wp_customize->add_control($giving_rides_timeline_step_two, array(
      'label' => 'Header',
      'section' => $giving_rides_steps_section,
      'settings' => $giving_rides_timeline_step_two
    ));
  
    $wp_customize->selective_refresh->add_partial($giving_rides_timeline_step_two, array(
      'selector' => 'span#giving-rides-step-two-header',
      'render_callback' => 'check_copy_right_text'
    ));
  
    $wp_customize->add_setting($giving_rides_step_two_description, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'Pass criminal background and driving record checks and complete training.'
    ));
    $wp_customize->add_control($giving_rides_step_two_description, array(
      'label' => 'Description',
      'type' => 'textarea',
      'section' => $giving_rides_steps_section,
      'settings' => $giving_rides_step_two_description
    ));
  
    $wp_customize->selective_refresh->add_partial($giving_rides_step_two_description, array(
      'selector' => 'span#giving-rides-step-two-text',
      'render_callback' => 'check_copy_right_text'
    ));
  
    $wp_customize->add_setting($giving_rides_timeline_step_three, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'Step Three'
    ));
    $wp_customize->add_control($giving_rides_timeline_step_three, array(
      'label' => 'Header',
      'section' => $giving_rides_steps_section,
      'settings' => $giving_rides_timeline_step_three
    ));
  
    $wp_customize->selective_refresh->add_partial($giving_rides_timeline_step_three, array(
      'selector' => 'span#giving-rides-step-three-header',
      'render_callback' => 'check_copy_right_text'
    ));
  
    $wp_customize->add_setting($giving_rides_step_three_description, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'Provide rides when requested and earn mileage credits.'
    ));
    $wp_customize->add_control($giving_rides_step_three_description, array(
      'label' => 'Description',
      'type' => 'textarea',
      'section' => $giving_rides_steps_section,
      'settings' => $giving_rides_step_three_description
    ));
  
    $wp_customize->selective_refresh->add_partial($giving_rides_step_three_description, array(
      'selector' => 'span#giving-rides-step-three-text',
      'render_callback' => 'check_copy_right_text'
    ));


    # REPEATABLE BULLET SECTION - IMPORTANT INFO

    $wp_customize->selective_refresh->add_partial($giving_rides_info_bullet, array(
      'selector' => 'span#giving-rides-info-bullet',
      'render_callback' => 'check_copy_right_text'
    ));

    $wp_customize->add_setting(
      $giving_rides_info_bullet,
      array(
          'sanitize_callback' => 'onepress_sanitize_repeatable_data_field',
          'transport' => 'refresh',
      ) );

      $wp_customize->add_control($giving_rides_info_bullet, array(
        'label' => 'Bullet',
        'type' => 'textarea',
        'section' => $giving_rides_important_info_section,
        'settings' => $giving_rides_info_bullet
      ));


      $wp_customize->add_control(
        new Onepress_Customize_Repeatable_Control(
            $wp_customize,
            $giving_rides_info_bullet,
            array(
                'label' 		=> esc_html__('Bullet'),
                'description'   => '',
                'section'       => $giving_rides_important_info_section,
                'live_title_id' => '',
                'title_format'  => esc_html__('[live_title]'), // [live_title]
                'max_item'      => 10, // Maximum item can add
                'limited_msg' 	=> wp_kses_post( __( 'Max items added' ) ),
                'fields'    => array(
                    'bullet'  => array(
                        'title' => esc_html__('Bullet'),
                        'type'  =>'textarea',
                     ),
                ),
            )
        )
    );

    # BOTTOM ICON LIST 
    $wp_customize->add_setting($giving_rides_info_icon_text_one, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'In nearly all cases the drivers will be providing the rides in their own vehicles.'
    ));
    $wp_customize->add_control($giving_rides_info_icon_text_one, array(
      'label' => 'Icon Text One',
      'type' => 'textarea',
      'section' => $giving_rides_important_info_section,
      'settings' => $giving_rides_info_icon_text_one
    ));
  
    $wp_customize->selective_refresh->add_partial($giving_rides_info_icon_text_one, array(
      'selector' => 'span#giving-rides-info-icon-text-one',
      'render_callback' => 'check_copy_right_text'
    ));

    $wp_customize->add_setting($giving_rides_info_icon_text_two, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'Riders who use walkers and folding wheelchairs will be paired with drivers who can lift and stow these devices.'
    ));
    $wp_customize->add_control($giving_rides_info_icon_text_two, array(
      'label' => 'Icon Text Two',
      'type' => 'textarea',
      'section' => $giving_rides_important_info_section,
      'settings' => $giving_rides_info_icon_text_two
    ));
  
    $wp_customize->selective_refresh->add_partial($giving_rides_info_icon_text_two, array(
      'selector' => 'span#giving-rides-info-icon-text-two',
      'render_callback' => 'check_copy_right_text'
    ));

    $wp_customize->add_setting($giving_rides_info_icon_text_three, array(
      'sanitize_callback' => 'sanitize_text_field',
      'default' => 'Paid drivers, with the same training and background checks, may be used during overnight hours to ensure that all ride requests can be met.'
    ));
    $wp_customize->add_control($giving_rides_info_icon_text_three, array(
      'label' => 'Icon Text Three',
      'type' => 'textarea',
      'section' => $giving_rides_important_info_section,
      'settings' => $giving_rides_info_icon_text_three
    ));
  
    $wp_customize->selective_refresh->add_partial($giving_rides_info_icon_text_three, array(
      'selector' => 'span#giving-rides-info-icon-text-three',
      'render_callback' => 'check_copy_right_text'
    ));




  }
  add_action( 'customize_register', 'giving_rides_customizer' );