<?php
/*
 * This file is part of the USC package.
 *
 * (c) Noel Barrera
 */

declare(strict_types=1);

namespace GraphicEditor;

use GraphicEditor\ShapeSkeleton;
use PHPUnit\Runner\Exception;

class ShapeFactory
{
    protected $shapes = array();
    protected $shape;

    protected $shapeToDraw;

    // Determine which shape to draw and instantiate
    // the concrete classes.
    public function makeShapes(array $shapes)
    {
        if(!is_array($shapes)){
            return false;
        }

        try {
            foreach ($shapes as $shape) {
                if (array_key_exists('type', $shape) && array_key_exists('params', $shape)) {
                    try {
                        $createShapeClass = new ShapeSkeleton($shape);
                        return true;
                    } catch (Exception $e) {
                        throw new Exception("Error in create the shape" . $e->getMessage());
                    }
                }
            }
        }catch (Exception $e){
            throw new Exception("Error " . $e->getMessage());
        }

    }

}

$newShapeFactory = new ShapeFactory();
