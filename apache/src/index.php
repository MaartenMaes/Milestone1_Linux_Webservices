<?php
$servername = "db";       
$username   = "root";
$password   = "rootpassword";
$dbname     = "milestone1";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT fullname FROM userinfo LIMIT 1";
$result = $conn->query($sql);

$fullname = ($result && $result->num_rows > 0) ? $result->fetch_assoc()['fullname'] : 'No name found';
$hostname = gethostname(); 
?>
<h1><?php echo "$fullname has reached Milestone 1!!"; ?></h1>
<p>Served by container: <?php echo $hostname; ?></p>
