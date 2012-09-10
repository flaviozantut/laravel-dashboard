<?php
/**
* Form Tese
*
* @category Tests
*
*/

class TestToolkitForm extends PHPUnit_Framework_TestCase
{   

    /**
     * Test label
     *
     * @return void
    */
    public function testLabel () 
    {
       // $this->assertEquals('foo', \Toolbox\Form::label(array('name')));
    }

    /**
     * Test input
     *
     * @return void
    */
    public function testInput()
    {
        $this->assertEquals('foo', \Toolbox\Form::input(array('name'=>'test', 'value'=>'0')));
    }


    /**
     * Test Wysiwyg
     *
     * @return void
    */
    public function testWysiwyg()
    {
        $this->assertEquals('a', \Toolbox\Form::Wysiwyg(array('name'=>'test', 'value'=>'0')));
    }

     /**
     * Test Image
     *
     * @return void
    */
    public function testImage()
    {
        $this->assertEquals('foo', 'bar');
    }




}
