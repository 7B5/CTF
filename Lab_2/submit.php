<?php
$servername = "localhost";
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "ctf_xss";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

// Insert data
$sql = "INSERT INTO complaints (name, email, comment) VALUES (?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $comment);
$stmt->execute();

echo "Complaint submitted successfully. <a href='view.php'>View Complaints</a>";

$stmt->close();
$conn->close();
?>
