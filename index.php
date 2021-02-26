<?php 
  get_header();
  require get_template_directory() . '/inc/section_vars.php';
?>
<!-- <h1>The Front Page</h1>

<?php if (get_theme_mod($home_top_img)) { ?>
  <img 
    src="<?php echo get_theme_mod($home_top_img) ?>" 
    alt=""
  >
<?php } ?>

<?php if (get_theme_mod($home_top_desc)) { ?>
  <h4>
    <?php echo get_theme_mod($home_top_desc) ?>
  </h4>
<?php } ?>

Example with default video if $home_top_vid isn't set
<iframe 
  class="yt-vid" 
  src="<?php echo get_theme_mod($home_top_vid, 'https://www.youtube.com/embed/A0Wyx-OOX4A'); ?>" 
  frameborder="0" 
  allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe> -->


<section class="home-section-1">
  <div class="section-1-heading">
    <h1 class="section-1-title"> <?php echo nl2br(get_theme_mod($home_header_title))?> </h1>
    <p class="title-text"><?php echo get_theme_mod($home_header_p)?> </p>
    <div class="get-started-button">
      <p>Get Started</p>
    </div>
  </div>
</section>

<p class="section-1-bottom-text">Transportation freedom need not be a thing of the past.</p>
<div class=section-1-horizontal-line></div>


<div class="info-icon-list info-icon-list-home">
      <div class="box-top">
        <div class="info-icon-box-gray light-arms-box">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/light-arms.png">
          <div class="info-icon-text-subtitle">
            <span id="copy-write"><?php  echo get_theme_mod($home_info_card_1_title); ?></span>
          </div>
          <div class="info-icon-text info-icon-text-home">
          <span id="copy-write"><?php  echo get_theme_mod($home_info_card_1_desc); ?></span>
          </div>
        </div>
        <div class="info-icon-box-white dollar-box">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/dollar-icon.png">
          <div class="info-icon-text-subtitle">
            <span id="copy-write"><?php  echo get_theme_mod($home_info_card_2_title); ?></span>
          </div>
          <div class="info-icon-text info-icon-text-home">
          <span id="copy-write"><?php  echo get_theme_mod($home_info_card_2_desc); ?></span>
          </div>
        </div>
      </div>
      <div class="box-bot">
        <div class="info-icon-box-gray light-clock-box">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/light-clock.png">
          <div class="info-icon-text-subtitle">
          <span id="copy-write"><?php  echo get_theme_mod($home_info_card_3_title); ?></span>
          </div>
          <div class="info-icon-text info-icon-text-home">
          <span id="copy-write"><?php  echo get_theme_mod($home_info_card_3_desc); ?></span>
          </div>
        </div>
        <div class="info-icon-box-white wheel-box">
          <img class = "info-icon-image" src = "<?php echo get_template_directory_uri();?>/images/wheel-icon.png">
          <div class="info-icon-text-subtitle">
          <span id="copy-write"><?php  echo get_theme_mod($home_info_card_4_title); ?></span>
          </div>
          <div class="info-icon-text info-icon-text-home">
          <span id="copy-write"><?php  echo get_theme_mod($home_info_card_4_desc); ?></span>
          </div>
        </div>
      </div>
  </div>
  

<div class="next-step-section">
  <h1 class="next-step-header">Next steps...</h1>
  <div class="next-step-header-line"></div>
  <div class="page-box-container">
      <div class="next-step-box" id="giving-rides-box">
        <div class="box-header box-header-black">Giving Rides</div>
        <span id="copy-write"><p class="box-description box-description-black"><?php  echo get_theme_mod($home_giving_box); ?></p></span>
        <button type="button" class="learn-more-button learn-more-button-black"><a href="<?php echo get_permalink(get_theme_mod($home_giving_link)); ?>">Learn more</a></button>
      </div>
      <div class="next-step-box" id="receiving-rides-box">
        <div class="box-header box-header-white">Receiving Rides</div>
        <span id="copy-write"><p class="box-description box-description-white"><?php  echo get_theme_mod($home_receiving_box); ?></p></span>
        <button type="button" class="learn-more-button learn-more-button-white"><a href="<?php echo get_permalink(get_theme_mod($home_receiving_link)); ?>">Learn more</a></button>
      </div>
      <div class="next-step-box" id="contact-us-box">
        <div class="box-header box-header-black">Contact Us</div>
        <span id="copy-write"><p class="box-description box-description-black"><?php  echo get_theme_mod($home_contact_box); ?></p></span>
        <button type="button" class="learn-more-button learn-more-button-black"><a href="<?php echo get_permalink(get_theme_mod($home_contact_link)); ?>">Learn more</a></button>
      </div>
    
      <div class="next-step-box" id="donate-page-box">
        <div class="box-header box-header-white">Donate</div>
        <span id="copy-write"><p class="box-description box-description-white"><?php  echo get_theme_mod($home_donate_box); ?></p></span>
        <button type="button" class="learn-more-button learn-more-button-white"><a href="<?php echo get_permalink(get_theme_mod($home_donate_link)); ?>">Learn more</a></button>
      </div>
      <div class="next-step-box" id="fares-page-box">
        <div class="box-header box-header-black">Fares</div>
        <span id="copy-write"><p class="box-description box-description-black"><?php  echo get_theme_mod($home_fares_box); ?></p></span>
        <button type="button" class="learn-more-button learn-more-button-black"><a href="<?php echo get_permalink(get_theme_mod($home_fares_link)); ?>">Learn more</a></button>
      </div>
      <div class="next-step-box" id="volunteer-with-us-box">
        <div class="box-header box-header-white">Volunteer with Us</div>
        <span id="copy-write"><p class="box-description box-description-white"><?php  echo get_theme_mod($home_volunteer_box); ?></p></span>
        <button type="button" class="learn-more-button learn-more-button-white"><a href="<?php echo get_permalink(get_theme_mod($home_volunteer_link)); ?>">Learn more</a></button>
      </div>
  </div>
</div>

<?php get_footer(); ?>
