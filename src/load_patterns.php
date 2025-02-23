<?php
function register_my_pattern_home()
{
  ob_start();
  include(THEME_DIR . '/patterns/home.php');
  $pattern_string_ob = ob_get_clean();

  register_block_pattern(
    'plugin-pattern/home-pattern',
    array(
      'title'       => __('FurryFrontpage', 'groomingfurryangels'),
      'categories'  => array('frontpage'),
      'content'     => $pattern_string_ob,
    )
  );
}
add_action('init', 'register_my_pattern_home',180);

function register_my_pattern_service()
{
  ob_start();
  include(THEME_DIR . '/patterns/services.php');
  $pattern_string = ob_get_clean();

  register_block_pattern(
    'plugin-pattern/services-pattern',
    array(
      'title' => __('FurryServices', 'groomingfurryangels'),
      'categories' => array('services'),
      'content' => $pattern_string,
    )
  );
}
add_action('init', 'register_my_pattern_service');
