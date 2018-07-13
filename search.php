<?php

	$connection = mysqli_connect('localhost', 'root', 'root', 'cars_db');

	if($connection) {
		echo 'You are connected!';
	}

?>