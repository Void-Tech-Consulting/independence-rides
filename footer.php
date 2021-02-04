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
      <!-- <p class="info-footer">CARL W. WELLBORN SR.<br>EXECUTIVE DIRECTOR<br>TEL: 313-618-1578<br>TEL: 313-618-3361<br>CARL@INDEPENDENCERIDES.COM</p> -->
      <p class="info-footer"><?php echo nl2br(get_theme_mod($contact_us_text))?></p>
    </div>
  </div>
  <div class="footer-section">
      <h3 class="footer-title">Our Mission </h3>
      <p class="info-footer"><?php echo nl2br(get_theme_mod($our_mission_text))?></p>
  </div>
  <div class="footer-section">
    <h3 class="footer-title">Information</h3>
    <p class="info-footer"><?php echo nl2br(get_theme_mod($information_text))?></p>
  </div>
  <div class="footer-section">
    <h3 class="footer-title">Get Involved</h3>
    <p class="info-footer"><?php echo nl2br(get_theme_mod($get_involved_text))?></p>
  </div>
  <div class="footer-section">
    <h3 class="footer-title">Donate</h3>
  </div>
  <div class="footer-section">
    <div class="footer-image">
      <img class="transparency-seal" src = "<?php echo get_template_directory_uri();?>/images/seal-of-transparency.png">
    </div>
  </div>

</section>


<?php wp_footer(); ?>
