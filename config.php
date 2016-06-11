<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = 'abcdefgh';
$dbName = 'my_db';
$dbC = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName)
  or die('Error connecting to the mySql Database');
?>
