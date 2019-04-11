<?php






$servername = "br892.hostgator.com.br";
$username = "pontadof_felipe";
$password = "Fsc@1320";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

?>