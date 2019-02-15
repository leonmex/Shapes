<?php

use GraphicEditor\ShapeFactory as ShapeFactory;
use PHPUnit\Framework\TestCase;

class ShapeTest extends TestCase
{

    protected $_shapeFactoty;

    public function testValidateShapesInput()
    {
        $this->_shapeFactoty = new ShapeFactory();
        $array = array(array('type'=>'circle', 'params'=>array('color'=>'red', '')));
        $result = $this->_shapeFactoty->makeShapes($array);
        if ($result) {
            $this->assertTrue(true);
        }else{
            $this->assertTrue(false);
        }
    }

}