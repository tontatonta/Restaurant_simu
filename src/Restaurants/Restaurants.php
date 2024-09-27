<?php
namespace Restaurants;

class Restaurants{
    public $menu = [];
    public $employees = [];

    public function __construct(array $menu, array $employees)
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