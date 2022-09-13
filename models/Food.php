<?php
require_once '/Products.php';
class Food extends Products
{
  protected $animal_type;
  protected $food_type;
  protected $quantity;

  public function __construct($name, $description, $price, $animal_type, $food_type, $quantity)
  {
    parent::__construct($name, $description, $price);  
    $this->setAnimalType($animal_type);
  }

    protected function setAnimalType($animal_type)
  {
    return $this->animal_type = $animal_type; 
  }

  public function getAnimalType()
  {
    return $this->animal_type;
  }
}
?>