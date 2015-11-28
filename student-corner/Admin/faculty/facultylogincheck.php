<?php
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$conn);

if(isset($_POST['login'])) 
{

$sql='select * from faculty where username="'.$_POST['username'].'" and Password="'.$_POST['Password'].'"'; 
	$query=mysql_query($sql);
	$count=mysql_num_rows($query);
	if($count==1){
	$fetch=mysql_fetch_array($query);
	$_SESSION['id']=$fetch['id'];
	echo "Success";
		header( "refresh:2; url=facultydetails.php");

	}
	else {
		echo "Not Success";
	}
}
?>