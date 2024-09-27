<?php
namespace FoodItems;

class Spaghetti extends FoodItem{
    public function __construct()
    {
        parent::__construct(
            'Spaghetti', # name
            'Spaghetti is a long, thin, solid, cylindrical pasta.', # description
            25.0, # price
            4  # cookTime
        );
    }
}