<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "student_db";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$stmt = $conn->prepare("INSERT INTO your_table (name, address, class, phone) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $address, $class, $phone);

$name = $_POST['name'];
$address = $_POST['address'];
$class = $_POST['class'];
$phone = $_POST['phone'];

if ($stmt->execute()) {
    echo "Register successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
