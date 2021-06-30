
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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $Right = $_POST['Right'];
  if (empty($Right)) {
    echo "";
  } else {
    echo $Right;
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $Left = $_POST['Left'];
  if (empty($Left)) {
    echo "";
  } else {
    echo $Left;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $Stop = $_POST['Stop'];
  if (empty($Stop)) {
    echo "";
  } else {
    echo $Stop;
  }
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $Front = $_POST['Front'];
  if (empty($Front)) {
    echo "";
  } else {
    echo $Front;
  }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $Back = $_POST['Back'];
  if (empty($Back)) {
    echo "";
  } else {
    echo $Back;
  }
}

}



//buttons

//stop

$sql = "INSERT INTO motions (Stop)
VALUES ('Stop')";

if ($conn->query($sql) === TRUE) {
  echo "created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//front

$sql = "INSERT INTO motions (forward)
VALUES ('Front')";

if ($conn->query($sql) === TRUE) {
  echo "created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

//back

$sql = "INSERT INTO motions (backward)
VALUES ('Back')";

if ($conn->query($sql) === TRUE) {
  echo "created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// right

$sql = "INSERT INTO motions (rightt)
VALUES ('Right')";

if ($conn->query($sql) === TRUE) {
  echo "created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// left

$sql = "INSERT INTO motions (leftt)
VALUES ('Left')";

if ($conn->query($sql) === TRUE) {
  echo "created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

