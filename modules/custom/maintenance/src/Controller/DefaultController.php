<?php

/**
 * @file
 * Contains \Drupal\maintenance\Controller\DefaultController.
 */

namespace Drupal\maintenance\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\maintenance\Controller
 */
class DefaultController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index() {
    return array(
            '#theme' => 'maintenance',
        );
  }

}
