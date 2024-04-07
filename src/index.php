<?php

echo "Hello. What is your name?\n";
$name = trim(fgets(STDIN));
echo "$name\n";
echo "Hello $name\n";

echo "Enter the number1\n";
$number1 = fgets(STDIN);
echo "Enter the number2\n";
$number2 = fgets(STDIN);
$sum = $number1 + $number2;
$avg = ($number1 + $number2)/2;
echo "Sum of number1 and number2: $sum , arithmetic average: $avg \n";
