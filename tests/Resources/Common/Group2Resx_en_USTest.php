<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace Puzzlout\WebdIde\Tests\Resources\Common;

use Puzzlout\WebIde\Resources\Common\Group2Resx_en_US;

class Group2Resx_en_USTest extends \PHPUnit_Framework_TestCase {

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
    $result = new Group2Resx_en_US($this->app);
    $this->assertInstanceOf('Puzzlout\WebIde\Resources\Common\Group2Resx_en_US', $result);
  }
  
  //Write the next tests below...
  
}