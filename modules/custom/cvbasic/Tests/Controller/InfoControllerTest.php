<?php

/**
 * @file
 * Contains \Drupal\cvbasic\Tests\InfoController.
 */

namespace Drupal\cvbasic\Tests;

use Drupal\simpletest\WebTestBase;
use Drupal\Core\Database\Driver\mysql\Connection;

/**
 * Provides automated tests for the cvbasic module.
 */
class InfoControllerTest extends WebTestBase {

  /**
   * Drupal\Core\Database\Driver\mysql\Connection definition.
   *
   * @var Drupal\Core\Database\Driver\mysql\Connection
   */
  protected $database;
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "cvbasic InfoController's controller functionality",
      'description' => 'Test Unit for module cvbasic and controller InfoController.',
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
   * Tests cvbasic functionality.
   */
  public function testInfoController() {
    // Check that the basic functions of module cvbasic.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
