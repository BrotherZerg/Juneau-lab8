<?php
  // Create a database connection
  $mysqli = new mysqli('66.147.242.186', 'urcscon3_juneau', 'coffee1N', 'urcscon3_juneau');

  $sql = "SELECT * FROM `survey`";
  
  $number = $_POST['number'];
  $query .= "WHERE ID = {$number}";

  $result = mysqli_query($mysqli,$query);
?>


<!DOCTYPE html>
<html>
<head>
  <title>Assignment 8</title>
</head>
<body>
  <h1 align = "center"><?php echo $row["Name"]; ?>'s Survey Result</h1>
  <table>
<?php

  while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr><td>ID:</td><td><?php echo $row["ID"]; ?></td></tr>
    <tr><td>Name:</td><td><?php echo $row["Name"]; ?></td></tr>
    <tr><td>Email:</td><td><?php echo $row["Email"]; ?></td></tr>
    <tr><td>Telephone:</td><td><?php echo $row["Telephone"]; ?></td></tr>
    <tr><td>Campus Status:</td><td><?php echo $row["CampusStatus"]; ?></td></tr>
    <tr><td>Food Location:</td><td><?php echo $row["FoodLation1"]; ?></td><td><?php echo $row["FoodLation2"]; ?></td><td><?php echo $row["FoodLation3"]; ?></td><td><?php echo $row["FoodLation4"]; ?></td><td><?php echo $row["FoodLation5"]; ?></td></tr>
    <tr><td>Quality Rate:</td><td><?php echo $row["QualityRate"]; ?></td></tr>
    <tr><td>Food Purchase:</td><td><?php echo $row["FoodPurchase"]; ?></td></tr>
    <tr><td>Where To Get Food:</td><td><?php echo $row["WhereToGetFood"]; ?></td></tr>
    <tr><td>Dietary Needs:</td><td><?php echo $row["DietaryNeeds"]; ?></td></tr>
    <tr><td>Special Dietary:</td><td><?php echo $row["SpecialDietary"]; ?></td></tr>
    <tr><td>Cafeteria:</td><td><?php echo $row["Cafeteria"]; ?></td></tr>
    <tr><td>Message:</td><td><?php echo $row["Message"]; ?></td></tr>   
   
    
  <?php } ?>
  
  </table>
  <br>
  <form method= "post" action= "delete.php">
    <a href="delete.php">Delete</a>
  </form>

  <form method= "post" action= "update.php">
  <a href="update.php">Update</a>


</body>
</html>

<?php
  mysqli_free_result($result);

  mysqli_close($mysqli);
?>
<br>
<a href="admin.php">Back</a>





