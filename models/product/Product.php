<?php
class Product
{
  protected $name;
  protected $img;
  protected $price;
  protected $category;

  // Costruttore
  function __construct(string $_name, string $_img, string $_category)
  {
    $this->name = $_name;
    $this->img = $_img;
    $this->category = $_category;
  }

  // -> SETTER

  // Set the value of $name
  public function setName($_name)
  {
    $this->name = $_name;

    return $this;
  }

  // Set the value of $img
  public function setImg($_img)
  {
    if (is_null($_img)) {
      $this->img = "https://t4.ftcdn.net/jpg/04/99/93/31/360_F_499933117_ZAUBfv3P1HEOsZDrnkbNCt4jc3AodArl.jpg";
    } else {
      $this->img = $_img;
    }

    return $this;
  }

  // Set the value of $price
  public function setPrice($_price)
  {
    if ($_price > 0) {
      $this->price = $_price;
    } else {
      $this->price = null;
    }

    return $this;
  }

  // Set the value of $category
  public function setCategory($_category)
  {
    if ($_category === "cat" || $_category === "dog") {
      $this->category = $_category;
    } else {
      $this->category = "errore";
    }

    return $this;
  }


  // -> GETTER

  // Get the value of $name
  public function getName()
  {
    return $this->name;
  }

  // Get the value of $img
  public function getImg()
  {
    return $this->img;
  }

  // Get the value of $price
  public function getPrice()
  {
    return $this->price;
  }

  // Get the value of $category
  public function getCategory()
  {
    return $this->category;
  }
}
