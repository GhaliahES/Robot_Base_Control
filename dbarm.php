
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

$sql = "INSERT INTO slidervalue (ra1)
VALUES ('ran1')";

if ($conn->query($sql) === TRUE) {
  echo "created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO slidervalue (ra2)
VALUES ('ran2')";

if ($conn->query($sql) === TRUE) {
  echo "created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO slidervalue (ra3)
VALUES ('ran3')";

if ($conn->query($sql) === TRUE) {
  echo "created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO slidervalue (ra4)
VALUES ('ran4')";

if ($conn->query($sql) === TRUE) {
  echo "created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO slidervalue (ra5)
VALUES ('')";

if ($conn->query($sql) === TRUE) {
  echo "created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO slidervalue (ra6)
VALUES ('value6')";

if ($conn->query($sql) === TRUE) {
  echo "created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


?>

