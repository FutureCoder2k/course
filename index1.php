<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "courses";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare data for insertion
    $fullName = $_POST['full_name'];
    $initial = $_POST['initial'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $currently = $_POST['currently'];

    // SQL query to insert data into the users table
    $sql = "INSERT INTO users (full_name, initial, email, phone_number, currently) VALUES ('$fullName', '$initial', '$email', '$phoneNumber', '$currently')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // echo 'alert("New record created successfully")';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
