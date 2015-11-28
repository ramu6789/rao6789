<?php
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$connect);

if(isset($_POST['submit'])) {
	$name=$_FILES['stud_photo']['name'];
	$file_temp=$_FILES['stud_photo']['tmp_name'];
	move_uploaded_file($file_temp,"D:/nrkrao/htdocs/OCT5-PRACTICE/26-10-2015-student-project/".$name);
	

$sql='insert into student_master_attendance(stud_name,stud_father_name,course_id,stud_id,sec_id,section,rollno,gender,dob,doj,emailid,Password,stud_phone,parent_phone,Address,current_sem,stud_photo,regulation,status,dept_id)
values("'.$_POST['stud_name'].'",
"'.$_POST['stud_father_name'].'",
"'.$_POST['course_id'].'",
"'.$_POST['stud_id'].'",
"'.$_POST['sec_id'].'",
"'.$_POST['section'].'",
"'.$_POST['rollno'].'",
"'.$_POST['gender'].'",
"'.$_POST['dob'].'",
"'.$_POST['doj'].'",
"'.$_POST['emailid'].'",
"'.$_POST['Password'].'",
"'.$_POST['stud_phone'].'",
"'.$_POST['parent_phone'].'",
"'.$_POST['Address'].'",
"'.$_POST['current_sem'].'",
"'.$_FILES['stud_photo']['name'].'",
"'.$_POST['regulation'].'",
"'.$_POST['status'].'",
"'.$_POST['dept_id'].'")';

$query=mysql_query($sql);

if($query)  {
	echo "Insert the values";
       }
	   else {
		   echo "Not insert the values";
	   }
}

?>