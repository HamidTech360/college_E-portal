<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/result.css">
</head>
<?php
require 'connection.php';

$studId = $_SESSION['dbpassword'];
$subj = array('none','none','none','Mathematics', 'English', 'Physics', 'Chemistry', 'Biology', 'Agricultural science', 'Islamic studies','Economics', 'literature-in-english', 'Yoruba', 'Government', 'Basic Science', 'Basic Tech','Social studies', 'Home economics', 'computer studies','Buisness Studies', 'Civic Education');


$selectT1 = "SELECT * FROM testresult where studentId = '$studId' AND term='first20/21'";
$selectedT1 = mysqli_query($connect, $selectT1);
$test1 = mysqli_fetch_array($selectedT1);

$selectExam1 = "SELECT * FROM examresult where studentId='$studId' AND term='first20/21'";
$queryExam1 = mysqli_query($connect, $selectExam1);
$exam1 = mysqli_fetch_array($queryExam1);

$selectT2 = "SELECT * FROM testresult where studentId = '$studId' AND term = 'second20/21'";
$selectedT2 = mysqli_query($connect, $selectT2);
$test2 = mysqli_fetch_array($selectedT2);

$selectExam2 = "SELECT * FROM examresult where studentId='$studId' AND term='second20/21'";
$queryExam2 = mysqli_query($connect, $selectExam2);
$exam2 = mysqli_fetch_array($queryExam2);

$selectT3 = "SELECT * FROM testresult where studentId = '$studId' AND term = 'third20/21'";
$selectedT3 = mysqli_query($connect, $selectT3);
$test3 = mysqli_fetch_array($selectedT3);

$selectExam3 = "SELECT * FROM examresult where studentId='$studId' AND term='third20/21'";
$queryExam3 = mysqli_query($connect, $selectExam3);
$exam3 = mysqli_fetch_array($queryExam3);


$select = "SELECT * FROM students WHERE studentId='$studId'";
$query = mysqli_query($connect, $select);
$fetch = mysqli_fetch_assoc($query);
$surname = $fetch['surname'];
$firstname = $fetch['firstname'];
$lastname = $fetch['lastname'];

 


?>
<body>
    <div class="box">
        <div class="overlay">
            <span class="float-right">
                welcome <?php echo "$surname $firstname $lastname"?>
            </span>
            <span class="sch-name">ALFALAH INTERNATIONAL SCHOOL</span> <br>
            <span class="list-heading">Assesment record for the year 2020/2021</span>
            
            <div class="text-center" id="heading">
                <span class="big"><i>MEET OUR SCHOLARS</i></span> <br>
                statement of result for session 2020/2021
            </div>
        </div>
    </div>

   <div class="main">
       <table>
           <thead>
               <td>SUBJECTS</td>
               <td>1st term <br> test</td>
               <td>1st term <br> exam</td>
               <td>2nd term <br> test</td>
               <td>2nd term <br> exam</td>
               <td>3rd term <br> test</td>
               <td>3rd term <br> exam</td>
               <td>TOTAL</td>
           </thead>
           <tbody>
               
          
          <?php
          
            for($i=3; $i<=20; $i++){
               
                $subjList = $subj[$i];
                $T1scores = $test1[$i];
                $E1scores = $exam1[$i];
                $T2scores = $test2[$i];
                $E2scores = $exam2[$i];
                $T3scores = $test3[$i];
                $E3scores = $exam3[$i];
                $total = $T1scores + $E1scores + $T2scores + $E2scores + $T3scores + $E3scores;
               
                if($total !== 0){
                    echo "
                    <tr class='tr'>
                        <td>$subjList</td>
                        <td>$T1scores</td>
                        <td>$E1scores</td>
                        <td>$T2scores</td>
                        <td>$E2scores</td>
                        <td>$T3scores</td>
                        <td>$E3scores</td>
                        <td class='total'>$total</td>
                    </tr>
                    
                    
                    ";
                }
              
            }
          
          
          
          ?>
           </tbody>
       </table>
   </div>
   <script src="js/jquery.min.js"></script>
   
   <!-- <script src="js/result.js"> -->
      
   </script>
</body>
</html>