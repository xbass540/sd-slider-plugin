<?php

//Plugin Options Menu

/** Adds menu in the WP admin area*/
add_action('admin_menu', 'sd_cool_plugin_create_menu');

//create menu
function sd_cool_plugin_create_menu() {

	//create new top-level menu
	add_menu_page('My Cool Plugin Settings', 'Cool Settings', 'administrator', __FILE__, 'my_cool_plugin_settings_page' , plugins_url('/images/icon.png', __FILE__) );

	//call register settings function
	add_action( 'admin_init', 'register_mysettings' );
}

add_action( 'admin_menu', 'sd_slider_settings' );
add_action( 'admin_init', 'register_mysettings' );

//register settings
function register_mysettings() { // whitelist options
    register_setting( 'sd-option-group', 'new_option_name' );
    register_setting( 'sd-option-group', 'some_other_option' );
    register_setting( 'sd-option-group', 'option_etc' );
  }

//add icon


/** Step 1. */
function sd_slider_settings() {
	add_options_page( 'SD Slider Settings', 'SD Slider', 'manage_options', 'my-unique-identifier', 'sd_plugin_options' );
    add_menu_page('SD Slider Plugin Settings', 'Cool Settings', 'administrator', __FILE__, 'my_cool_plugin_settings_page', get_stylesheet_directory_uri('stylesheet_directory')."/images/logo.png");

}

/** Step 3. */
function sd_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<h1>SD Slider Plugin Options</h1>';
	echo '</div>';?>
    
    <form method="post" action="options.php">

        <?php settings_fields( 'sd-option-group' ); ?>

<!-- settings input form -->

  <div class="form-group">
      <!-- 1st image -->
    <label for="exampleFormControlFile1">Choose the 1st image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
<br>
    <label for="fname">Headline:</label>
  <input type="text" id="headline1" name="headline1"><br><br>
<br>
  <label for="fname">Caption:</label>
  <input type="text" id="headline1" name="headline1"><br><br>
<br>
  <!-- 2nd image -->

    <label for="exampleFormControlFile2">Choose the 2nd image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile2">
<br>
    <label for="fname">Headline:</label>
  <input type="text" id="headline2" name="headline2"><br><br>
<br>
  <label for="fname">Caption:</label>
  <input type="text" id="headline2" name="headline2"><br><br>

  <!-- 3rd image -->
<br>
    <label for="exampleFormControlFile3">Choose the 3rd image</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile3">
<br>
    <label for="fname">Headline:</label>
  <input type="text" id="headline3" name="headline3"><br><br>
<br>
  <label for="fname">Caption:</label>
  <input type="text" id="headline3" name="headline3"><br><br>

  <?php submit_button(); ?>

  </div>
</form>

<?
}

//Plugin Options Menu End
?>