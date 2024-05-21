<?php include 'header.php'; 
include 'db_connection.php';
?>
<div id="main-content">
    <h2>Update Record</h2>
    <?php

$stu_id = $_GET['id'];
$sql = "SELECT * FROM students WHERE ID = {$stu_id}";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

if(mysqli_num_rows($result) > 0){
    while($row= mysqli_fetch_assoc($result)){
    
        ?>

    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['ID']; ?>"/>
          <input type="text" name="sname" value="<?php echo $row['NAME']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['ADDRESS']; ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>

          <?php
          $sql1 = "SELECT * FROM class";
          $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");
         
if(mysqli_num_rows($result1) > 0){
    echo '<select name = "sclass">';
    while($row1= mysqli_fetch_assoc($result1)){
if($row1['sclass'] == $row1['C_ID']){
   $select = "selected";
}else{
    $select ="";
}
echo "<option {$select} value = '{$row1['C_ID']}'>{$row1['C_NAME']}</option>";
    }
    echo "</select>";
}
?>


        <!-- //   <select name="class">
        //       <option value="" selected disabled>Select Class</option>
        //       <option value="1">BCA</option>
        //       <option value="2">BSC</option>
        //       <option value="3">B.TECH</option>
        //   </select> -->
     </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['PHONE']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>

    <?php
}
    }

?>
</div>
</div>
</body>
</html>