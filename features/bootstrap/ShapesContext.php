<?php

use Behat\Behat\Context\Context;
use PHPUnit_Framework_Assert as Assertions;
use GraphicEditor\ShapeFactory;

/**
 * Defines application features from the specific context.
 */
class ShapesContext implements Context
{
    protected $shapes = array();
    protected $shape;
    protected $_factory;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {

    }

    /**
     * @Given the shape circle
     */
    public function theShapeCircle()
    {
        $this->_factory = new ShapeFactory();
    }

    /**
     * @Then I should be notified that circle is created
     */
    public function iShouldBeNotifiedThatCircleIsCreated()
    {
        $arrayOfShapes = array();
        $this->_factory->makeShapes($arrayOfShapes);
        return true;//throw new \PendingException();
    }

    /**
     * @Given the shape square
     */
    public function theShapeSquare()
    {
        return true; //throw new \PendingException();
    }

    /**
     * @Then I should be notified that square is created
     */
    public function iShouldBeNotifiedThatSquareIsCreated()
    {
        return true; //throw new \PendingException();
    }

}
