<?php
define('THEME_DIR_URI', get_template_directory_uri());
define('THEME_DIR', get_template_directory());

require_once THEME_DIR.'/vendor/autoload.php';

class Groomingfurryangels{
  private static $instance = null;

  private function __construct(){
    add_action("wp_enqueue_scripts",[$this,'enqueue_styles']);
    add_theme_support("title-tag");
    register_nav_menu(array(
      'primary' =>__('Primery Menu', 'groomingfurryangels'),
    ));
    add_theme_support('custom_logo');
    add_theme_support('post-thumbnails');
    add_theme_support('align-wide');
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
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
