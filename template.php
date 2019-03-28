<?php 


/**
 * Override or insert variable into page template
 */

function simpletheme_preprocess_page(&$variables) {
	// move from the page.tpl.php and place it in the template.php file as a preprocess

	$variables['simpletheme_subheading'] = theme_get_setting('simpletheme_subheading');
}