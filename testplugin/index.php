<?php
/*
Plugin Name:A Post loader
Plugin URI: http://facebook.com
Description: Shortcode
Version: 1.0
Author: Harshad
Author URI: http://facebook.com/nokia082
*/

function form_creation() { 
  wp_enqueue_style( 'style', get_template_directory_uri().'/style.css' );
  wp_enqueue_style( 'style', get_template_directory_uri().'/style.css' );

    wp_enqueue_script( 'main_js',  plugin_dir_url( __FILE__ ) . 'js/main.js', array( 'jquery' ), '1.0', true );
    wp_localize_script('main_js','magicalData', array(
		'nonce' => wp_create_nonce('wp_rest')));

add_action('wp_enqueue_scripts', 'form_creation');
 ?>

<div class="admin-quick-add">
  <h3>Quick Add Post</h3>
  <input type="text" name="title" placeholder="Title">
  <textarea name="content" placeholder="Content"></textarea>
  <button id="quick-add-button">Quick add / View Posts</button>
  <div id="portfolio-posts-container1"> </div>
  <div id="portfolio-posts-container2"> </div>
</div>
		

<?php
}
add_shortcode('post', 'form_creation');
