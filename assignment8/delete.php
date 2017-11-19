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
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CSC 174 | Team Juneau</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>
		<body>
		<!-- Start Top Bar -->
  			<div class="top-bar part">
    			<div class= "top-bar-left">
      				<ul class="menu">
        				<li class="menu-text">Team Juneau</li>
      				</ul>
    			</div>
  			</div>
  		<!-- End Top Bar -->
  		<br><br><br><br>
		<?php
			if ($result) {
		?>
    		<div>
    			<h1 class= "text-center">The record of number <?php echo $_POST['id'] ?> has been deleted!</h1>	
    		</div>

		<?php
			} else {
    			die("Database query failed.");
			}
		?>

		<br>
		<div class= "text-center"><a href="admin.php" class="button large">Back</a></div>
		<br><br><br><br>
		<hr>
		<footer>
      		<div class="foot">
        		<p>Copyright &copy; 2017 - This webpage is created by Team Juneau
       			 <br>
        		Here is a reference we used for assignment 8:
              	<a href="http://www.rochester.edu/dining/learn-more/about-us/">U of R Dining Services</a>
        		</p>    
      		</div> 
    	</footer>

		</body>
</html>


<?php
	mysqli_close($mysqli);
?>
