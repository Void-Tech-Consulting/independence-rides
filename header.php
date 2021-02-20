<!-- If you have a navbar or html on the top of every page put it here -->
<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <title>Independence Rides</title>
</head>

<body>
  <!-- Example navbar -->
  <div id="menu" class="nav-wrapper nav">
    <div class="nav-flex">
     <div>
          <a class="nav-logo" href="<?php echo home_url();?>">
            Independence Rides
          </a>
          <a class="nav-sub-logo" href="<?php echo home_url();?>">
            powered by ITNCountry
          </a>
      </div>
      <?php
      $args = array(
        "theme_location" => "primary",
        "container" => "ul",
        "menu_class" => "nav-links"
      );
      wp_nav_menu($args);
      ?>
     <span class="dashicons dashicons-menu-alt3"></span>
    </div>
  </div>
