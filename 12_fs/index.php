<?php
// Magic constants
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';

// Create directory
//mkdir('test');

// Rename directory
//rename('test', 'test2');

// Delete directory
//rmdir('test2');

// Read files and folders inside directory
$files = scandir('./');
echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents
$lorem = file_get_contents('lorem.txt');
echo $lorem;
echo '<br>';
file_put_contents('lorem.txt', "My text" . PHP_EOL . $lorem);


