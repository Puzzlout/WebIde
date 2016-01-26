<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace WebDevJL\WebdIde\Tests\Resources\Common;

use WebDevJL\WebIde\Resources\Common\Group1Resx_fr_FR;

class Group1Resx_fr_FRTest extends \PHPUnit_Framework_TestCase {

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
    $result = new Group1Resx_fr_FR($this->app);
    $this->assertInstanceOf('WebDevJL\WebIde\Resources\Common\Group1Resx_fr_FR', $result);
  }
  
  //Write the next tests below...
  
}