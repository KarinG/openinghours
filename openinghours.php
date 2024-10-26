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
