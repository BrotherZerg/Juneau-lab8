<?php
// Create a database connection
$mysqli = new mysqli('66.147.242.186', 'urcscon3_juneau', 'coffee1N', 'urcscon3_juneau');

if(!$mysqli)
	{
		echo "Not Connected to Server";
	}

	if (!mysqli_select_db($mysqli, 'urcscon3_juneau')) 
	{
		echo "Database Not Selected";
	}

//grab data being passed from the method "post" to the HTML form
//and hold each in variables
$name=trim(stripslashes($_POST["name"]));
$email=trim(stripslashes($_POST["email"]));
$telephone=trim(stripslashes($_POST["phone"]));

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

//escape all strings

$name=mysqli_real_escape_string($mysqli, $name);
$email=mysqli_real_escape_string($mysqli, $email);
$telephone=mysqli_real_escape_string($mysqli, $telephone);
$message=mysqli_real_escape_string($mysqli, $message);

//perform database query

$query  = "INSERT INTO `survey`(";
	$query .= "  `Name`, `Email`, `Telephone`, `CampusStatus`, ";
	$query .= "  `FoodLocation1`, `FoodLocation2`, `FoodLocation3`, `FoodLocation4`, `FoodLocation5`, `QualityRate`, `FoodPurchase`, ";
	$query .= "  `WhereToGet Food`, `DietaryNeeds`, `SpecialDietary`, ";
	$query .= "  `Cafeteria`, `Message`";
	$query .= ") VALUES (";
	$query .= "  '{$name}', '{$email}', '{$telephone}', '{$statusselect}', ";
	$query .= "  '{$location1}', '{$location2}', '{$location3}', '{$location4}', '{$location5}', ";
	$query .= "  '{$qualityselect}', '{$purchaseselect}', '{$eatselect}', '{$dietaryselect}' ";
	$query .= "  '{$specialdietaryselect}', '{$cafeteriaselect}', '{$message}'";
	$query .= ")";

	$result = mysqli_query($mysqli, $query);

if ($result) {
		echo "Success! - the query didn't error-out";
	} 
	else {
		die("Database query failed.");
	}
	
//send the user to the thank you webpage
header("Location: survey-thanks.html");
?>










