<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mingration file</title>
</head>
<body>	
	<?php

	include 'database.php';
	$queries = [];

	$queries['create_users_table'] = "CREATE TABLE users(
	id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	name VARCHAR(255) NOT NULL,
	father_name VARCHAR(255) NOT NULL,
	DOB Date NOT NULL,
	mobile VARCHAR(255) NOT NULL,
	email VARCHAR(255) NOT NULL,
	address VARCHAR(255) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
	)";
	
	$queries['create_skills_table'] = "CREATE TABLE skills(
	id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	name VARCHAR(255) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
	)";

	$queries['create_Qualification_details_table'] = "CREATE TABLE Qualification_details(
	id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	Passing_year Date NOT NULL,
	Course VARCHAR(255) NOT NULL,
	role ENUM('school','collage','university') NOT NULL,
	Marks VARCHAR(255) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	update_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
	)";

	foreach ($queries as $query) {
		if ($conn->query($query) === TRUE) {
			echo "Table created successfully";
		}
		else {
			echo "Error creating table: " . $conn->error;
		}
	}

	?>

</body>
</html>