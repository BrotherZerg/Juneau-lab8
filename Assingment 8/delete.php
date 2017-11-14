<?php
// Create a database connection
$mysqli = new mysqli('66.147.242.186', 'urcscon3_juneau', 'coffee1N', 'urcscon3_juneau');

$query  = "DELETE FROM survey ";
$query .= "WHERE ID = {$_POST['number']} ";
$query .= "LIMIT 1";
$result = mysqli_query($mysqli, $query);
?>

<?php
if ($result) {
?>
    <div>
        The record <?php echo $_POST['number'] ?> has been deleted.
    </div>

<?php
} else {
    die("Database query failed.");
}
?>