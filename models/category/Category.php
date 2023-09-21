<?php
class Category
{
  protected $img;

  // -> SETTER

  // Set the value of $img
  public function setImg($_img)
  {
    $this->img = $_img;

    return $this;
  }

  // -> GETTER

  // Get the value of $img
  public function getImg()
  {
    return $this->img;
  }
}
