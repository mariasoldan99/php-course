<?php

// What is a variable

// Variable types
/*
    String
    Integer
    Float
    Boolean
    Null
    Array
    Object
    Resource
*/

// 1. Declare variables
$name = 'Maria';
$age = 23;
$isFemale = true;
$height = 1.61;
$salary = null;

// 2. Print the variables. Explain what is concatenation
echo $name . '<br>';
echo $age . '<br>';
echo $isFemale . '<br>';
echo $height . '<br>';
echo $salary . '<br>';

// 4. Print types of the variables
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isFemale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';

// 5. Print the whole variable
var_dump($name, $age, $salary);
var_dump($isFemale, $height);

// 6. Change the value of the variable
$name = 28;

// 7. Print type of the variable
echo gettype($name).'<br>';

// 8. Variable checking functions
var_dump(is_string($name)); //false
var_dump(is_int($name));

// 9. Check if variable is defined
var_dump(isset($hello));
var_dump(isset($name));
var_dump(isset($age));
var_dump(isset($salary));

// 10. Constants
define('PI',3.14);
echo PI;
var_dump(defined('PI'));

// 12. Using PHP built-in constants
echo PHP_INT_MAX;
