<?php
namespace Persons\Employees;
use Restaurants\Restaurants;

class Chefs extends Employees
{

    public function __construct( string $name, int $age, string $address, int $employeeId, double $salary)
    {
        parent::__construct($name, $age, $address, $employeeId, $salary);
    }

    public function preparefood(Restaurants $restaurant, array $foodOrderMap, array $foodNameMenu): double
    {
        $name = $this->getName();
        $time = 0;
        $menu = $restaurant->getMenu();
        $total = 0.0;

        foreach ($foodOrderMap as $foodName => $quantity) {
            $index = array_search($foodName, $foodNameMenu);

            if ($index !== false) {
                for ($i = 0; $i < $quantity; $i++) {
                    $total += $menu[$index]->getPrice();
                    $time += $menu[$index]->getCookTime();
                    echo $name."was cooking".$foodName."\n";
                }
            }
        }
        echo $name."took".$time."minutes to cook.\n";
        return $total;
    }
}
