<?php 


/**
 * Override or insert variable into page template
 */

function simpletheme_preprocess_page(&$variables) {
	// move from the page.tpl.php and place it in the template.php file as a preprocess

	$variables['simpletheme_subheading'] = theme_get_setting('simpletheme_subheading');

	




if($variables['node']->type == 'article') {
	
	drupal_add_css(drupal_get_path("theme", "simpletheme"). '/css/style.css');

	
}

if($variables['node']->type == 'health_post') {
	
	drupal_add_css(drupal_get_path("theme", "simpletheme"). '/css/health.css');

	
}




}



// check to see if its a node based page
