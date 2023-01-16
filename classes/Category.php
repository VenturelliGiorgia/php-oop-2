<?php
class Category
{
    private $categoryName;
    private $icon;

    function __construct($_categoryName, $_icon)
    {
        $this->setCategoryName($_categoryName);
        $this->setIcon($_icon);
    }

    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    public function setIcon($icon)
    {
        $this->icon = $icon;
        return $this;
    }
    public function getIcon()
    {
        return $this->icon;
    }
};
