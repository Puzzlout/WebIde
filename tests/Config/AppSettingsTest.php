<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace Puzzlout\WebdIde\Tests\Config;

use Puzzlout\WebIde\Config\AppSettings;

class AppSettingsTest extends \PHPUnit_Framework_TestCase {

  protected $app;

  /**
   * Initialize the app object.
   */
  protected function setUp()
  {
      $this->app = new \Puzzlout\WebIde\Tests\TestApplication();
  }
  
  /**
   * This method is generated.
   */
  public function testInstanceIsCorrect()
  {
    $this->assertNotNull($this->app);
    $result = new AppSettings($this->app);
    $this->assertInstanceOf('Puzzlout\WebIde\Config\AppSettings', $result);
  }
  
  //Write the next tests below...
  
}