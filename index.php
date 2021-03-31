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

<span id="home_header_img">
  <section class="home-section-1" style="background: url(<?php echo get_theme_mod($home_header_img) ?>); background-repeat: no-repeat; background-size: cover;">
    <div class="section-1-heading">
      <span id="home_header_title">
        <h1 class="section-1-title"> <?php echo nl2br(get_theme_mod($home_header_title)) ?> </h1>
      </span>
      <span id="home_header_p">
        <p class="title-text"><?php echo get_theme_mod($home_header_p) ?> </p>
      </span>
      <span id="home_get_started_button">
        <button type="button" class="get-started-button"><a href="<?php echo get_permalink(get_theme_mod($home_get_started_button)); ?>">Get Started</a></button>
      </span>
    </div>
  </section>
</span>

<p class="section-1-bottom-text"><span id="home_p"><?php echo get_theme_mod($home_p) ?></span></p>
<div class=section-1-horizontal-line></div>


<div class="info-icon-list info-icon-list-home">
  <div class="box-top">
    <div class="info-icon-box-gray light-arms-box">
      <img class="info-icon-image" src="<?php echo get_template_directory_uri(); ?>/images/light-arms.png">
      <div class="info-icon-text-subtitle">
        <span id="home_info_card_1_title"><?php echo get_theme_mod($home_info_card_1_title); ?></span>
      </div>
      <div class="info-icon-text info-icon-text-home">
        <span id="home_info_card_1_desc"><?php echo get_theme_mod($home_info_card_1_desc); ?></span>
      </div>
    </div>
    <div class="info-icon-box-white dollar-box">
      <img class="info-icon-image" src="<?php echo get_template_directory_uri(); ?>/images/dollar-icon.png">
      <div class="info-icon-text-subtitle">
        <span id="home_info_card_2_title"><?php echo get_theme_mod($home_info_card_2_title); ?></span>
      </div>
      <div class="info-icon-text info-icon-text-home">
        <span id="home_info_card_2_desc"><?php echo get_theme_mod($home_info_card_2_desc); ?></span>
      </div>
    </div>
  </div>
  <div class="box-bot">
    <div class="info-icon-box-gray light-clock-box">
      <img class="info-icon-image" src="<?php echo get_template_directory_uri(); ?>/images/light-clock.png">
      <div class="info-icon-text-subtitle">
        <span id="home_info_card_3_title"><?php echo get_theme_mod($home_info_card_3_title); ?></span>
      </div>
      <div class="info-icon-text info-icon-text-home">
        <span id="home_info_card_3_desc"><?php echo get_theme_mod($home_info_card_3_desc); ?></span>
      </div>
    </div>
    <div class="info-icon-box-white wheel-box">
      <img class="info-icon-image" src="<?php echo get_template_directory_uri(); ?>/images/wheel-icon.png">
      <div class="info-icon-text-subtitle">
        <span id="home_info_card_4_title"><?php echo get_theme_mod($home_info_card_4_title); ?></span>
      </div>
      <div class="info-icon-text info-icon-text-home">
        <span id="home_info_card_4_desc"><?php echo get_theme_mod($home_info_card_4_desc); ?></span>
      </div>
    </div>
  </div>
</div>




<div class="homepage-section">
  <h1 class="next-step-header">Where can we take you?</h1>
  <div class="next-step-header-line"></div>

      <!-- Repeatable Carousel section -->
      <?php
        require 'inc/section_vars.php';   
        // get_bullet_data is in /inc/template_functions.php
        $data  = get_bullet_data($home_carousel_item);
        if(!empty( $data ) ) { 
          ?>  
             <div class="slider carousel">
          <?php
            foreach ( $data as $k => $f ) {  
              // Make sure to use a semicolon; when using php on multiple lines
              $imgId = 'img'.$k;
              ?>
              <!-- <div class="ctest" <?php echo "data-img-id=\"".$k."\""?>
                style="background-image: url( <?php echo $f['image']['url']?>)">
                <p>
                  <?php echo $f['title']?> 
                </p>
              </div> -->
              <div class="ctest">
              <img class="ctest-img" src="<?php echo $f['image']['url']?>"> 
              </img> 
              <p class="ctest-txt non-hover-txt">
                  <?php echo $f['title']?> 
              </p>
              <p class="ctest-txt hover-txt-a">
                  <?php echo $f['hover-txt-a']?> 
              </p>
              <p class="ctest-txt hover-txt-b">
                  <?php echo $f['hover-txt-b']?> 
              </p>
                </div>
            
        <?php
            }
        ?>
            </div>
  <?php } ?>

      <!-- End of Repeatable Carousel section -->

  </div>
</div>



<div class="homepage-section next-step-section">
  <h1 class="next-step-header">Next steps...</h1>
  <div class="next-step-header-line"></div>
  <div class="page-box-container">
    <div class="next-step-box" id="giving-rides-box">
      <div class="box-header box-header-black">Giving Rides</div>
      <span id="home_giving_box">
        <p class="box-description box-description-black"><?php echo get_theme_mod($home_giving_box); ?></p>
      </span>
      <button type="button" class="learn-more-button learn-more-button-black"><a href="<?php echo get_permalink(get_theme_mod($home_giving_link)); ?>">Learn more</a></button>
    </div>
    <div class="next-step-box" id="receiving-rides-box">
      <div class="box-header box-header-white">Receiving Rides</div>
      <span id="home_receiving_box">
        <p class="box-description box-description-white"><?php echo get_theme_mod($home_receiving_box); ?></p>
      </span>
      <button type="button" class="learn-more-button learn-more-button-white"><a href="<?php echo get_permalink(get_theme_mod($home_receiving_link)); ?>">Learn more</a></button>
    </div>
    <div class="next-step-box" id="contact-us-box">
      <div class="box-header box-header-black">Contact Us</div>
      <span id="home_contact_box">
        <p class="box-description box-description-black"><?php echo get_theme_mod($home_contact_box); ?></p>
      </span>
      <button type="button" class="learn-more-button learn-more-button-black"><a href="<?php echo get_permalink(get_theme_mod($home_contact_link)); ?>">Learn more</a></button>
    </div>

    <div class="next-step-box" id="donate-page-box">
      <div class="box-header box-header-white">Donate</div>
      <span id="home_donate_box">
        <p class="box-description box-description-white"><?php echo get_theme_mod($home_donate_box); ?></p>
      </span>
      <button type="button" class="learn-more-button learn-more-button-white"><a href="<?php echo get_permalink(get_theme_mod($home_donate_link)); ?>">Learn more</a></button>
    </div>
    <div class="next-step-box" id="fares-page-box">
      <div class="box-header box-hefader-black">Fares</div>
      <span id="home_fares_box">
        <p class="box-description box-description-black"><?php echo get_theme_mod($home_fares_box); ?></p>
      </span>
      <button type="button" class="learn-more-button learn-more-button-black"><a href="<?php echo get_permalink(get_theme_mod($home_fares_link)); ?>">Learn more</a></button>
    </div>
    <div class="next-step-box" id="volunteer-with-us-box">
      <div class="box-header box-header-white">Volunteer with Us</div>
      <span id="home_volunteer_box">
        <p class="box-description box-description-white"><?php echo get_theme_mod($home_volunteer_box); ?></p>
      </span>
      <button type="button" class="learn-more-button learn-more-button-white"><a href="<?php echo get_permalink(get_theme_mod($home_volunteer_link)); ?>">Learn more</a></button>
    </div>
  </div>
</div>

<div class="homepage-section">
  <h1 class="next-step-header">Service Area</h1>
  <div class="next-step-header-line"></div>

  <span id="home_service_area_txt">
    <div class="home-service-area-txt">
        <?php echo get_theme_mod($home_service_area_txt) ?>
    </div>
  </span>
  <span id="home_service_area_img">
    <div class="home-service-area-img" style="background: url(<?php echo get_theme_mod($home_service_area_img) ?>); background-repeat: no-repeat; background-size: contain; background-position: center top">
    </div>
  </span>
</div>




<?php get_footer(); ?>