<?php
  require get_template_directory() . '/inc/example-post-type.php';
  require get_template_directory() . '/inc/enqueue-scripts.php';
  require get_template_directory() . '/inc/register-settings.php';
  require get_template_directory() . '/inc/register-settings-about-us.php';
  require get_template_directory() . '/inc/register-settings-index.php';
  require get_template_directory() . '/inc/customizer.php';
  require get_template_directory() . '/inc/template_functions.php';
  wp_enqueue_script( 'nav', get_template_directory_uri() . '/js/nav.js',   array( 'jquery' ) );
?>

