<?php
// Generate a random number between 1 and 100
$randomNumber = rand(1, 100);

// Generate a random string of 8 characters
$randomString = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 8);

echo "Random Number: $randomNumber\n";
echo "Random String: $randomString\n";
?>
hehe