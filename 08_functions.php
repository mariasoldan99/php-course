<?php

// 1. Function which prints "Hello world"
function hello($name)
{
    echo "Hello, $name <br>";
}

hello("John"); // 2
hello("Richard"); // 3
hello("Walt"); // 4

// 5. Create sum of two functions
function sum($a, $b)
{
    return ($a + $b) . '<br>'; // 5.3. return sum instead of printing
}

echo sum(4, 5).'<br>'; //
echo sum(9, 10).'<br>'; //

// 6. Create function to sum all numbers using ...$nums
function sum2(...$nums)
{
    $sum = 0;
    foreach ($nums as $num) $sum += $num;
    return $sum;
}
echo sum2(1, 2, 3, 4, 6).'<br>';

// 7 Arrow functions
function sum3(...$nums)
{
    return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo sum3(1, 2, 3, 4, 6).'<br>';


