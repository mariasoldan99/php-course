<?php

// Create array
$fruits = ['Apple', 'Orange', 'Papaya', 'Banana'];
  //or
$fruits2 = array('Apple', 'Orange', 'Papaya', 'Banana');

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Get element by index
echo $fruits[2].'<br>';

// Set element by index
$fruits[0] = 'Peach';


echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2

echo '<pre>';
var_dump(isset($fruits[4]));
echo '</pre>';

// Append element
$fruits[] = "Apple";

echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits, 'Strawberry');

echo '<pre>';
var_dump($fruits);
echo '</pre>';



// Remove element from the end of the array
array_pop($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Add element at the beginning of the array
array_unshift($fruits, 'Peach');

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Remove element from the beginning of the array
array_unshift($fruits);

echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Split the string into an array
$string = 'Apple,Banana,Peach';
echo '<pre>';
var_dump(explode(',',$string));
echo '</pre>';

// Combine array elements into string
echo implode(' ',$fruits).'<br>';

// Check if element exist in the array
echo in_array('Apple', $fruits).'<br>'; //boolean

// Search element index in the array
echo array_search('Apple', $fruits).'<br>'; //index of the 'Apple'

// Merge two arrays
$vegetables = ['Potato', "Tomato"];
echo '<pre>';
//var_dump(array_merge($fruits, $vegetables));
var_dump([...$vegetables, ...$fruits]);
echo '</pre>';

// Sorting of array (Reverse order also)
//sort($fruits);
//rsort($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Filter, map, reduce of array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8];
$evens = array_filter($numbers,  fn($n) => $n % 2 === 0);
echo '<pre>';
var_dump($evens);
echo '</pre>';

$squares = array_map(fn($n) => $n * $n, $numbers);
echo '<pre>';
var_dump($squares);
echo '</pre>';

$sum = array_reduce($numbers, fn($carry, $item) => $carry + $item);
echo $sum.'<br>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'John',
    'surname' => 'Peterson',
    'age' => '32',
    'hobbies' => ['Football', 'Read']
];


// Get element by key
echo $person['name'].'<br>';
echo $person['age'].'<br>';

// Set element by key
$person['channel'] = 'Travel';

// Check if array has specific key
isset($person['age']); //true
isset($person['address']); //false

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo'/<pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo'/<pre>';

// Sorting associative arrays by values, by keys
ksort($person);

echo '<pre>';
var_dump(array_values($person));
echo'/<pre>';

asort($person);

echo '<pre>';
var_dump(array_values($person));
echo'/<pre>';

// Two dimensional arrays
$todoItems = [
    ['title' => 'item1', 'status' => 'true'],
    ['title' => 'item2', 'status' => 'false'],
    ['title' => 'item3', 'status' => 'true'],
];

echo '<pre>';
var_dump($todoItems);
echo'/<pre>';

