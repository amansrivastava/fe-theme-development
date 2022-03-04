<?php

/**
 * @file
 * Theme settings form for Forty theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function forty_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['forty'] = [
    '#type' => 'details',
    '#title' => t('Forty'),
    '#open' => TRUE,
  ];

  $form['forty']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
