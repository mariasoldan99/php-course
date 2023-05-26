<?php

// Cookie is a piece of data saved in browser and sent to server and back
// on every request/response

// 2.Set cookies
setcookie('name', 'Maria', time() + 60, '/');

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';