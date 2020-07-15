<?php
	define('DB_SERVER_NAME', 'localhost');
	define('DB_TABLE_NAME', 'contacts');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');

	$mysqli = new mysqli(DB_SERVER_NAME, DB_USER, DB_PASSWORD, DB_TABLE_NAME);

	if ($mysqli->connect_error) {
		echo "An error to connect to database";
	}

	$sql = "INSERT INTO clients (name, email, message) VALUES ('$name', '$email', '$message')";

		$sql = "SELECT * FROM clients;";
		$result = $mysqli->query($sql);

		while($array = $result->fetch_assoc()) {
	}
