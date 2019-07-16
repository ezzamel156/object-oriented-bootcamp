<?php

abstract class Shape 
{

    protected $color;

    public function __construct($color = 'red')
    {

        $this->color = $color;

    }

    public function getColor()
    {
        return $this->color;
    }

    abstract protected function getArea();

}

class Square extends Shape 
{

    protected $height = 2;
    
    public function getArea()
    {

        return pow($this->height, 2);

    }

}

class Triangle extends Shape 
{

    protected $base = 2;

    protected $height = 2;

    public function getArea()
    {

        return .5 * $this->base * $this->height;

    }

}

class Circle extends Shape 
{

    protected $radius;

    public function __construct($radius, $color)
    {

        parent::__construct($color);
        $this->radius = $radius;

    }

    public function getArea()
    {

        return M_PI * pow($this->radius, 2);

    }

}

echo (new Circle(5, 'green'))->getColor();