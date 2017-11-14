<?php
  // Create a database connection
  $mysqli = new mysqli('66.147.242.186', 'urcscon3_juneau', 'coffee1N', 'urcscon3_juneau');

  $sql = "SELECT * FROM `survey`";
  $result = mysqli_query($mysqli,$sql);
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CSC 174 | Team Juneau</title>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
  </head>

  <body>   
    <!-- Start Top Bar -->
    <div class="top-bar">
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
      
    <h2 align = "center">Survey Records</h2>
      <table border="1" align="center" style="line-height: 25px;">
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


      <p>From the table above, we can search for any survey records with an appropriate ID.</p>
      <h4>Search for a record below:</h4>
      <form method= "post" action= "admin-list.php">
        <table>
          <tr><td>ID:</td><td><input type="number" id="number" name="number"></td></tr>
          <tr><td><input type="submit" id="submit" name="submit" value="View Result!"></td></tr>
        </table>
      </form>

    </div>

  <hr>
  
  <footer>
    <div>
      <p>Copyright &copy; 2017 - This webpage is created by Team Juneau</p>
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














