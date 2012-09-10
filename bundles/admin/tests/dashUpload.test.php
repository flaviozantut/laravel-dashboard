<?php
/**
* Form Tese
*
* @category Tests
*
*/



class TestDashUplaod extends PHPUnit_Framework_TestCase
{

    /**
     * Setup the test enviornment.
     */
    public function setUp()
    {
        Bundle::start('admin');
    }

    /**
     * Test Save
     *
     * @return void
    */
    public function testSave ()
    {
        $this->assertTrue(true);
    }


    /**
     * Test Save
     *
     * @return void
    */
    public function testCheckPath ()
    {
        $this->assertTrue(\Dash\Upload::checkPath(''));
    }

}
