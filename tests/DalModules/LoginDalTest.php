<?php

/**
 * 
 * @since Test Suite v1.1.0
 */

namespace Puzzlout\WebdIde\Tests\DalModules;

use Puzzlout\WebIde\DalModules\LoginDal;

class LoginDalTest extends \PHPUnit_Framework_TestCase {

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
        $result = new LoginDal($this->app, NULL);
        $this->assertInstanceOf('Puzzlout\WebIde\DalModules\LoginDal', $result);
    }

    //Write the next tests below...
}
