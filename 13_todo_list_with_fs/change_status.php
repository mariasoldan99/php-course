<?php

//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';

//read the file
$json = file_get_contents('todo.json');
$jsonArray = json_decode($json, true);

//give the todoName
$todoName = $_POST['todo_name'];
//change status
$jsonArray[$todoName]['completed'] = !$jsonArray[$todoName]['completed'];

file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));

header('Location: index.php');