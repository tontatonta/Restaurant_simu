<?php
namespace Restaurants;

class Restaurant{
    public $menu = [];
    public $employees = [];

    public function __construct($menu, $employees)
    {
        $this->menu = $menu;
        $this->employees = $employees;
    }
    public function order(): array{
        return $this->menu;
    }
}