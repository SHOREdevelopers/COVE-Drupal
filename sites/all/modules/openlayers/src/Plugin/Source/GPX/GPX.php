<?php
/**
 * @file
 * Source: GPX.
 */

namespace Drupal\openlayers\Plugin\Source\GPX;

use Drupal\openlayers\Types\Source;

/**
 * Class GPX.
 *
 * @OpenlayersPlugin(
 *  id = "GPX"
 * )
 */
class GPX extends Source {

  /**
   * {@inheritdoc}
   */
  public function optionsForm(array &$form, array &$form_state) {
    $form['options']['url'] = array(
      '#title' => t('URL'),
      '#type' => 'textfield',
      '#default_value' => $this->getOption('url'),
    );
  }

}
