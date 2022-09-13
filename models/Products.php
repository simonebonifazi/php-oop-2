<?php
class Products 

{
  private $id;
  protected $name;
  protected $description;
  protected $price;

  public function __construct($id, $name, $description, $price)
  {
    $this->setId($id);
    $this->setName($name);
    $this->setDescription($description);
    $this->setPrice($price);
  }

  protected function setid($id)
  {
    //per gestire l'autoincremento dell'id
    if( !is_numeric($id) || $this->id < 0) return
    $this->id = $id++;

    return $this;
  }

  public function getId()
  {
    return $this->id;
  }
  protected function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  public function getName()
  {
    return $this->name;
  }

  protected function setDescription($description)
  {
    $this->description = $description;
    return $this;
  }

  public function getDescription()
  {
    return $this->description;
  }

  protected function setPrice($price)
  {
    $this->price = $price;
    return $this;
  }

  public function getPrice()
  {
    return $this->price;
  }

}

?>