<?php
class Categories{
  
  private static $instance = null;

  private function __construct(){
    add_action('init',[$this,'register_categories']);
  }

  public function register_categories(){
    return 'Categories Class';
  }

  public static function get_instance(){
    if(null == self:$instance){
      self::$instance = new self;
    }
    return self::$instance;
  }

}
