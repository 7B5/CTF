<!DOCTYPE html>
<html>
<head>
    <title>Complaint Ticket Page</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h2>Submit Your Complaint</h2>
    <form action="submit.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="comment">Comment Your Issue:</label><br>
        <textarea id="comment" name="comment" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
