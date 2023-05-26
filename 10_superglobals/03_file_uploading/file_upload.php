<?php

// 1. Add enctype="multipart/form-data" to form
// 2. var_dump $_FILES
//echo '<pre>';
//var_dump($_FILES);
//echo '</pre>';

// Create $errorMessage variable
$errorMessage = '';
// Check if file was uploaded and save it locally
if (isset($_FILES['file'])) {
    // Get the file extension
    $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    // Convert $text into lowercase
    $ext = strtolower($ext);

    // Check if the file size is more than 5MB and show error
    if ($_FILES['file']['size'] > 5 * 1024 * 2014) {
      $errorMessage = 'File size can not be more than 5MB files';
      // Display error message in HTML
    } elseif (!in_array($ext, ['jpg', 'png', 'jpeg', 'svg'])) {
      $errorMessage = 'You can only upload images';
    } elseif ($_FILES['file']['error'] === 0) {
        move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);
    }
//    echo '<pre>';
//    var_dump($_FILES);
//    echo '</pre>';
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
<p><?php echo $errorMessage ?></p>
<form action="" method="post" enctype="multipart/form-data">
  <input type="file" name="file"><br>
  <button>Submit</button>
</form>
</body>
</html>
