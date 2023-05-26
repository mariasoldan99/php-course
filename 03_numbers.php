<?php

//Declaring numbers
 $a = 6;
 $b = 3;
 $c = 2.4;

//Arithmetic operations
echo $a + $b . '<br>';
echo $a - $b . '<br>';
echo $a * $b . '<br>';
echo $a / $b . '<br>';
echo $a % $b . '<br>';

//Assignment with math operators
$a += $b; echo $a.'<br>';
$a -= $b; echo $a.'<br>';
$a *= $b; echo $a.'<br>';
$a /= $b; echo $a.'<br>';
$a %= $b; echo $a.'<br>';

//Increment operator
echo $a++.'<br>';
//echo $a.'<br>';
echo ++$a.'<br>';
//echo $a.'<br>';

//Decrement operator
echo $a--.'<br>';
echo --$a.'<br>';

//Number checking functions
var_dump(is_float(4));
var_dump(is_integer(4.13));
var_dump(is_numeric('hei6'));

//Conversion
$strNumber = '45.21';
//$number = (bool)$strNumber;
$number = floatval($strNumber) . '<br>';
var_dump($number);

//Number functions
echo "abs(-19) " . abs(-19) . '<br>';
echo "pow(2,  3) " . pow(2, 3) . '<br>';
echo "sqrt(36) " . sqrt(36) . '<br>';
echo "max(5, 9) " . max(5, 9) . '<br>';
echo "min(5, 9,  5, 1, 2 ) " . min(5, 9, 5, 1, 2) . '<br>';
echo "round(5.5) " . round(5.4) . '<br>';
echo "round(5.7) " . round(5.7) . '<br>';
echo "floor(5.7) " . floor(5.7) . '<br>'; //round down
echo "ceil(5.4) " . ceil(5.1) . '<br>'; // round up


//Formatting numbers
$number = 123456789.12345;
echo number_format($number, 2, '.',  ',') . '<br>';

// link with all function working with numbers
 echo "https://www.php.net/manual/en/ref.math.php";
