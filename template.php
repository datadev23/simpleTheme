<?php 


/**
 * Override or insert variable into page template
 */

function simpletheme_preprocess_page(&$variables) {
	// move from the page.tpl.php and place it in the template.php file as a preprocess

	$variables['simpletheme_subheading'] = theme_get_setting('simpletheme_subheading');

	


// show a custom style sheet for a particular content type. 

if($variables['node']->type == 'article') {
	
	drupal_add_css(drupal_get_path("theme", "simpletheme"). '/css/style.css');

	
}

if($variables['node']->type == 'health_post') {
	
	drupal_add_css(drupal_get_path("theme", "simpletheme"). '/css/health.css');

	
}

// now show the css for just node 

$matches = "content/abico-gilvus-quia-validus";
$path = drupal_get_path_alias($_GET['q']);
$page_match = drupal_match_path($path, $matches);

if ($path != $_GET['q']) {
	$page_match = $page_match || drupal_match_path($_GET['q'], $matches);

}

if ($page_match) {

	drupal_add_css(drupal_get_path("theme", "simpletheme"). '/css/special.css');

}

// add a custom style sheet for the role content editor
$role = 'content editor';
if(in_array($role, $variables['user']->roles)) {
drupal_add_css(drupal_get_path("theme", "simpletheme"). '/css/contenteditor.css');

}



}



// check to see if its a node based page
