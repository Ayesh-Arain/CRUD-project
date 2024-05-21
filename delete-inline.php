<?php include 'header.php'; 
include 'db_connection.php';
?>


<?php
$stu_id = $_GET['id'];

include 'config.php';
$sql = "DELETE FROM students WHERE ID = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: https://localhost/crud_html/index.php");

 mysqli_close($conn);


?>