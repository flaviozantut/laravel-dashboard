<?php
/**
 * Thumburl
 *
 * @category Thumburl
 * @package  Thumburl
 * @author   Flavio Zantut  <flaviozantut@gmail.com>
 * @license  MIT License <http://www.opensource.org/licenses/mit>
 * @link     http://link.com
 */

/**
 * Thumburl Test
 *
 * @category Thumburl
 * @package  Tests
 * @author   Flavio Zantut  <flaviozantut@gmail.com>
 * @license  MIT License <http://www.opensource.org/licenses/mit>
 * @link     http://link.com
 */
class TestThumburl extends PHPUnit_Framework_TestCase
{

    /**
     * Setup the test enviornment.
     * 
     * @return void
     */
    public function setUp()
    {
        Bundle::start('thumburl');

        $this->thumb = new Thumburl();
    }



    /**
     * Test Resize
     *
     * @return void
    */
    public function testUrl ()
    {
        //URL
        $this->assertEquals($this->thumb->url('http://www.image.com/image.png'), 'http://www.image.com/image.png');

        //File
        $this->assertEquals($this->thumb->url('public/images/9acc6ab1bb00bb05496c47b63d585151.jpg'), path('public') . 'public/images/9acc6ab1bb00bb05496c47b63d585151.jpg');

        //error
        $this->assertEquals($this->thumb->url('foo.png'), \Config::get('thumburl::options.error_image'));
    }

}
