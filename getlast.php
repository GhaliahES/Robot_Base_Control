
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smtasks";

// Create connection
$conn = mysqli_connect($localhost, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully | ";



  $last_id = $conn->insert_id;
  echo "" . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

