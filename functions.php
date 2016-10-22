<?php
/**
 *  Socail State css Assets
 */
function socail_state_assets_css() {
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'socail_state_assets_css');