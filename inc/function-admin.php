<?php
/*
	@packages for learningtheme
	===========================
	DASHBOARD ADMIN PANEL
	===========================
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
?>