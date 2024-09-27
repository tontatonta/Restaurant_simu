<?php
namespace Persons\Customers;
use Persons\Persons;
use Restaurants\Restaurants;
use Invoices\Invoices;

class Customers extends Persons
{
    protected array $interestedTastedMap;

    public function __construct(string $name, int $age, string $address, array $interestedTastedMap)
    {
        parent::__construct($name, $age, $address);
        $this->interestedTastedMap = $interestedTastedMap;
    }

    public function order(Restaurants $restaurant): Invoices{
        $employees = $restaurant->getEmployees();
        $name = $this->getName();
        $menu = $restaurant->getMenu();

        $total = 0.0;
        $foodOrderMap = [];
        $foodName = array_fill(0, count($menu), "");
        $foodOrderStr = "";

        $this -> interestedCategories();

        for ($i = 0; $i < count($menu); $i++) {
            $foodName[$i] = $menu[$i]->getName();
        }

        foreach ($this->interestedTastedMap as $foodName => $quantity) {
            $index = array_search($foodName, $foodName);

            if ($index !== false) {
                $foodOrderMap[$foodName] = $quantity;
                $foodOrderStr .= $quantity . " x " . $foodName . ", ";
            }
        }

        echo $name. " was looking thi menu, and order".substr($foodOrderStr, 0, strlen($foodOrderStr)-2)."\n";

        for ($i = 0; $i < count($employees); $i++) {
            if ($employees[$i]->getName() == "Persons\Employees\Cashers") {
                $cashier = $employees[$i];
                $total = $cashier->generateOrder($restaurant, $foodOrderMap, $foodName);
                $cashier->generateInvoice();
            }
        }

        return new Invoices($total);

    }
}
