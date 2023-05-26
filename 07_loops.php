<?php

// 1. while

//while (true) { // Infinite loop
//    // Do somethings
//}

// 2. Loop with $counter
$counter = 0;
$loop = true;
// 2.2. Add $runLoop variable to above loop
while ($counter < 10) {
    echo "Counter: $counter<br>";
    if($counter >= 5) break;
    $counter++;
}

$counter = 0;
while ($loop) {
    echo "Counter: $counter<br>";
    if($counter >= 9) {
        $loop = false;
    };
    $counter++;
}

// 3. do - while
$counter = 0; // When counter is 10?
do {
    // Do some code right here
    $counter++;
} while ($counter < 10);

// 4. for
for ($i = 0; $i < 10; $i++) {
    echo "Printing counter: $i<br>";
}

// 5. foreach
$fruits = ["Banana", "Apple", "Orange"];
foreach ($fruits as $i => $fruit) {
    echo $i . ' ' . $fruit . '<br>';
}

// 6. Iterate Over associative array.
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];
foreach ($person as $key => $value) {
    if ($key === 'hobbies') { // 8. Break when $key = 'hobbies'
        break;
    }
    echo $key . ' ' . $value . '<br>';
}
