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

$sql = "SELECT id, name, email, comment FROM complaints";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<p><b>Name:</b> " . htmlspecialchars($row["name"]) . "<br>";
        echo "<b>Email:</b> " . htmlspecialchars($row["email"]) . "<br>";
        echo "<b>Comment:</b> " . $row["comment"] . "</p>"; // Intentionally not escaping to create vulnerability
    }
} else {
    echo "0 results";
}
$conn->close();
?>
