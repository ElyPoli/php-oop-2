<?php
class Category
{
  protected $img;

  // -> SETTER

  // Set the value of $img
  public function setImg($_img)
  {
    if (is_null($_img)) {
      $this->img = "https://img.rawpixel.com/s3fs-private/rawpixel_images/website_content/v1008-35-ksif2cm8.jpg?w=800&dpr=1&fit=default&crop=default&q=65&vib=3&con=3&usm=15&bg=F4F4F3&ixlib=js-2.2.1&s=bbd4f97ae30ceb110d79d55c3f0a2f9b";
    } else {
      $this->img = $_img;
    }

    return $this;
  }

  // -> GETTER

  // Get the value of $img
  public function getImg()
  {
    return $this->img;
  }
}
