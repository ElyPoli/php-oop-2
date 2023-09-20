<?php
require_once __DIR__ . '/Category.php';

class Cat extends Category
{
    public function __construct()
    {
        $this->img = '<i class="fa-solid fa-cat my-mark-card"></i>';
    }
}
