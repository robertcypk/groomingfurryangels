<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


  <nav class="bg-white">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

      <?php if (has_custom_logo()) { ?>
        <a href="<?php echo get_bloginfo('url'); ?>" class="flex max-w-sm items-center space-x-3 rtl:space-x-reverse">
          <img src="<?php echo get_custom_logo(); ?>" class="h-15 max-w-xs" width="" alt="<?php wp_title(); ?>" />
        </a>
      <?php } else { ?>
        <a href="<?php get_bloginfo('url'); ?>" class="flex items-center space-x-3 rtl:space-x-reverse">
          <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"><?php wp_title(); ?></span>
        </a>
      <?php } ?>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <?php
      wp_nav_menu(array(
        'container_id' => 'navbar-default',
        'container_class' => 'hidden w-full md:block md:w-auto',
        'menu_class' => 'font-medium flex flex-col md:flex-row md:space-x8 rtl:space-x-reverse p-4 md:p-0 mt-4 
        md:flex-row md:space-x8 rtl:space-x-reverse md:mt-0 md:border-0 
        md:bg-white-800 dark:bg-white md:dark:bg-white dark:border-gray-700',
        /*'menu_class' => 'font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 
  rounded-lg bg-gray-50 md:flex-row md:space-x8 
  rtl:space-x-reverse md:mt-0 md:border-0 
        md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700',*/
        'theme_location' => 'primary',
        'li_class' => '',
        'fallback_cb' => false,
        'filter_a_nav_class' => 'block py-2 px-8 hover:text-pink-600 dark:hover:text-pink-600'
        /*
  'filter_a_nav_class' => 'block py-2 px-8 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent 
        md:border-0 md:text-blue-700 md:p-0 dark:text-white 
        md:dark:text-blue-500 
        md:dark:hover:bg-gray-700 
        dark:hover:text-white 
        md:dark:bg-transparent'*/
      ));
      ?>
      <!--
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 
                 rounded-lg bg-gray-50 md:flex-row md:space-x-8 
                 rtl:space-x-reverse md:mt-0 md:border-0 
                 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
<a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page">Home</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 
md:hover:bg-transparent 
md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white 
md:dark:hover:text-blue-500 
dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
        </li>
      </ul> 
       -->
      <!-- </div> -->
    </div>
  </nav>
  <?php
  //if (is_front_page()) {
    //echo do_blocks('<!-- wp:pattern {"slug":"groomingfurryangels/home"} /-->');
  //}
