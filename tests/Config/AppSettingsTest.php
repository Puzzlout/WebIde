<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace WebDevJL\WebdIde\Tests\Config;

use WebDevJL\WebIde\Config\AppSettings;

class AppSettingsTest extends \PHPUnit_Framework_TestCase {

  protected $app;

  /**
   * Initialize the app object.
   */
  protected function setUp()
  {
      $this->app = new \WebDevJL\WebIde\Tests\TestApplication();
  }
  
  /**
   * This method is generated.
   */
  public function testInstanceIsCorrect()
  {
    $this->assertNotNull($this->app);
    $result = new AppSettings($this->app);
    $this->assertInstanceOf('WebDevJL\WebIde\Config\AppSettings', $result);
  }
  
  //Write the next tests below...
  
}