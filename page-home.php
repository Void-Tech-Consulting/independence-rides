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

    <ul id="info-icon-list">
      <li class="info-icon-box">
        <img class = "info-icon-image1" src = "<?php echo get_template_directory_uri();?>/images/light-arms.png">
        <div class="info-icon-text-subtitle">Assistance Provided</div>
        <div class="info-icon-text2">Arm-through-arm and door-through-door assistance, help with canes, walkers, folding wheelchairs, grocery bags, and packages</div>
      </li>
      <li class="info-icon-box-white">
        <img class = "info-icon-image2" src = "<?php echo get_template_directory_uri();?>/images/dollar-icon.png">
        <div class="info-icon-text-subtitle">Payment</div>
        <div class="info-icon-text">Fares paid through our internal account system (no cash or cards needed), trading your unwanted car can help pay for rides, our nonprofit status keeps fares low</div>
      </li>
      <li class="info-icon-box">
        <img class = "info-icon-image3" src = "<?php echo get_template_directory_uri();?>/images/light-clock.png">
        <div class="info-icon-text-subtitle">Availability</div>
        <div class="info-icon-text">Rides available 24/7 for any reason. The current COVID-19 pandemic may drive some
restrictions.</div>
      </li>
      <li class="info-icon-box-white">
        <img class = "info-icon-image4" src = "<?php echo get_template_directory_uri();?>/images/wheel-icon.png">
        <div class="info-icon-text-subtitle">Drivers</div>
        <div class="info-icon-text">Drivers are trained community volunteers who have passed criminal background and driving record checks.</div>
      </li>
    </ul>
</body>
</html>



<?php get_footer(); ?>
