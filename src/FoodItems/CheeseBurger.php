<?php
namespace FoodItems;

class CheeseBurger extends FoodItem{
    public function __construct()
    {
        parent::__construct(
            'CheeseBurger', # name
            'A cheeseburger is a hamburger topped with cheese.', # description
            10.0, # price
            2  # category
        );
    }
}