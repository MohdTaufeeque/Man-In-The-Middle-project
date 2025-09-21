<?php
// Database connection details
$servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "mitm_assignment";

// Create connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to check if user exists
$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Login Successful! Welcome, " . $username . "</h1>";
} else {
    echo "<h1>Login Failed! Invalid username or password.</h1>";
}

$conn->close();
?>
