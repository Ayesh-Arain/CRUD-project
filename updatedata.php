<?php 
include 'db_connection.php';
?>
<?php

$stu_id = $_POST['sid'];
 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST['sclass'];
 $stu_phone = $_POST['sphone'];

$sql = "UPDATE students SET NAME = '{$stu_name}', ADDRESS = '{$stu_address}', CLASS = '{$stu_class}', PHONE = '{$stu_phone}' WHERE ID = {$stu_id}";

$result = mysqli_query($conn,$sql) or die("query unsuccessful.");

header("Location: http://localhost/crud_html/index.php");

mysqli_close($conn);


?>