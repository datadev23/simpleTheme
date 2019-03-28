<?php
/**
* @file
* Theme setting callbacks for the mystrokeguide.
*/


/**
 * Implements hook_form_FORM_ID_alter().
 */
/*
 function simpletheme_form_system_theme_settings_alter(&$form, $form_state, $form_id = NULL) {

 $form['simpletheme_subheading'] = array(
 '#type' => 'textfield',
 '#title' => t('Sub-heading'),
 '#default_value' => theme_get_setting('simpletheme_subheading'),
 '#description' => t('Displays a sub-heading below the main title. Different from the "slogan'),
 '#weight' => -2,


 );





 }
 */

 function simpletheme_form_system_theme_settings_alter(&$form, &$form_state) {

    $form['simpletheme_subheading'] = array(
    '#type' => 'textfield',
    '#title' => t('Sub-heading'),
    '#default_value' => theme_get_setting('simpletheme_subheading'),
    '#description' => t('Displays a sub-heading below the main title. Different from the "slogan" because it will display on every page.'),
    '#weight' => -2,
  );

}