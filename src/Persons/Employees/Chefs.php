<?php
namespace Persons\Employees;
use Restaurants\Restaurants;

class Chefs extends Employees
{

    public function __construct( string $name, int $age, string $address, int $employeeId, float $salary)
    {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function prepareFood(Restaurants $restaurant, array $foodOrderMap, array $foodNameMenu): float
    {
        $name = $this->getName();
        $time = 0;
        $menu = $restaurant->getMenu();
        $total = 0.0;


        foreach ($foodOrderMap as $foodName => $quantity) {
            $index = array_search($foodName, $foodNameMenu);

            if ($index !== false) {
                for ($j = 0; $j < $quantity; $j++) {
                    $total += $menu[$index]->getPrice();
                    $time += $menu[$index]->getCookTime();
                    echo $name."was cooking ".$foodName.".\n";
                }
            }
        }
        echo $name." took " .$time." minutes to cook.\n";
        return $total;
    }
}
