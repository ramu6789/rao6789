<?php session_start();
$conn=mysql_connect("localhost","root","");
mysql_select_db("zoom4web_student_master_attendance",$conn);

if(isset($_POST['submit']))
{
$sql='select * from faculty where EmailId="'.$_POST['EmailId'].'" and number="'.$_POST['number'].'"';
$query=mysql_query($sql);

$count=mysql_num_rows($query);
if($count==1)
   {
   $fetch=mysql_fetch_array($query);
   $_SESSION['id']=$fetch['id'];
     echo "success";
	 header("refresh:1; url=facultynewpasswordfom.php");
   }
else
   {
	 echo "not sucess";
   }
}
?>	
