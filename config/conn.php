<?php

		$dbServername = "localhost";
		$dbUsername ="root";
		$dbPassword="";
		$dbName = "cl_gen";

		$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName) or die("DB connection failed");

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
			} 
?>