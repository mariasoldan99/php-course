<?php
session_start();
echo session_id();

$_SESSION['counter'] = $_SESSION['page_count'] ?? 0;
$_SESSION['counter']++;

if ($_SESSION['counter'] > 10){
    echo "Thank you for visiting our website 10 times";
    session_unset();
    session_destroy();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>You have  visited page: <?php echo $_SESSION['counter'] ?? 0 ?></h1>
</body>
</html>