<?php
session_start();
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$connect);

if(isset($_POST['photochange'])) {
		$file_name = $_FILES['stud_photo']['name'];	
	$file_tmp =$_FILES['stud_photo']['tmp_name'];
        move_uploaded_file($file_tmp,"D:/nrkrao/htdocs/OCT5-PRACTICE/26-10-2015-student-project/".$file_name);
	echo $update='update student_master_attendance set
	 `stud_photo`="'.$_FILES['stud_photo']['name'].'"
	 where stud_id="'.$_SESSION['id'].'"';
	 $query=mysql_query($update);
	 if($query){
		 echo "success";
		header( "refresh:2; url=studentinfo.php");
	 }

else
{
	echo "not sucess";
}
}
?>