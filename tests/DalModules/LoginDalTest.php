<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace WebDevJL\WebdIde\Tests\DalModules;

use WebDevJL\WebIde\DalModules\LoginDal;

class LoginDalTest extends \PHPUnit_Framework_TestCase {

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
    $result = new LoginDal($this->app);
    $this->assertInstanceOf('WebDevJL\WebIde\DalModules\LoginDal', $result);
  }
  
  //Write the next tests below...
  
}