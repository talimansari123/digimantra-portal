<?php
/*This file is part of twentytwentyone-child, twentytwentyone child theme.

 

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

 

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

 
// add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style');
// function enqueue_parent_theme_style() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
// }
if ( ! function_exists( 'suffice_child_enqueue_child_styles' ) ) {
    function twentytwentyone_child_enqueue_child_styles() {
       // loading parent style
        wp_register_style(
          'parente2-style',
          get_template_directory_uri() . '/style.css'
        );
       wp_enqueue_style( 'parente2-style' );
       //font-awesome style
          wp_register_style(
          'font-awesome-style',
          get_stylesheet_directory_uri() .'/assets/css/all.min.css'

        );
         wp_enqueue_style( 'font-awesome-style');
      //bootstrapp style
          wp_register_style(
          'bootstrap-style',
          get_stylesheet_directory_uri() .'/assets/css/bootstrap.min.css'

        );
        wp_enqueue_style( 'bootstrap-style');

        // loading child style
        wp_register_style(
          'childe2-style',
          get_stylesheet_directory_uri() .'/assets/css/custom.css'

        );
        wp_enqueue_style( 'childe2-style');
    }
}
add_action( 'wp_enqueue_scripts', 'twentytwentyone_child_enqueue_child_styles' );

?>
