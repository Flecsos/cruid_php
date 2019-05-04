<?php

$databaseHost = '127.0.0.1';
$databaseName = 'users_and_countries';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
global $mysqli;


 ?>
