<?php
// Define database credentials
$servername = "sql205.infinityfree.com";
$username = "if0_36664351";
$password = "9aFBQGCC9RmMG";
$dbname = "if0_36664351_contact_gym";
 
// Establish a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch form data
    $email = $_POST["email"];
    $zprava = $_POST["zprava"];
 
    // Prepared statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO feedback (email, zprava) VALUES (?, ?)");
 
    // Check if the statement was prepared successfully
    if ($stmt === false) {
        die("Error in SQL query: " . $conn->error);
    }
 
    // Bind parameters and execute the statement
    $stmt->bind_param("ss", $email, $zprava);
 
    if ($stmt->execute()) {
        header("Location: http://formulkos.great-site.net/technologie.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
 
    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>