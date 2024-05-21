 <?php include 'header.php'; 
include 'db_connection.php';
?>
<div id="main-content">
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label>Search By Name</label>
            <input type="text" name="sname" />
        </div>
        <input class="submit" type="submit" name="searchbtn" value="Show" />
    </form>
<?php

if(isset($_POST['searchbtn'])){
    $stu_id = $_POST['sname'];

}
?>

<h2>All List</h2>
<table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
         <tbody>

         <?php
            $search_term = $_POST['sname'];
                $sql = "SELECT * FROM students WHERE Name LIKE '%$search_term%' ";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

$counter = 1;
while($row= mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['NAME']; ?></td>
                <td><?php echo $row['ADDRESS']; ?></td>
                <td><?php echo $row['CLASS']; ?></td>
                <td><?php echo $row['PHONE']; ?></td>
                <td>
                </td>
            </tr>
            <?php
            }
            ?>