<?php
$conn=mysql_connect("localhost","root","");
mysql_select_db("zoom4web",$conn);

if(isset($_POST['submit'])) {

$insert='insert into marks (subject1,subject2,subject3,subject4,subject5,subject6,customerid)
values("'.$_POST['subject1'].'",
"'.$_POST['subject2'] .'",
"'.$_POST['subject3'] .'",
"'.$_POST['subject4'] .'",
"'.$_POST['subject5'] .'",
"'.$_POST['subject6'].'",
"'.$_POST['user'].'")';
$execute=mysql_query($insert);
if ($execute)
{
	echo "Table created";
	header("refresh:2; url=table.php");
}
else
{
	echo "Table not created";
}
}

?>