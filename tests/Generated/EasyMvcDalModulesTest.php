<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace Puzzlout\WebdIde\Tests\Generated;

use Puzzlout\WebIde\Generated\EasyMvcDalModules;

class EasyMvcDalModulesTest extends \PHPUnit_Framework_TestCase {

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
    $result = new EasyMvcDalModules($this->app);
    $this->assertInstanceOf('Puzzlout\WebIde\Generated\EasyMvcDalModules', $result);
  }
  
  //Write the next tests below...
  
}