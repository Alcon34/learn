<?php

class Vegetable {
    public $edible;

    public $color;

    public function __construct($edible, $color = "green")
    {
        $this->edible = $edible;
        $this->color = $color;
    }

    public function isEdible()
    {
        return $this->edible;
    }

    public function getColor()
    {
        return $this->color;
    }
}