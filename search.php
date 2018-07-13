<?php

	$connection = mysqli_connect('localhost', 'root', 'root', 'cars_db');

	$search = $_POST['search'];
	echo $search;

?>