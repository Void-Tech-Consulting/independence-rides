<?php 
  get_header(); 
?>


    <div id="giving-rides-top" class="top-section">
      <div class="top-info">
        <h1 class="top-header">Can you lend a hand?</h1>
        <button class="apply-button" type="button">Apply Now</button>
      </div>
    </div>
    <div class="blue-box">
      <div class="intro-text">Independence Rides is entirely volunteer-driven.</div>
      <div class="intro-vertline"></div>
      <div class="intro-text"> All drivers are courteous and trained volunteers who have passed criminal background and driving record checks. </div>
    </div>

    <p class="page-paragraph">
      Volunteer drivers earn mileage credits which can be kept for their own use, donated back to Independence Rides, 
      donated to low income riders, or donated to family/ friends who are also members.
    </p>

    <div class="steps-section">
  <div class="steps-content">
    <div class="steps-header">
      <h2 class="steps-name">Giving Rides</h2>
      <div class="steps-underline"></div>
    </div>
    <div class="steps-body">
      <img class="steps-img"src="<?php echo get_template_directory_uri();?>/images/giving-rides-steps.png"> 
      <div class="steps-timeline">
        <ul class="steps-timeline-list">
          <li class="steps-bullet">
            <h3 class="steps-subtitle">Step One</h3>
            <h4 class="steps-sub-info">Complete an application to ensure we have complete contact information.</h4>
            <button class="steps-button" type="button">Application</button>
          </li>
          <li class="steps-bullet">
            <h3 class="steps-subtitle">Step Two</h3>
            <h4 class="steps-sub-info">Pass criminal background and driving record checks and complete training.</h4>
            <br>
          </li>
          <li class="steps-bullet">
            <h3 class="steps-subtitle">Step Three</h3>
            <h4 class="steps-sub-info">Provide rides when requested and earn mileage credits. </h4>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

    <div class="important-info">Important Information</div>
    <ul class="info-list">
      <li class="info-list-item">We make sure that the vehicle and all occupants are fully insured according to Michigan state law. </li>
      <li class="info-list-item">All drivers are able to help carry groceries, and provide walking assistance to any rider who desires it. </li>
      <li class="info-list-item">Independence Rides is a 501(c)(3) public charity to help keep rides affordable.</li>
      <li class="info-list-item">This service is in collaboration with ITNAmerica, a national nonprofit senior transportation service. </li>
    </ul>
    <div class="info-icon-list">
      <div class="info-icon-box">
        <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/wheel-icon.png"></img>
        <div class="info-icon-text">In nearly all cases the drivers will be providing the rides in their own vehicles. </div>
      </div>
      <div class="info-icon-box">
        <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/arm-icon.png"></img>
        <div class="info-icon-text">Riders who use walkers and folding wheelchairs will be paired with drivers who can lift and stow these devices. </div>
      </div>
      <div class="info-icon-box">
        <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/dollar-icon.png"></img>
        <div class="info-icon-text">Paid drivers, with the same training and background checks, may be used during overnight hours to ensure that all ride requests can be met.</div>
      </div>
    </div>




<?php get_footer(); ?>
