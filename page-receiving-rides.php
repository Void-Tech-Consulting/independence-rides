<?php 
  get_header(); 
  require get_template_directory() . '/inc/section_vars.php';
?>

<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
<span id="receiving-rides-cover-img">
<div id="receiving-rides-top" class="top-section" style="background: url(<?php echo get_theme_mod($receiving_rides_header_image) ?>); background-repeat: no-repeat; background-size: cover;">
  <div class="top-info">
    <h1 class="top-header">Let's go for a ride!</h1>
    <button class="apply-button" type="button">Apply Now</button>
  </div>
</div>
</span>

<div class="blue-box">
  <span id="receiving-rides-blue-box-left" class="intro-text" ><?php echo get_theme_mod($receiving_rides_blue_box_left_text); ?></span>
  <div class="intro-vertline"></div>
  <span id="receiving-rides-blue-box-right" class="intro-text"><?php echo get_theme_mod($receiving_rides_blue_box_right_text); ?></span>
</div>

<p class="page-paragraph">
  <span id="middle-paragraph"><?php echo get_theme_mod($receiving_rides_middle_paragraph); ?></span>
</p>

<div class="steps-section">
  <div class="steps-content">
    <div class="steps-header">
      <h2 class="steps-name">Receiving Rides</h2>
      <div class="steps-underline"></div>
    </div>
    <div class="steps-body">
      <span id="receiving-rides-steps-img">
        <img class="steps-img"src="<?php echo get_theme_mod($receiving_rides_steps_img); ?>"> 
      </span>
      <div class="steps-timeline">
        <ul class="steps-timeline-list">
          <li class="steps-bullet">
            <span id="receiving-rides-step-one-header">
              <h3 class="steps-subtitle"><?php echo get_theme_mod($receiving_rides_timeline_step_one); ?> </h3>
            </span>
            <span id="receiving-rides-step-one-text">
            <h4 class="steps-sub-info"><?php echo get_theme_mod($receiving_rides_step_one_description) ?></h4>
            </span>
            <button class="steps-button" type="button">Application</button>
          </li>
          <li class="steps-bullet">
            <span id="receiving-rides-step-two-header">
              <h3 class="steps-subtitle"><?php echo get_theme_mod($receiving_rides_timeline_step_two); ?></h3>
            </span>
            <span id="receiving-rides-step-two-text">
            <h4 class="steps-sub-info"><?php echo get_theme_mod($receiving_rides_step_two_description) ?></h4>
            </span>
              <button class="steps-button" type="button">Membership</button>
          </li>
          <li class="steps-bullet">
            <span id="receiving-rides-step-three-header">
              <h3 class="steps-subtitle"><?php echo get_theme_mod($receiving_rides_timeline_step_three); ?></h3>
            </span>
            <span id="receiving-rides-step-three-text">
            <h4 class="steps-sub-info"><?php echo get_theme_mod($receiving_rides_step_three_description) ?></h4>
            </span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>


</body>

<?php get_footer(); ?>