<?php

	$connection = mysqli_connect('localhost', 'root', 'root', 'cars_db');

	$search = $_POST['search'];

	if(!empty($search)) {
		$query = mysqli_query($connection, "SELECT * FROM cars WHERE name LIKE '$search%'");

		if(!$query) {
			die('QUERY FAILED' . mysqli_error($connection));
		}

		while($row = mysqli_fetch_array($query)) {
			$result = $row['name'];

			?>
			<ul class="list-unstyled">
				<?php
				echo "<li>$result in stock</li>";
				?>
			</ul>
			<?php

		}
	}

?>