
<?php 
// Create a database connection
$mysqli = new mysqli('66.147.242.186', 'urcscon3_juneau', 'coffee1N', 'urcscon3_juneau');

$number = $_POST['id'];
$updatedName = Trim(stripslashes($_POST['name']));
$updatedEmail =  Trim(stripslashes($_POST['email']));
$updatedTelephone =  Trim(stripslashes($_POST['telephone']));




$query  = "UPDATE survey SET ";
$query .= "Name = '$updatedName', Email = '$updatedEmail',Telephone = '$updatedTelephone'";
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


