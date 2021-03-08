<!-- If you have html on the footer of each page put it here -->
<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>

<section class="footer">
  <div class="rides-contact">
    <div class="footer-rides">
      <h3 class="footer-heading">Independence Rides</h1>
      <p class="ITN-footer">powered by ITNCountry</p>
    </div>
    <div class="contact-footer-title">Contact Us</div>
    <div class="footer-contact">
    <span id="contact_us_text"><p class="info-footer"><?php echo nl2br(get_theme_mod($contact_us_text))?></p></span>
    </div>
    <!-- <div class="footer-section">
      <h3 class="footer-title contact-us-title">Contact Us</h3>
      <span id="copy-write"><p class="info-footer"><?//php echo nl2br(get_theme_mod($contact_us_text))?></p></span>
    </div> -->
  </div>
  <div class="footer-section">
      <h3 class="footer-title">Our Mission </h3>
      <span id="our_mission_text"><p class="info-footer"><?php echo nl2br(get_theme_mod($our_mission_text))?></p></span>
  </div>
  <div class="footer-section">
    <h3 class="footer-title">Information</h3>
    <span id="foot_about_us_link"><p class="info-footer"><a href="<?php echo get_permalink(get_theme_mod($foot_about_us_link))?>">About Us</a></p></span>
    <p class="footer-link"><a href="<?php echo get_permalink(get_theme_mod($foot_receiving_link))?>">Receiving Rides</a></p>
    <p class="footer-link"><a href="<?php echo get_permalink(get_theme_mod($foot_fares_link))?>">Fares</a></p>

    <!-- <span id="copy-write"><p class="info-footer"><?//php echo nl2br(get_theme_mod($information_text))?></p></span> -->
  </div>
  <div class="footer-section">
    <h3 class="footer-title">Get Involved</h3>
    <span id="foot_giving_link"><p class="info-footer"><a href="<?php echo get_permalink(get_theme_mod($foot_giving_link))?>">Giving Rides</a></p></span>
    <p class="footer-link"><a>Ride Coordinator</a></p>
  </div>
  <div class="footer-section">
    <h3 class="footer-title">Donate</h3>
  </div>
  <div class="footer-section">
    <div class="footer-image">
      <span id="greystar_link"><a href="<?php echo (get_theme_mod($greystar_link))?>"><img class="transparency-seal" src = "<?php echo get_template_directory_uri();?>/images/seal-of-transparency.png"></a></span>
    </div>
  </div>

</section>


<?php wp_footer(); ?>
