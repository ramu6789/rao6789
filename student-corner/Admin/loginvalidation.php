<?php session_start();
$conn=mysql_connect("localhost","root","");
mysql_select_db("zoom4web_student_master_attendance",$conn);
if(isset($_POST['submit']))
{
	 $sql='select * from admin where username="'.$_POST['username'].'" and Password="'.$_POST['password'].'"';
$query=mysql_query($sql);

$count=mysql_num_rows($query);
if($count==1)
{

  $fetch=mysql_fetch_array($query);
  $_session['id']=$fetch['id'];

  header("location:mainpage.php");
	
	
}
else
{
	echo "not sucess";
	header("refresh:2; url=index.php");
}
}
?>	
