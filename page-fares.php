<?php 
  get_header(); 
?>


  <div id="fares-top" class="top-section">
    <div class="top-info">
      <h1 class="top-header">How much does a ride cost?</h1>
      <button class="apply-button" type="button">Apply Now</button>
    </div>
  </div>
  
  <div class="blue-box">
          <div class="intro-text">Prices vary based on location, time of day, and number of stops.</div>
          <div class="intro-vertline"></div>
          <div class="intro-text">If a driver is requested to wait longer than 15 minutes, a $20 per hour wait fee is charged.</div>
  </div>

  <p class="page-paragraph">
  Drivers do not usually stay with the client during an appointment or activity. The same or a 
  different driver will pick them up for their pre-scheduled return ride. 
  </p>

  <div class="header-banner">Charges are as follows</div>
    <div class="steps-section">
      <div class="steps-content">
        <div class="fares-steps-body">
          <div class="fares-steps-timeline">
            <ul class="steps-timeline-list">
              <li class="steps-bullet">
                <h3 class="steps-subtitle">Rides starting and ending within the initial service area (see map below)</h3>
                <ul class="sub-list">
                  <li class="sub-list-item">Flat $10 fare (one way)</li>
                </ul>
                <img id="fares-map" src="<?php echo get_template_directory_uri();?>/images/service-area.png"> 
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
