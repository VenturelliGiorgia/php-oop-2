<?php

class Category
{
    protected $name;
    protected $icon = "fa-cat";

    function __construct($_name, $_icon = null)
    {
        $this->setName($_name);
        $this->setIcon($_icon);
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getIcon()
    {
        return $this->icon;
    }
    public function setIcon($icon)
    {
        if (empty($icon)) {
            return;
        }

        $this->icon = $icon;
        return $this;
    }

    public function getIconHTML()
    {
        return "<i class='fa-solid $this->icon' />";
    }
}