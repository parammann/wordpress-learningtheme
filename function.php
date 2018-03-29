<?php
include(get_template_directory().'/inc/function-admin.php');
function learningtheme_admin_menu(){
	add_menu_page('learningtheme title','Learning_Theme','parmveer_learning','learning_theme_page','learningtheme_admin_mainmenu','dashicons-universal-access-alt',110);
}
add_action('admin_menu','learningtheme_admin_menu');

function learningtheme_admin_mainmenu(){
	// this is for main menu function	
}
?>