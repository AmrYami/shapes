<?php


// /////////////////////////////////////////////////////////////////////////////
// WORKING AREA
// THIS IS AN AREAD WHERE YOU SHOULD WRITE YOUR CODE AND MAKE CHANGES.
// /////////////////////////////////////////////////////////////////////////////
namespace Factory;


/**
 * Factory class for creating different GeometryShapes.
 */
class ShapeFactory
{
    /**
     * Creates a specific GeometryShape object from the given attributes.
     *
     * Usage examples:
     *     ShapeFactory::createShape("Circle", 4)
     *     ShapeFactory::createShape("Rectangle", [3, 5])
     *
     * @param string shape Shape to create.
     * @param array params Array of needed parameters.
     */
    public static function createShape($shape, $params)
    {
        $shape = '\Classes\\' . $shape;
        return new $shape($params);
    }
}
