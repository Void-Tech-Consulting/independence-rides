<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>
<h1>The Front Page</h1>

<?php if (get_theme_mod($home_top_img)) { ?>
  <img 
    src="<?php echo get_theme_mod($home_top_img) ?>" 
    alt=""
  >
<?php } ?>

<?php if (get_theme_mod($home_top_desc)) { ?>
  <h4>
    <?php echo get_theme_mod($home_top_desc) ?>
  </h4>
<?php } ?>

<!-- Example with default video if $home_top_vid isn't set -->
<iframe 
  class="yt-vid" 
  src="<?php echo get_theme_mod($home_top_vid, 'https://www.youtube.com/embed/A0Wyx-OOX4A'); ?>" 
  frameborder="0" 
  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe>
<div class="info-icon-list info-icon-list-home">
      <div class="box-top">
        <div class="info-icon-box-gray light-arms-box">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/light-arms.png">
          <div class="info-icon-text-subtitle">Assistance Provided</div>
          <div class="info-icon-text info-icon-text-home">Arm-through-arm and door-through-door assistance, help with canes, walkers, folding wheelchairs, grocery bags, and packages</div>
        </div>
        <div class="info-icon-box-white dollar-box">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/dollar-icon.png">
          <div class="info-icon-text-subtitle">Payment</div>
          <div class="info-icon-text info-icon-text-home">Fares paid through our internal account system (no cash or cards needed), trading your unwanted car can help pay for rides, our nonprofit status keeps fares low</div>
        </div>
      </div>
      <div class="box-bot">
        <div class="info-icon-box-gray light-clock-box">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/light-clock.png">
          <div class="info-icon-text-subtitle">Availability</div>
          <div class="info-icon-text info-icon-text-home">Rides available 24/7 for any reason. The current COVID-19 pandemic may drive some restrictions.</div>
        </div>
        <div class="info-icon-box-white wheel-box">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/wheel-icon.png">
          <div class="info-icon-text-subtitle">Drivers</div>
          <div class="info-icon-text info-icon-text-home">Drivers are trained community volunteers who have passed criminal background and driving record checks.</div>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
