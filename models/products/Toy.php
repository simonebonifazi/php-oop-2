<?php
require_once '/Product.php';

class Toy extends Product

{
  protected $name;
  protected $price;
  protected $material;
  protected $width;
  protected $height;

public function __construct($name, $price, $material, $width, $heigth)
{
    parent::__construct($name, $price);
    $this->setMaterial($material);
    $this->setWidth($width);
    $this->setHeight($height);
}
protected function setMaterial($material)
{
    return $this->material = $material;
}
public function getMaterial()
{
    return $this->material ;
}
protected function setWidth($width)
{
    return $this->width = $width;
}
public function getWidth()
{
    return $this->width ;
}
protected function setHeight($height)
{
    return $this->height = $height;
}
public function getHeight()
{
    return $this->height ;
}
}