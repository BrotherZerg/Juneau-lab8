<?php
  // Create a database connection
  $mysqli = new mysqli('66.147.242.186', 'urcscon3_juneau', 'coffee1N', 'urcscon3_juneau');
  $sql = "SELECT * FROM `survey`";
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
      <div class="top-bar-left">
        <ul class="menu">
          <li class="menu-text">Team Juneau</li>
        </ul>
      </div>
    </div>
    <!-- End Top Bar -->

    <div class="callout large">
      <div class="row column text-center">
        <h1>University Of Rochester Dining Services</h1>
      </div>
    </div>

    <div class="row column">
      
    <h2 class= "text-center">Survey Records</h2>
      <table border="1" class="center" style="line-height: 25px;">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Telephone</th>

        </tr>

  <?php
      while($row = mysqli_fetch_assoc($result)){
    ?>
        <tr>
          <td><?php echo $row["ID"]; ?></td>
          <td><?php echo $row["Name"]; ?></td>
          <td><?php echo $row["Email"]; ?></td>
          <td><?php echo $row["Telephone"]; ?></td>
        </tr>
      
  <?php } ?>
      </table>

      <div class = search>
          <h4>Enter ID to search for a record below:</h4>
            <form method= "post" action= "records.php">
              <table>
                <tr><td>ID:</td><td><input type="text" id="recordsid" name="id"></td></tr>
                <tr><td><input type="submit" id="submit" name="submit" value="View Records!"></td></tr>
              </table>
            </form>
      </div>

      <div class = search>
      <h4>Enter ID to delete a record below:</h4>
      <form method= "post" action= "delete.php">
        <table>
          <tr><td>ID:</td><td><input type="text" id="deleteid" name="id"></td></tr>
          <tr><td><input type="submit" id="submit1" name="submit" value="Delete Records!"></td></tr>
        </table>
      </form>
      </div>

      <div class = search>
      <h4>Enter ID to update a record below:</h4>
      <form method= "post" action= "updaterecords.php">
        <table>
          <tr><td>ID:</td><td><input type="text" id="updateid" name="id"></td></tr>

          <tr><td><input type="submit" id="submit2" name="submit" value="Update Records!"></td></tr>



        </table>
      </form>
      </div>

    </div>

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
    
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>

<?php
  mysqli_free_result($result);
  mysqli_close($mysqli);
?>
