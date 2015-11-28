<?php 
session_start();

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$conn);

if(isset($_POST['update']))
{
$update='update student_master_attendance set 

`stud_name`="'.$_POST['stud_name'].'",
`stud_father_name`="'.$_POST['stud_father_name'].'",
`course_id`="'.$_POST['course_id'].'",
`stud_id`="'.$_POST['stud_id'].'",
`sec_id`="'.$_POST['sec_id'].'",
`section`="'.$_POST['section'].'",
`rollno`="'.$_POST['rollno'].'",
`gender`="'.$_POST['gender'].'",
`dob`="'.$_POST['dob'].'",
`doj`="'.$_POST['doj'].'",
`emailid`="'.$_POST['emailid'].'",
`Password`="'.$_POST['Password'].'",
`stud_phone`="'.$_POST['stud_phone'].'",
`parent_phone`="'.$_POST['parent_phone'].'",
`Address`="'.$_POST['Address'].'",
`current_sem`="'.$_POST['current_sem'].'",
`regulation`="'.$_POST['regulation'].'",
`status`="'.$_POST['status'].'",
`dept_id`="'.$_POST['dept_id'].'" where stud_id="'.$_SESSION['id'].'"';

$query=mysql_query($update);
if($query){
	echo "Success";
	header("refresh:2;url=studentinfo.php");
}
else{
	echo "not success";
}
}
?>

