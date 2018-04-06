<?php

// connect to the database
$db = mysqli_connect('localhost', 'iumw', 'Webtechiumw123', 'iumw');

if($db === false){
    die("1 - ERROR: Could not connect. " . mysqli_connect_error());
} else {
	echo "1 - Logged In<br/>";

	$table_check = "SELECT * FROM `users`";
	if($db->query($table_check) == TRUE) {
		echo "2 - Error creating table: Table 'users' already exists";
	} else	{
		// create table in the database
		$create_students = "CREATE TABLE `users` (
		  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
		  `username` varchar(100) NOT NULL,
		  `email` varchar(100) NOT NULL,
		  `password` varchar(100) NOT NULL
		) ENGINE=InnoDB DEFAULT CHARSET=latin1";

		if ($db->query($create_students) == TRUE) 
			echo "2 - Table users created successfully";
		}
}
?> 