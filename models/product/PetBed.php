<?php
require_once __DIR__ . '/Product.php';

class PetBed extends Product
{
    protected $material;
    protected $color;
    protected $comfort;
    protected $easyCleaning;
    protected $shape;

    // Costruttore
    function __construct(string $_material, bool $_easyCleaning, string $_name, string $_img, string $_category)
    {
        parent::__construct($_name, $_img, $_category);
        $this->material = $_material;
        $this->easyCleaning = $_easyCleaning;
    }

    // -> SETTER

    // Set the value of $material
    public function setMaterial($_material)
    {
        $this->material = $_material;

        return $this;
    }

    // Set the value of $color
    public function setColor($_color)
    {
        $this->color = $_color;

        return $this;
    }

    // Set the value of $comfort
    public function setComfortt($_comfort)
    {
        $this->comfort = $_comfort;

        return $this;
    }

    // Set the value of $easyCleaning
    public function setEasyCleaning($_easyCleaning)
    {
        $this->easyCleaning = $_easyCleaning;

        return $this;
    }

    // Set the value of $shape
    public function setShape($_shape)
    {
        $this->shape = $_shape;

        return $this;
    }

    // -> GETTER

    // Get the value of $material
    public function getMaterial()
    {
        return $this->material;
    }

    // Get the value of $color
    public function getColor()
    {
        return $this->color;
    }

    // Get the value of $comfort
    public function getComfort()
    {
        return $this->comfort;
    }

    // Get the value of $easyCleaning
    public function getEasyCleaning()
    {
        return $this->easyCleaning;
    }

    // Get the value of $shape
    public function getShape()
    {
        return $this->shape;
    }
}
