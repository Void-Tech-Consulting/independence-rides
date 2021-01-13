<?php 
  get_header(); 
?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Home</title>
    <meta name="Home" content="Home">
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>

    <div class="info-icon-list info-icon-list-home">
      <div class="box-top">
        <div class="info-icon-box-gray">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/light-arms.png">
          <div class="info-icon-text-subtitle">Assistance Provided</div>
          <div class="info-icon-text info-icon-text-home">Arm-through-arm and door-through-door assistance, help with canes, walkers, folding wheelchairs, grocery bags, and packages</div>
        </div>
        <div class="info-icon-box-white">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/dollar-icon.png">
          <div class="info-icon-text-subtitle">Payment</div>
          <div class="info-icon-text info-icon-text-home">Fares paid through our internal account system (no cash or cards needed), trading your unwanted car can help pay for rides, our nonprofit status keeps fares low</div>
        </div>
      </div>
      <div class="box-bot">
        <div class="info-icon-box-gray">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/light-clock.png">
          <div class="info-icon-text-subtitle">Availability</div>
          <div class="info-icon-text info-icon-text-home">Rides available 24/7 for any reason. The current COVID-19 pandemic may drive some restrictions.</div>
        </div>
        <div class="info-icon-box-white">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/wheel-icon.png">
          <div class="info-icon-text-subtitle">Drivers</div>
          <div class="info-icon-text info-icon-text-home">Drivers are trained community volunteers who have passed criminal background and driving record checks.</div>
        </div>
      </div>
    </div>
</body>
</html>



<?php get_footer(); ?>
