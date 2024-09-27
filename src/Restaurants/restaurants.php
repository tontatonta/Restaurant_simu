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
    public function getMenu()
    {
        return $this->menu;
    }
    public function getEmployees()
    {
        return $this->employees;
    }
}