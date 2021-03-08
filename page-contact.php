<?php 
  get_header(); 
  require get_template_directory() . '/inc/section_vars.php';
?>

<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
  <div class="top-section" style="background: url(<?php echo get_theme_mod($contact_header_image) ?>); background-repeat: no-repeat; background-size: cover;">
    <h1 class="section-1-title" id="contact-header-font">Contact Us</h1>
  </div>

  <div class="contact-middle-section">
    <div class="contact-blue-box-section">
      <div class="contact-blue-box-middle">
      <span id="contact_name"><p class="contact-blue-box-text"><?php echo get_theme_mod($contact_name); ?></p></span>
      <span id="contact_position"><p class="contact-blue-box-text"><?php echo get_theme_mod($contact_position); ?></p></span>
      <span id="contact_phone"><p class="contact-blue-box-text"><?php echo get_theme_mod($contact_phone); ?></p></span>
      <span id="contact_phone2"><p class="contact-blue-box-text"><?php echo get_theme_mod($contact_phone2); ?></p></span>
      <span id="contact_email"><p class="contact-blue-box-text"><?php echo get_theme_mod($contact_email); ?></p></span>
      </div>
    </div>
    <div class="contact-middle-right"></div>
  </div>

  <div class="contact-footer-mobile">
    <div class="column-left">
      <span id="contact_name"><p class="contact-blue-box-text"><?php echo get_theme_mod($contact_name); ?></p></span>
      <span id="contact_position"><p class="contact-blue-box-text"><?php echo get_theme_mod($contact_position); ?></p></span>
    </div>
    <div class="column-right">
      <span id="contact_phone"><p class="contact-blue-box-text"><?php echo get_theme_mod($contact_phone); ?></p></span>
      <span id="contact_phone2"><p class="contact-blue-box-text"><?php echo get_theme_mod($contact_phone2); ?></p></span>
      <span id="contact_email"><p class="contact-blue-box-text"><?php echo get_theme_mod($contact_email); ?></p></span>
    </div>
  </div>
  
</body>


<?php get_footer(); ?>
