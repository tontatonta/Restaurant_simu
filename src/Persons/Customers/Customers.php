<?php
namespace Persons\Customers;
use Persons\Persons;
use Restaurants\Restaurants;
use Invoices\Invoices;

class Customers extends Persons
{
    protected array $interestedTastedMap = [];

    public function __construct(string $name, int $age, string $address, array $interestedTastedMap)
    {
        parent::__construct($name, $age, $address);
        $this->interestedTastedMap = $interestedTastedMap;
    }

    public function interestedCategories()
    {
        $foods = "";

        foreach ($this->interestedTastedMap as $foodName => $quantity) {
            $foods .= $foodName . ", ";
        }
        echo $this->getName() . " wanted to eat " . substr($foods, 0, strlen($foods) - 2) . "\n";
    }

    public function order(Restaurants $restaurant): Invoices{
        $employees = $restaurant->getEmployees();
        $name = $this->getName();
        $menu = $restaurant->getMenu();

        $total = 0.0;
        $foodOrderMap = array();
        $foodNameMenu = array_fill(0, count($menu), "");
        $foodOrderStr = "";

        $this -> interestedCategories();

        for ($i = 0; $i < count($menu); $i++) {
            $foodNameMenu[$i] = $menu[$i]->getName();
        }

        foreach ($this->interestedTastedMap as $foodName => $quantity) {
            $index = array_search($foodName, $foodNameMenu);

            if ($index !== false) {
                $foodOrderMap[$foodName] = $quantity;
                $foodOrderStr .= $foodName . " x " . $quantity . ", ";
            }
        }

        echo $name. " was looking the menu, and order".substr($foodOrderStr, 0, strlen($foodOrderStr)-2).".\n";

        for ($i = 0; $i < count($employees); $i++) {
            if (get_class($employees[$i]) == "Persons\Employees\Cashers") {
                $cashier = $employees[$i];
                $total = $cashier->generateOrder($restaurant, $foodOrderMap, $foodNameMenu);
                $cashier->generateInvoice();
            }
        }

        return new Invoices($total);

    }
}
