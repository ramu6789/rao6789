<?php 


$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$conn);
$sql="select * from student_master_attendance where stud_id='$_POST[id]'"; 

$query=mysql_query($sql);
$fetch=mysql_fetch_array($query);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
td {
	padding:20px;
	border:2px solid yellow;
	
}
</style>
</head>

<body style="background:url(flowers-pink-background-walpaper-hd-sweet.jpg);margin:0px auto;background-size:cover;width:100%;">
<div style="background-color:#9FF;margin:0px ;height:56px;overflow:hidden;">

<img src="logo.png" style="float:right;"/>
<img style="float:left;">

<h1 style="margin-top:10px;padding-left:586px;color:#0000FF;"><i>Student Information Details</i></h1>

</div >

<div style="width:1000px;margin:0px auto;background:white;background:rgba(95, 158, 160, 0.68);background-size:cover;">

<div style="width:200px;height:200px;margin:0px auto;background:#0F6;" >
<a href="stdentimagechange.php"><img src="<?php echo $fetch['stud_photo']?>" style="width:100%;height:100%;" /></a>
</div>

<div>
<table style="width:700px;margin-left:158px;margin-top:52px;border-collapse:collapse;border:2px solid white;">

<tr>
<td style="width:270px;" >Student Name:</td>
<td><?php echo $fetch['stud_name']?> </td>
</tr>


<tr>
<td >Student Father Name:</td>
<td> <?php echo $fetch['stud_father_name']?></td>
</tr>

<tr>
<td >Course Id:</td>
<td><?php echo $fetch['course_id']?></td>
</tr>

<tr>
<td >Student Id:</td>
<td><?php echo $fetch['stud_id']?></td>
</tr>

<tr>
<td >Section Id:</td>
<td><?php echo $fetch['sec_id']?></td>
</tr>

<tr>
<td >Section:</td>
<td><?php echo $fetch['section']?></td>
</tr>

<tr>
<td >Roll Number:</td>
<td><?php echo $fetch['rollno']?></td>
</tr>

<tr>
<td >Gender:</td>
<td><?php echo $fetch['gender']?></td>

</tr>

<tr>
<td >Date Of Birth:</td>
<td><?php echo $fetch['dob']?></td>
</tr>

<tr>
<td >Date Of Joining:</td>
<td><?php echo $fetch['doj']?> </td>
</tr>

<tr>
<td >Email Id</td>
<td><?php echo $fetch['emailid']?></td>
</tr>

<tr>
<td >Password:</td>
<td><?php echo $fetch['Password']?></td>
</tr>

<tr>
<td >Student Phone:</td>
<td><?php echo $fetch['stud_phone']?></td>
</tr>


<tr>
<td >Parent Phone:</td>
<td><?php echo $fetch['parent_phone']?></td>
</tr>

<tr>
<td >Address:</td>
<td><?php echo $fetch['Address']?></td>
</tr>

<tr>
<td >Current Semister:</td>
<td><?php echo $fetch['current_sem']?></td>
</tr>



<tr>
<td >Regulation:</td>
<td><?php echo $fetch['regulation']?></td>
</tr>

<tr>
<td >Status:</td>
<td><?php echo $fetch['status']?></td>
</tr>

<tr>
<td >Dept Id:</td>
<td >
<?php echo $fetch['dept_id']?>
</td>
</tr>
</table>

<table style="margin:44px 0px 0px 123px;">
<tr>
<td style="border:none;">
<a href="studentedit.php"><input type="submit" name="edit" value="Edit" style="background:#00FF33;"/></a>
</td>
<td style="border:none;padding-left:621px;">

<form action="logout.php" method="post">
<input type="submit" name="logout" value="Logout"  style="background:#F00;"/>
</form>
</td>
</tr>
</table>

</div>

</div>


</body>
</html>
