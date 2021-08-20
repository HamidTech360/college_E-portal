<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student list</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/list.css">
</head>
<?php
 require 'connection.php';
 $slctss3 = "SELECT * FROM students WHERE class='ss3'";
 $ss3 = mysqli_query($connect, $slctss3);

 $slctss2 = "SELECT * FROM students WHERE class='ss2'";
 $ss2 = mysqli_query($connect, $slctss2);

 $slctss1 = "SELECT * FROM students WHERE class='ss1'";
 $ss1 = mysqli_query($connect, $slctss1);

 $slctjs3 = "SELECT * FROM students WHERE class='jss3'";
 $js3 = mysqli_query($connect, $slctjs3);

 $slctjs2 = "SELECT * FROM students WHERE class='jss2'";
 $js2 = mysqli_query($connect, $slctjs2);

 $slctjs1 = "SELECT * FROM students WHERE class='jss1'";
 $js1 = mysqli_query($connect, $slctjs1);

 $count = 0;
?>
<body>
    <div class="head">
        <div class="overlay">
            <span class="float-right">
                <span><a href="index.html" style="color:rgb(149, 10, 10);">Home</a></span>
                <span><a href="login.html" style="color:rgb(149, 10, 10)">Login</a></span>
            </span>
            <span class="sch-name">ALFALAH INTERNATIONAL SCHOOL</span> <br>
            <span class="list-heading">list of students in our school</span>
            
            <div class="text-center" id="heading">
                <span class="big"><i>MEET OUR SCHOLARS</i></span> <br>
                List of students for 2020/2021 session
            </div> 
        </div>
    </div>

    <table>
        <thead>
            <td>S/N</td>
            <td>Names</td>
            <td>Gender</td>
            <td>Class</td>
            <td>StudentId</td>
            <td>Year of Admission</td>
            <td>department</td>
        </thead>

        <tbody>
           
            <?php

                while($js1studs=mysqli_fetch_assoc($js1)){
                    $namej1 = $js1studs['surname']." ". $js1studs['firstname']." ". $js1studs['lastname'];
                    $genderj1 = $js1studs['gender'];
                    $classj1= $js1studs['class'];
                    $idj1 = $js1studs['studentId'];
                    $yearj1 = $js1studs['admissionYear'];
                    $count++;

                    echo "
                    <tr>
                        <td>$count</td>
                        <td>$namej1</td>
                        <td>$genderj1</td>
                        <td>$classj1</td>
                        <td>$idj1</td>
                        <td>$yearj1</td>
                        <td></td>
                    </tr> 
                    ";
                }

                while($js2studs=mysqli_fetch_assoc($js2)){
                    $namej2 = $js2studs['surname']." ". $js2studs['firstname']." ". $js2studs['lastname'];
                    $genderj2 = $js2studs['gender'];
                    $classj2= $js2studs['class'];
                    $idj2 = $js2studs['studentId'];
                    $yearj2 = $js2studs['admissionYear'];
                    $count++;

                    echo "
                    <tr>
                        <td>$count</td>
                        <td>$namej2</td>
                        <td>$genderj2</td>
                        <td>$classj2</td>
                        <td>$idj2</td>
                        <td>$yearj2</td>
                        <td></td>
                    </tr> 
                    ";
                }
              
                
                while($js3studs=mysqli_fetch_assoc($js3)){
                    $namej3 = $js3studs['surname']." ". $js3studs['firstname']." ". $js3studs['lastname'];
                    $genderj3 = $js3studs['gender'];
                    $classj3= $js3studs['class'];
                    $idj3 = $js3studs['studentId'];
                    $yearj3 = $js3studs['admissionYear'];
                    $count++;

                    echo "
                    <tr>
                        <td>$count</td>
                        <td>$namej3</td>
                        <td>$genderj3</td>
                        <td>$classj3</td>
                        <td>$idj3</td>
                        <td>$yearj3</td>
                        <td></td>
                    </tr> 
                    ";
                }
              

                while($ss1studs=mysqli_fetch_assoc($ss1)){
                    $nameS1 = $ss1studs['surname']." ". $ss1studs['firstname']." ". $ss1studs['lastname'];
                    $genderS1 = $ss1studs['gender'];
                    $classS1= $ss1studs['class'];
                    $idS1 = $ss1studs['studentId'];
                    $deptS1= $ss1studs['department'];
                    $yearS1 = $ss1studs['admissionYear'];
                    $count++;

                    echo "
                    <tr>
                        <td>$count</td>
                        <td>$nameS1</td>
                        <td>$genderS1</td>
                        <td>$classS1</td>
                        <td>$idS1</td>
                        <td>$yearS1</td>
                        <td>$deptS1</td>
                    </tr> 
                    ";
                }

               

                while($ss2studs=mysqli_fetch_assoc($ss2)){
                    $nameS2 = $ss2studs['surname']." ". $ss2studs['firstname']." ". $ss2studs['lastname'];
                    $genderS2 = $ss2studs['gender'];
                    $classS2= $ss2studs['class'];
                    $idS2 = $ss2studs['studentId'];
                    $deptS2= $ss2studs['department'];
                    $yearS2 = $ss2studs['admissionYear'];
                    $count++;

                    echo "
                    <tr>
                        <td>$count</td>
                        <td>$nameS2</td>
                        <td>$genderS2</td>
                        <td>$classS2</td>
                        <td>$idS2</td>
                        <td>$yearS2</td>
                        <td>$deptS2</td>
                    </tr> 
                    ";
                }

              
                while($ss3studs = mysqli_fetch_assoc($ss3)){
                    $name = $ss3studs['surname']." ". $ss3studs['firstname']." ".  $ss3studs['lastname'];
                    $gender = $ss3studs['gender'];
                    $class= $ss3studs['class'];
                    $id = $ss3studs['studentId'];
                    $dept= $ss3studs['department'];
                    $year = $ss3studs['admissionYear'];
                    $count++;
                   
                    echo "
                    <tr>
                        <td>$count</td>
                        <td>$name</td>
                        <td>$gender</td>
                        <td>$class</td>
                        <td>$id</td>
                        <td>$year</td>
                        <td>$dept</td>
                    </tr> 
                    ";
                    
                }

            ?>

        </tbody>
    </table>
</body>
</html>