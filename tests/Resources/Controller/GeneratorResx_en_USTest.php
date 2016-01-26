<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace WebDevJL\WebdIde\Tests\Resources\Controller;

use WebDevJL\WebIde\Resources\Controller\GeneratorResx_en_US;

class GeneratorResx_en_USTest extends \PHPUnit_Framework_TestCase {

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
    $result = new GeneratorResx_en_US($this->app);
    $this->assertInstanceOf('WebDevJL\WebIde\Resources\Controller\GeneratorResx_en_US', $result);
  }
  
  //Write the next tests below...
  
}