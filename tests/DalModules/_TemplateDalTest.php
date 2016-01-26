<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace WebDevJL\WebdIde\Tests\DalModules;

use WebDevJL\WebIde\DalModules\_TemplateDal;

class _TemplateDalTest extends \PHPUnit_Framework_TestCase {

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
    $result = new _TemplateDal($this->app);
    $this->assertInstanceOf('WebDevJL\WebIde\DalModules\_TemplateDal', $result);
  }
  
  //Write the next tests below...
  
}