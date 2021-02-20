<?php 
  get_header(); 
?>

<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

<div id="receiving-rides-top" class="top-section" style="background: url(<?php echo get_theme_mod('receiving_rides_header_image') ?>); background-repeat: no-repeat; background-size: cover;">
  <div class="top-info">
    <h1 class="top-header">Let's go for a ride!</h1>
    <button class="apply-button" type="button">Apply Now</button>
  </div>
</div>

<div class="blue-box">
  <span id="copy-write"><?php echo get_theme_mod($blue_box_left_text); ?></span>
  <div class="intro-text"><?php echo get_theme_mod('blue_box_left_text') ?></div>
  <div class="intro-vertline"></div>
  <div class="intro-text"><?php echo get_theme_mod('blue_box_right_text') ?></div>
  <span id="copy-write"><?php echo get_theme_mod($blue_box_right_text); ?></span>
</div>

<p class="page-paragraph">
  Our service Is specifically designed for people age 60 & over, 
  and vision impaired adults, age 18 & over.
</p>

<div class="steps-section">
  <div class="steps-content">
    <div class="steps-header">
      <h2 class="steps-name">Receiving Rides</h2>
      <div class="steps-underline"></div>
    </div>
    <div class="steps-body">
      <img class="steps-img"src="<?php echo get_theme_mod('steps_img') ?>"> 
      <span id="copy-write"><?php echo get_theme_mod($steps_img); ?></span>
      <div class="steps-timeline">
        <ul class="steps-timeline-list">
          <li class="steps-bullet">
            <h3 class="steps-subtitle"><?php echo get_theme_mod('timeline_step_one') ?></h3>
            <span id="copy-write"><?php echo get_theme_mod($timeline_step_one); ?></span>
            <h4 class="steps-sub-info"><?php echo get_theme_mod('step_one_description') ?></h4>
            <button class="steps-button" type="button">Application</button>
          </li>
          <li class="steps-bullet">
            <h3 class="steps-subtitle"><?php echo get_theme_mod('timeline_step_two') ?></h3>
            <span id="copy-write"><?php echo get_theme_mod($timeline_step_two); ?></span>
            <h4 class="steps-sub-info"><?php echo get_theme_mod('step_two_description') ?></h4>
              <button class="steps-button" type="button">Membership</button>
          </li>
          <li class="steps-bullet">
            <h3 class="steps-subtitle"><?php echo get_theme_mod('timeline_step_three') ?></h3>
            <span id="copy-write"><?php echo get_theme_mod($timeline_step_three); ?></span>
            <h4 class="steps-sub-info"><?php echo get_theme_mod('step_three_description') ?></h4>
          </li>
        </ul>
      </div>
    </div>
  </div>

  </div>
  
</div>


</body>

<?php get_footer(); ?>