<?php
namespace Furry;

class Categories{
  
  private static $instance = null;

  private function __construct(){
    add_action('init',[$this,'register_categories']);
    add_action('init',[$this,'category']);
  }

  public static function category($var=''){
    return 'Category';
  }
  public static function register_categories(){
    return 'Categories Class';
  }

  public static function get_instance(){
    if(null == self::$instance){
      self::$instance = new self;
    }
    return self::$instance;
  }

}

Categories::get_instance();
