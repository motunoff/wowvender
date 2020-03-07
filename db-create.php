<?php

$servername = "localhost";
$username = "root";
$password = "wowvender";

// Create connection
$con = mysqli_connect($servername, $username, $password);

// Check connection
if ( ! $con ) {

	die("Connection failed: " . mysqli_connect_error());

}

// Create database
$sql_db = "CREATE DATABASE IF NOT EXISTS wowvender CHARACTER SET utf8 COLLATE utf8_general_ci";

// Check if db created
if ( mysqli_query($con, $sql_db) ) {


	// Select db  
	$db = mysqli_select_db($con, 'wowvender');

	// Check db select
	if ( $db ) {

		// sql to create user table 
		$sql_user = "CREATE TABLE IF NOT EXISTS user (
									id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
									username VARCHAR(30) NOT NULL,
									role_id INT(6) NOT NULL 
									)";

		if ( ! $con->query($sql_user) ) {

			echo "Error creating table: " . $con->error;

		}

		// sql to create user_role table 
		$sql_user_role = "CREATE TABLE IF NOT EXISTS user_role  (
									id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
									rolename VARCHAR(30) NOT NULL
									)";

		if ( ! $con->query($sql_user_role) ) {

			echo "Error creating table: " . $con->error;
		}

	} else {

		echo "Error select database: " . mysqli_error($con);

	}

} else {

	echo "Error creating database: " . mysqli_error($con);

}

// Close connection
$con->close();