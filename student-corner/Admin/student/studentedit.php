<?php
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_student_master_attendance",$conn);
 $sql="select * from student_master_attendance where stud_id='$_POST[id]'"; 

$query=mysql_query($sql);
$fetch=mysql_fetch_array($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background: url(green-border-backgrounds-powerpoint.jpg);background-size:cover;margin:0px auto;">
<div style="height:100px;width:100%;background:#33FFFF;margin:0px auto;">
<img src="logo.png" style="padding-top:26px;padding-left:4px;float:left;" />
<img src="banner1.gif" style="float:right;" />


</div>


<div style="width:500px;background:url(flowers_texture703.jpg);background-size:cover;margin-left:1081px;padding:1px; border-radius:20px;">
<h1 style="text-align:center;padding:0px;color:#FF00BA;padding-top:35px;">Update Details Application</h1>


<form  action="studentupdate.php" method="post" name="studentedit" enctype="multipart/form-data">
<table style="margin:0px auto;padding-top:40px;">

<tr>
<td >Student Name:</td>
<td> <input type="text" name="stud_name" value="<?php echo $fetch['stud_name'];?>"/></td>
</tr>


<tr>
<td >Student Father Name:</td>
<td> <input type="text" name="stud_father_name" value="<?php echo $fetch['stud_father_name']?>" /></td>
</tr>

<tr>
<td >Course Id:</td>
<td><input type="text" name="course_id" value="<?php echo $fetch['course_id']?>" /></td>
</tr>

<tr>
<td >Student Id:</td>
<td><input type="text" name="stud_id" value="<?php echo $fetch['stud_id']?>" /></td>
</tr>

<tr>
<td >Section Id:</td>
<td><input type="text" name="sec_id"  value="<?php echo $fetch['sec_id']?>"/></td>
</tr>

<tr>
<td >Section:</td>
<td><input type="text" name="section" value="<?php echo $fetch['section']?>" /></td>
</tr>

<tr>
<td >Roll Number:</td>
<td><input type="text" name="rollno" value="<?php echo $fetch['rollno']?>" /></td>
</tr>

<tr>
<td >Gender:</td>
<td><input type="radio" name="gender" value="Male" value="<?php echo $fetch['gender']?>" checked="checked" /> Male <input type="radio" name="gender" value="Female" /> Female </td>

</tr>

<tr>
<td >Date Of Birth:</td>
<td><input type="date" name="dob" style="width:168px;" value="<?php echo $fetch['dob']?>"  /></td>
</tr>

<tr>
<td >Date Of Joining:</td>
<td><input type="date" name="doj" value="<?php echo $fetch['doj']?>" style="width:168px;"/> </td>
</tr>

<tr>
<td >Email Id</td>
<td><input type="text" name="emailid" value="<?php echo $fetch['emailid']?>"  /></td>
</tr>

<tr>
<td >Password:</td>
<td><input type="text" name="Password" value="<?php echo $fetch['Password']?>" /></td>
</tr>

<tr>
<td >Student Phone:</td>
<td><input type="text" name="stud_phone" value="<?php echo $fetch['stud_phone']?>" /></td>
</tr>


<tr>
<td >Parent Phone:</td>
<td><input type="text" name="parent_phone" value="<?php echo $fetch['parent_phone']?>" /></td>
</tr>

<tr>
<td >Address:</td>
<td><textarea name="Address" rows="5" cols="21"  style="width:167px;" >
<?php echo $fetch['Address']?>
</textarea></td>
</tr>

<tr>
<td >Current Semister:</td>
<td><input type="text" name="current_sem"  value="<?php echo $fetch['current_sem']?>"/></td>
</tr>



<tr>
<td >Regulation:</td>
<td><input type="text" name="regulation" value="<?php echo $fetch['regulation']?>" /></td>
</tr>

<tr>
<td >Status:</td>
<td><input type="text" name="status" value="<?php echo $fetch['status']?>" /></td>
</tr>

<tr>
<td >Dept Id:</td>
<td >
<select name="dept_id" style="width:173px;" value="<?php echo $fetch['dept_id']?>">
<option value="CSE">CSE</option>
<option value="ECE">ECE</option>
<option value="DIPLOMA">DIPLOMA</option>
<option value="IT">IT</option>
<option value="MECHANICAL">MECHANICAL</option>
</select>
</td>
</tr>
</table>

<table style="margin:44px 0px 0px 123px;">
<tr>
<td>
<input type="submit" name="update" value="Update" style="background:#00FFFF;margin-left:80px;"/>
</td>
</tr>
</table>
</form>
</div>

</body>
</html>