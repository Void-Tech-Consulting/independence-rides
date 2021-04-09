<?php
get_header();
require get_template_directory() . '/inc/section_vars.php';
?>

<span id="giving-rides-cover-img">
  <div id="giving-rides-top" class="top-section" style="background: url(<?php echo get_theme_mod('giving_rides_header_image') ?>); background-repeat: no-repeat; background-size: cover;">
    <div class="top-info">
      <h1 class="top-header">Can you lend a hand?</h1>
      <span id="giving_rides_apply_button">
        <a href=" <?php echo get_permalink(get_theme_mod($giving_rides_apply_button)) ?>">
          <button class="apply-button" type="button"> Apply Now </button>
        </a>
      </span>
    </div>
  </div>
</span>


<div class="blue-box">
  <div class="intro-text">
    <span id="giving-rides-blue-box-left"> <?php echo get_theme_mod($giving_rides_blue_box_left) ?> </span>
  </div>
  <div class="intro-vertline"></div>
  <div class="intro-text">
    <span id="giving-rides-blue-box-right"> <?php echo get_theme_mod($giving_rides_blue_box_right) ?> </span>
  </div>

</div>

<p class="page-paragraph">
  <span id="giving-rides-middle-paragraph"> <?php echo get_theme_mod($giving_rides_middle_paragraph) ?> </span>
</p>

<div class="steps-section">
  <div class="steps-content">
    <div class="steps-header">
      <h2 class="steps-name">Giving Rides</h2>
      <div class="steps-underline"></div>
    </div>
    <div class="steps-body">
      <span id="giving-rides-steps-img">
        <img class="steps-img" src="<?php echo wp_get_attachment_url(get_theme_mod($giving_rides_steps_img)); ?>">
      </span>


      <!-- Repeatable Step section -->
      <?php
      require 'inc/section_vars.php';
      // get_bullet_data is in /inc/template_functions.php
      $data  = get_giving_rides_timeline_data($giving_rides_step);
      if (!empty($data)) {
      ?>
        <div class="steps-timeline">
          <ul class="steps-timeline-list">
            <?php
            foreach ($data as $k => $f) {
              // Make sure to use a semicolon; when using php on multiple lines
              $bulletId = 'bullet' . $k;
            ?>
              <li class="steps-bullet">
                <span id="giving-rides-step">
                  <h3 class="steps-subtitle"> <?php echo $f['step'] ?> </h3>
                </span>
                <span id="giving-rides-step">
                  <h4 class="steps-sub-info"> <?php echo $f['descript'] ?> </h4>
                </span>
                <?php if ($f['link'] != '') { ?>
                  <a href="<?php echo $f['link'] ?>">
                    <button class="steps-button" type="button"> <?php echo $f['button'] ?> </button>
                  </a>
                <?php } ?>
              </li>



            <?php
            }
            ?>
          </ul>
        </div>
      <?php } ?>

      <!-- End of Repeatable Step section -->

    </div>
  </div>
</div>


<div class="important-info">Important Information</div>

<!-- Repeatable bullet section -->
<?php
require 'inc/section_vars.php';
// get_bullet_data is in /inc/template_functions.php
$data  = get_bullet_data($giving_rides_info_bullet);
if (!empty($data)) {
?>
  <ul class="info-list">
    <?php
    foreach ($data as $k => $f) {
      // Make sure to use a semicolon; when using php on multiple lines
      $bulletId = 'bullet' . $k;
    ?>
      <span id="giving-rides-info-bullet">
        <li class="info-list-item" <?php echo "data-bullet-id=\"" . $k . "\"" ?>>
          <?php echo $f['bullet'] ?>
        </li>
      </span>
    <?php
    }
    ?>
  </ul>
<?php } ?>

<!-- End of Repeatable bullet section -->

<div class="info-icon-list">
  <div class="info-icon-box">
    <img class="info-icon-image" src="<?php echo get_template_directory_uri(); ?>/images/wheel-icon.png"></img>
    <span id="giving-rides-info-icon-text-one">
      <div class="info-icon-text"><?php echo get_theme_mod($giving_rides_info_icon_text_one) ?></div>
    </span>
  </div>
  <div class="info-icon-box">
    <img class="info-icon-image" src="<?php echo get_template_directory_uri(); ?>/images/arm-icon.png"></img>
    <span id="giving-rides-info-icon-text-two">
      <div class="info-icon-text"><?php echo get_theme_mod($giving_rides_info_icon_text_two) ?> </div>
    </span>
  </div>
  <div class="info-icon-box">
    <img class="info-icon-image" src="<?php echo get_template_directory_uri(); ?>/images/dollar-icon.png"></img>
    <span id="giving-rides-info-icon-text-three">
      <div class="info-icon-text"><?php echo get_theme_mod($giving_rides_info_icon_text_three) ?></div>
    </span>
  </div>
</div>




<?php get_footer(); ?>