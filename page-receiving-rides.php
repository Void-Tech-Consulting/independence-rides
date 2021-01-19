<?php 
  get_header(); 
?>

</head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

<div id="receiving-rides-top" class="top-section">
  <div class="top-info">
    <h1 class="top-header">Let's go for a ride!</h1>
    <button class="apply-button" type="button">Apply Now</button>
  </div>
</div>

<div class="blue-box">
  <div class="intro-text">We want to make your ride simple and pleasant.</div>
  <div class="intro-vertline"></div>
  <div class="intro-text">We are designed for seniors and vision impaired adults. We offer rides for any reason that include arm-through-arm, door-through-door assistance. 
Any time of the day and for any reason we are here for you or your loved one. </div>
</div>

<p class="page-paragraph">
  Our service Is specifically designed for people age 60 & over, 
  and vision impaired adults, age 18 & over.
</p>

<div class="steps-section">
  <div class="steps-content">
  <div class="steps-header">
    <h2 class="steps-name">Recieving Rides</h2>
    <div class="steps-underline"></div>
  </div>
  <div class="steps-body">
    <img class="steps-img"src="<?php echo get_template_directory_uri();?>/images/receiving-rides-steps.png"> 
    <div class="steps-timeline">
      <ul class="steps-timeline-list">
        <li class="steps-bullet">
          <h3 class="steps-subtitle">Step One</h3>
          <h4 class="steps-sub-info">Complete an application to ensure we have complete contact information.</h4>
          <button class="steps-button" type="button">Application</button>
        </li>
        <li class="steps-bullet">
          <h3 class="steps-subtitle">Step Two</h3>
          <h4 class="steps-sub-info">Set up a membership for payment options.</h4>
            <button class="steps-button" type="button">Membership</button>
        </li>
        <li class="steps-bullet">
          <h3 class="steps-subtitle">Step Three</h3>
          <h4 class="steps-sub-info">Schedule a ride at least 24 hours in advance. 
            Rides are normally available for any reason, but are limited to medical 
            appointments and grocery shopping during the Coronavirus pandemic for 
            your safety</h4>
        </li>
      </ul>
    </div>
  </div>

  </div>
  
</div>


</body>

<?php get_footer(); ?>