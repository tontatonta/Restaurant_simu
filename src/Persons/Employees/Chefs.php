<?php
namespace Persons\Employees;
use Restaurants\Restaurants;

class Chefs extends Employees
{

    public function __construct( string $name, int $age, string $address, int $employeeId, double $salary)
    {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function preparefood(Restaurants $restaurant)
    {
        return $this->name . ' is preparing food for ' . $restaurant->getName();
    }
}