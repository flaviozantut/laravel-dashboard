<?php

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
     */
    public function setUp()
    {
        Bundle::start('thumburl');

        $lib = \Config::get('thumburl::options.lib');
        $Imagine = "Imagine\\{$lib}\\Imagine";
    	$this->imagine = new $Imagine();

    	\Config::set('thumburl::options.mode', Imagine\Image\ImageInterface::THUMBNAIL_INSET);
    	$this->mode    = \Config::get('thumburl::options.mode');
    }


    /**
     * Test Resize
     *
     * @return void
    */
    public function testResize ()
    {
    	$size = new Imagine\Image\Box(100, 100);

    	$this->imagine
    		->open(path('public') . 'public/uploads/05d613182a9cd706e4840a7f944c8f25.jpg')
		    ->thumbnail($size, $this->mode)
		    ->save(path('public') . 'public/uploads/thumb.jpg');

       	$this->assertTrue(true);
    }


    /**
     * Test Crop
     *
     * @return void
    */
    public function testCrop ()
    {
       $this->assertTrue(true);
    }

}
