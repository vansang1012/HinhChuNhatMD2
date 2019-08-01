<?php


class Rectangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }

    public function getPerimeter()
    {
        return ($this->width +  $this->height) * 2;
    }

    public function display()
    {
        echo "Hinh Chu Nhat co area :" . $this->getArea() . " chu vi  : " . $this->getPerimeter();
    }
}
$rectangle=new Rectangle(10,15);
$area=$rectangle->getArea();
$perimeter=$rectangle->getPerimeter();
echo $area." <br/>";
echo $perimeter." <br/>";
$rectangle->display();