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
    add_filter('nav_menu_link_attributes',[$this,'filter_a_nav'],10,4);
    add_action('get_custom_logo',[$this,'website_logo'],100);
  }

  public function filter_a_nav($attrs,$menu_item, $args, $depth){ 
    $attrs['class'] = $args->filter_a_nav_class;
    return $attrs;
  }

  public function website_logo(){
    $image = wp_get_attachment_image_src(get_theme_mod('custom_logo',21),'full');
    return $image[0];
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
    wp_enqueue_script('groomingfurryangels',$this->getpathscript('js/app.js'),array(),'1.0',true);
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
