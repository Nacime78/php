<?php

// constant variable
// define(num, 500, true);
// define(_num, 500, true);
// can't use $ signe with constant variable name

// constant variable are Global Variable
define("test", 50); // declare the variable and give him a value

// define("test", 10); // This is an error we can not redefine the test variable
// echo test;

// $test = 50

$sum = test + 130;
echo $sum;

?>