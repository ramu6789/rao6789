<?php 
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$conn);

if(isset($_POST['login'])) {

echo $sql='select * from student_master_attendance where emailid="'.$_POST['emailid'].'" and Password="'.$_POST['Password'].'"'; 
	$query=mysql_query($sql);
	$count=mysql_num_rows($query);
	if($count==1){
	$fetch=mysql_fetch_array($query);
	$_SESSION['id']=$fetch['stud_id'];
	header("location:studentinfo.php");
	}
	else {
		echo "Not Success";
	}
}
?>