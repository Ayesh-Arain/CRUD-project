<?php
include 'header.php';
include 'db_connection.php';
?>
<div id="main-content">
    <h2>All List</h2>
    <?php
    $sql="select * from students";
    $result=mysqli_query($conn,$sql);
    ?>
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
            $counter=1;
            while($row= mysqli_fetch_assoc($result)){
                ?>
            <tr>
                <td><?php echo $counter?></td>
                <td><?php echo $row['NAME']; ?></td>
                <td><?php echo $row['ADDRESS']; ?></td>
                <td><?php echo $row['CLASS']; ?></td>
                <td><?php echo $row['PHONE']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['ID'];?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['ID'];?>'>Delete</a>
                </td>
            </tr>
            <?php
            $counter+=1;
            }
            ?>
          <!-- <tr>
        //         <td>2</td>
        //         <td>Suresh</td>
        //         <td>Punjab</td>
        //         <td>BCOM</td>
        //         <td>9876543210</td>
        //         <td>
        //             <a href='edit.php'>Edit</a>
        //             <a href='delete-inline.php'>Delete</a>
        //         </td>
        //     </tr>
        //     <tr>
        //         <td>3</td>
        //         <td>Suresh</td>
        //         <td>Haryana</td>
        //         <td>BSC</td>
        //         <td>9876543210</td>
        //         <td>
        //             <a href='edit.php'>Edit</a>
        //             <a href='delete-inline.php'>Delete</a>
        //         </td>
        //     </tr>
        //     <tr>
        //         <td>4</td>
        //         <td>Krishna</td>
        //         <td>Gujrat</td>
        //         <td>BCA</td>
        //         <td>9876543210</td>
        //         <td>
        //             <a href='edit.php'>Edit</a>
        //             <a href='delete-inline.php'>Delete</a>
        //         </td>
        //     </tr>
        //     <tr>
        //         <td>5</td>
        //         <td>Rohit</td>
        //         <td>Delhi</td>
        //         <td>BCA</td>
        //         <td>9876543210</td>
        //         <td>
        //             <a href='edit.php'>Edit</a>
        //             <a href='delete-inline.php'>Delete</a>
        //         </td>
        //     </tr>  -->
        </tbody>
    </table>
</div>
</div>
</body>
</html>