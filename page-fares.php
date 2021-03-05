<?php 
  get_header(); 
  require get_template_directory() . '/inc/section_vars.php';
?>

  <span id="fares_top_image"><div id="fares-top" style="background: url(<?php echo get_theme_mod($fares_top_image)?>); background-repeat: no-repeat;
    background-size: cover;" class="top-section"></span>
    <div class="top-info">
      <h1 class="top-header">How much does a ride cost?</h1>
      <button class="apply-button" type="button" onclick="window.open('<?php echo (get_theme_mod($fares_top_button))?>','_blank')">Apply Now</button>
    </div>
  </div>
  
  <div class="blue-box">
          <span class="intro-text" id="fares_blue_left"><?php  echo get_theme_mod($fares_blue_left); ?></span>
          <div class="intro-vertline"></div>
          <span class="intro-text" id="fares_blue_right"><?php  echo get_theme_mod($fares_blue_right); ?></span>
  </div>

  <span id="fares_paragraph"><p class="page-paragraph"><?php  echo get_theme_mod($fares_paragraph); ?></p></span>

  <div class="header-banner">Charges are as follows</div>
    <div class="steps-section">
      <div class="steps-content">
        <div class="fares-steps-body">
          <div class="fares-steps-timeline">
            <ul class="steps-timeline-list">
              <li class="steps-bullet">
                <span id="fares_charges_bullet1"><h3 class="steps-subtitle"><?php  echo get_theme_mod($fares_charges_bullet1); ?></h3></span>
                <!-- <h3 class="steps-subtitle">Rides starting and ending within the initial service area (see map below)</h3> -->
                <ul class="sub-list">
                  <span id="fares_charges_minibullet1"><li class="sub-list-item"><?php  echo get_theme_mod($fares_charges_minibullet1); ?></li></span>
                  <!-- <li class="sub-list-item">Flat $10 fare (one way)</li> -->
                </ul>
                <span id="fares_charges_map"><img id="fares-map" style="background: url(<?php echo get_theme_mod($fares_charges_map)?>); background-repeat: no-repeat; background-size: contain;"></span>
              </li>
              <li class="steps-bullet">
                <h3 class="steps-subtitle">All other rides</h3>
                <ul class="sub-list">
                  <li class="sub-list-item">Regular rides are available from 6 am – 9 pm, 7 days/week </li>
                  <li class="sub-list-item">Pick-up fee: $5.00 per ride (one way) </li>
                  <li class="sub-list-item">Per mile charge: $1.00  </li>
                  <li class="sub-list-item">Example of a 7-mile ride: $5 (pick up fee) + $1 per mile = $5 + $7 = $12 (one way)</li>
                </ul>
              </li>
              <li class="steps-bullet">
                <h3 class="steps-subtitle">After-hours rides are from 9 pm - 6 am, 7 days/week</h3>
                <ul class="sub-list">
                  <li class="sub-list-item">Pick-up fee: $10.00 per ride (one way) </li>
                  <li class="sub-list-item">Per mile charge: $1.00  </li>
                  <li class="sub-list-item">Example of a 7-mile ride: $10 (pick up fee) + $1 per mile = $10 + $7 = $17 (one way)</li>
                </ul>
              </li>
              <li class="steps-bullet">
                <h3 class="steps-subtitle">Extra stops of 15 minutes or less are $2.50 each</h3>
              </li>
            </ul>
          </div>
        </div>
      </div>
   </div>




<?php get_footer(); ?>
