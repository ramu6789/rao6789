<?php
session_start();

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$conn);
if(isset($_POST['update']))
{

 $sql='update student_master_attendance set password="'.$_POST['password'].'" where stud_id="'.$_SESSION['id1'].'"';	


if($update=mysql_query($sql))

{
    echo "sucess";
	
	
}
else
{
	echo "not sucess";
}
}
?>	


