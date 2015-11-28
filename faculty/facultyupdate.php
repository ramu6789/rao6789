<?php
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$conn);

if(isset($_POST['update']))
{
$update='update faculty set 

`NameoftheFaculty`="'.$_POST['NameoftheFaculty'].'",
`FatherName`="'.$_POST['FatherName'].'",
`DateofBirth`="'.$_POST['DateofBirth'].'",
`DateofJoining`="'.$_POST['DateofJoining'].'",
`Gender`="'.$_POST['Gender'].'",
`EmailId`="'.$_POST['EmailId'].'",
`username`="'.$_POST['username'].'",
`Password`="'.$_POST['Password'].'",
`Department`="'.$_POST['Department'].'",
`Designation`="'.$_POST['Designation'].'",
`HighestQualification`="'.$_POST['HighestQualification'].'",
`PayScale`="'.$_POST['PayScale'].'",
`exp`="'.$_POST['exp'].'",
`Address`="'.$_POST['Address'].'",
`number`="'.$_POST['number'].'" where id="'.$_SESSION['id'].'"';

$query=mysql_query($update);
if($query){
	echo "Success";
	header("refresh:1; url=facultydetails.php");

}
else{
	echo "not success";
}
}
?>

