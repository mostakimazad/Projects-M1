<?php

$username = "admin";
$password = "1234";


$inputUsername = "admin";   
$inputPassword = "1234";    


if ($inputUsername === $username && $inputPassword === $password) {
    echo "Your Login Successful";
} else {
    echo "Wrong username or password";
}
?>
