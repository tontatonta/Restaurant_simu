<?php
namespace FoodItems;

class Fettuccine extends FoodItem{
    public function __construct()
    {
        parent::__construct(
            'Fettuccine', # name
            'Fettuccine is a type of pasta popular in Roman and Tuscan cuisine.', # description
            23.0, # price
            1  # category
        );
    }
}
