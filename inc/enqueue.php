<?php
function admin_page_stylesheet($hooks){
	if('toplevel_page_learning_theme_page' != $hooks){ return; }
	wp_register_style('learningtheme',get_template_directory_uri().'/css/learningtheme-admin.css');
	wp_enqueue_style('learningtheme',get_template_directory_uri().'/css/learningtheme-admin.css');
}
add_action('admin_enqueue_scripts','admin_page_stylesheet');
?>