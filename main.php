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

// Display the menu
echo "Menu\n";
echo "----------------\n";
$menu = $saizeriya->getMenu();
foreach($menu as $index => $food){
    echo ($index + 1) . ". " . $food->getName() . ": " . $food->getPrice() . "$\n";
    echo $food->getDescription() . "\n";
    echo "----------------\n";
}

$interestedTastedMap = [];

while(true){
    $input = readline("Enter the product number you want to choose (type 'Fin' to finish): ");
    
    // Break the loop if "Fin" is entered
    if(strtolower($input) === "fin") {
        echo "\n";
        break;
    }

    // Get the product number
    $productIndex = intval($input) - 1;

    // Check if the product number is valid
    if($productIndex >= 0 && $productIndex < count($menu)){

        $quantity = intval(readline("Enter the quantity of the chosen product: "));
        // Add or update the order content in the array

        $foodName = $menu[$productIndex]->getName();
        if (isset($interestedTastedMap[$foodName])) {
            // If it already exists, add the quantity
            $interestedTastedMap[$foodName] += $quantity;
        } else {
            // If it’s new, add it
            $interestedTastedMap[$foodName] = $quantity;
        }

        echo "You ordered " . $quantity . " of " . $foodName . ".\n";
        echo "\n";
    } else {
        echo "Invalid product number. Please try again.\n";
        echo "\n";
    }
}

// Create the customer with the entered name
$customerName = readline("Please enter your name: ");
echo "\n";
$Customer = new Persons\Customers\Customers($customerName, 25, "Tokyo", $interestedTastedMap);

// Generate the order and issue the invoice
$invoice = $Customer->order($saizeriya);
$invoice->generateInvoice();
