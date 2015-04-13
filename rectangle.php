<?php

class Rectangle
{
    private $width;
    private $height;

    public function __construct($width, $height) 
    {
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    protected function setWidth($width)
    {
        return is_numeric($width) ? $this->width = $width : null;
    }

    protected function setHeight($height)
    {
        return is_numeric($height) ? $this->height = $height : null;
    }

    public function area()
    {
        return $this->getWidth() * $this->getHeight();
    }

    public function perimeter()
    {
        return ($this->getWidth() + $this->getHeight())*2;
    }

}