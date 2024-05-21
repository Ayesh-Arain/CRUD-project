<?php 
include 'db_connection.php';

echo $stu_name = $_POST['sname'];
echo $stu_address = $_POST['saddress'];
echo $stu_class = $_POST['class'];
echo $stu_phone = $_POST['sphone'];

$sql = "INSERT INTO students(NAME, ADDRESS, CLASS, PHONE) VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";

$result = mysqli_query($conn, $sql) or die("query unsuccessful."); 

header("Location: https://localhost/crud_html/index.php");

 mysqli_close($conn);


?>