<?php
include 'db_connection.php' ;

if (isset($_POST['register'])) {
    // Retrieve form data
  
    $name = $_POST['name'];
    $address = $_POST['address'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];



    $sql="INSERT INTO `students`(`NAME`, `ADDRESS`, `CLASS`, `PHONE`) VALUES ('{$name}','{$address}','{$class}','{$phone}')";

    $result=mysqli_query($conn,$sql) or die ("Query Unsuccessfull");
    header("Location:index.php");
    mysqli_close($conn);}


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #070a06;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color:red;
        }
        .registration-form {
            background-color: #becfdf;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .registration-form h2 {
            margin-bottom: 20px;
            color: #333;
        }
        .registration-form label {
            display: block;
            margin-bottom: 5px;
            color: #0c0808;
        }
        .registration-form input[type="text"], 
        .registration-form input[type="tel"], 
        .registration-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .registration-form button {
            width: 100%;
            padding: 10px;
            background-color: #307c26;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
        }
        .registration-form button:hover {
            background-color: #0a5db4;
        }
    </style>
</head>
<body>

    <div class="registration-form">
        <h2>Register youself</h2>
        <form method="POST" action="">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="address">Address</label>
            <input type="text" id="address" name="address" required>

            <label for="class">Class</label>
            <input type="text" id="class" name="class" required>

            <!-- <select id="class" name="class" required>
                <option value="">Select Class</option>
                <option value="class1">Class 1</option>
                <option value="class2">Class 2</option>
            </select> -->

            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" required>

            <button type="submit" name='register'>Register</button>
        </form>
    </div>

</body>
</html>
