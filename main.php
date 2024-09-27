<?php
spl_autoload_extensions(".php");
spl_autoload_register(function ($class){
    $base_dir = __DIR__. '/src/';
    $file = $base_dir.str_replace('\\', '/', $class).'.php';
    if(file_exists(($file))){
        require $file;
    }
});

$cheeseBurger = new FoodItems\CheeseBurger();
$fettuccine = new FoodItems\Fettuccine();
$HawaiianPizza = new FoodItems\HawaiianPizza();
$Spaghetti = new FoodItems\Spaghetti();

$Ken = new Persons\Employees\Chefs("Ken Suzuki", 40, "Hokkaido", 1, 30);
$Saki = new Persons\Employees\Cashers("Saki Tanaka", 35, "Tokyo", 2, 25);

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
    "CheeseBurger" => 1,
    "Fettuccine" => 1,
    "HawaiianPizza" => 1
];
$Taro = new Persons\Customers\Customers("Taro Yamada", 25, "Tokyo", $interestedTastedMap);

$invoice = $Taro->order($saizeriya);
$invoice->generateInvoice();