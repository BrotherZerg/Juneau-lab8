<?php
  // Create a database connection
  $mysqli = new mysqli('66.147.242.186', 'urcscon3_juneau', 'coffee1N', 'urcscon3_juneau');
  $id = $_POST ['id'];
  $sql = "SELECT * FROM `survey`";
  $sql .= "WHERE ID = {$id} ";
  //$query .= "WHERE id = {$id} ";
  $sql .= "LIMIT 1";
  
  
  $result = mysqli_query($mysqli,$sql);

  //$sql = "SELECT * FROM table WHERE id >= $curID ORDER BY id ASC LIMIT 4";

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
  <title>Assignment 8</title>
  </head>
   <?php
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <h1 align = "center"> <?php echo $row["Name"]?>'s Survey Result</h1>
    <body>
        <table border="1" align="center" style="line-height: 25px;">

 
    <tr><td>ID:</td><td><?php echo $row["ID"]; ?></td></tr>
    <tr><td>Name:</td><td><?php echo $row["Name"]; ?></td></tr>
    <tr><td>Email:</td><td><?php echo $row["Email"]; ?></td></tr>
    <tr><td>Telephone:</td><td><?php echo $row["Telephone"]; ?></td></tr>
    <tr><td>Campus Status:</td><td><?php echo $row["CampusStatus"]; ?></td></tr>
    <tr><td>Food Location:</td><td><?php echo $row["FoodLocation1"]; ?></td><td><?php echo $row["FoodLocation2"]; ?></td><td><?php echo $row["FoodLocation3"]; ?></td><td><?php echo $row["FoodLocation4"]; ?></td><td><?php echo $row["FoodLocation5"]; ?></td></tr>
    <tr><td>Quality Rate:</td><td><?php echo $row["QualityRate"]; ?></td></tr>
    <tr><td>Food Purchase:</td><td><?php echo $row["FoodPurchase"]; ?></td></tr>
    <tr><td>Where To Get Food:</td><td><?php echo $row["WhereToGetFood"]; ?></td></tr>
    <tr><td>Dietary Needs:</td><td><?php echo $row["DietaryNeeds"]; ?></td></tr>
    <tr><td>Special Dietary:</td><td><?php echo $row["SpecialDietary"]; ?></td></tr>
    <tr><td>Cafeteria:</td><td><?php echo $row["Cafeteria"]; ?></td></tr>
    <tr><td>Message:</td><td><?php echo $row["Message"]; ?></td></tr> 
      
  <?php } ?>
 </table>
 


</body>
</html>

<?php
  mysqli_free_result($result);

  mysqli_close($mysqli);
?>
<br>
<a href="admin.php">Back</a>


