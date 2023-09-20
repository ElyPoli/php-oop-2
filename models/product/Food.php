<?php
require_once __DIR__ . '/Product.php';

class Food extends Product
{
    protected $typology;
    protected $allergens;
    protected $expiration;

    // Costruttore
    function __construct(DateTime $_expiration, string $_name, string $_img, string $_category)
    {
        parent::__construct($_name, $_img, $_category);
        $this->expiration = $_expiration;
    }

    // -> SETTER

    // Set the value of $typology
    public function setTypology($_typology)
    {
        $this->typology = $_typology;

        return $this;
    }

    // Set the value of $allergens
    public function setAllergensy($_allergens)
    {
        $this->allergens = $_allergens;

        return $this;
    }

    // Set the value of $expiration
    public function setExpiration($_expiration)
    {
        $this->expiration = $_expiration;

        return $this;
    }

    
    // -> GETTER

    // Get the value of $typology
    public function getTypology()
    {
        return $this->typology;
    }

    // Get the value of $allergens
    public function getAllergens()
    {
        return $this->allergens;
    }

    // Get the value of $expiration
    public function getExpiration()
    {
        return $this->expiration->format('d/m/Y');
    }
}