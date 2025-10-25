<?php
$servername = "contsql-m1-10"; // Use your container name
$username = "root";             // Default MySQL user
$password = "rootpassword";     // Set a strong password
$dbname = "milestone1";

// Connect to DB
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch name
$sql = "SELECT fullname FROM userinfo LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h1>" . $row['fullname'] . " has reached Milestone 1!!</h1>";
} else {
    echo "No name found in DB.";
}

$conn->close();
?>
