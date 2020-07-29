<?php


namespace Classes;


use Interfaces\ShapeInterface;

class Circle extends GeometryShape implements ShapeInterface
{
    private $radius;
    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getPerimeter(){
        return $this->radius * 2 * PI;
    }

    public function getArea(){
        $circumference = $this->getPerimeter();
        return  $circumference * 2;
    }
}