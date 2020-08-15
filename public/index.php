<?php
/**
 * Created by PhpStorm.
 * User: ramy
 * Date: 2/18/19
 * Time: 10:50 PM
 */

use Interfaces\ShapeInterface;
use Interfaces\PolygonInterface;

require __DIR__ . '/../vendor/autoload.php';

define("PI", 3.14);

/**
 * Helper function which is used to create shape based on input parameters
 * and return information about that specific shape.
 */
function getInfo($shape, $params) {
    try {

        $shapeObject = \Factory\ShapeFactory::createShape($shape, $params);
        $info = $shapeObject->getName() . PHP_EOL;

        if ($shapeObject instanceof ShapeInterface)
        {
            $info .= "Perimeter is: " . number_format($shapeObject->getPerimeter(),2) . PHP_EOL;
            $info .= "Area is: " . number_format($shapeObject->getArea(), 2) . PHP_EOL;
            $info .= "<br>";
        }
        if ($shapeObject instanceof PolygonInterface)
        {
            $info .= "Number of angles: " . $shapeObject->getAngles() . PHP_EOL;
            $info .= "<br><br>";
        }
        $info .= PHP_EOL;

        return $info;
    } catch (UnsuportedShapeException $e)
    {
        return "Unsupported Shape" . PHP_EOL;
    } catch (WrongParamCountException $e)
    {
        return "Wrong Number Of Shape Params" . PHP_EOL;
    }
}

// while($f = fgets(STDIN)){
$file = fopen('shapesData.txt', "r");
while($f = fgets($file)){
    $params = explode(" ", $f);
    $shape = $params[0];
    if (strpos($params[1], ',') !== false)
    $shapeParams = explode(",", $params[1]); //notes this line return error if string doesn't have ','
    else
        $shapeParams =  $params[1];
    echo getInfo($shape, $shapeParams);
}