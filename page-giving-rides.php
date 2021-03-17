<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>

  <span id="giving-rides-cover-img"> 
    <div id="giving-rides-top" class="top-section" style="background: url(<?php echo get_theme_mod('giving_rides_header_image') ?>); background-repeat: no-repeat; background-size: cover;">
      <div class="top-info">
        <h1 class="top-header">Can you lend a hand?</h1>
        <button class="apply-button" type="button">Apply Now</button>
      </div>
    </div>
    </span>
    
    
    <div class="blue-box">
      <div class="intro-text">
        <span id="giving-rides-blue-box-left"> <?php echo get_theme_mod($giving_rides_blue_box_left)?> </span>
      </div>
      <div class="intro-vertline"></div>
      <div class="intro-text">
        <span id="giving-rides-blue-box-right"> <?php echo get_theme_mod($giving_rides_blue_box_right)?> </span>
      </div>
      
    </div>

    <p class="page-paragraph">
    <span id="giving-rides-middle-paragraph"> <?php echo get_theme_mod($giving_rides_middle_paragraph)?> </span>
    </p>

    <div class="steps-section">
  <div class="steps-content">
    <div class="steps-header">
      <h2 class="steps-name">Giving Rides</h2>
      <div class="steps-underline"></div>
    </div>
    <div class="steps-body">
      <span id="giving-rides-steps-img">
        <img class="steps-img"src="<?php echo get_theme_mod($giving_rides_steps_img); ?>"> 
      </span>
      <div class="steps-timeline">
        <ul class="steps-timeline-list">
          <li class="steps-bullet">
          <span id="giving-rides-step-one-header">
              <h3 class="steps-subtitle"><?php echo get_theme_mod($giving_rides_timeline_step_one); ?> </h3>
            </span>
            <span id="giving-rides-step-one-text">
            <h4 class="steps-sub-info"><?php echo get_theme_mod($giving_rides_step_one_description) ?></h4>
            </span>
            <button class="steps-button" type="button">Application</button>
          </li>
          <li class="steps-bullet">
          <span id="giving-rides-step-two-header">
              <h3 class="steps-subtitle"><?php echo get_theme_mod($giving_rides_timeline_step_two); ?></h3>
            </span>
            <span id="giving-rides-step-two-text">
            <h4 class="steps-sub-info"><?php echo get_theme_mod($giving_rides_step_two_description) ?></h4>
            </span>
            <br>
          </li>
          <li class="steps-bullet">
          <span id="giving-rides-step-three-header">
              <h3 class="steps-subtitle"><?php echo get_theme_mod($giving_rides_timeline_step_three); ?></h3>
            </span>
            <span id="giving-rides-step-three-text">
            <h4 class="steps-sub-info"><?php echo get_theme_mod($giving_rides_step_three_description) ?></h4>
            </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
    <div class="important-info">Important Information</div>
    <ul class="info-list">
      <span id="giving-rides-info-bullet">
      <li class="info-list-item"><?php echo get_theme_mod($giving_rides_info_bullet); ?></li>
      </span>
      <li class="info-list-item">All drivers are able to help carry groceries, and provide walking assistance to any rider who desires it. </li>
      <li class="info-list-item">Independence Rides is a 501(c)(3) public charity to help keep rides affordable.</li>
      <li class="info-list-item">This service is in collaboration with ITNAmerica, a national nonprofit senior transportation service. </li>
    </ul>
    <div class="info-icon-list">
      <div class="info-icon-box">
        <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/wheel-icon.png"></img>
        <span id="giving-rides-info-icon-text-one">
        <div class="info-icon-text"><?php echo get_theme_mod($giving_rides_info_icon_text_one) ?></div>
        </span>
      </div>
      <div class="info-icon-box">
        <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/arm-icon.png"></img>
        <span id="giving-rides-info-icon-text-two">
        <div class="info-icon-text"><?php echo get_theme_mod($giving_rides_info_icon_text_two) ?> </div>
        </span>
      </div>
      <div class="info-icon-box">
        <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/dollar-icon.png"></img>
        <span id="giving-rides-info-icon-text-three">
        <div class="info-icon-text"><?php echo get_theme_mod($giving_rides_info_icon_text_three) ?></div>
        </span>
      </div>
    </div>




<?php get_footer(); ?>
