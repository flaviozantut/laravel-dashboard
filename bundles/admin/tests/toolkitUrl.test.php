<?php

class TestToolkitUrl extends PHPUnit_Framework_TestCase
{
    /**
     * Setup the test enviornment.
     */
    public function setUp()
    {
        URL::$base = null;
        Router::$routes = array();
        Router::$names = array();
        Router::$uses = array();
        Router::$fallback = array();
        Config::set('application.url', 'http://localhost');
    }

    /**
     * Test that a given condition is met.
     *
     * @return void
     */
    public function testSwitchUri()
    {
        $this->assertEquals('http://localhost/en/product/1', \Toolbox\Url::switchUri('en', 'http://localhost/es/product/1'));

    }

}
