<?php 
session_start();

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$conn);

session_destroy();
header("location:studentlogin.php");

?>