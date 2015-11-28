<?php 
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$conn);

if(isset($_POST['update']))
{
$sql='update faculty set Password="'.$_POST['Password'].'" where id="'.$_SESSION['id'].'"';
$update=mysql_query($sql);
if($update)

{
    echo "Success";
	header( "refresh:1; url=facultydetails.php");
	
}
else
{
	echo "Not Success";
}
}
?>	