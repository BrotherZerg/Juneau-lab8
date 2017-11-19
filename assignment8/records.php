<?php
  //Create database connection
  $mysqli = new mysqli('66.147.242.186', 'urcscon3_juneau', 'coffee1N', 'urcscon3_juneau');
  $id = $_POST ['id'];
  $sql = "SELECT * FROM `survey`";
  $sql .= "WHERE ID = {$id} ";
  $sql .= "LIMIT 1";
  $result = mysqli_query($mysqli,$sql);
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

  <?php
    while($row = mysqli_fetch_assoc($result)){
  ?>
  <h1 class= "text-center"> <?php echo $row["Name"]?>'s Survey Result</h1>

      <table border="1" class="center" style="line-height: 25px;">

 
    <tr><td>ID:</td><td><?php echo $row["ID"]; ?></td></tr>
    <tr><td>Name:</td><td><?php echo $row["Name"]; ?></td></tr>
    <tr><td>Email:</td><td><?php echo $row["Email"]; ?></td></tr>
    <tr><td>Telephone:</td><td><?php echo $row["Telephone"]; ?></td></tr>
    <tr><td>Campus Status:</td><td><?php echo $row["CampusStatus"]; ?></td></tr>
    <tr><td>Food Location:</td><td><?php echo $row["FoodLocation"]; ?></td></tr>
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
  <div class="text-center"><a href="admin.php" class="button large">Back</a></div>
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
  mysqli_free_result($result);

  mysqli_close($mysqli);
?>

