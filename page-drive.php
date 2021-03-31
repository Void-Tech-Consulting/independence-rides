<?php 
  get_header(); 
  require get_template_directory() . '/inc/section_vars.php';
?>

<!-- <head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head> -->

<body>
  <div class="top-section" style="background: url(<?php echo get_theme_mod('drive_header_image') ?>); background-repeat: no-repeat; background-size: cover;">
    <h1 class="section-1-title">Apply to be a Driver</h1>
  </div>

  <div class="blue-box">
          <span class="intro-text" id="fares_blue_left"><?php  echo get_theme_mod($drive_blue_left); ?></span>
          <div class="intro-vertline"></div>
          <span class="intro-text" id="fares_blue_right"><?php  echo get_theme_mod($drive_blue_right); ?></span>
  </div>

  <div class="header-banner">Option 1</div>
    <div class="steps-body steps-body-drive">
      <div class="steps-timeline">
        <ul class="steps-timeline-list">
          <li class="steps-bullet">
            <h3 class="steps-subtitle drive-list-text">Download the following form</h3>
            <button class="steps-button" type="button">Download</button>
          </li>
          <li class="steps-bullet">
            <h3 class="steps-subtitle drive-list-text">Submit the completed form here</h3>
            <button class="steps-button" type="button">Submit</button>
            <br>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="header-banner">Option 2</div>
    <div class="steps-body steps-body-drive">
      <div class="steps-timeline">
        <ul class="steps-timeline-list">
          <li class="steps-bullet">
            <h3 class="steps-subtitle drive-list-text">Download the following form</h3>
            <h4 class="steps-sub-info">Please send your questions or comments here.</h4>
          </li>
        </ul>
      </div>
    </div>
  </div>

</body>

<?php get_footer(); ?>
