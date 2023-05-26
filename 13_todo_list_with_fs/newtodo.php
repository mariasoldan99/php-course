<?php
//print post Data
//echo '<pre>';
//var_dump($_POST);
//echo '</pre>';

//create var todoName
$todoName = $_POST['todo_name'] ?? '';
$todoName = trim($todoName);
//check
if($todoName){
    if(file_exists('todo.json')) {
        //echo 'Save todo';
        $json = file_get_contents('todo.json');
        $jsonArray = json_decode($json, true);
    }else{
        $jsonArray =[];
    }
    $jsonArray[$todoName] = ['completed' => false];

//    echo '<pre>';
//    var_dump($jsonArray);
//    echo '</pre>';
    //save in json File
    file_put_contents('todo.json', json_encode($jsonArray, JSON_PRETTY_PRINT));
}

header('Location: index.php');