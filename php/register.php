<?php

$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];


require('../core/connect.php');

$connect->query("INSERT INTO `users` (`login`, `password`, `email`) VALUES ('$login', '$password', '$email');");

$connect->close();

header('Location: ../profile.php');


