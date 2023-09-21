<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/../../traits/MaterialColor.php';

class Game extends Product
{
    use MaterialColor;
    protected $resistant;
    protected $noise;

    // Costruttore
    function __construct(string $_material, bool $_noise, string $_name, string $_category)
    {
        parent::__construct($_name, $_category);
        $this->setMaterial($_material);
        $this->setNoise($_noise);
    }

    // -> SETTER

    // Set the value of $resistant
    public function setResistant($_resistant)
    {
        $this->resistant = $_resistant;

        return $this;
    }

    // Set the value of $noise
    public function setNoise($_noise)
    {
        $this->noise = $_noise;

        return $this;
    }


    // -> GETTER

    // Get the value of $resistant
    public function getResistant()
    {
        if ($this->resistant === true) {
            return '<i class="fa-solid fa-check my-mark-card"></i>';
        } else {
            return '<i class="fa-solid fa-xmark my-mark-card"></i>';
        }
    }

    // Get the value of $noise
    public function getNoise()
    {
        if ($this->noise === true) {
            return '<i class="fa-solid fa-check my-mark-card"></i>';
        } else {
            return '<i class="fa-solid fa-xmark my-mark-card"></i>';
        }
    }
}
