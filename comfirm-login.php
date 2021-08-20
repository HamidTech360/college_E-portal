<?php
  
require 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];

$select = "SELECT * FROM students WHERE surname = '$username' AND studentId= '$password'";
$selected = mysqli_query($connect, $select);


if(mysqli_num_rows($selected)>0){
    $row = mysqli_fetch_assoc($selected);
    $dbPassword = $row['studentId'];
    echo "1";
  
    $_SESSION['dbpassword'] = $dbPassword;
}else{
    echo "0";
    // echo 'you are not a student';
}

