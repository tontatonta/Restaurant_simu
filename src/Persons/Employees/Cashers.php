<?php
namespace Persons\Employees;
use Restaurants\Restaurants;

class Cashers extends Employees
{

    public function __construct( string $name, int $age, string $address, int $employeeId, double $salary)
    {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function generateOrder(Restaurants $restaurant, array $foodOrderMap, array $foodnameMenu): double{
        $employees = $restaurant->getEmployees();
        $total = 0.0;
        foreach($foodOrderMap as $food => $quantity){
            $total += $foodnameMenu[$food] * $quantity;
        }
        return $total;
    }

    public function generateInvoice(){
        echo $this->getName() . ' made the invoice\n';
    }
}