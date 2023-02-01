<?php
/**
 * @package BuddyBoss Child
 * The parent theme functions are located at /buddyboss-theme/inc/theme/functions.php
 * Add your own functions at the bottom of this file.
 */


/****************************** THEME SETUP ******************************/

/**
 * Sets up theme for translation
 *
 * @since BuddyBoss Child 1.0.0
 */
function buddyboss_theme_child_languages()
{
  /**
   * Makes child theme available for translation.
   * Translations can be added into the /languages/ directory.
   */

  // Translate text from the PARENT theme.
  load_theme_textdomain( 'buddyboss-theme', get_stylesheet_directory() . '/languages' );

  // Translate text from the CHILD theme only.
  // Change 'buddyboss-theme' instances in all child theme files to 'buddyboss-theme-child'.
  // load_theme_textdomain( 'buddyboss-theme-child', get_stylesheet_directory() . '/languages' );

}
add_action( 'after_setup_theme', 'buddyboss_theme_child_languages' );

/**
 * Enqueues scripts and styles for child theme front-end.
 *
 * @since Boss Child Theme  1.0.0
 */
function buddyboss_theme_child_scripts_styles()
{
  /**
   * Scripts and Styles loaded by the parent theme can be unloaded if needed
   * using wp_deregister_script or wp_deregister_style.
   *
   * See the WordPress Codex for more information about those functions:
   * http://codex.wordpress.org/Function_Reference/wp_deregister_script
   * http://codex.wordpress.org/Function_Reference/wp_deregister_style
   **/

  // Styles
  wp_enqueue_style( 'buddyboss-child-css', get_stylesheet_directory_uri().'/assets/css/custom.css', '', '1.0.0' );

  // Javascript
  wp_enqueue_script( 'buddyboss-child-js', get_stylesheet_directory_uri().'/assets/js/custom.js', '', '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'buddyboss_theme_child_scripts_styles', 9999 );


/****************************** CUSTOM FUNCTIONS ******************************/

// Add your own custom functions here




// Add Partner Custom Post Type

function partner_post_types(){
    register_post_type('partner', array(
        'public' => true ,
        'labels' => array(
           'name' => 'Partners',
           'add_new_item' => 'Add New Partner',
           'edit_item' => 'Edit Partner',
           'all_items' => 'All Partners',
           'singular_name' => 'Partner'
         ),
        'menu_icon' => 'dashicons-universal-access',
        'taxonomies' => array('category')
    ));
}

add_action ('init', 'partner_post_types');

add_filter( 'login_title',function($login_title){
	return str_replace(array( ' &lsaquo;', ' &#8212; WordPress',__('WordPress'),), array( ' &lsaquo;', ''),$login_title );
});


function custom_login_redirect( $redirect_to, $request, $user ) {
if ( isset( $user->roles ) && is_array( $user->roles ) ) {
if ( in_array( 'administrator', $user->roles ) || in_array( 'editor', $user->roles ) || in_array( 'author', $user->roles ) ) {
$redirect_to = admin_url();
} else if ( in_array( 'subscriber', $user->roles )) {
$redirect_to = home_url( '/dashboard' );
} else {
$redirect_to = home_url();
}
}
return $redirect_to;
}
add_filter( 'login_redirect', 'custom_login_redirect', 10, 3 );

function custom_logout_redirect( $redirect_to, $request, $user ) {
  if ( in_array( 'administrator', $user->roles ) || in_array( 'editor', $user->roles ) || in_array( 'author', $user->roles ) ) {
$redirect_to = home_url('/wp-login.php');
}
else if ( isset( $user->roles ) && is_array( $user->roles ) ) {
   if ( in_array( 'subscriber', $user->roles )) {
  $redirect_to = home_url();
  } 
  else {
  $redirect_to = home_url();
  }
}
return $redirect_to;
}

?>