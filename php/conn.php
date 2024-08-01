<?php
$servername = "47.129.42.190";
$username = "root";
$password = "mysql100";
//phpinfo();
$conn = mysqli_connect($servername, $username, $password, "school");
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
