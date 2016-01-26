<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace WebDevJL\WebdIde\Tests\Controllers;

use WebDevJL\WebIde\Controllers\AccountController;

class AccountControllerTest extends \PHPUnit_Framework_TestCase {

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
    $result = new AccountController($this->app);
    $this->assertInstanceOf('WebDevJL\WebIde\Controllers\AccountController', $result);
  }
  
  //Write the next tests below...
  
}