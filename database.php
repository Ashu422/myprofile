<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	 $database = "mydb";
// Create connection
	$conn = new mysqli($servername, $username, $password, $database  );
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

//Create database
	// $sql = "CREATE DATABASE if not exists mydb";
	// if ($conn->query($sql) === TRUE) { 
	// 	echo "Database created successfully";
	// } else {
	// 	echo "Error creating database: " . $conn->error;
	// }

	// $conn->close();

	?>