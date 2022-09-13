<?php
require_once '/Product.php';
class Food extends Product
{
  protected $animal_type;
  protected $food_type;
  protected $quantity;
  protected $ingredients;

  public function __construct($name, $description, $price, $animal_type, $food_type, $quantity, $ingredients)
  {
    parent::__construct($name, $description, $price);  
    $this->setAnimalType($animal_type);
    $this->setFoodType($food_type);
    $this->setQuantity($quantity);
    $this->setIngredients($ingredients);
  }

    protected function setAnimalType($animal_type)
  {
    return $this->animal_type = $animal_type; 
  }

  public function getAnimalType()
  {
    return $this->animal_type;
  }

    protected function setIngredients($ingredients)
  {
    return $this->ingredients = $ingredients; 
  }

  public function getIngredients()
  {
    return $this->ingredients;
  }
    protected function setFoodType($food_type)
  {
    return $this->food_type = $food_type; 
  }

  public function getFoodType()
  {
    return $this->food_type;
  }
    protected function setQuantity($quantity)
  {
    return $this->quantity = $quantity; 
  }

  public function getQuantity()
  {
    return $this->quantity;
  }
}
?>