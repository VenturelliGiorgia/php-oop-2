<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

class Game extends Product
{
    private $genre;
    private $materials = [];

    function __construct($_name, $_img, Category $_category, $_price, $_materials)
    {

        parent::__construct($_name, $_img, $_category, $_price);
        $this->setMaterials($_materials);
    }

    public function getGenre()
    {
        return $this->genre;
    }
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    public function getMaterials()
    {
        return $this->materials;
    }
    public function setMaterials($materials)
    {
        $this->materials = $materials;

        return $this;
    }
}
