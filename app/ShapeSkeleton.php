<?php
/*
 * This file is part of the USC package.
 *
 * (c) Noel Barrera
 */

declare(strict_types=1);

namespace GraphicEditor;

class ShapeSkeleton implements ShapeInterface
{

    const TYPE_ELEMENT = 'type';

    private $_shapesArray = array();

    public function __construct($shape)
    {
        $this->_shapesArray = $shape;
    }

    public function getShapeType(): array
    {
        print_r($this->_shapesArray);
        if (class_exists($this->_shapesArray[self::TYPE_ELEMENT])) {
            $currentShapeClass = new $this->_shapesArray[self::TYPE_ELEMENT]();
            $this->shapesArray[self::TYPE_ELEMENT] = $currentShapeClass;
        }
        return $this->shapesArray;
    }


    public function getShapeParams(): void
    {

    }

    public function getImage(): void
    {
        //TODO method for return image
    }

    public function getSizes(): array
    {
        //TODO method for return matrix
    }



}