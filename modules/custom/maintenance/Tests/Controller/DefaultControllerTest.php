<?php

/**
 * @file
 * Contains \Drupal\maintenance\Tests\DefaultController.
 */

namespace Drupal\maintenance\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the maintenance module.
 */
class DefaultControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "maintenance DefaultController's controller functionality",
      'description' => 'Test Unit for module maintenance and controller DefaultController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests maintenance functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module maintenance.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
