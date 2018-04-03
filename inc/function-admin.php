<?php
/*
	@packages for learningtheme
	===========================
	DASHBOARD ADMIN PANEL
	===========================
*/


/*
   ### this for making menu and sub menu

*/
function learningtheme_admin_menu(){
	
	add_menu_page('learningtheme title','Learning_Theme','manage_options','learning_theme_page','learningtheme_admin_submainmenu','dashicons-universal-access-alt',110);
	add_submenu_page('learning_theme_page','learningtheme title', 'General','manage_options','learning_theme_page','learningtheme_admin_submainmenu');
	add_submenu_page('learning_theme_page','learning_sub_menusecond', 'Setting','manage_options','learning_theme_secondsubpage','learningtheme_admin_submainmenu_second');
	}
add_action('admin_menu','learningtheme_admin_menu');

function learningtheme_admin_submainmenu(){
	// this is first sub menu
	require_once(get_template_directory().'/inc/templates/learning-admin.php');
}
function learningtheme_admin_submainmenu_second(){
	// this is second sub menu
}




/*

  #### this is for making of fields in general admin page

*/

function learning_custom_setting(){
	register_setting('learning-setting-group','first_name','admin_sanitization');
	register_setting('learning-setting-group','last_name','admin_sanitization');
	register_setting('learning-setting-group','facebook_handler','admin_sanitization');
	register_setting('learning-setting-group','twitter_handler','admin_twitter_sanitization');
	add_settings_section('learning-section-setting','Setting of learning theme page','admin_section_function','learning_theme_page');
	add_settings_field('first-name','Name','admin_section_first_name_function','learning_theme_page','learning-section-setting');
	add_settings_field('Facebook-handler','Facebook Handler','admin_section_facebook_function','learning_theme_page','learning-section-setting');
	add_settings_field('twitter-handler','Twitter handler','admin_section_twitter_function','learning_theme_page','learning-section-setting');
	}
add_action('admin_menu','learning_custom_setting');

function admin_section_function(){
	// for setting section in admin
	echo 'Customize your theme setting';
	
}
function admin_section_first_name_function(){
	// for setting field name
	$firstname=esc_attr(get_option('first_name'));
	$lastname=esc_attr(get_option('last_name'));
	echo "<input type='text' name='first_name' value='".$firstname."' placeholder='First Name' />
	<input type='text' name='last_name' value='".$lastname."' placeholder='Last Name' />" ;
}
function admin_section_facebook_function(){
	// for setting field facebook
	$facebook=esc_attr(get_option('facebook_handler'));
	echo "<input type='text' name='facebook_handler' value='".$facebook."' placeholder='Facebook Username' />";
}
function admin_section_twitter_function(){
	// for setting field twitter-handler
	$twitter=esc_attr(get_option('twitter_handler'));
	echo "<input type='text' name='twitter_handler' value='".$twitter."' placeholder='Twitter Username' /><p class='admin-discriptiion'>Please write twitter account without '@'</p>";
}
function admin_twitter_sanitization($input){
	// for sanitization of twitter account
	$output=sanitize_text_field($input);
	$output=str_replace('@','',$output);
	return $output;
}
function admin_sanitization($input){
	// for sanitization of input fields
	$output=sanitize_text_field($input);
	return $output;
}
?>