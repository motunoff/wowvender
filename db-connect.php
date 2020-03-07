<?php

$servername = "localhost";
$username = "root";
$password = "3adc70a4";
$db = 'wowvender';

// Create connection
$con = mysqli_connect($servername, $username, $password, $db);

// Check connection
if ( ! $con ) {

	die("Connection failed: " . mysqli_connect_error());

}
 