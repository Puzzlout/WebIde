<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace Puzzlout\WebdIde\Tests\Resources\Controller;

use Puzzlout\WebIde\Resources\Controller\AccountResx_fr_FR;

class AccountResx_fr_FRTest extends \PHPUnit_Framework_TestCase {

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
    $result = new AccountResx_fr_FR($this->app);
    $this->assertInstanceOf('Puzzlout\WebIde\Resources\Controller\AccountResx_fr_FR', $result);
  }
  
  //Write the next tests below...
  
}