<?php
// Create a database connection
$mysqli = new mysqli('66.147.242.186', 'urcscon3_juneau', 'coffee1N', 'urcscon3_juneau');

$id = $_POST ['id'];


$query = "DELETE FROM survey ";
$query .= "WHERE id = {$id} ";
$query .= "LIMIT 1";

$result = mysqli_query($mysqli, $query);
?>

<!doctype html>
<html class="no-js" lang="en">
	<head>
		<title>Assignment 8 </title>
	</head>
		<body>
		<?php
			if ($result) {
		?>
    		<div>
    		<h2 align = "center" >The record has been deleted!</h2>	
    		</div>

		<?php
			} else {
    			die("Database query failed.");
			}
		?>


		</body>
</html>



<?php
	mysqli_close($connection);
?>

<br>
<a href="admin.php">Back</a>
