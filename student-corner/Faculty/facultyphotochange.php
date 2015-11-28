<?php
session_start();
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$connect);

if(isset($_POST['photoupdate'])) {
		$file_name = $_FILES['facultyimage']['name'];	
	$file_tmp =$_FILES['facultyimage']['tmp_name'];
        move_uploaded_file($file_tmp,"D:/nrkrao/htdocs/OCT5-PRACTICE/31-10-2015-faculty-details".$file_name);
	$update='update faculty set
	 `facultyimage`="'.$_FILES['facultyimage']['name'].'"
	 where id="'.$_SESSION['id'].'"';
	 $query=mysql_query($update);
	 if($query){
		 echo "success";
		header( "refresh:5; url=facultydetails.php");
	 }

else
{
	echo "not sucess";
}
}
?>