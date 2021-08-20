<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Just a demo to insert image</h1>
    <form action="demo.php" method="post" class="form" enctype="multipart/form-data">
        <input type="file" name="imageInp" class="imageInp">
        <button class="submit" name= "submit">submit</button>
    </form>

    <?php
   
    //     echo 'me is alright';
        
    //     if(isset($_POST['submit'])){
    //         $image = $_FILES['imageInp']['name'];
    //         echo $image;

    //         $insert = "INSERT INTO image(images)VALUES('$image')";
    //         $query= mysqli_query($connect, $insert);

    //         if($query){
    //             echo 'image inserted successfully';
    //         }else{
    //             echo mysqli_error($connect);
    //         }
    //     }

    // ?>





    <script src="js/jquery.min.js"></script>
    <script src="demo.js"></script>
</body>
</html>