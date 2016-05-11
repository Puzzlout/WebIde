<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace Puzzlout\WebdIde\Tests\Resources\Common;

use Puzzlout\WebIde\Resources\Common\Group2Resx_fr_FR;

class Group2Resx_fr_FRTest extends \PHPUnit_Framework_TestCase {

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
    $result = new Group2Resx_fr_FR($this->app);
    $this->assertInstanceOf('Puzzlout\WebIde\Resources\Common\Group2Resx_fr_FR', $result);
  }
  
  //Write the next tests below...
  
}