<?php 
  get_header(); 
  require get_template_directory() . '/inc/section_vars.php';
?>

<style>@import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');</style>

<!-- <section class="home-section-1 about-us-header">
  <h1 class="section-1-title"> About Us </h1>
</section> -->

<div class="top-section" style="background: url(<?php echo get_theme_mod($about_us_header_image) ?>); background-repeat: no-repeat; background-size: cover;">
    <h1 class="section-1-title">About Us</h1>
</div>

<div class="about-us-text-box">
  <h1 class="header-text">Why we are here</h1>
  <div class="header-line"></div>
  <p class="about-us-paragraph"><span id="copy-write"><?php  echo get_theme_mod($about_us_top_desc); ?></span> </p>
</div>

<div class="about-us-middle-section">
  <div class="quote-container">
    <img class="quotation-mark-left" src="<?php echo get_template_directory_uri();?>/images/quotation marks left.png">
    <p class="quotation-text">
      <span id="copy-write"><?php  echo get_theme_mod($about_us_quote); ?></span>
    </p>
    <img class="quotation-mark-right" src="<?php echo get_template_directory_uri();?>/images/quotation marks right.png">
  </div>
  <div class="video-container">
  <span id="about_us_video"></span>
    <iframe id="video-screenshot" src="<?php echo wp_get_attachment_url(get_theme_mod($about_us_video))?>"></iframe>
  </span>
  </div>
</div>

<p class="text-why-we-here">
  <span id="copy-write"><?php  echo get_theme_mod($about_us_mid_paragraph); ?></span>
</p>

<div class="about-us-bottom-section" style="background-image: url(<?php echo wp_get_attachment_url( get_theme_mod( $about_us_image) )?>)">
  <div class="image-text-container">
    <p class="image-text">
    <span id="copy-write"><?php  echo nl2br(get_theme_mod($about_us_image_text)); ?></span>
    </p>
  </div>
</div>

<?php get_footer(); ?>