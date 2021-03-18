<?php 
  get_header(); 
  require get_template_directory() . '/inc/section_vars.php';
?>

<!-- <head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head> -->

<body>
  <div class="top-section" style="background: url(<?php echo get_theme_mod('donate_header_image') ?>); background-repeat: no-repeat; background-size: cover;">
    <h1 class="section-1-title">Donate Today</h1>
  </div>

  <div class="donate-blue-box-section">
    <div class="donate-blue-box-middle">
      <div class="donate-box-text"><span id="donate_blue_box_text"><?php  echo get_theme_mod($donate_blue_box_text); ?></span></div>
      <div class="donate-box-line">
      </div>
    </div>
  </div>
</body>


<?php get_footer(); ?>
