<?php
require_once __DIR__ . '/Category.php';

class Dog extends Category
{
    public function __construct()
    {
        $this->img = '<i class="fa-solid fa-dog my-mark-card"></i>';
    }
}
