<?php 
session_start();

$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$conn);
echo $sql="select * from faculty where id='$_POST[id]'"; 
exit;
$query=mysql_query($sql);
$fetch=mysql_fetch_array($query);


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
td {
	padding:20px;
	border:2px solid green;
	
}
</style>
</head>

<body style="margin:0px; background:url(../26-10-2015-student-project/art-vector-flowers-background-wallpaper-image-207562.jpg) no-repeat;background-size:cover;">
<div style="background: rgba(139, 195, 74, 0.31);height:100px;margin:0px auto;overflow:hidden;">
<img src="../26-10-2015-student-project/logo.png" style="float:left;padding:28px;padding-left: 4px"/>
<a href="facultylogout.php"><img src="button_logout.png" style="float:right;margin-top:40px;margin-right:200px;" /></a>


<h1 style="text-align:center;margin:0px;padding:28px;color:#088bd7;padding-right:295px;">Faculty Registration Form Details</h1>
</div>
<div style="margin:0px auto;">
<div style="width:850px;float:right;background: rgba(139, 195, 74, 0.48); border-radius:25px;">
<a href="facultyeditform.php"><img src="edit-button-blue-hi copy.png" style="float:right;margin-top:45px;margin-right:90px;" /></a>

<table style="width:700px;margin-left:75px;margin-top:52px;border-collapse:collapse;border:2px solid white;">

<tr>
<td style="width:270px;" >Name of the Faculty:</td>
<td><?php echo $fetch['NameoftheFaculty']?> </td>
</tr>


<tr>
<td >Father's Name:</td>
<td> <?php echo $fetch['FatherName']?></td>
</tr>

<tr>
<td >Date Of Birth:</td>
<td><?php echo $fetch['DateofBirth']?></td>
</tr>

<tr>
<td >Date Of Joining:</td>
<td><?php echo $fetch['DateofJoining']?> </td>
</tr>

<tr>
<td >Gender:</td>
<td><?php echo $fetch['Gender']?></td>
</tr>

<tr>
<td >Email Id</td>
<td><?php echo $fetch['EmailId']?></td>
</tr>

<tr>
<td >UserName</td>
<td><?php echo $fetch['username']?></td>
</tr>

<tr>
<td >Password:</td>
<td><?php echo $fetch['Password']?></td>
</tr>

<tr>
<td >Dept Id:</td>
<td >
<?php echo $fetch['Department']?>
</td>
</tr>

<tr>
<td >Designation:</td>
<td><?php echo $fetch['Designation']?></td>
</tr>

<tr>
<td >Qualification:</td>
<td><?php echo $fetch['HighestQualification']?></td>
</tr>

<tr>
<td >Payscale:</td>
<td><?php echo $fetch['PayScale']?></td>
</tr>

<tr>
<td >Experience:</td>
<td><?php echo $fetch['exp']?></td>
</tr>

<tr>
<td >Address:</td>
<td><?php echo $fetch['Address']?></td>
</tr>

<tr>
<td >Mobile Number:</td>
<td><?php echo $fetch['number']?></td>
</tr>



</table>



</div>
<div style="width:250px;height:250px;float:left;margin-left:398px;margin-top:150px;" >
<a href="photo.php"><img src="images/<?php echo $fetch['facultyimage']?>" style="width:128%; border-radius:20px;"/></a>
</div>
</div>

</div>


</body>
</html>
