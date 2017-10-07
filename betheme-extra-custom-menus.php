<?php
/**
 * Plugin Name: BeTheme extra custom menus
 * Plugin URI: https://github.com/alexmoise/BeTheme-extra-custom-menus
 * Description: A simple plugin to assign some extra menus to certain page IDs for BeTheme, WordPress. For further developments or troubleshooting contact me at https://moise.pro/contact/
 * Version: 1.0.0
 * Author: Alex Moise
 * Author URI: https://moise.pro
 */
 
 function mo_betheme_lang_home_menus( $args = '' ) {
 // main-menu is the primary menu location
 if( 'main-menu' == $args['theme_location'] ) {
    if( is_page( 17 ) ) { // 17 is RO home page ID
     $args['menu'] = 'Menu-home-ro'; // this is how the RO menu is defined in WP
    } elseif ( is_page( 48 ) ) { // 48 is EN home page ID
     $args['menu'] = 'Menu-home-en';  // this is how the EN menu is defined in WP
    } 
  return $args;
 }else{
  echo $args['theme_location']; // otherwise do as you please
 }
}
add_filter( 'wp_nav_menu_args', 'mo_betheme_lang_home_menus' );

?>
