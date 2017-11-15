
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
$query .="FoodLocation1 = '$location1', ";
$query .="FoodLocation2 = '$location2',";
$query .="FoodLocation3 = '$location3',";
$query .="FoodLocation4 = '$location4',";
$query .="FoodLocation5 = '$location5', ";
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

<?php
if ($result) {
?>
    <div>
        The record <?php echo $_POST['number'] ?> has been updated.
    </div>

<?php
} else {
    die("Database query failed.");
}
?>

<?php
mysqli_close($connection);
?>

<br>
<a href="admin.php">Back</a>


