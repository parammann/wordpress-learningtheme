<form method='post' action='options.php'>
<?php settings_errors(); ?>
<?php settings_fields('learning-setting-group');
	do_settings_sections('learning_theme_page');
	submit_button();
	?>
<form>