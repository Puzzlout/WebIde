<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace WebDevJL\WebdIde\Tests\Resources\Enums;

use WebDevJL\WebIde\Resources\Enums\ResxFileNameKeys;

class ResxFileNameKeysTest extends \PHPUnit_Framework_TestCase {

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
    $result = new ResxFileNameKeys($this->app);
    $this->assertInstanceOf('WebDevJL\WebIde\Resources\Enums\ResxFileNameKeys', $result);
  }
  
  //Write the next tests below...
  
}