<?php 
  get_header(); 
  require get_template_directory() . '/inc/section_vars.php';
?>


<span id="receiving-rides-cover-img">
<div id="receiving-rides-top" class="top-section" style="background: url(<?php echo get_theme_mod($receiving_rides_header_image) ?>); background-repeat: no-repeat; background-size: cover;">
  <div class="top-info">
    <h1 class="top-header">Let's go for a ride!</h1>
    <span id="receiving_rides_apply_button">
      <a href=" <?php echo get_theme_mod($receiving_rides_apply_button) ?>">                  
        <button class="apply-button" type="button"> Apply Now </button>
      </a>
    </span>
  </div>
</div>
</span>

<div class="blue-box">
  <span id="receiving-rides-blue-box-left" class="intro-text" ><?php echo get_theme_mod($receiving_rides_blue_box_left_text); ?></span>
  <div class="intro-vertline"></div>
  <span id="receiving-rides-blue-box-right" class="intro-text"><?php echo get_theme_mod($receiving_rides_blue_box_right_text); ?></span>
</div>

<p class="page-paragraph">
  <span id="middle-paragraph"><?php echo get_theme_mod($receiving_rides_middle_paragraph); ?></span>
</p>

<div class="steps-section">
  <div class="steps-content">
    <div class="steps-header">
      <h2 class="steps-name">Receiving Rides</h2>
      <div class="steps-underline"></div>
    </div>
    <div class="steps-body">
      <span id="receiving-rides-steps-img">
        <img class="steps-img"src="<?php echo wp_get_attachment_url(get_theme_mod($receiving_rides_steps_img)); ?>"> 
      </span>

        <!-- Repeatable Step section -->
        <?php
      require 'inc/section_vars.php';
      // get_bullet_data is in /inc/template_functions.php
      $data  = get_receiving_rides_timeline_data($receiving_rides_step);
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
                <span id="receiving-rides-step">
                  <h3 class="steps-subtitle"> <?php echo $f['step'] ?> </h3>
                </span>
                <span id="receiving-rides-step">
                  <h4 class="steps-sub-info"> <?php echo $f['descript'] ?> </h4>
                </span>
                <?php if ($f['pdf']['url'] != '') { ?>
                  <a href="<?php echo $f['pdf']['url'] ?>">                  
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

<?php get_footer(); ?>