<?php require 'connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admission portal</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/register.css">
    <style>
        
    </style>
    <script src="js/jquery.min.js"></script>
</head>

<body>
    <div class="heading">
        <span class="bold">
            AL-FALAH WA NAJAH
        </span> <br>
        <span class="light">
            2020/2021 registration portal
        </span>
        <span class="float-right">
            <span><a href="login.html">login</a></span>
            <span><a href="stud_list.php">studentList</a></span>
            <span>contact</span>
            <div class="green float-right">support</div>
        </span>
        <hr>
    </div>
     <form action="registration.php" class="imgReg" method="post" enctype="multipart/form-data">
        <div class="form-box">
            <div class="float-right">
                <img src="images/imgplaceholder.jpg" alt="" class="profilepicture"> <br>
                <input type="file"  class="profileimage"  name="image" style="display:none" required> <br>
                
                <span class="prompt">click to select image</span>
            </div>
    
            <div class="form">
                <div class="label">Student name</div>
                <div class="input"><input type="text" placeholder="surname" id="surname" name="surname" class="inpt-1" required> <input type="text" placeholder="firstname" id="firstname" name="firstname" class="inpt-2" required></div> 
            </div>

           
    
            <div class="form">
                <div class="label">Other name</div>
                <div class="input"><input type="text" placeholder="other name" id="lastname" name="lastname" class="inpt-3" required> </div> 
            </div>
    
            <div class="form">
                <div class="label">Gender</div>
                <div class="input">
                    <select name="gender" id="gender" class="inpt-4" required>
                        <option value="male">male</option>
                        <option value="female">Female</option>
                    </select>
                 </div> 
            </div>
    
            <div class="form">
                <div class="label">Address</div>
                <div class="input"><input type="text" placeholder="street name" class="long-input inpt-5" >  </div> 
                
            </div>
    
            <div class="form">
                <div class="label"></div>
                <div class="input"><input type="text" placeholder="city" class="inpt-6" required> <input type="text" placeholder="state" class="inpt-7" required> </div> 
            </div>
    
    
            <div class="form">
                <div class="label">Admission</div>
                <div class="input"><input type="number" placeholder="admission year" class="inpt-8" name="admissionYear" required>
                    <select name="class" id="class" class="inpt-9">
                        <option value="ss3">ss3</option>
                        <option value="ss2">ss2</option>
                        <option value="ss1">ss1</option>
                        <option value="jss3">jss3</option>
                        <option value="jss2">jss2</option>
                        <option value="jss1">jss1</option>
                     </select>
                </div> 
            </div>

            <div class="form">
                <div class="label">Department</div>
                <div class="input">
                    <select name="department" id="department" class="inpt-10" required>
                        <option value="science">science</option>
                        <option value="commercial">commercial</option>
                        <option value="art">Art</option>
                        <option value="">none</option>
                        
                     </select>
                </div>
            </div>

            <div class="form">
                <div class="label">student id</div>
                <div class="input"><input type="number" placeholder="0001" name="id" id="id" class="inpt-11" required></div> 
            </div>
            
            <div class="heading heading-2">
                <span class="bold">PARENTS /GUARDIAN DETAILS </span>
            </div>

            <div class="form">
                <div class="label">Parent name</div>
                <div class="input"><input type="text" placeholder="surname"> <input type="text" placeholder="firstname"></div> 
            </div>

            <div class="form">
                <div class="label">Phone Number</div>
                <div class="input"> <input type="number" placeholder="phone number" name="phone" id="phone" class="inpt-12" required></div> 
            </div>

            
            <div class="form">
                <div class="label">Address</div>
                <div class="input"> <input type="text" placeholder="Address"></div>
            </div>

            <div class="alert  text-center" style="width:500px;  font-weight:bolder; display:none">
                student has been successfully registered
            </div>
    
            <div class="mx-auto d-block text-center">
                <button class="btn btn-block" name="submit" id="submit">Submit data</button>
            </div>
        </div> 

    </form> 


        
<script src="js/jquery.min.js"></script>
<script src="js/imageDisplay.js"></script>
<?php

if(isset($_POST['submit'])){
    
    $img = $_FILES['image']['name'];
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];
    $department =$_POST['department'];
    $studId = $_POST['id'];
    $phone = $_POST['phone'];
    $year = $_POST['admissionYear'];

   

    $select = "SELECT * FROM students WHERE studentId = '$studId'";
    $selected = mysqli_query($connect, $select); 

    $loop = mysqli_num_rows($selected);
    if($loop ==0){
        
        $file_dir = 'imgUploads/'.$img;
        $imageFileType = pathinfo($file_dir, PATHINFO_EXTENSION);
        $validExtensions = array('jpg', 'jpeg', 'png');
        $uploadOk = 0;


        if(!in_array(strtolower($imageFileType), $validExtensions)){
            $uploadOk=0;
        }else{
            $uploadOk=1;
            if(move_uploaded_file($_FILES['image']['tmp_name'], $file_dir)){
                echo 1;
                echo 'image upload successful';
            }else{
                echo 'failed to upload image';
            }
        }


        $insert = "INSERT INTO students (surname, firstname, lastname, gender, class, department, studentId, parentPhoneNo, images,admissionYear)VALUES";
        $insert.="('$surname', '$firstname', '$lastname', '$gender', '$class', '$department', '$studId','$phone','$img','$year')";

        $inserted = mysqli_query($connect, $insert);
   
        
    if($inserted){
        echo "<script>
        $('.alert').fadeIn()
        document.querySelector('.alert').classList.remove('alert-warning')
        document.querySelector('.alert').classList.add('alert-success')
        $('.alert').html('student has been successfully registered')
        
        </script>";
    }else{
        echo 'fail to submit';
        echo mysqli_error($connect);   
    }

    
}else{
    echo "<script>
    $('.alert').fadeIn()
    document.querySelector('.alert').classList.add('alert-warning')
    $('.alert').html('please choose another Id for student <br> this Id already exist')
    
    </script>";
    echo mysqli_error($connect);
}
}






?>

</body>
</html>