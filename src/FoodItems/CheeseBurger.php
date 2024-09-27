<?php
namespace FoodItems;

class CheeseBurger extends FoodItem{
    public function __construct()
    {
        parent::__construct(
            'Cheese Burger', # name
            'A cheeseburger is a hamburger topped with cheese.', # description
            10.0, # price
            2  # category
        );
    }
}