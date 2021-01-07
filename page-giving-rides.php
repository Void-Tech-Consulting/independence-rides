<?php 
  get_header(); 
?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Giving Rides</title>
    <meta name="Giving-Rides" content="Giving-Rides">
    <link rel="stylesheet" href="giving-rides.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <div class="blue-box">
      <div class="intro-text">Independence Rides is entirely volunteer-driven.</div>
      <div class="intro-vertline"></div>
      <div class="intro-text"> All drivers are courteous and trained volunteers who have passed criminal background and driving record checks. </div>
    </div>
    <div class="important-info">Important Information</div>
    <ul id="info-list">
      <li class="info-list-item">We make sure that the vehicle and all occupants are fully insured according to Michigan state law. </li>
      <li class="info-list-item">All drivers are able to help carry groceries, and provide walking assistance to any rider who desires it. </li>
      <li class="info-list-item">Independence Rides is a 501(c)(3) public charity to help keep rides affordable.</li>
      <li class="info-list-item">This service is in collaboration with ITNAmerica, a national nonprofit senior transportation service. </li>
    </ul>
    <ul id="info-icon-list">
      <li class="info-icon-box">
        <img class = "info-icon-image1" src = "<?php echo get_template_directory_uri();?>/images/wheel-icon.png">
        <div class="info-icon-text2">In nearly all cases the drivers will be providing the rides in their own vehicles. </div>
      </li>
      <li class="info-icon-box">
        <img class = "info-icon-image2" src = "<?php echo get_template_directory_uri();?>/images/arm-icon.png">
        <div class="info-icon-text">Riders who use walkers and folding wheelchairs will be paired with drivers who can lift and stow these devices. </div>
      </li>
      <li class="info-icon-box">
        <img class = "info-icon-image3" src = "<?php echo get_template_directory_uri();?>/images/dollar-icon.png">
        <div class="info-icon-text">Paid drivers, with the same training and background checks, may be used during overnight hours to ensure that all ride requests can be met.</div>
      </li>
    </ul>
</body>
</html>



<?php get_footer(); ?>
