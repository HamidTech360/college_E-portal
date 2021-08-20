<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student result</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/insert.css">
</head>
<body>
<form action="insert_result.php" method="POST">
    <div class="heading">
        <span class="bold">
            STUDENT'S RESULT RECORD
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
        <div class="form">
            <div class="label">Student name</div>
            
            <div class="input">
                <input type="text" placeholder="surname" id="surname" name="surname" class="inpt-1"> 
                <select name="select" class="select">
                        <option value="first20/21">first-term 2020/2021</option>
                        <option value="second20/21">Second-term 2020/2021</option>
                        <option value="third20/21">Third-term 2020/2021</option>
                </select>
                <input type="number" placeholder="student Id" name="studId" class="studId inpt-2" >
                
            </div> 
            
        </div>
        <hr>
        <div class="alert alert-success text-center" style="display:none;">
                Record inserted successfully
        </div>
    </div>
       
       
    <div class="main">
        <div class="first">
            <div class="subj-list">
                <span class="thead">SUBJECTS</span> <br>
                <span class="subjects">Mathematics</span><br>
                <span class="subjects">English Language</span><br>
                <span class="subjects">Physics</span><br>
                <span class="subjects">Chemistry</span><br>
                <span class="subjects">Agricultural Science</span><br>
                <span class="subjects">Biology</span><br>
                <span class="subjects">Islamic studies</span><br>
                <span class="subjects">Economics</span><br>
                <span class="subjects">Literature-in-English</span><br>
                <span class="subjects">Yoruba</span><br>
                <span class="subjects">Government</span><br>
                <span class="subjects">Basic science</span><br>
                <span class="subjects">Basic Technology</span><br>
                <span class="subjects">Social studies</span><br>
                <span class="subjects">Home Economics</span><br>
                <span class="subjects">computer</span><br>
                <span class="subjects">Buisness studies</span><br>
                <span class="subjects">Civic education</span><br>
            </div>
        </div>
        <div class="second">
            <span class="thead">TEST SCORES</span>
            <div class="input-list">
                <input type="number" class="inputs" id="inp-1" name="Tmath" required> <br>
                <input type="number" class="inputs" id="inp-2" name="Teng"> <br>
                <input type="number" class="inputs" id="inp-3" name="Tphy"> <br>
                <input type="number" class="inputs" id="inp-4" name="Tchem"> <br>
                <input type="number" class="inputs" id="inp-5" name="Tagric"> <br>
                <input type="number" class="inputs" id="inp-6" name="Tbio"> <br>
                <input type="number" class="inputs" id="inp-7" name="Tirs"> <br>
                <input type="number" class="inputs" id="inp-8" name="Tecons"> <br>
                <input type="number" class="inputs" id="inp-9" name="Tlit"> <br>
                <input type="number" class="inputs" id="inp-10" name="Tyor"> <br>
                <input type="number" class="inputs" id="inp-11" name="Tgovt"> <br>
                <input type="number" class="inputs" id="inp-12" name="TBsci"> <br>
                <input type="number" class="inputs" id="inp-13" name="TBtech"> <br>
                <input type="number" class="inputs" id="inp-14" name="Tsoc"> <br>
                <input type="number" class="inputs" id="inp-15" name="THecons"> <br>
                <input type="number" class="inputs" id="inp-16" name="Tcomp"> <br>
                <input type="number" class="inputs" id="inp-17" name="Tbuisness"> <br>
                <input type="number" class="inputs" id="inp-18" name="Tcivic"> <br>
            </div>
        </div>
        <div class="third">
            <span class="thead">EXAM SCORES</span>
            <div class="input-list">
                <input type="number" class="inputs" id="Exinp-1" name="Emath"> <br>
                <input type="number" class="inputs" id="Exinp-2" name="Eeng"> <br>
                <input type="number" class="inputs" id="Exinp-3" name="Ephy"> <br>
                <input type="number" class="inputs" id="Exinp-4" name="Echem"> <br>
                <input type="number" class="inputs" id="Exinp-5" name="Eagric"> <br>
                <input type="number" class="inputs" id="Exinp-6" name="Ebio"> <br>
                <input type="number" class="inputs" id="Exinp-7" name="Eirs"> <br>
                <input type="number" class="inputs" id="Exinp-8" name="Eecons"> <br>
                <input type="number" class="inputs" id="Exinp-9" name="Elit"> <br>
                <input type="number" class="inputs" id="Exinp-10" name="Eyor"> <br>
                <input type="number" class="inputs" id="Exinp-11" name="Egovt"> <br>
                <input type="number" class="inputs" id="Exinp-12" name="EBsci"> <br>
                <input type="number" class="inputs" id="Exinp-13" name="EBtech"> <br>
                <input type="number" class="inputs" id="Exinp-14" name="Esoc"> <br>
                <input type="number" class="inputs" id="Exinp-15" name="EHecons"> <br>
                <input type="number" class="inputs" id="Exinp-16" name="Ecomp"> <br>
                <input type="number" class="inputs" id="Exinp-17" name="Ebuisness"> <br>
                <input type="number" class="inputs" id="Exinp-18" name="Ecivic"> <br>
            </div>
        </div>
        </div>
   
        

    </div>
    <div class="textarea" style="margin-left:50px; width:600px">
        <textarea>

        </textarea>
    </div>
    <button class="btn btn-danger btn-block" name="submit">Submit scores</button>
    </form>
<script src="js/jquery.min.js"></script>
<!-- <script>
   $(document).ready(function(){
       var content = $('.label').text()
       alert(content)
   }) 
</script>  -->
</body>
<?php
error_reporting(E_ALL & ~ E_NOTICE);
require 'connection.php';


if(isset($_POST['submit'])){
    $Sname = $_POST['surname'];

$math = $_POST['Tmath'];
$eng = $_POST['Teng'];
$phy = $_POST['Tphy'];
$chem = $_POST['Tchem'];
$agric = $_POST['Tagric'];
$bio = $_POST['Tbio'];
$irs = $_POST['Tirs'];
$econs = $_POST['Tecons'];
$lit = $_POST['Tlit'];
$yor = $_POST['Tyor'];
$govt = $_POST['Tgovt'];
$Bsci = $_POST['TBsci'];
$Btech = $_POST['TBtech'];
$soc = $_POST['Tsoc'];
$Hecons = $_POST['THecons'];
$comp = $_POST['Tcomp'];
$buisness = $_POST['Tbuisness'];
$civic = $_POST['Tcivic'];
$id = $_POST['studId'];

$Emath = $_POST['Emath'];
$Eeng = $_POST['Eeng'];
$Ephy = $_POST['Ephy'];
$Echem = $_POST['Echem'];
$Eagric = $_POST['Eagric'];
$Ebio = $_POST['Ebio'];
$Eirs = $_POST['Eirs'];
$Eecons = $_POST['Eecons'];
$Elit = $_POST['Elit'];
$Eyor = $_POST['Eyor'];
$Egovt = $_POST['Egovt'];
$EBsci = $_POST['EBsci'];
$EBtech = $_POST['EBtech'];
$Esoc = $_POST['Esoc'];
$EHecons = $_POST['EHecons'];
$Ecomp = $_POST['Ecomp'];
$Ebuisness = $_POST['Ebuisness'];
$Ecivic = $_POST['Ecivic'];

$select = $_POST['select'];
echo $Sname;

$insert = "INSERT INTO testresult(studentId ,surname, firstname, maths, eng, phy, chem, agric, bio,irs, econs, lit,yor, govt,Bsci,Btech,social,Hecons,comp, buisness, civic,term)VALUES";
$insert.="('$id','$Sname', '$fname', '$math', '$eng', '$phy', '$chem', '$agric', '$bio', '$irs', '$econs', '$lit', '$yor', '$govt', '$Bsci', '$Btech', '$soc', '$Hecons', '$comp', '$buisness', '$civic', '$select')";
$query = mysqli_query($connect, $insert);


$insertExam = "INSERT INTO examresult(studentId ,surname, math, eng, phy, chem, agric, bio,irs, econs, lit,yor, govt,Bsci,Btech,social,Hecons,computer, buisness, civic, term)VALUES";
$insertExam.="('$id','$Sname', '$Emath', '$Eeng', '$Ephy', '$Echem', '$Eagric', '$Ebio', '$Eirs', '$Eecons', '$Elit', '$Eyor', '$Egovt', '$EBsci', '$EBtech', '$Esoc', '$EHecons', '$Ecomp', '$Ebuisness', '$Ecivic','$select')";

$Examquery = mysqli_query($connect, $insertExam);

if($query && $Examquery){
    echo '<script>
    $(".alert").fadeIn(function(){
        $(".alert").fadeOut()
    })
    </script>';
}else{
    echo 'fail to insert';
    echo mysqli_error($connect);
}
}








?>
</html>