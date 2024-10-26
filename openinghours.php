<?php

require_once 'openinghours.civix.php';

use CRM_Openinghours_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function openinghours_civicrm_config(&$config): void {
  _openinghours_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function openinghours_civicrm_install(): void {
  _openinghours_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function openinghours_civicrm_enable(): void {
  _openinghours_civix_civicrm_enable();
}

function openinghours_civicrm_buildForm($formName, &$form) {
  if ($formName === 'CRM_Contribute_Form_Contribution_Main') {
    // \Drupal::logger('openinghours')->info(print_r($form, true));
    // what time is it?
    $rightnow = date('H:i:s', time());
    \Drupal::logger('openinghours')->info(print_r($rightnow, true));
    // retrieve from settings - for now:
    $opening = "10:00";
    $closing = "18:00";
    // determine if we're open for businnes
    if ($rightnow > $opening && $rightnow < $closing) {
      \Drupal::logger('openinghours')->info('Open for business');
    } else {
        \Drupal::logger('openinghours')->info('We are closed');
    }
  }
}
