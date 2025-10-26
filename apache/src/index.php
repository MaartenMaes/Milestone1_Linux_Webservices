<?php
$servername = "db"; // Name of the container
$username = "root";             // The default MYSQL user
$password = "rootpassword";     // Setting a MYSQL password
$dbname = "milestone1"; // Name of the database

// Use these variables to connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) { // Check the connection to the database
    die("Connection failed: " . $conn->connect_error); // If the connection fails, stop executing and leave an error message behind
}

$sql = "SELECT fullname FROM userinfo LIMIT 1"; // Fetch the name from the userinfo table with the limit of 1 record
$result = $conn->query($sql); // Pass the connection query to a variable called result

if ($result->num_rows > 0) { // If result turned back at least 1 row get the fullname record from the table in the database and put it into a string.
    $row = $result->fetch_assoc();
    echo "<h1>" . $row['fullname'] . " has reached Milestone 1!!</h1>";
} else {
    echo "No name found in DB."; // If the result is empty leave an info message behind
}

$conn->close(); // Close the connection to the database
?>
