<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace WebDevJL\WebdIde\Tests\ViewModels\Account;

use WebDevJL\WebIde\ViewModels\Account\LoginVm;

class LoginVmTest extends \PHPUnit_Framework_TestCase {

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
    $result = new LoginVm($this->app);
    $this->assertInstanceOf('WebDevJL\WebIde\ViewModels\Account\LoginVm', $result);
  }
  
  //Write the next tests below...
  
}