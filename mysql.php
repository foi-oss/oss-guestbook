<?php 
 
		$con = new mysqli('', '', '', '');

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		else
		{
			echo '1';
		}
?>