
<?php 
// Create a database connection
$mysqli = new mysqli('66.147.242.186', 'urcscon3_juneau', 'coffee1N', 'urcscon3_juneau');

$number = $_POST['id'];
$updatedName = Trim(stripslashes($_POST['name']));
$updatedEmail =  Trim(stripslashes($_POST['email']));
$updatedTelephone =  Trim(stripslashes($_POST['telephone']));

//question1
$statusselect=$_POST["status"];

//question2
$location1=$_POST["location1"];
$location2=$_POST["location2"];
$location3=$_POST["location3"];
$location4=$_POST["location4"];
$location5=$_POST["location5"];


//question3
$qualityselect=$_POST["quality"];

//question4
$purchaseselect=$_POST["purchase"];

//question5
$eatselect=$_POST["eat"];

//question6
$dietaryselect=$_POST["dietary"];

//question7
$specialdietaryselect=$_POST["special-dietary"];

//question8
$cafeteriaselect=$_POST["cafeteria"];

$message=trim(stripslashes($_POST["message"]));



$query  = "UPDATE survey SET ";
$query .= "Name = '$updatedName',";
$query .="Email = '$updatedEmail',";
$query .="Telephone = '$updatedTelephone', ";
$query .="CampusStatus = '$statusselect', ";
$query .="FoodLocation = '$location1, $location2, $location3, $location4, $location5', ";
$query .="QualityRate = '$qualityselect', ";
$query .="FoodPurchase = '$purchaseselect', ";
$query .="WhereToGetFood = '$eatselect', ";
$query .="DietaryNeeds = '$dietaryselect', ";
$query .="SpecialDietary = '$specialdietaryselect', ";
$query .="Cafeteria = '$cafeteriaselect', ";
$query .="Message = '$message'";
$query .= "WHERE ID = {$number}";
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
            <h1 class="text-center">The record of number <?php echo $_POST['id'] ?> has been updated!</h1>
        </div>

    		<?php
    } else {
    		    die("Database query failed.");
            }
		?>

  		<br>
  		<div class="text-center"><a href="admin.php" class="button large">Back</a></div>
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