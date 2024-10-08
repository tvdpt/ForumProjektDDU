
<?php include 'menu.php';?>
<?php

include 'DBconnection.php';


// Check if the username already exists in the database
$UserName = $_POST["UserName"];
$checkUserQuery = $conn->prepare("SELECT UserName FROM Users WHERE UserName = ?");
$checkUserQuery->bind_param("s", $UserName);
$checkUserQuery->execute();
$checkUserQuery->store_result();

if ($checkUserQuery->num_rows > 0) {
    // If the username already exists, redirect to UserNameTaken.php
    echo "<h1> This Username is already taken, try another username <h1>";
    exit(); // Ensure no further code is executed after redirection

} else {
    // If username doesn't exist, insert the new record
    $stmt = $conn->prepare("INSERT INTO Users (UserName) VALUES (?)");
    $stmt->bind_param("s", $UserName);
    $stmt->execute();

    echo "New record created successfully";
    
    $stmt->close();
}

$checkUserQuery->close();
$conn->close();
?>
<a href="VisTopics.php">Home</a>
