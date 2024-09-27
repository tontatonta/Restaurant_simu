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
