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
//drupal_add_css(drupal_get_path("theme", "simpletheme"). '/css/contenteditor.css');

}




}

function simpletheme_preprocess_link(&$variables) {
if(strpos($variables['text'], 'Read more') !== FALSE) {
	//var_dump($variables);
$variables['text'] = str_replace('Read more','click', $variables['text']);

if(strpos($variables['text'], 'My account') !== FALSE) {
	var_dump($variables);
$variables['text'] = str_replace('My account','<h1>Myadmin</h1>', $variables['text']);
}
}

}

function simpletheme_theme($existing, $type, $theme, $path) {

	$items['custom_donate_form'] = array(
    'render element' => 'form',
    'template' => 'donate',
    'path' => drupal_get_path("theme", "simpletheme"). '/template/form',

	);

	return $items;


}


function custom_donate_form($form, &$form_state) {

	$form['first_name'] = array(
    '#type' => 'textfield',
    '#attributes' => array('placeholder' => t('First Name')),
	);
		$form['last_name'] = array(
    '#type' => 'textfield',
    '#attributes' => array('placeholder' => t('Last Name')),
	);
			$form['address'] = array(
    '#type' => 'textfield',
    '#attributes' => array('placeholder' => t('Address')),
	);

			return $form;



}


