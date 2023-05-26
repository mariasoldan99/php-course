<?php


// 1. Print the whole $_GET using var_dump
echo '<pre>';
var_dump($_GET);
echo '</pre>';

// 2. Check if the keyword isset in $_GET
$keyword = '';
if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
//    echo $keyword.'<br>';
}

// 4. Set the keyword back in search input

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
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
  <input type="text" name="keyword" value="<?php echo $keyword ?>"
         placeholder="Type and hit enter" >
  <button>Search</button>
</form>
</body>
</html>
