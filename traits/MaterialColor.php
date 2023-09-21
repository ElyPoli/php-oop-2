<?php

trait MaterialColor
{
    protected $material;
    protected $color;

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
}
