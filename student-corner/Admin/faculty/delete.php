<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$conn);
if(isset($_POST['submit']))
{
	$sql="delete from faculty where id='$_POST[id]'"; 
	$delete=mysql_query($sql);
	if($delete)
	{
		echo "delete sucess";
		header("refresh:0; url=../basic_table.php");
	}
	else
	{
		echo "delete not sucess";
	}
}
?>