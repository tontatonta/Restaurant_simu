<?php
spl_autoload_register(".php");
spl_autoload_register(function($class){
    $base_dir = __DIR__ . '/src/';
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});

$cheeseBurger = new FoodItem\CheeseBurger();
$fettuccine = new FoodItem\Fettuccine();
$HawaiianPizza = new FoodItem\HawaiianPizza();
$Spaghetti = new FoodItem\Spaghetti();

$Ken = new Persons\Employees\Chef("Ken Suzuki", 40, "Hokkaido", 1, 30);
$Saki = new Persons\Employees\Chef("Saki Tanaka", 35, "Tokyo", 2, 25);

$saizeriya = new Restaurants\Restaurants(
    [
        $cheeseBurger,
        $fettuccine,
        $HawaiianPizza,
        $Spaghetti
    ],
    [
        $Ken,
        $Saki
    ]
);

$interestedTastedMap = [
    "CheeseBurger" => 2,
    "Fettuccine" => 1,
    "HawaiianPizza" => 3,
    "Spaghetti" => 2
];
$Tom = new Persons\Customers\Customers("Taro Yamada", 25, "Tokyo", $interestedTastedMap);

$invoice = $Tom->orderFood($saizeriya);
$invoice->printInvoice();