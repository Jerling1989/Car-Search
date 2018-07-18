<?php

	require 'db.php';

	if(isset($_POST['car_name'])) {
		$newCar = $_POST['car_name'];
		echo $newCar;
	}

?>