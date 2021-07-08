<html>
<head>
<title>Error</title>

<link rel="stylesheet" href="external1.css">

</head>
<body bgcolor="mistyrose" >
    <table>
        <tr>
            <img src="hos1.png" height="25%" width="15%" ></h1></I><td width="600px" style="font-size:50px;font-family:forte;"> <font color="#428bca"> LIFE MATTERS  </font><font color="#000"> Hospital</font> </td>
        </tr>
    </table>
    
    <h1 id="myHeader" align="center">
        
    <table  width="80%" align="right">
         
        <tr>
            <th> <a href="1ST.html" style="color: white"> HOME </a></th>
            <th> <a href="REGISTRATION1.html" style=" color: white">REGISTRATION </a></th>
            <th> <a href="a.html" style=" color: white">MEDICINES</a> </th>
            <th> <a href="Procedures.html" style=" color: white">PROCEDURES</a></th>
            <th> <a href="LOCATIONS.html" style="color: white"> LOCATIONS </a ></th>
            <th> SEARCH </th>
        </tr>
    </table><br>
    <h1 align="center" >Error ):  -</h1>
    
<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
ini_set("display_errors","1");
error_reporting(E_ALL);

$initial = $_POST['initial'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$referral = $_POST['referral'];
$reAddress = $_POST['reAddress'];
$referred = $_POST['referred'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$MStatus = $_POST['MStatus'];
$fathername = $_POST['fathername'];
$Education = $_POST['Education'];
$Occupation = $_POST['Occupation'];
$fim = $_POST['fim'];
$Nationality = $_POST['Nationality'];
$Religion = $_POST['Religion'];
$Mother_Tongue = $_POST['Mother_Tongue'];
$Pan_No = $_POST['Pan_No'];
$Aadhaar_Number = $_POST['Aadhaar_Number'];
$Medical_Insurance = $_POST['Medical_Insurance'];
$tc = $_POST['tc'];

/*
if($Pan_No)
{
echo "yes Pan";
}
else
{
echo "no pan";
}*/
/*('initial','fname','lname','contact','email','referral','reAddress','referred','dob','gender','MStatus','fathername','Education','Occupation','fim','Nationality','Religion','Mother_Tongue','Pan_No','Aadhaar_Number','Medical_Insurance','tc') 
*/
//Database connection
$conn = mysqli_connect('localhost','root','','project');



 $sql = "INSERT INTO `registration` VALUES ('$initial','$fname','$lname','$contact','$email','$referral','$reAddress','$referred','$dob','$gender','$MStatus','$fathername','$Education','$Occupation','$fim','$Nationality','$Religion','$Mother_Tongue','$Pan_No','$Aadhaar_Number','$Medical_Insurance','$tc')";
 

$result= mysqli_query($conn,$sql);

if($result){
    header('Location: Registration_Successful.html');
}
else {
    header('Location: 1ST.html');

}
//exit;}

/*intial,fname,lname,contact,email,referral,reAddress,referred,dob,gender,MStatus,fathername,Education,Occupation,
fim,Nationality,Religion,Mother_Tongue,Pan_No,Aadhaar_Number,Medical_Insurance,tc,
*/
?>
<div class="top">
<br>
<div>
    Contact Us +91 96366 20000 / 01 | LifeM@hospital.com
</div>
</div>


</body>
</html>

 


