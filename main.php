<?php
$variable1 = "Hello";
$variable2 = 10;

echo $variable1; // Prints: Hello
echo $variable2; // Prints: 10

echo isset($variable1); // trueの場合、1と表示
echo isset($variable1); // falseの場合、何も表示しない
echo isset($variable3) === true ? 'variable3 exists' : 'variable3 does not exist';
