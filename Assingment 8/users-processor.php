<html>
<head>
  <title><?php echo $name; ?>'s survey result</title>
  
</head>


<body>

<?php
//check for a form submission
  if (isset($_POST['number'])){
    $number = $_POST['number'];
    $mysqli = new mysqli('66.147.242.186', 'urcscon3_juneau', 'coffee1N', 'urcscon3_juneau') or die ("Could not connect to the server");
    $mysqli_select_db("survey") or die ("That database could not be found!");
    $result = mysqli_query("SELECT * FROM survey WHERE ID='$number'"); or die ("The query could not be completed")
    if (mysqli_num_rows($result) != 1){
        die ("That ID number could not be found!");
    }
    while($row = mysqli_fetch_array($result, MYSQL_ASSOC)){
          $number = $row['ID']
          $name = $row['Name'];
          $email = $row['Email'];
          $telephone = $row['Telephone'];
          $statusselect = $row['Campus Status'];
          $checklocation = $row['Food Location'];
          $qualityselect= $row['Quality Rate'];
          $purchaseselect = $row['Food Purchase'];
          $eatselect = $row['Where To Get Food'];
          $dietaryselect = $row['Dietary Needs'];
          $specialdietaryselect = $row['Special Dietary'];
          $cafeteriaselect = $row['Cafeteria'];
          $message = $row['Message'];
    }
?>

  <h2><?php echo $name; ?>'s survey result</h2> <br>
  <table>
      <tr><td>ID:</td><td><?php echo $number; ?></td></tr>
      <tr><td>Name:</td><td><?php echo $name; ?></td></tr>
      <tr><td>Email:</td><td><?php echo $email; ?></td></tr>
      <tr><td>Telephone:</td><td><?php echo $telephone; ?></td></tr>
      <tr><td>Campus Status:</td><td><?php echo $statusselect; ?></td></tr>
      <tr><td>Food Location:</td><td><?php echo $checklocation; ?></td></tr>
      <tr><td>Quality Rate:</td><td><?php echo $qualityselect; ?></td></tr>
      <tr><td>Food Purchase:</td><td><?php echo $purchaseselect; ?></td></tr>
      <tr><td>Where To Get Food:</td><td><?php echo $eatselect; ?></td></tr>
      <tr><td>Dietary Needs:</td><td><?php echo  $dietaryselect; ?></td></tr>
      <tr><td>Special Dietary:</td><td><?php echo $specialdietaryselect; ?></td></tr>
      <tr><td>Cafeteria:</td><td><?php echo $cafeteriaselect; ?></td></tr>
      <tr><td>Message:</td><td><?php echo $message; ?></td></tr>
      



  </table>

<?php
  } else die ("You need to specify an ID number")
  
?>
</body>



