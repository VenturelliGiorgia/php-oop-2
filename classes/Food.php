<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";


class Food extends Product
{
    private $calories;
    private $ingredients = [];

    function __construct($_name, $_img, Category $_category, $_price, $_calories)
    {

        parent::__construct($_name, $_img, $_category, $_price);
        $this->setCalories($_calories);
    }

    public function getCalories()
    {
        return $this->calories;
    }
    public function setCalories($calories)
    {
        $this->calories = $calories;
        return $this;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }
    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
        return $this;
    }
}
