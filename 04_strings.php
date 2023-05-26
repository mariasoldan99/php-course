<?php

// 1. Create simple string
$name = 'world';
//$hello = "Hello " . $name;
//$hello2 = 'Hello ' . $name;
$hello = "Hello $name" ;
$hello2 = 'Hello $name';
echo $hello . '<br>';
echo $hello2 . '<br>';

// String concatenation
echo "Hello"
    . " world"
    . '<br>';

// 4. String functions
$string = "    Hello World      ";

echo "1 - " . strlen($string) . '<br>' . PHP_EOL;
echo "2 - " . trim($string) . '<br>' . PHP_EOL;
echo "3 - " . ltrim($string) . '<br>' . PHP_EOL;
echo "4 - " . rtrim($string) . '<br>' . PHP_EOL;
echo "5 - " . str_word_count($string) . '<br>' . PHP_EOL;
echo "6 - " . strrev($string) . '<br>' . PHP_EOL;
echo "7 - " . strtoupper($string) . '<br>' . PHP_EOL;
echo "8 - " . strtolower($string) . '<br>' . PHP_EOL;
echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
echo "12 - " . strpos($string, 'world') . '<br>' . PHP_EOL; // 5. Change into world
echo "13 - " . stripos($string, 'world') . '<br>' . PHP_EOL;
echo "14 - " . substr($string, 8) . '<br>' . PHP_EOL;
echo "15 - " . str_replace('world', 'PHP', $string) . '<br>' . PHP_EOL;
echo "16 - " . str_ireplace('world', 'PHP', $string) . '<br>' . PHP_EOL;


$invoiceNumber = 400;     // 00000400
$invoiceNumber2 = 123456; // 00123456
echo str_pad($invoiceNumber, 8, '0', STR_PAD_LEFT) . '<br>';
echo str_pad($invoiceNumber2, 8, '0', STR_PAD_LEFT) . '<br>';
echo str_repeat('Hey', 5) . '<br>';

// 6. Multiline text and line breaks
$longText = "
  Hello, my name is Maria
  I am 23,
  I love to paint
";
echo $longText . '<br>';
echo nl2br($longText) . '<br>';

// 7. Multiline text and reserve html tags
$longText = "
  Hello, my name is <b>Maria</b>
  I am <b>23</b>,
  I love to <i> paint </i>
";
echo "1 - " . $longText . '<br>';
echo "2 - " . nl2br($longText) . '<br>';
echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;



// https://www.php.net/manual/en/ref.strings.php
