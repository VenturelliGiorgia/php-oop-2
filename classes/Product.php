<?php
require_once __DIR__ . '/Category.php';

class Product
{

    private $name;
    private $img;
    private $category;
    private $type;
    private $price;

    function __construct( $_name, $_img, $_category, $_type, $_price)
    {

        $this->setName($_name);
        $this->setImg($_img);
        $this->setCategory($_category);
        $this->setType($_type);
        $this->setPrice($_price);
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function getName()
    {
        return $this->name;
    }

    public function setImg($img)
    {
        $this->img = $img;
        return $this;
    }
    public function getImg()
    {
        return $this->img;
    }

    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }
    public function getCategory()
    {
        return $this->category;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }
    public function getType()
    {
        return $this->type;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
    public function getPrice()
    {
        return $this->price;
    }
};
