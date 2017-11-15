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

 
  <form method= "post" action= "update.php">
        <table>
          <tr><td>ID:</td><td><input readonly type="text" id="updateid" name="id" value = "<?php echo $row["ID"]?>"></td></tr>
          <tr><td>Name:</td><td><input type="text" id="updateid" name="name" value = "<?php echo $row["Name"]?>"></td></tr>
          <tr><td>Email:</td><td><input type="text" id="updateid" name="email" value = "<?php echo $row["Email"]?>"></td></tr>
          <tr><td>Telephone:</td><td><input type="text" id="updateid" name="telephone" value = "<?php echo $row["Telephone"]?>"></td></tr>
        </table>

         <fieldset>

            <legend>Survey Questionnaire</legend>

                <h5>1. What is your campus status?</h5>
                    <input type="radio" name="status" id="on-campus-select" value="on-campus"><label for="on-campus-select">Student living on campus</label><br>

                    <input type="radio" name="status" id="off-campus-select" value="off-campus"><label for="off-campus-select">Student living off campus</label><br>

                    <input type="radio" name="status" id="faculty-select" value="faculty"><label for="faculty-select">Faculty</label><br>

                    <input type="radio" name="status" id="staff-select" value="staff"><label for="staff-select">Staff</label><br>

                    <input type="radio" name="status" id="other-select" value="other"><label for="other-select">Other</label><br>

                <h5>2. Which food location did you visit?</h5>
                    <input type="checkbox" name="location1" id="danforth-check" value="danforth"><label for="danforth-check">Danforth Dining Center</label><br>

                    <input type="checkbox" name="location2" id="douglass-check" value="douglass"><label for="douglass-check">Douglass Dining Center</label><br>

                    <input type="checkbox" name="location3" id="eastman-check" value="eastman"><label for="eastman-check">Eastman Dining Center</label><br>

                    <input type="checkbox" name="location4" id="pit-check" value="pit"><label for="pit-check">The Pit - Wilson Commons</label><br>

                    <input type="checkbox" name="location5" id="rocky-check" value="rocky"><label for="rocky-check">Rocky's Sub Shop</label><br>

                <h5>3. Please rate the quality of customer service?</h5>
                    <input type="radio" name="quality" id="excellent-select" value="excellent"><label for="excellent-select">Excellent</label><br>

                    <input type="radio" name="quality" id="very-good-select" value="very-good"><label for="very-good-select">Very good</label><br>

                    <input type="radio" name="quality" id="good-select" value="good"><label for="good-select">Good</label><br>

                    <input type="radio" name="quality" id="fair-select" value="fair"><label for="fair-select">Fair</label><br>

                    <input type="radio" name="quality" id="poor-select" value="poor"><label for="poor-select">Poor</label><br>

                <h5>4. How often do you purchase food on campus?</h5>
                    <input type="radio" name="purchase" id="never-select" value="never"><label for="never-select">Never</label><br>

                    <input type="radio" name="purchase" id="less-than-once-a-month-select" value="less-than-once-a-month"><label for="less-than-once-a-month-select">Less than once a month</label><br>

                    <input type="radio" name="purchase" id="1-3-times-a-month-select" value="1-3-times-a-month"><label for="1-3-times-a-month-select">1-3 times a month</label><br>

                    <input type="radio" name="purchase" id="1-3-times-per-week-select" value="1-3-times-per-week"><label for="1-3-times-per-week-select">1-3 times per week</label><br>

                <h5>5. If you seldom or never buy food on campus, where do you usually get the food that you eat while on campus?</h5>
                    <input type="radio" name="eat" id="take-from-home-select" value="take-from-home"><label for="take-from-home-select">Take from home</label><br>

                    <input type="radio" name="eat" id="restaurants-select" value="restaurants"><label for="restaurants-select">Restaurants</label><br>

                    <input type="radio" name="eat" id="fast-food-select" value="fast-food"><label for="fast-food-select">Fast food</label><br>

                    <input type="radio" name="eat" id="bakery-select" value="bakery"><label for="bakery-select">Bakery</label><br>

                <h5>6. Do you have special dietary needs?</h5>
                    <input type="radio" name="dietary" id="yes-select" value="yes"><label for="yes-select">Yes</label><br>

                    <input type="radio" name="dietary" id="no-select" value="no"><label for="no-select">No</label><br>

                <h5>7. If yes, please indicate which special dietary needs that you have.</h5>
                    <input type="radio" name="special-dietary" id="diabetic-diet-select" value="diabetic-diet"><label for="diabetic-diet-select">Diabetic diet</label><br>

                    <input type="radio" name="special-dietary" id="low-cholesterol-select" value="low-cholesterol"><label for="low-cholesterol-select">Low cholesterol</label><br>

                    <input type="radio" name="special-dietary" id="other-select" value="other"><label for="other-select">Other</label><br>

                <h5>8. How late do you think the cafeteria should be open?</h5>
                    <input type="radio" name="cafeteria" id="7pm-select" value="7pm"><label for="7pm-select">7pm</label><br>

                    <input type="radio" name="cafeteria" id="8pm-select" value="8pm"><label for="8pm-select">8pm</label><br>

                    <input type="radio" name="cafeteria" id="9pm-select" value="9pm"><label for="9pm-select">9pm</label><br>

                    <input type="radio" name="cafeteria" id="other-select" value="other"><label for="other-select">Other</label><br>
      </fieldset>
      
      <label>Comments, Questions or Concerns?</label><br>
          <table>
            <tr><td><TEXTAREA name="message" id="message"></TEXTAREA></tr></td>
            <tr><td><input type="submit" id="submit" name="submit" value="Confirm"></tr></td>
          </table>



  
  </form>  
  <?php } ?>
 


</body>
</html>

<?php
  mysqli_free_result($result);

  mysqli_close($mysqli);
?>
<br>
<a href="admin.php">Back</a>


