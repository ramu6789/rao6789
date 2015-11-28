<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$conn);

if(isset($_POST['submit'])) {
		$file_name = $_FILES['facultyimage']['name'];	
	$file_tmp =$_FILES['facultyimage']['tmp_name'];
        move_uploaded_file($file_tmp,"D:/nrkrao/htdocs/OCT5-PRACTICE/31-10-2015-faculty-details".$file_name); $sql='insert into  faculty(NameoftheFaculty,FatherName,DateofBirth,number,DateofJoining,Gender,EmailId,username,Password,Department,Designation,HighestQualification,PayScale,exp,Address,facultyimage)
values("'.$_POST['NameoftheFaculty'].'",
"'.$_POST['FatherName'].'",
"'.$_POST['DateofBirth'].'",
"'.$_POST['number'].'",
"'.$_POST['DateofJoining'].'",
"'.$_POST['Gender'].'",
"'.$_POST['EmailId'].'",
"'.$_POST['username'].'",
"'.$_POST['Password'].'",
"'.$_POST['Department'].'",
"'.$_POST['Designation'].'",
"'.$_POST['HighestQualification'].'",
"'.$_POST['PayScale'].'",
"'.$_POST['exp'].'",
"'.$_POST['Address'].'",
"'.$_FILES['facultyimage']['name'].'")';

$query=mysql_query($sql);

if($query)  {
	echo "Insert the values";
	}
	   else {
		   echo "Not insert the values";
	   }
}

?>