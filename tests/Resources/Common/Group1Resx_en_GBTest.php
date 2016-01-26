<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace WebDevJL\WebdIde\Tests\Resources\Common;

use WebDevJL\WebIde\Resources\Common\Group1Resx_en_GB;

class Group1Resx_en_GBTest extends \PHPUnit_Framework_TestCase {

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
    $result = new Group1Resx_en_GB($this->app);
    $this->assertInstanceOf('WebDevJL\WebIde\Resources\Common\Group1Resx_en_GB', $result);
  }
  
  //Write the next tests below...
  
}