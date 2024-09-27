<?php
namespace FoodItems;

abstract class FoodItem
{
    protected $name;
    protected $description;
    protected $price;
    protected $cookTime;

    public function __construct($name, $description, $price, $cookTime)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->cookTime = $cookTime;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getCookTime()
    {
        return $this->cookTime;
    }
}