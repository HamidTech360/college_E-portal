<?php

require 'connection.php';
$filename = $_FILES['file']['name'];
echo $filename;

$insert = "INSERT INTO image(images)VALUES('$image')";
        $query= mysqli_query($connect, $insert);

        if($query){
            echo 'image inserted successfully';
        }else{
            echo mysqli_error($connect);
        }