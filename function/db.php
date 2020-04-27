<?php
$host     = 'localhost';
$username = 'root';
$pass     = '60900117001';
$db       = 'php_resume';

$link = mysqli_connect($host, $username, $pass, $db) or die('Error bro' . mysqli_connect_error());
