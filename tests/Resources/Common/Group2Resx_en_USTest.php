<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace WebDevJL\WebdIde\Tests\Resources\Common;

use WebDevJL\WebIde\Resources\Common\Group2Resx_en_US;

class Group2Resx_en_USTest extends \PHPUnit_Framework_TestCase {

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
    $result = new Group2Resx_en_US($this->app);
    $this->assertInstanceOf('WebDevJL\WebIde\Resources\Common\Group2Resx_en_US', $result);
  }
  
  //Write the next tests below...
  
}