<?php include 'header.php'; 
include 'db_connection.php';
?>

<?php

if(isset($_POST['deletebtn'])){
$stu_id = $_POST['sid'];
$sql = "DELETE FROM students WHERE ID = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

header("Location: https://localhost/crud_html/index.php");
exit();

mysqli_close($conn);
}
?>

<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
</div>
</div>
</body>
</html>