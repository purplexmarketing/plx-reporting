<?php
/**
* Plugin Name: PLX Reporting
* Description: Speeds up Google Tag Manager integration by providing customisable and importable GTM JSON and also setting up Javascript dataLayer functions for Contact Form 7 integration.
* Version: 1.0.1
* Author: Purplex
* Author URI: http://plx.mk
* License: GPL2
*/

  /*

                          TM
  ████████╗██╗     ███╗   ███╗
  ██╔═══██║██║      ███╗ ███╔╝
  ████████║██║       ██████╔╝
  ██╔═════╝██║      ███╔╝███╗
  ██║      ███████╗███╔╝  ███╗
  ╚═╝      ╚══════╝╚══╝   ╚══╝
      POWER YOUR WORDPRESS
        http://plx.mk

  */

  /***********************************/
  /**********  DEFINITIONS  **********/
  /***********************************/

  // Define Plugin Paths
  define( 'PLX_REPORTING_VERSION', '1.0.0' );
  define( 'PLX_REPORTING_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
  define( 'PLX_REPORTING_PLUGIN_BASENAME', plugin_basename(__FILE__) );
  define( 'PLX_REPORTING_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

  // Consts
  $wpcf7_array = [];


  /***********************************/
  /********  DE/ACTIVATE FUNC ********/
  /***********************************/

  // Activation Function
  function plx_reporting_activation(){}

  // Activation Function
  function plx_reporting_deactivation(){}

  /***********************************/
  /******  SETTINGS INITIALISE  ******/
  /***********************************/
  require_once( 'includes/settings.init.php' );

  /************************************/
  /*******  SETTINGS FUNCTIONS  *******/
  /************************************/
  require_once( 'includes/settings.functions.php' );


  /***********************************/
  /********** OPTIONS MENU  **********/
  /***********************************/

  // Register Function with admin_menu hook
  add_action( 'admin_menu', 'plx_add_menu' );

  // Add Menu Items and call relevant functions
  function plx_add_menu(){

    // Add Menu Pages
    add_menu_page( 'PLX Reporting', 'Reporting', 'manage_options', 'plx-reporting', 'plx_reporting_top', 'dashicons-chart-area' );
    add_submenu_page( 'plx-reporting', 'JSON', 'JSON', 'manage_options', 'plx-reporting-json', 'plx_reporting_sub_json');
  }

  /***********************************/
  /********  PAGES FUNCTIONS  ********/
  /***********************************/

  // Top Level Reporting Page
  function plx_reporting_top(){
    require_once( 'views/reporting.php' );
  }
  
  // Sub Level JSON Page
  function plx_reporting_sub_json(){
    require_once( 'views/reporting-json.php' );
  }
  
  /***********************************/
  /*********   GTM to HEAD   *********/
  /***********************************/
  require_once( 'includes/gtmhead.functions.php' );
  
  /***********************************/
  /******   dataLayer to FOOT   ******/
  /***********************************/
  require_once( 'includes/dataLayer.functions.php' );




  /***********************************/
  /*******  DE/ACTIVATE HOOKS  *******/
  /***********************************/

  // Activation Hook
  register_activation_hook( __FILE__, 'plx_reporting_activation' );

  // Deactivation Hook
  register_deactivation_hook( __FILE__, 'plx_reporting_deactivation' );