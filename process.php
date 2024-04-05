<?php
include "conn.php"; 

// Form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// $randomReference = substr(str_shuffle('012345678911121314151617181920'), 0, 20);

// SQL query to insert data into the 'users' table
$sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
    header("Location: https://api.whatsapp.com/send/?phone=2348063753209&text=I%20just%20registered%20for%20the%20gem%20list%20on%20the%20website%20how%20can%20i%20start%20my%20investments?");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
