<?php session_start();
$conn=mysql_connect("localhost","root","");
mysql_select_db("zoom4web_student_master_attendance",$conn);
if(isset($_POST['submit']))
{
	 $sql='select * from student_master_attendance where emailid="'.$_POST['emailid'].'" and stud_phone="'.$_POST['stud_phone'].'"';
$query=mysql_query($sql);

$count=mysql_num_rows($query);
if($count==1)
{

  $fetch=mysql_fetch_array($query);
   $_SESSION['id1']=$fetch['stud_id'];
     echo "success";
	 header("refresh:2; url=studentnewpassword.php");

	
}
else
{
	echo "not sucess";
}
}
?>	
