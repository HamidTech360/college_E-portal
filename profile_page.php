<?php
require 'connection.php';

$studId = $_SESSION['dbpassword'];
 $select = "SELECT * FROM students WHERE studentId = '$studId'";
 $selected = mysqli_query($connect, $select);

 $row = mysqli_fetch_assoc($selected);
 $surname = $row['surname'];
 $firstname = $row['firstname'];
 $lastname = $row['lastname'];
 $class = $row['class'];
 $gender = $row['gender'];
 $department =$row['department'];
 $image = $row['images'];
 $phone = $row['parentPhoneNo'];
//  echo $studentName;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile_page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <div class="heading">
        <span><img src="images/graduation.png" alt=""></span>
        <span><a href="index.html">Home</a></span> <span><a href="stud_list.php">studentList</a></span> <span class="logout"><a href="index.html">Logout</a></span>
        <span class="float-right">Welcome <?php echo " $surname  $firstname" ?></span>
    </div>

    <div class="master">
        <div class="dashboard">
            <span class="dashboard-heading">DASHBOARD</span> <br>
            <span>
                <img src="images/profilePics.jpg" alt="" class="icon">
                <span><a href="index.html" style="color:black">Home</a></span>
            </span> <br>
            <span>
                <img src="images/pencil2.jpg" alt="" class="icon">
                <span><a href="insert_result.php" style="color:black">Record scores</a></span>
            </span> <br>
            <span>
                <img src="images/pencil2.jpg" alt="" class="icon">
                <span><a href="stud_result.php" style="color:black">View result</a></span>
            </span> <br>

            <span>
                <img src="images/whatsap2.png" alt="" class="icon">
                <span>parent contact:: <?php echo $phone ?></span>
            </span> <br>

            <span>
                <img src="images/graduation2.png" alt="" class="icon">
                <span><a href="stud_list.php" style="color:black">student list</a></span>
            </span> <br>

            <span>
                <img src="images/pencil2.jpg" alt="" class="icon">
                <span class="logout"><a href="index.html" style="color:black">Logout</a></span>
            </span> <br>
        </div>
        <div class="main">
            <span><b>I am <?php echo " $surname  $firstname" ?></b> <br> <span>i am in <?php echo $class ?></span></span>
            <div class="white">
                <div class="first">
                    <img src="imgUploads/<?php echo $image?>" alt="" class="profile-pics">
                </div>
                <div class="second">
                    <span class="name"><?php echo " $surname  $firstname $lastname" ?> <br><span class="intro">I am a student of ALFALAH international</span> <br></span> 
                </div>

            </div>
            <div class="marq"><marquee behavior="" direction="">
            Our school name ALFALAH, our uniform green and black
            AlFalah is competent, Incomparable and dynamic, more qualitative teaching, ALFALAH is the Best..
            whatever i choose to be in life, i put my effort and ability, i pray to Allah for my success. success is+++++++++++++++++++++ mine Insha ALLAH</marquee></div> 

            <div class="white-2">
                <div class="first">
                    <span>Name:</span> <br>
                    <span>Class:</span> <br>
                    <span>Gender:</span> <br>
                    <span>Department:</span> <br>
                </div>
                <div class="second names" style="color:black">
                    <span><?php echo " $surname  $firstname $lastname" ?></span> <br>
                    <span><?php echo $class ?></span> <br>
                    <span><?php echo $gender ?></span> <br>
                    <span><?php echo $department ?></span> <br>
                </div>
            </div>
        </div>
    </div>
</body>
</html>