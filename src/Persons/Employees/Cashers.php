<?php
namespace Persons\Employees;
use Restaurants\Restaurants;

class Cashers extends Employees
{

    public function __construct( string $name, int $age, string $address, int $employeeId, float $salary)
    {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function generateOrder(Restaurants $restaurant, array $foodOrderMap, array $foodNameMenu): float{

        $employees = $restaurant->getEmployees();
        $total = 0.0;

        for($i = 0; $i < count($employees); $i++){
            if(get_class($employees[$i]) == "Persons\Employees\Chefs"){
                $chef = $employees[$i];
                $total = $chef->prepareFood($restaurant, $foodOrderMap, $foodNameMenu);
            }
        }
        return $total;
    }

    public function generateInvoice(){
        echo $this->getName() . ' made the invoice' . "\n";
    }
}