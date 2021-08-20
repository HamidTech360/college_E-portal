
<?php

require 'connection.php';
error_reporting(E_ALL & ~ E_NOTICE);
$surname = $_POST['surname'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$class = $_POST['class'];
$department =$_POST['department'];
$studId = $_POST['id'];
$phone = $_POST['phone'];
$year = $_POST['admissionYear'];
$image = $_POST['hidden'];

echo $image;

$filename = $_FILES['file']['name'];
echo $filename;
// $file_dir = 'imgUploads/'.$filename;
// $imageFileType = pathinfo($file_dir, PATHINFO_EXTENSION);
// $validExtensions = array('jpg', 'jpeg', 'png');
// $uploadOk = 0;


// if(!in_array(strtolower($imageFileType), $validExtensions)){
//     $uploadOk=0;
// }else{
//     $uploadOk=1;
//     if(move_uploaded_file($_FILES['file']['tmp_name'], $file_dir)){
//         echo 1;
//         echo 'image upload successful';
//     }else{
//         echo 'failed to upload image';
//     }
// }


$select = "SELECT * FROM students WHERE studentId = '$studId'";
$selected = mysqli_query($connect, $select); 

$loop = mysqli_num_rows($selected);
if($loop ==0){
    $insert = "INSERT INTO students (surname, firstname, lastname, gender, class, department, studentId, parentPhoneNo, images,admissionYear)VALUES";
    $insert.="('$surname', '$firstname', '$lastname', '$gender', '$class', '$department', '$studId','$phone','$filename','$year')";

    $inserted = mysqli_query($connect, $insert);
    if($inserted){
        echo 1;
    }else{
        echo 'fail to submit';
        echo mysqli_error($connect);   }

    
}else{
    echo 0;
    echo mysqli_error($connect);
}




















?>
