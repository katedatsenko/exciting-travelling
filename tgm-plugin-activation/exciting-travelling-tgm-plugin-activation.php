<?php 
require_once dirname( __FILE__ ) . '/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'exciting_travelling_register_required_plugins' );

function exciting_travelling_register_required_plugins() {

$plugins = array(

  array(
     'name'               => 'Unyson', 
     'slug'               => 'unyson', 
     'source'             => get_template_directory() . '/tgm-plugin-activation/plugins/unyson.zip', 
     'required'           => true, 
     'version'            => '',
     'force_activation'   => false,
     'force_deactivation' => false,
     'external_url'       => '',
     'is_callable'        => '', 
  ),

);

$config = array(
  'id'           => 'exciting-travelling',    
  'default_path' => '',                 
  'menu'         => 'tgmpa-install-plugins', 
  'parent_slug'  => 'themes.php',          
  'capability'   => 'edit_theme_options', 
  'has_notices'  => true, 
  'dismissable'  => true,
  'dismiss_msg'  => '',
  'is_automatic' => false,      
  'message'      => '',
);

tgmpa( $plugins, $config );

}
