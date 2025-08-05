<?php
// Create connection
$conn = new mysqli("localhost", "root", "", "drivepi");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
;
echo "Connected successfully";
?>

<?php
/*
// Database credentials
define('DB_HOST', 'localhost');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');
define('DB_NAME', 'your_database_name');
// Create a database connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
*/
?>
<?php
/*$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// Perform query
$sql = "SELECT * FROM myTable";
$result = $conn->query($sql)
*/
?>