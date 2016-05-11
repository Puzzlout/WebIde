<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace Puzzlout\WebdIde\Tests\Controllers;

use Puzzlout\WebIde\Controllers\AccountController;

class AccountControllerTest extends \PHPUnit_Framework_TestCase {

    protected $app;

    /**
     * Initialize the app object.
     */
    protected function setUp() {
        $this->app = new \Puzzlout\WebIde\Tests\TestApplication();
    }

    /**
     * This method is generated.
     */
    public function testInstanceIsCorrect() {
        $this->assertNotNull($this->app);
        $result = new AccountController($this->app, 'Test', 'Test');
        $this->assertInstanceOf('Puzzlout\WebIde\Controllers\AccountController', $result);
    }

    //Write the next tests below...
}
