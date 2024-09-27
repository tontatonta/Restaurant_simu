<?php

namespace FoodItems;

class HawaiianPizza extends FoodItem{
    public function __construct()
    {
        parent::__construct(
            'Hawaiian Pizza', # name
            'Hawaiian pizza is a pizza topped with tomato sauce, cheese, pineapple, and either ham or bacon.', # description
            18.0, # price
            3  # category
        );
    }
}