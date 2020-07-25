<?php


namespace Classes;


use Interfaces\PolygonInterface;
use Interfaces\ShapeInterface;

class Rectangle implements ShapeInterface, PolygonInterface
{

    private $params;
    public function __construct($params)
    {
        $this->params = $params;
    }
    public function getAngles(){
        return 4;
    }
    public function getPerimeter(){
       return array_sum($this->params) * 2;
    }

    public function getArea(){
        return array_product($this->params);
    }
}