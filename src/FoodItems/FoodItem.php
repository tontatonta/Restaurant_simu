<?php
namespace FoodItems;

abstract class FoodItem
{
    protected $name;
    protected $description;
    protected $price;
    protected $category;

    public function __construct($name, $description, $price, $category)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
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

    public function getCategory()
    {
        return $this->category;
    }
}