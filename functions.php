<?php
define('THEME_DIR_URI', get_template_directory_uri());
define('THEME_DIR', get_template_directory());

require_once THEME_DIR.'/vendor/autoload.php';

class Groomingfurryangels{
  private static $instance = null;

  private function __construct(){
    add_action("wp_enqueue_scripts",[$this,'enqueue_styles']);
    add_theme_support("title-tag");
    register_nav_menus(array(
      'primary' =>__('Primary Menu', 'groomingfurryangels'),
      'footer' =>__('Footer Menu','groomingfurryangels')
    ));
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_filter('wp_nav_menu',[$this,'filter_a_nav'],5);
    add_action('the_custom_logo',[$this,'website_logo']);
  }

  public function filter_a_nav($atts,$item, $args,$depth){
    if(isset($args->add_a_class)){
      $atts['link_class'] = $args->add_a_class;
    }
    return $atts;
  }

  public function website_logo($atts,$item,$args,$depth){
    $image = wp_get_attachment_image_src(get_theme_mod('custom_logo'),'full');
    return esc_url($image[1]);
  }

  private function getpathscript($path){
    if(wp_get_environment_type()=='production'){
      return get_stylesheet_directory_uri().'/'.$path;
    }
    return add_query_arg('time',time(),get_stylesheet_directory_uri().'/'.$path);
  }

  public function enqueue_styles(){
    $theme = wp_get_theme();

    wp_enqueue_style('groomingfurryangels',$this->getpathscript('css/output.css'),array(),$theme->get('Version'));
  }

  public static function get_instance(){
    if(null == self::$instance){
      self::$instance = new self;
    }
    self::$instance;
  }
}

Groomingfurryangels::get_instance();
?>
