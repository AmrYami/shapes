<?php


namespace Classes;


use Interfaces\ShapeInterface;

class Triangle extends GeometryShape implements ShapeInterface
{
    private $params;

    public function __construct($params)
    {
        $this->params = $params;
    }

    public function getPerimeter()
    {
        return array_sum($this->params);
    }

    public function getArea()
    {
        $refTri = $this->getPerimeter() / 2;
        return sqrt($refTri * ($refTri - $this->radius[0]) * ($refTri - $this->radius[1]) * ($refTri - $this->radius[2]));
    }

}